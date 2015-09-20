<?php

namespace Arceau\Template;

use Mouf\Html\Renderer\Renderable;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Security\UserService\UserService;

/**
 * Template class for Arceau.
 */
class HeaderTemplate implements HtmlElementInterface
{
    use Renderable;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $logo;

    /**
     * @var UserService
     */
    protected $userService;

    /**
     * @param UserService $userService
     */
    public function __construct(UserService $userService) {
        $this->userService = $userService;
    }

    /**
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @param string $logo
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;
    }

    /**
     * @return string
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * @param string $context
     */
    public function setContext($context)
    {
        $this->context = $context;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return \Mouf\Security\UserService\UserInterface|null
     */
    public function getUser()
    {
        return $this->userService->getLoggedUser();
    }
}
