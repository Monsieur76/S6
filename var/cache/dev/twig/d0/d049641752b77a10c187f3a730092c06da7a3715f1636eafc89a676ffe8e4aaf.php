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

/* Page/home.html.twig */
class __TwigTemplate_c345b1ebf77f70c4d4f57551dbd2a3de55f280355346855260473d3c50042ac2 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Page/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Page/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Page/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "flashes", [0 => "succes"], "method", false, false, false, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 5
            echo "        <div class=\"alert alert-success\" role=\"alert\">
            ";
            // line 6
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "flashes", [0 => "alert"], "method", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 10
            echo "        <div class=\"alert alert-danger\" role=\"alert\">
            ";
            // line 11
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    <div class=\"container-fluid\" style=\"background-color: #17324f;margin-top: 25px\">
        <div class=\"row\" id=\"img1\">
            <div class=\"col-lg-12\" style=\"padding-left: 0px;padding-top: 10px\">
                <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/montagne4.jpg"), "html", null, true);
        echo "\" id=\"img\" class=\"img-responsive\" alt=\"salut\" style=\"left: 0;right: 0;width: 100%
    ;height: 100%;  background-size: 100% 100%;position: relative\"/>
                <a href=\"#bas\" role=\"button\" style=\"color: black;
        position: absolute;right: 15px;bottom: 0px;\"> <i class=\"fas fa-arrow-down fa-3x\"></i></a>
            </div>
        </div>
        <div class=\"row\" style=\"margin-top: 50px\">
            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["post"]);
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 25
            echo "
                <div class=\"col-3 col-2-medium col-12-small\" id=\"fig1\">
                    <section>
                        <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\" class=\"image featured\">
                            <img src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/upload/" . twig_get_attribute($this->env, $this->source, $context["post"], "figure", [], "any", false, false, false, 29))), "html", null, true);
            echo "\" alt=\"\"
                            /></a>
                        <div class=\"container\">
                            <div class=\"row\" style=\"text-align: center\">
                                <div class=\"col-md-6\"><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\" class=\"image featured\">
                                        <h6>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 34), "html", null, true);
            echo "</h6></a>
                                </div>
                                ";
            // line 36
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                // line 37
                echo "
                                <form style=\"padding: 0px;margin-top: 50px;margin-left: 50px\"
                                      action=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updatePost", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 39)]), "html", null, true);
                echo "\" method=\"post\">
                                    <button class=\"btn btn-link\"><i class=\"fas fa-pen\" style=\"color: #C5D86D\"></i>
                                    </button>
                                </form>

                                <form style=\"padding: 0px;margin-top: 50px\" action=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deletePost", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 44)]), "html", null, true);
                echo "\"
                                      method=\"post\">
                                    <button class=\"btn btn-link delete\">
                                        <i class=\"fas fa-trash\" style=\"color: #C5D86D\"></i></button>
                                    <input type=\"hidden\" name=\"_token\" value=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 48))), "html", null, true);
                echo "\">
                                </form>
                            </div>
                        </div>
                        ";
            }
            // line 53
            echo "
                    </section>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        </div>


        <button class=\"btn \" type=\"button\" id=\"button\" data-toggle=\"collapse\"
                data-target=\"#collapseExample\"
                aria-expanded=\"false\" aria-controls=\"collapseExample\">
            Voir plus
        </button>


        <div class=\"row\" style=\"margin-top: 50px\" id=\"fig\">
                <div class=\"collapse\" id=\"collapseExample\">
                    ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["post"]);
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 70
            echo "                        <div class=\"col-lg-12\" style=\"margin-top: 50px\">
                    <a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 71)]), "html", null, true);
            echo "\" class=\"image featured\">
                        <img src=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/upload/" . twig_get_attribute($this->env, $this->source, $context["post"], "figure", [], "any", false, false, false, 72))), "html", null, true);
            echo "\" alt=\"\" style=\"width: 100%\"
                        /></a>
                        </div>
                    <div class=\"container\">
                        <div class=\"row\" style=\"text-align: center\">
                            <div class=\"col-md-6 col-8-small\">
                                <h6>";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 78), "html", null, true);
            echo "</h6>
                            </div>
                            ";
            // line 80
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                // line 81
                echo "
                            <form
                                    style=\"padding: 0px;margin-top: 15px\"
                                  action=\"";
                // line 84
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updatePost", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 84)]), "html", null, true);
                echo "\" method=\"post\">
                                <button class=\"btn btn-link\"><i class=\"fas fa-pen\" style=\"color: #C5D86D\"></i>
                                </button>
                            </form>

                            <form
                                    style=\"padding: 0px;margin-top: 15px\"
                                    action=\"";
                // line 91
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deletePost", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 91)]), "html", null, true);
                echo "\"
                                  method=\"post\">
                                <button class=\"btn btn-link delete\">
                                    <i class=\"fas fa-trash\" style=\"color: #C5D86D\"></i></button>
                                <input type=\"hidden\" name=\"_token\" value=\"";
                // line 95
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 95))), "html", null, true);
                echo "\">
                            </form>
                        </div>
                    </div>
                    ";
            }
            // line 100
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "                </div>
        </div>
    </div>



    <div class=\"col align-self-end\" id=\"bas\">
        <a href=\"#haut\" style=\"color: black;position: absolute;right: 0;bottom: 0\">
            <i class=\"fas fa-arrow-up fa-3x\"></i>
        </a>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Page/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 101,  275 => 100,  267 => 95,  260 => 91,  250 => 84,  245 => 81,  243 => 80,  238 => 78,  229 => 72,  225 => 71,  222 => 70,  218 => 69,  204 => 57,  195 => 53,  187 => 48,  180 => 44,  172 => 39,  168 => 37,  166 => 36,  161 => 34,  157 => 33,  150 => 29,  146 => 28,  141 => 25,  137 => 24,  127 => 17,  122 => 14,  113 => 11,  110 => 10,  105 => 9,  96 => 6,  93 => 5,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title 'Accueil' %}
{% block body %}
    {% for message in app.flashes('succes') %}
        <div class=\"alert alert-success\" role=\"alert\">
            {{ message }}
        </div>
    {% endfor %}
    {% for message in app.flashes('alert') %}
        <div class=\"alert alert-danger\" role=\"alert\">
            {{ message }}
        </div>
    {% endfor %}
    <div class=\"container-fluid\" style=\"background-color: #17324f;margin-top: 25px\">
        <div class=\"row\" id=\"img1\">
            <div class=\"col-lg-12\" style=\"padding-left: 0px;padding-top: 10px\">
                <img src=\"{{ asset ('img/montagne4.jpg') }}\" id=\"img\" class=\"img-responsive\" alt=\"salut\" style=\"left: 0;right: 0;width: 100%
    ;height: 100%;  background-size: 100% 100%;position: relative\"/>
                <a href=\"#bas\" role=\"button\" style=\"color: black;
        position: absolute;right: 15px;bottom: 0px;\"> <i class=\"fas fa-arrow-down fa-3x\"></i></a>
            </div>
        </div>
        <div class=\"row\" style=\"margin-top: 50px\">
            {% for post in post %}

                <div class=\"col-3 col-2-medium col-12-small\" id=\"fig1\">
                    <section>
                        <a href=\"{{ path('post', {'id': post.id}) }}\" class=\"image featured\">
                            <img src=\"{{ asset(\"img/upload/\"~post.figure) }}\" alt=\"\"
                            /></a>
                        <div class=\"container\">
                            <div class=\"row\" style=\"text-align: center\">
                                <div class=\"col-md-6\"><a href=\"{{ path('post', {'id': post.id}) }}\" class=\"image featured\">
                                        <h6>{{ post.name }}</h6></a>
                                </div>
                                {% if is_granted ('ROLE_USER') %}

                                <form style=\"padding: 0px;margin-top: 50px;margin-left: 50px\"
                                      action=\"{{ path ('updatePost',{id:post.id} ) }}\" method=\"post\">
                                    <button class=\"btn btn-link\"><i class=\"fas fa-pen\" style=\"color: #C5D86D\"></i>
                                    </button>
                                </form>

                                <form style=\"padding: 0px;margin-top: 50px\" action=\"{{ path ('deletePost',{id:post.id} ) }}\"
                                      method=\"post\">
                                    <button class=\"btn btn-link delete\">
                                        <i class=\"fas fa-trash\" style=\"color: #C5D86D\"></i></button>
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete'~post.id) }}\">
                                </form>
                            </div>
                        </div>
                        {% endif %}

                    </section>
                </div>
            {% endfor %}
        </div>


        <button class=\"btn \" type=\"button\" id=\"button\" data-toggle=\"collapse\"
                data-target=\"#collapseExample\"
                aria-expanded=\"false\" aria-controls=\"collapseExample\">
            Voir plus
        </button>


        <div class=\"row\" style=\"margin-top: 50px\" id=\"fig\">
                <div class=\"collapse\" id=\"collapseExample\">
                    {% for post in post %}
                        <div class=\"col-lg-12\" style=\"margin-top: 50px\">
                    <a href=\"{{ path('post', {'id': post.id}) }}\" class=\"image featured\">
                        <img src=\"{{ asset(\"img/upload/\"~post.figure) }}\" alt=\"\" style=\"width: 100%\"
                        /></a>
                        </div>
                    <div class=\"container\">
                        <div class=\"row\" style=\"text-align: center\">
                            <div class=\"col-md-6 col-8-small\">
                                <h6>{{ post.name }}</h6>
                            </div>
                            {% if is_granted ('ROLE_USER') %}

                            <form
                                    style=\"padding: 0px;margin-top: 15px\"
                                  action=\"{{ path ('updatePost',{id:post.id} ) }}\" method=\"post\">
                                <button class=\"btn btn-link\"><i class=\"fas fa-pen\" style=\"color: #C5D86D\"></i>
                                </button>
                            </form>

                            <form
                                    style=\"padding: 0px;margin-top: 15px\"
                                    action=\"{{ path ('deletePost',{id:post.id} ) }}\"
                                  method=\"post\">
                                <button class=\"btn btn-link delete\">
                                    <i class=\"fas fa-trash\" style=\"color: #C5D86D\"></i></button>
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete'~post.id) }}\">
                            </form>
                        </div>
                    </div>
                    {% endif %}
                    {% endfor %}
                </div>
        </div>
    </div>



    <div class=\"col align-self-end\" id=\"bas\">
        <a href=\"#haut\" style=\"color: black;position: absolute;right: 0;bottom: 0\">
            <i class=\"fas fa-arrow-up fa-3x\"></i>
        </a>
    </div>
{% endblock %}", "Page/home.html.twig", "C:\\wamp\\www\\minichat\\Site_snow\\S6\\templates\\Page\\home.html.twig");
    }
}
