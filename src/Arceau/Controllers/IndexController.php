<?php
namespace Arceau\Controllers;

use Arceau\Model\DAOs\ClientDao;
use Arceau\Model\DAOs\CotisationDao;
use Arceau\Model\DAOs\UserDao;
use Arceau\Model\Entities\User;
use Mouf\Doctrine\ORM\MoufResetableEntityManager;
use Mouf\Html\Widgets\MessageService\Service\UserMessage;
use Mouf\Html\Widgets\MessageService\Service\UserMessageInterface;
use Mouf\Mvc\Splash\Controllers\Controller;
use Mouf\Html\Template\TemplateInterface;
use Mouf\Html\HtmlElement\HtmlBlock;
use Mouf\Security\UserService\UserService;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use \Twig_Environment;
use Mouf\Html\Renderer\Twig\TwigTemplate;
use Mouf\Mvc\Splash\HtmlResponse;

/**
 * Class IndexController
 * @package Arceau\Controllers
 */
class IndexController extends Controller {

    const NEW_USER = 0;

    /**
     * The logger used by this controller.
     * @var LoggerInterface
     */
    private $logger;

    /**
     * The template used by this controller.
     * @var TemplateInterface
     */
    private $template;

    /**
     * The main content block of the page.
     * @var HtmlBlock
     */
    private $content;

    /**
     * The Twig environment (used to render Twig templates).
     * @var Twig_Environment
     */
    private $twig;

    /**
     * The EntityManager is used to get dabatases information.
     * @var MoufResetableEntityManager
     */
    private $entityManager;

    /**
     * @var UserDao
     */
    private $userDao;

    /**
     * @var ClientDao
     */
    private $clientDao;

    /**
     * @var CotisationDao
     */
    private $cotisationDao;

    /**
     * @var UserService
     */
    private $userService;

    /**
     * Controller's constructor.
     * @param LoggerInterface $logger The logger
     * @param TemplateInterface $template The template used by this controller
     * @param HtmlBlock $content The main content block of the page
     * @param Twig_Environment $twig The Twig environment (used to render Twig templates)
     */
    public function __construct(LoggerInterface $logger, TemplateInterface $template, HtmlBlock $content, Twig_Environment $twig,
                                MoufResetableEntityManager $entityManager, UserDao $userDao, ClientDao $clientDao,
                                CotisationDao $cotisationDao, UserService $userService) {
        $this->logger = $logger;
        $this->template = $template;
        $this->content = $content;
        $this->twig = $twig;
        $this->entityManager = $entityManager;
        $this->userDao = $userDao;
        $this->clientDao = $clientDao;
        $this->cotisationDao = $cotisationDao;
        $this->userService = $userService;
    }

    /**
     * This is the default login page.
     *
     * @Logged
     * @URL /
     */
    public function index() {
        $this->content->addHtmlElement(new TwigTemplate($this->twig, 'views/index/index.twig', array()));
        $this->template->toHtml();
    }

    /**
     * This page is for add a client to the database.
     *
     * @Logged
     * @URL /add_client
     */
    public function add_client() {
        $this->content->addHtmlElement(new TwigTemplate($this->twig, 'views/client/client.twig', array()));
        $this->template->toHtml();
    }

    /**
     * This page is a list of client.
     *
     * @Logged
     * @URL /list_client
     */
    public function list_client() {

        $clients = $this->clientDao->findAll();

        $this->content->addHtmlElement(new TwigTemplate($this->twig, 'views/list_client/list_client.twig',
            array(
                'clients' => $clients
            )
        ));
        $this->template->toHtml();
    }

    /**
     * This page is for a user profil.
     *
     * @Logged
     * @URL /profil
     */
    public function profil() {
        $user = $this->userService->getLoggedUser();

        $this->content->addHtmlElement(new TwigTemplate($this->twig, 'views/profil/profil.twig',
            array(
                'user' => $user
            )
        ));
        $this->template->toHtml();
    }

    /**
     * This function get the form.
     *
     * @Post
     * @Logged
     * @URL /get-form
     */
    public function submit_form($nom = null, $prenom = null, $fonction = null, $institution = null,
                                $telephone = null, $email = null, $adresse = null, $ville = null, $radio = null) {

        if (!empty($nom) && !empty($prenom)
            && !empty($fonction) && !empty($institution)
            && !empty($telephone) && !empty($email)
            && !empty($adresse) && !empty($ville) && !empty($radio)) {

            // Getting the current user object from the user service.
            $user = $this->userService->getLoggedUser();

            // Getting cotisation object with his id from the radio.
            $cotisation = $this->cotisationDao->getById($radio);

            // Create an object of client.
            $client = $this->clientDao->create();

            // Setting all the value into the DB.
            $client->setNom($nom);
            $client->setPrenom($prenom);
            $client->setFonction($fonction);
            $client->setInstitution($institution);
            $client->setTelephone($telephone);
            $client->setEmail($email);
            $client->setAdresse($adresse);
            $client->setVille($ville);
            $client->setUser($user);
            $client->setCotisation($cotisation);
            $client->setDeleted(self::NEW_USER);

            // Save all the data.
            $this->clientDao->save($client);
            $this->entityManager->flush();

            set_user_message('Le client a été ajouté.', UserMessageInterface::SUCCESS);
            header('Location: ' . ROOT_URL);
        } else {
            set_user_message('Le formulaire n\'est pas valide.');
            header('Location: ' . ROOT_URL . 'add_client');
        }
    }

    /**
     * Session destroy.
     *
     * @Logged
     * @URL /disconnect
     */
    public function disconnect() {
        \Mouf::getSessionManager()->destroy();
        header('Location:' . ROOT_URL);
    }
}
