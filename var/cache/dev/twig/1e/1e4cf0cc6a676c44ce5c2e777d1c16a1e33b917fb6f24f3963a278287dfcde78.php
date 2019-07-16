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

/* Page/post/updatePost.html.twig */
class __TwigTemplate_16df947d69967106b126f7af2193c09726a51e37d7402af10ab9ddcb56a77353 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Page/post/updatePost.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Page/post/updatePost.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Page/post/updatePost.html.twig", 1);
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

        echo "Modification d'un Article";
        
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
        echo "
    <div class=\"container\" style=\"background-color: #17324f\">
        <div class=\"col-lg-12 \" style=\"text-align: center\">
            <img class=\"card-img-top img-thumbnail\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/upload/" . twig_get_attribute($this->env, $this->source, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 7, $this->source); })()), "figure", [], "any", false, false, false, 7))), "html", null, true);
        echo "\"
                 alt=\"Responsive image\" style=\"margin-top: 50px;position: relative;width: 150rem;max-width: 50%\">
        </div>
        <div class=\"row\" style=\"text-align: right\">
            <div class=\"collapse\" id=\"collapseExample\">
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, twig_sort_filter((isset($context["figure"]) || array_key_exists("figure", $context) ? $context["figure"] : (function () { throw new RuntimeError('Variable "figure" does not exist.', 12, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["trick"]) {
            // line 13
            echo "                    <div class=\"card col-lg-4\" id=\"fig\" style=\"width: 14rem;background-color: #17324f;
                        margin-left: 40px;margin-top: 50px;margin-bottom: 50px;border: none\">

                        <img class=\"card-img-top rounded\"
                             src=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/upload/" . twig_get_attribute($this->env, $this->source, $context["trick"], "name", [], "any", false, false, false, 17))), "html", null, true);
            echo "\"
                             alt=\"Card image cap\" style=\"margin-top: 15px;width: 100%\">
                        ";
            // line 19
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                // line 20
                echo "                            <div class=\"container\">
                                <div class=\"row\">
                                    <form style=\"padding: 0px;margin-top: 50px\"
                                          action=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateImg", ["id" => twig_get_attribute($this->env, $this->source, $context["trick"], "id", [], "any", false, false, false, 23)]), "html", null, true);
                echo "\" method=\"post\">
                                        <button class=\"btn btn-link\"><i class=\"fas fa-pen\" style=\"color: #C5D86D\"></i>
                                        </button>
                                    </form>

                                    <form style=\"padding: 0px;margin-top: 50px\"
                                          action=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteImg", ["id" => twig_get_attribute($this->env, $this->source, $context["trick"], "id", [], "any", false, false, false, 29)]), "html", null, true);
                echo "\" method=\"post\">
                                        <button class=\"btn btn-link delete\">
                                            <i class=\"fas fa-trash\" style=\"color: #C5D86D\"></i></button>
                                        <input type=\"hidden\" name=\"_token\"
                                               value=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("deleteImg" . twig_get_attribute($this->env, $this->source, $context["trick"], "id", [], "any", false, false, false, 33))), "html", null, true);
                echo "\">
                                    </form>
                                </div>
                            </div>
                        ";
            }
            // line 38
            echo "                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trick'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "            </div>
            <div class=\"row col-lg-12\">
                <div class=\"col-lg-12\" style=\"text-align: center;margin-top: 20px;margin-bottom: 20px\">
                    <div class=\"col-sm-6\">
                        <button style=\"margin-left: 60px\" class=\"btn\" type=\"button\" id=\"button\" data-toggle=\"collapse\"
                                data-target=\"#collapseExample\"
                                aria-expanded=\"false\" aria-controls=\"collapseExample\">
                            Voir plus
                        </button>
                    </div>
                    <div class=\"col-sm-6\">
                        <button style=\"margin-left: 60px\" class=\"btn\" type=\"button\" id=\"button\" data-toggle=\"collapse\"
                                data-target=\"#video\"
                                aria-expanded=\"false\" aria-controls=\"video\">
                            Voir plus de vidéo
                        </button>
                    </div>
                </div>

                <div class=\"row col-lg-12\" style=\"justify-content: right\">
                    ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, twig_sort_filter((isset($context["figure"]) || array_key_exists("figure", $context) ? $context["figure"] : (function () { throw new RuntimeError('Variable "figure" does not exist.', 60, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["trick"]) {
            // line 61
            echo "                        <div class=\"card col-lg-2\" id=\"fig1\"
                             style=\"width: 14rem;background-color: #17324f; margin-top: 50px;margin-bottom: 50px;border: none\">

                            <img class=\"card-img-top rounded\"
                                 src=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/upload/" . twig_get_attribute($this->env, $this->source, $context["trick"], "name", [], "any", false, false, false, 65))), "html", null, true);
            echo "\"
                                 alt=\"Card image cap\" style=\"margin-top: 15px;width: 100%;display: flex\">

                            ";
            // line 68
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                // line 69
                echo "                                <div class=\"container\">
                                    <div class=\"row\">
                                        <form style=\"padding: 0px;margin-top: 50px;margin-left: 100px\"
                                              action=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateImg", ["id" => twig_get_attribute($this->env, $this->source, $context["trick"], "id", [], "any", false, false, false, 72)]), "html", null, true);
                echo "\" method=\"post\">
                                            <button class=\"btn btn-link\"><i class=\"fas fa-pen\"
                                                                            style=\"color: #C5D86D\"></i>
                                            </button>
                                        </form>

                                        <form style=\"padding: 0px;margin-top: 50px\"
                                              action=\"";
                // line 79
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteImg", ["id" => twig_get_attribute($this->env, $this->source, $context["trick"], "id", [], "any", false, false, false, 79)]), "html", null, true);
                echo "\" method=\"post\">
                                            <button class=\"btn btn-link delete\">
                                                <i class=\"fas fa-trash\" style=\"color: #C5D86D\"></i>
                                            </button>
                                            <input type=\"hidden\" name=\"_token\"
                                                   value=\"";
                // line 84
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("deleteImg" . twig_get_attribute($this->env, $this->source, $context["trick"], "id", [], "any", false, false, false, 84))), "html", null, true);
                echo "\">
                                        </form>
                                    </div>
                                </div>
                            ";
            }
            // line 89
            echo "                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trick'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, twig_sort_filter((isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new RuntimeError('Variable "video" does not exist.', 91, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["trick"]) {
            // line 92
            echo "                        <div class=\"card col-lg-2\" id=\"fig1\"
                             style=\"width: 24rem;background-color: #17324f;
                       margin-top: 50px;margin-bottom: 50px;border: none\">
                            <iframe width=\"200\" height=\"150\" src=\"";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trick"], "name", [], "any", false, false, false, 95), "html", null, true);
            echo "\" frameborder=\"0\"
                                    allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\"
                                    allowfullscreen></iframe>
                            ";
            // line 98
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                // line 99
                echo "                                <div class=\"container\">
                                    <div class=\"row\">
                                        <form style=\"padding: 0px;margin-top: 50px;margin-left: 100px\"
                                              action=\"";
                // line 102
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateVideo", ["id" => twig_get_attribute($this->env, $this->source, $context["trick"], "id", [], "any", false, false, false, 102)]), "html", null, true);
                echo "\" method=\"post\">
                                            <button class=\"btn btn-link\"><i class=\"fas fa-pen\"
                                                                            style=\"color: #C5D86D\"></i></button>
                                        </form>

                                        <form style=\"padding: 0px;margin-top: 50px\"
                                              action=\"";
                // line 108
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteVid", ["id" => twig_get_attribute($this->env, $this->source, $context["trick"], "id", [], "any", false, false, false, 108)]), "html", null, true);
                echo "\" method=\"post\">
                                            <button class=\"btn btn-link delete\">
                                                <i class=\"fas fa-trash\" style=\"color: #C5D86D\"></i></button>
                                            <input type=\"hidden\" name=\"_token\"
                                                   value=\"";
                // line 112
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("deleteVid" . twig_get_attribute($this->env, $this->source, $context["trick"], "id", [], "any", false, false, false, 112))), "html", null, true);
                echo "\">
                                        </form>
                                    </div>
                                </div>
                            ";
            }
            // line 117
            echo "                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trick'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "                </div>
            </div>


            <div class=\"collapse\" id=\"video\" style=\"text-align: center\">
                ";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, twig_sort_filter((isset($context["video"]) || array_key_exists("video", $context) ? $context["video"] : (function () { throw new RuntimeError('Variable "video" does not exist.', 124, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["trick"]) {
            // line 125
            echo "                    <div class=\"card col-lg-12\" id=\"fig\" style=\"width: 24rem;background-color: #17324f;
                       margin-top: 50px;margin-bottom: 50px;border: none\">

                        <iframe width=\"315\" height=\"135\" src=\"";
            // line 128
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["trick"], "name", [], "any", false, false, false, 128), "html", null, true);
            echo "\" frameborder=\"0\"
                                allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\"
                                allowfullscreen>
                        </iframe>

                        ";
            // line 133
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                // line 134
                echo "                            <div class=\"container\">
                                <div class=\"row\">
                                    <form style=\"padding: 0px;margin-top: 50px\"
                                          action=\"";
                // line 137
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateVideo", ["id" => twig_get_attribute($this->env, $this->source, $context["trick"], "id", [], "any", false, false, false, 137)]), "html", null, true);
                echo "\" method=\"post\">
                                        <button class=\"btn btn-link\"><i class=\"fas fa-pen\" style=\"color: #C5D86D\"></i>
                                        </button>
                                    </form>

                                    <form style=\"padding: 0px;margin-top: 50px\"
                                          action=\"";
                // line 143
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteVid", ["id" => twig_get_attribute($this->env, $this->source, $context["trick"], "id", [], "any", false, false, false, 143)]), "html", null, true);
                echo "\" method=\"post\">
                                        <button class=\"btn btn-link delete\">
                                            <i class=\"fas fa-trash\" style=\"color: #C5D86D\"></i></button>
                                        <input type=\"hidden\" name=\"_token\"
                                               value=\"";
                // line 147
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("deleteVid" . twig_get_attribute($this->env, $this->source, $context["trick"], "id", [], "any", false, false, false, 147))), "html", null, true);
                echo "\">
                                    </form>
                                </div>
                            </div>
                        ";
            }
            // line 152
            echo "                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trick'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        echo "            </div>
        </div>

        ";
        // line 157
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 157, $this->source); })()), 'form_start');
        echo "
        <div class=\"col-lg-12\" style=\"color: whitesmoke;
            margin-bottom: 30px;font-size: large;\">
            <div class=\"col-lg-4\"
                 style=\"margin-bottom: 30px;font-size: x-large;border: double;text-align: left\">
                Renseignement sur la figure<br>
            </div>

            <div class=\"col-lg-12\" style=\"
  color: whitesmoke;border: double;text-align: left\">
                ";
        // line 167
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 167, $this->source); })()), "name", [], "any", false, false, false, 167), 'row', ["attr" => ["placeholder" => twig_get_attribute($this->env, $this->source, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 167, $this->source); })()), "name", [], "any", false, false, false, 167)]]);
        echo "
            </div>

            <div class=\"col-lg-12\" style=\"
  color: whitesmoke;border: double;text-align: left\">
                ";
        // line 172
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 172, $this->source); })()), "content", [], "any", false, false, false, 172), 'row', ["label" => "Description de la figure"]);
        echo "
            </div>
        </div>
        <div class=\"row\" style=\"border-bottom: double;color: whitesmoke\">
            <div class=\"col-lg-6\" style=\"color: whitesmoke;text-align: center;
            margin-bottom: 30px;font-size: large\">
                Groupe de la figure : ";
        // line 178
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 178, $this->source); })()), "groupFig", [], "any", false, false, false, 178), 'row');
        echo "
            </div>
            <div class=\"col-lg-6\" style=\"color: whitesmoke;text-align: center;
            margin-bottom: 30px;font-size: large\">
                Date de la dernière modification : ";
        // line 182
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 182, $this->source); })()), "date", [], "any", false, false, false, 182), "d/m/Y"), "html", null, true);
        echo "
            </div>
        </div>
        <div class=\"col-lg-12\" style=\"color: whitesmoke;margin-top: 20px\">
            ";
        // line 186
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 186, $this->source); })()), "figure", [], "any", false, false, false, 186), 'row');
        echo "
            ";
        // line 187
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 187, $this->source); })()), "figures", [], "any", false, false, false, 187), 'row');
        echo "
        </div>
        <div class=\"row\" style=\"text-align: center\">
            <div class=\"col-lg-10\" style=\"color: whitesmoke;\">
                <div id=\"div1\" class=\"col-md-12\" style=\"color: whitesmoke\">
                    ";
        // line 192
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 192, $this->source); })()), "lien1", [], "any", false, false, false, 192), 'row');
        echo "
                </div>
                <div id=\"div2\" class=\"col-md-12\" style=\"color: whitesmoke;display: none\">
                    ";
        // line 195
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 195, $this->source); })()), "lien2", [], "any", false, false, false, 195), 'row');
        echo "
                </div>
                <div id=\"div3\" class=\"col-md-12\" style=\"color: whitesmoke;display: none\">
                    ";
        // line 198
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 198, $this->source); })()), "lien3", [], "any", false, false, false, 198), 'row');
        echo "
                </div>
            </div>
            <div id=\"dev1\" class=\"col-md-2\" style=\"margin-top: 50px\">
                <button
                        type=\"button\" class=\"btn\"><i
                            class=\"fas fa-plus-circle fa-2x\"></i>

                </button>
            </div>
        </div>
        ";
        // line 209
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 209, $this->source); })()), "flashes", [0 => "succes"], "method", false, false, false, 209));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 210
            echo "            <div class=\"alert alert-success\" role=\"alert\">
                ";
            // line 211
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 214
        echo "        <div style=\"text-align: center;margin-top: 50px\">
            <button type=\"submit\" class=\"btn\">
                Sauvegarder
            </button>
        </div>

        ";
        // line 220
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 220, $this->source); })()), 'form_end');
        echo "
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Page/post/updatePost.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  459 => 220,  451 => 214,  442 => 211,  439 => 210,  435 => 209,  421 => 198,  415 => 195,  409 => 192,  401 => 187,  397 => 186,  390 => 182,  383 => 178,  374 => 172,  366 => 167,  353 => 157,  348 => 154,  341 => 152,  333 => 147,  326 => 143,  317 => 137,  312 => 134,  310 => 133,  302 => 128,  297 => 125,  293 => 124,  286 => 119,  279 => 117,  271 => 112,  264 => 108,  255 => 102,  250 => 99,  248 => 98,  242 => 95,  237 => 92,  232 => 91,  225 => 89,  217 => 84,  209 => 79,  199 => 72,  194 => 69,  192 => 68,  186 => 65,  180 => 61,  176 => 60,  154 => 40,  147 => 38,  139 => 33,  132 => 29,  123 => 23,  118 => 20,  116 => 19,  111 => 17,  105 => 13,  101 => 12,  93 => 7,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title 'Modification d\\'un Article' %}
{% block body %}

    <div class=\"container\" style=\"background-color: #17324f\">
        <div class=\"col-lg-12 \" style=\"text-align: center\">
            <img class=\"card-img-top img-thumbnail\" src=\"{{ asset(\"img/upload/\"~id.figure ) }}\"
                 alt=\"Responsive image\" style=\"margin-top: 50px;position: relative;width: 150rem;max-width: 50%\">
        </div>
        <div class=\"row\" style=\"text-align: right\">
            <div class=\"collapse\" id=\"collapseExample\">
                {% for trick in figure | sort |reverse %}
                    <div class=\"card col-lg-4\" id=\"fig\" style=\"width: 14rem;background-color: #17324f;
                        margin-left: 40px;margin-top: 50px;margin-bottom: 50px;border: none\">

                        <img class=\"card-img-top rounded\"
                             src=\"{{ asset(\"img/upload/\"~trick.name ) }}\"
                             alt=\"Card image cap\" style=\"margin-top: 15px;width: 100%\">
                        {% if is_granted ('ROLE_USER') %}
                            <div class=\"container\">
                                <div class=\"row\">
                                    <form style=\"padding: 0px;margin-top: 50px\"
                                          action=\"{{ path ('updateImg',{id:trick.id} ) }}\" method=\"post\">
                                        <button class=\"btn btn-link\"><i class=\"fas fa-pen\" style=\"color: #C5D86D\"></i>
                                        </button>
                                    </form>

                                    <form style=\"padding: 0px;margin-top: 50px\"
                                          action=\"{{ path ('deleteImg',{id:trick.id} ) }}\" method=\"post\">
                                        <button class=\"btn btn-link delete\">
                                            <i class=\"fas fa-trash\" style=\"color: #C5D86D\"></i></button>
                                        <input type=\"hidden\" name=\"_token\"
                                               value=\"{{ csrf_token('deleteImg'~trick.id) }}\">
                                    </form>
                                </div>
                            </div>
                        {% endif %}
                    </div>
                {% endfor %}
            </div>
            <div class=\"row col-lg-12\">
                <div class=\"col-lg-12\" style=\"text-align: center;margin-top: 20px;margin-bottom: 20px\">
                    <div class=\"col-sm-6\">
                        <button style=\"margin-left: 60px\" class=\"btn\" type=\"button\" id=\"button\" data-toggle=\"collapse\"
                                data-target=\"#collapseExample\"
                                aria-expanded=\"false\" aria-controls=\"collapseExample\">
                            Voir plus
                        </button>
                    </div>
                    <div class=\"col-sm-6\">
                        <button style=\"margin-left: 60px\" class=\"btn\" type=\"button\" id=\"button\" data-toggle=\"collapse\"
                                data-target=\"#video\"
                                aria-expanded=\"false\" aria-controls=\"video\">
                            Voir plus de vidéo
                        </button>
                    </div>
                </div>

                <div class=\"row col-lg-12\" style=\"justify-content: right\">
                    {% for trick in figure | sort |reverse %}
                        <div class=\"card col-lg-2\" id=\"fig1\"
                             style=\"width: 14rem;background-color: #17324f; margin-top: 50px;margin-bottom: 50px;border: none\">

                            <img class=\"card-img-top rounded\"
                                 src=\"{{ asset(\"img/upload/\"~trick.name ) }}\"
                                 alt=\"Card image cap\" style=\"margin-top: 15px;width: 100%;display: flex\">

                            {% if is_granted ('ROLE_USER') %}
                                <div class=\"container\">
                                    <div class=\"row\">
                                        <form style=\"padding: 0px;margin-top: 50px;margin-left: 100px\"
                                              action=\"{{ path ('updateImg',{id:trick.id} ) }}\" method=\"post\">
                                            <button class=\"btn btn-link\"><i class=\"fas fa-pen\"
                                                                            style=\"color: #C5D86D\"></i>
                                            </button>
                                        </form>

                                        <form style=\"padding: 0px;margin-top: 50px\"
                                              action=\"{{ path ('deleteImg',{id:trick.id} ) }}\" method=\"post\">
                                            <button class=\"btn btn-link delete\">
                                                <i class=\"fas fa-trash\" style=\"color: #C5D86D\"></i>
                                            </button>
                                            <input type=\"hidden\" name=\"_token\"
                                                   value=\"{{ csrf_token('deleteImg'~trick.id) }}\">
                                        </form>
                                    </div>
                                </div>
                            {% endif %}
                        </div>
                    {% endfor %}
                    {% for trick in video | sort |reverse %}
                        <div class=\"card col-lg-2\" id=\"fig1\"
                             style=\"width: 24rem;background-color: #17324f;
                       margin-top: 50px;margin-bottom: 50px;border: none\">
                            <iframe width=\"200\" height=\"150\" src=\"{{ trick.name }}\" frameborder=\"0\"
                                    allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\"
                                    allowfullscreen></iframe>
                            {% if is_granted ('ROLE_USER') %}
                                <div class=\"container\">
                                    <div class=\"row\">
                                        <form style=\"padding: 0px;margin-top: 50px;margin-left: 100px\"
                                              action=\"{{ path ('updateVideo',{id:trick.id} ) }}\" method=\"post\">
                                            <button class=\"btn btn-link\"><i class=\"fas fa-pen\"
                                                                            style=\"color: #C5D86D\"></i></button>
                                        </form>

                                        <form style=\"padding: 0px;margin-top: 50px\"
                                              action=\"{{ path ('deleteVid',{id:trick.id} ) }}\" method=\"post\">
                                            <button class=\"btn btn-link delete\">
                                                <i class=\"fas fa-trash\" style=\"color: #C5D86D\"></i></button>
                                            <input type=\"hidden\" name=\"_token\"
                                                   value=\"{{ csrf_token('deleteVid'~trick.id) }}\">
                                        </form>
                                    </div>
                                </div>
                            {% endif %}
                        </div>
                    {% endfor %}
                </div>
            </div>


            <div class=\"collapse\" id=\"video\" style=\"text-align: center\">
                {% for trick in video | sort |reverse %}
                    <div class=\"card col-lg-12\" id=\"fig\" style=\"width: 24rem;background-color: #17324f;
                       margin-top: 50px;margin-bottom: 50px;border: none\">

                        <iframe width=\"315\" height=\"135\" src=\"{{ trick.name }}\" frameborder=\"0\"
                                allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\"
                                allowfullscreen>
                        </iframe>

                        {% if is_granted ('ROLE_USER') %}
                            <div class=\"container\">
                                <div class=\"row\">
                                    <form style=\"padding: 0px;margin-top: 50px\"
                                          action=\"{{ path ('updateVideo',{id:trick.id} ) }}\" method=\"post\">
                                        <button class=\"btn btn-link\"><i class=\"fas fa-pen\" style=\"color: #C5D86D\"></i>
                                        </button>
                                    </form>

                                    <form style=\"padding: 0px;margin-top: 50px\"
                                          action=\"{{ path ('deleteVid',{id:trick.id} ) }}\" method=\"post\">
                                        <button class=\"btn btn-link delete\">
                                            <i class=\"fas fa-trash\" style=\"color: #C5D86D\"></i></button>
                                        <input type=\"hidden\" name=\"_token\"
                                               value=\"{{ csrf_token('deleteVid'~trick.id) }}\">
                                    </form>
                                </div>
                            </div>
                        {% endif %}
                    </div>
                {% endfor %}
            </div>
        </div>

        {{ form_start(form) }}
        <div class=\"col-lg-12\" style=\"color: whitesmoke;
            margin-bottom: 30px;font-size: large;\">
            <div class=\"col-lg-4\"
                 style=\"margin-bottom: 30px;font-size: x-large;border: double;text-align: left\">
                Renseignement sur la figure<br>
            </div>

            <div class=\"col-lg-12\" style=\"
  color: whitesmoke;border: double;text-align: left\">
                {{ form_row(form.name,{'attr' : {'placeholder' : id.name} }) }}
            </div>

            <div class=\"col-lg-12\" style=\"
  color: whitesmoke;border: double;text-align: left\">
                {{ form_row(form.content,{label:'Description de la figure'}) }}
            </div>
        </div>
        <div class=\"row\" style=\"border-bottom: double;color: whitesmoke\">
            <div class=\"col-lg-6\" style=\"color: whitesmoke;text-align: center;
            margin-bottom: 30px;font-size: large\">
                Groupe de la figure : {{ form_row(form.groupFig) }}
            </div>
            <div class=\"col-lg-6\" style=\"color: whitesmoke;text-align: center;
            margin-bottom: 30px;font-size: large\">
                Date de la dernière modification : {{ id.date|date('d/m/Y') }}
            </div>
        </div>
        <div class=\"col-lg-12\" style=\"color: whitesmoke;margin-top: 20px\">
            {{ form_row(form.figure) }}
            {{ form_row(form.figures) }}
        </div>
        <div class=\"row\" style=\"text-align: center\">
            <div class=\"col-lg-10\" style=\"color: whitesmoke;\">
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
            <div id=\"dev1\" class=\"col-md-2\" style=\"margin-top: 50px\">
                <button
                        type=\"button\" class=\"btn\"><i
                            class=\"fas fa-plus-circle fa-2x\"></i>

                </button>
            </div>
        </div>
        {% for message in app.flashes('succes') %}
            <div class=\"alert alert-success\" role=\"alert\">
                {{ message }}
            </div>
        {% endfor %}
        <div style=\"text-align: center;margin-top: 50px\">
            <button type=\"submit\" class=\"btn\">
                Sauvegarder
            </button>
        </div>

        {{ form_end(form) }}
    </div>

{% endblock %}", "Page/post/updatePost.html.twig", "C:\\wamp\\www\\minichat\\Site_snow\\symphonie4\\symfoni\\Site_snow\\Soutenance6\\Soutenance6\\templates\\Page\\post\\updatePost.html.twig");
    }
}
