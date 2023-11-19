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

/* @pages/one.md */
class __TwigTemplate_2a66295eb33d11d4f8544df1f9ffdc1d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@layouts/default.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@layouts/default.html", "@pages/one.md", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        ob_start();
        $macros["forms"] = $this->loadTemplate("forms.html", "@pages/one.md", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        echo twig_include($this->env, $context, "nav.html");
        echo "

# This is my Homepage

huhuu

<p>";
        // line 9
        echo twig_call_macro($macros["forms"], "macro_input", ["username"], 9, $context, $this->getSourceContext());
        echo "</p>
<p>";
        // line 10
        echo twig_call_macro($macros["forms"], "macro_input", ["password", null, "password"], 10, $context, $this->getSourceContext());
        echo "</p>
";
        $content = ob_get_clean();
        preg_match("/^\s*/", $content, $matches);
        $lines = explode("\n", $content);
        $content = preg_replace('/^' . $matches[0]. '/', "", $lines);
        $content = join("\n", $content);
        echo $this->env->getExtension('Aptoma\Twig\Extension\MarkdownExtension')->parseMarkdown($content);
    }

    public function getTemplateName()
    {
        return "@pages/one.md";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 10,  63 => 9,  54 => 3,  51 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@pages/one.md", "");
    }
}
