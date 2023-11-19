<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* nav.html */
class __TwigTemplate_6c87985fa38be75579c7e16d159d7f44 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<ul class=\"menu\">
    <li><a href=\"one\">One</a></li>
    <li><a href=\"#\">Two</a></li>
    <li><a href=\"#\">Three</a></li>
    <li><a href=\"#\">Four</a></li>
</ul>";
    }

    public function getTemplateName()
    {
        return "nav.html";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "nav.html", "C:\\Users\\heves\\vscode_projects\\psai-site-proton\\src\\partials\\nav.html");
    }
}
