<?php
namespace Arceau\Controllers;

use Arceau\Model\DAOs\UserDao;
use Arceau\Model\Entities\User;
use Mouf\Doctrine\ORM\MoufResetableEntityManager;
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
                                MoufResetableEntityManager $entityManager, UserDao $userDao, UserService $userService) {
        $this->logger = $logger;
        $this->template = $template;
        $this->content = $content;
        $this->twig = $twig;
        $this->entityManager = $entityManager;
        $this->userDao = $userDao;
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
        $this->content->addHtmlElement(new TwigTemplate($this->twig, 'views/list_client/list_client.twig', array()));
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
                'user'      => $user
            )
        ));
        $this->template->toHtml();
    }

    /**
     * This function get the form.
     *
     * @Logged
     * @URL /get-form
     */
    public function submit_form() {
        echo "test";
        // TODO : GET FORM INFO
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
