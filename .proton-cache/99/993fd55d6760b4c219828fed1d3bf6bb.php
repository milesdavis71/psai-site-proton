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

/* forms.html */
class __TwigTemplate_669f18da914f3f61973a96a08bc76073 extends Template
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
        // line 4
        echo "
";
    }

    // line 1
    public function macro_input($__name__ = null, $__value__ = null, $__type__ = "text", $__size__ = 20, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "type" => $__type__,
            "size" => $__size__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 2
            echo "    <input type=\"";
            echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null));
            echo "\" size=\"";
            echo twig_escape_filter($this->env, ($context["size"] ?? null), "html", null, true);
            echo "\"/>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 5
    public function macro_textarea($__name__ = null, $__value__ = null, $__rows__ = 10, $__cols__ = 40, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "rows" => $__rows__,
            "cols" => $__cols__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 6
            echo "    <textarea name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" rows=\"";
            echo twig_escape_filter($this->env, ($context["rows"] ?? null), "html", null, true);
            echo "\" cols=\"";
            echo twig_escape_filter($this->env, ($context["cols"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["value"] ?? null));
            echo "</textarea>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "forms.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 6,  76 => 5,  58 => 2,  42 => 1,  37 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("", "forms.html", "C:\\Users\\heves\\vscode_projects\\psai-site-proton\\src\\macros\\forms.html");
    }
}
