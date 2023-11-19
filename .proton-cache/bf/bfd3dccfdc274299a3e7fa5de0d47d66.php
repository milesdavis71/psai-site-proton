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

/* @layouts/default.html */
class __TwigTemplate_f00cd6b52c1f2195abfcdc4aa90085bc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'endbody' => [$this, 'block_endbody'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<html class=\"no-js no-touch\" lang=\"";
        // line 2
        echo twig_escape_filter($this->env, ($context["lang"] ?? null), "html", null, true);
        echo "\">

<head>
\t<meta charset=\"utf-8\" />
\t<title>";
        // line 6
        echo twig_escape_filter($this->env, ($context["pagetitle"] ?? null), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, ($context["project"] ?? null), "html", null, true);
        echo "</title>

\t<link rel=\"icon\" type=\"image/x-icon\" href=\"/favicon.ico\">

\t<meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\" />
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, viewport-fit=cover\" />

\t<link rel=\"preload\" as=\"script\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["root"] ?? null), "html", null, true);
        echo "assets/js/vendor/jquery.min.js\" />
\t<link rel=\"preload\" as=\"script\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["root"] ?? null), "html", null, true);
        echo "assets/js/vendor/what-input.min.js\" />
\t<link rel=\"preload\" as=\"script\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["root"] ?? null), "html", null, true);
        echo "assets/js/site.js\" />

\t<link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, ($context["root"] ?? null), "html", null, true);
        echo "assets/styles/site.css\" />
\t";
        // line 18
        $this->displayBlock('header', $context, $blocks);
        // line 19
        echo "</head>

<body class=\"antialiased\">

\t<main id=\"content\">
\t\t";
        // line 24
        $this->displayBlock('content', $context, $blocks);
        // line 28
        echo "\t</main>

\t<script src=\"";
        // line 30
        echo twig_escape_filter($this->env, ($context["root"] ?? null), "html", null, true);
        echo "assets/js/vendor/jquery.min.js\"></script>
\t<script src=\"";
        // line 31
        echo twig_escape_filter($this->env, ($context["root"] ?? null), "html", null, true);
        echo "assets/js/vendor/what-input.min.js\"></script>
\t<script src=\"";
        // line 32
        echo twig_escape_filter($this->env, ($context["root"] ?? null), "html", null, true);
        echo "assets/js/foundation.js\"></script>
\t";
        // line 33
        $this->displayBlock('endbody', $context, $blocks);
        // line 34
        echo "</body>

</html>";
    }

    // line 18
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 24
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "\t\tone

\t\t";
    }

    // line 33
    public function block_endbody($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "@layouts/default.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 33,  124 => 25,  120 => 24,  114 => 18,  108 => 34,  106 => 33,  102 => 32,  98 => 31,  94 => 30,  90 => 28,  88 => 24,  81 => 19,  79 => 18,  75 => 17,  70 => 15,  66 => 14,  62 => 13,  50 => 6,  43 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@layouts/default.html", "C:\\Users\\heves\\vscode_projects\\psai-site-proton\\src\\layouts\\default.html");
    }
}
