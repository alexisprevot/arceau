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
     * This is the default login page
     *
     * @Logged
     * @URL /
     */
    public function index() {
        /** @var User $user */
        $user = $this->userService->getLoggedUser();

        $this->content->addHtmlElement(new TwigTemplate($this->twig, 'views/index/index.twig',
            array(
                "prenom" => $user->getPrenom()
            )
        ));
        $this->template->toHtml();
    }
}
