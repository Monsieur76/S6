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

/* Page/post/form.html.twig */
class __TwigTemplate_79bb814062043375394330af425ad46dd24e02f6256429ad7142e5e976e8d4d5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Page/post/form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Page/post/form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
<h1 class=\"h2 mb-4 font-weight-normal\" style=\"color: whitesmoke\">";
        // line 2
        echo twig_escape_filter($this->env, (((isset($context["var"]) || array_key_exists("var", $context))) ? (_twig_default_filter((isset($context["var"]) || array_key_exists("var", $context) ? $context["var"] : (function () { throw new RuntimeError('Variable "var" does not exist.', 2, $this->source); })()), "Création d'un Article")) : ("Création d'un Article")), "html", null, true);
        echo "</h1>
<div class=\"col-md-12\">
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "name", [], "any", false, false, false, 4), 'row');
        echo "
</div>
<div class=\"col-md-12\" style=\"color: whitesmoke\">
    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "groupFig", [], "any", false, false, false, 7), 'row');
        echo "
</div>
<div class=\"col-md-12\" style=\"color: whitesmoke\">
    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "content", [], "any", false, false, false, 10), 'row');
        echo "
</div>
<div class=\"col-md-12\" style=\"color: black;text-align: left\">
    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "figure", [], "any", false, false, false, 13), 'row');
        echo "
</div>
<div class=\"col-md-12\" style=\"color: black;text-align: left\">
    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "figures", [], "any", false, false, false, 16), 'row');
        echo "
</div>
<div class=\"row\">
    <div class=\"col-lg-10\">
    <div id=\"div1\" class=\"col-md-12\" style=\"color: whitesmoke\">
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "lien1", [], "any", false, false, false, 21), 'row');
        echo "
    </div>
        <div id=\"div2\" class=\"col-md-12\" style=\"color: whitesmoke;display: none\">
        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "lien2", [], "any", false, false, false, 24), 'row');
        echo "
    </div>
    <div id=\"div3\" class=\"col-md-12\" style=\"color: whitesmoke;display: none\">
        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "lien3", [], "any", false, false, false, 27), 'row');
        echo "
    </div>
    </div>
    <div id=\"dev1\" class=\"col-md-2\" style=\"color: black;text-align: left\">
        <button style=\"margin-top: 50px;background-color: #17324f\" type=\"button\" class=\"btn\" ><i
                    class=\"fas fa-plus-circle fa-2x\"></i>
        </button>
    </div>
</div>

<div class=\"row\" style=\"justify-content: center;margin-top: 20px\">
<div >
    <button type=\"submit\" class=\"btn\">";
        // line 39
        echo twig_escape_filter($this->env, (((isset($context["button"]) || array_key_exists("button", $context))) ? (_twig_default_filter((isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 39, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        echo "</button>
</div>
</div>
";
        // line 42
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), 'form_end');
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Page/post/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 42,  111 => 39,  96 => 27,  90 => 24,  84 => 21,  76 => 16,  70 => 13,  64 => 10,  58 => 7,  52 => 4,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}
<h1 class=\"h2 mb-4 font-weight-normal\" style=\"color: whitesmoke\">{{ var|default('Création d\\'un Article') }}</h1>
<div class=\"col-md-12\">
    {{ form_row(form.name) }}
</div>
<div class=\"col-md-12\" style=\"color: whitesmoke\">
    {{ form_row(form.groupFig) }}
</div>
<div class=\"col-md-12\" style=\"color: whitesmoke\">
    {{ form_row(form.content) }}
</div>
<div class=\"col-md-12\" style=\"color: black;text-align: left\">
    {{ form_row(form.figure ) }}
</div>
<div class=\"col-md-12\" style=\"color: black;text-align: left\">
    {{ form_row( form.figures ) }}
</div>
<div class=\"row\">
    <div class=\"col-lg-10\">
    <div id=\"div1\" class=\"col-md-12\" style=\"color: whitesmoke\">
        {{ form_row(form.lien1 ) }}
    </div>
        <div id=\"div2\" class=\"col-md-12\" style=\"color: whitesmoke;display: none\">
        {{ form_row(form.lien2 ) }}
    </div>
    <div id=\"div3\" class=\"col-md-12\" style=\"color: whitesmoke;display: none\">
        {{ form_row(form.lien3 ) }}
    </div>
    </div>
    <div id=\"dev1\" class=\"col-md-2\" style=\"color: black;text-align: left\">
        <button style=\"margin-top: 50px;background-color: #17324f\" type=\"button\" class=\"btn\" ><i
                    class=\"fas fa-plus-circle fa-2x\"></i>
        </button>
    </div>
</div>

<div class=\"row\" style=\"justify-content: center;margin-top: 20px\">
<div >
    <button type=\"submit\" class=\"btn\">{{ button|default('Enregistrer') }}</button>
</div>
</div>
{{ form_end (form) }}", "Page/post/form.html.twig", "C:\\wamp\\www\\minichat\\Site_snow\\symphonie4\\symfoni\\Site_snow\\Soutenance6\\Soutenance6\\templates\\Page\\post\\form.html.twig");
    }
}
