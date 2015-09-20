<?php

namespace Arceau\Template;

use Arceau\Model\Entities\User;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Html\Renderer\Renderable;
use Mouf\Html\Template\TemplateInterface;
use Mouf\Html\Utils\WebLibraryManager\WebLibraryManager;

/**
 * Template class for Arceau.
 */
class BodyTemplate implements TemplateInterface
{
    use Renderable;

    /**
     * @var string
     */
    protected $title;

    /**
     * The header of the template.
     *
     * @var HtmlElementInterface
     */
    protected $header;

    /**
     * The content of the template.
     *
     * @var HtmlElementInterface
     */
    protected $content;

    /**
     * @var WebLibraryManager
     */
    protected $webLibraryManager;

    /**
     * The footer of the template.
     *
     * @var HtmlElementInterface
     */
    protected $footer;

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
     * @return HtmlElementInterface
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * @param HtmlElementInterface $header
     */
    public function setHeader($header)
    {
        $this->header = $header;
    }

    /**
     * @return HtmlElementInterface
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param HtmlElementInterface $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return WebLibraryManager
     */
    public function getWebLibraryManager()
    {
        return $this->webLibraryManager;
    }

    /**
     * @param WebLibraryManager $webLibraryManager
     */
    public function setWebLibraryManager($webLibraryManager)
    {
        $this->webLibraryManager = $webLibraryManager;
    }

    /**
     * @return HtmlElementInterface
     */
    public function getFooter()
    {
        return $this->footer;
    }

    /**
     * @param HtmlElementInterface $footer
     */
    public function setFooter($footer)
    {
        $this->footer = $footer;
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
}
