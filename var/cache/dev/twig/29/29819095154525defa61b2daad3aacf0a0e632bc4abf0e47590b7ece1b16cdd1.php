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

/* base.html.twig */
class __TwigTemplate_3ca036d875db0a9c229efd279a31177bd633eec923bf4b932f6d62abb7e3b732 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\"
          integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\"
          integrity=\"sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf\" crossorigin=\"anonymous\">

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/main.css"), "html", null, true);
        echo "\"/>

    <title>";
        // line 14
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "</head>
<body class=\"homepage is-preload\" style=\"background-color: #17324f\">
<div id=\"page-wrapper\">
    <section id=\"header\">
        <div class=\"container-fluid\" id=\"haut\" style=\"background-color: #17324f\">
            <div class=\"row\">

                <div class=\"logo\">
                    <i class=\"fas fa-snowflake fa-3x\" style=\"color: #C5D86D\"></i>
                </div>


                <nav class=\"navbar navbar-expand-lg navbar-light ml-auto\" id=\"nav\" style=\"background-color: #17324f\">
                    <ul class=\"navbar-nav\">
                        ";
        // line 30
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 31
            echo "                            <li class=\"nav-item mr-sm-2\">
                                <a class=\"nav-link text-light ";
            // line 32
            if (((isset($context["home"]) || array_key_exists("home", $context)) && ((isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 32, $this->source); })()) == "active"))) {
                echo "active";
            }
            echo "\"
                                   style=\"border-right: solid;margin-top: 15px\" href=\"";
            // line 33
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
            echo "\">Accueil</a>
                            </li>
                            <li class=\"nav-item mr-sm-2\">
                                <a class=\"nav-link text-light ";
            // line 36
            if (((isset($context["connexion"]) || array_key_exists("connexion", $context)) && ((isset($context["connexion"]) || array_key_exists("connexion", $context) ? $context["connexion"] : (function () { throw new RuntimeError('Variable "connexion" does not exist.', 36, $this->source); })()) == "active"))) {
                echo "active";
            }
            echo "\"
                                   style=\"border-right: solid\" href=\"";
            // line 37
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("creatPost");
            echo "\">Création</a>
                            </li>
                            <li class=\"nav-item mr-sm-2\">
                                <a class=\"nav-link text-light ";
            // line 40
            if (((isset($context["connexion"]) || array_key_exists("connexion", $context)) && ((isset($context["connexion"]) || array_key_exists("connexion", $context) ? $context["connexion"] : (function () { throw new RuntimeError('Variable "connexion" does not exist.', 40, $this->source); })()) == "active"))) {
                echo "active";
            }
            echo "\"
                                   href=\"";
            // line 41
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil");
            echo "\" style=\"border-right: solid\">Profil</a>
                            </li>
                            <li class=\"nav-item mr-sm-2\">
                                <a class=\"nav-link text-light\" href=\"";
            // line 44
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\">se déconnecter</a>
                            </li>
                        ";
        } else {
            // line 47
            echo "                            <li class=\"nav-item mr-sm-2\">
                                <a class=\"nav-link text-light ";
            // line 48
            if (((isset($context["home"]) || array_key_exists("home", $context)) && ((isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 48, $this->source); })()) == "active"))) {
                echo "active";
            }
            echo "\"
                                   style=\"border-right: solid;margin-top: 15px\"
                                   href=\"";
            // line 50
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
            echo "\">Accueil</a>
                            </li>
                            <li class=\"nav-item mr-sm-2\">
                                <a class=\"nav-link text-light ";
            // line 53
            if (((isset($context["register"]) || array_key_exists("register", $context)) && ((isset($context["register"]) || array_key_exists("register", $context) ? $context["register"] : (function () { throw new RuntimeError('Variable "register" does not exist.', 53, $this->source); })()) == "active"))) {
                echo "active";
            }
            echo "\"
                                   style=\"border-right: solid\" href=\"";
            // line 54
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\">Inscription</a>
                            </li>
                            <li class=\"nav-item mr-sm-2\">
                                <a class=\"nav-link text-light ";
            // line 57
            if (((isset($context["connexion"]) || array_key_exists("connexion", $context)) && ((isset($context["connexion"]) || array_key_exists("connexion", $context) ? $context["connexion"] : (function () { throw new RuntimeError('Variable "connexion" does not exist.', 57, $this->source); })()) == "active"))) {
                echo "active";
            }
            echo "\"
                                   href=\"";
            // line 58
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">Connexion</a>
                            </li>
                        ";
        }
        // line 61
        echo "                    </ul>
                </nav>
            </div>
        </div>
    </section>
</div>


";
        // line 69
        $this->displayBlock('body', $context, $blocks);
        // line 70
        echo "</body>
";
        // line 71
        $this->displayBlock('javascripts', $context, $blocks);
        // line 107
        echo "</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
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

    // line 15
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 69
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 71
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 72
        echo "    <script>
        i = 0;
        maDiv = document.getElementById(\"dev1\");
        maDiv.addEventListener(\"click\", function () {
            i++;
            if (i === 1) {
                document.getElementById('div2').style.display = 'block';
            }
            if (i === 2) {
                document.getElementById('div3').style.display = 'block';
            }
            if (i === 3) {
                alert('vous ne pouvez pas ajouter plus de 3 vidéo')
            }
        })
    </script>
    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\"
            integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\"
            crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\"
            integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\"
            crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"
            integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\"
            crossorigin=\"anonymous\"></script>


    <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../js/jquery.dropotron.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../js/browser.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../js/breakpoints.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../js/util.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../js/main.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../js/script.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 105,  319 => 104,  315 => 103,  311 => 102,  307 => 101,  303 => 100,  299 => 99,  270 => 72,  260 => 71,  242 => 69,  224 => 15,  205 => 14,  194 => 107,  192 => 71,  189 => 70,  187 => 69,  177 => 61,  171 => 58,  165 => 57,  159 => 54,  153 => 53,  147 => 50,  140 => 48,  137 => 47,  131 => 44,  125 => 41,  119 => 40,  113 => 37,  107 => 36,  101 => 33,  95 => 32,  92 => 31,  90 => 30,  74 => 16,  72 => 15,  68 => 14,  63 => 12,  55 => 7,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\"
          integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
    <link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\"
          integrity=\"sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf\" crossorigin=\"anonymous\">

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('css/main.css') }}\"/>

    <title>{% block title %}Accueil{% endblock %}</title>
    {% block stylesheets %}{% endblock %}
</head>
<body class=\"homepage is-preload\" style=\"background-color: #17324f\">
<div id=\"page-wrapper\">
    <section id=\"header\">
        <div class=\"container-fluid\" id=\"haut\" style=\"background-color: #17324f\">
            <div class=\"row\">

                <div class=\"logo\">
                    <i class=\"fas fa-snowflake fa-3x\" style=\"color: #C5D86D\"></i>
                </div>


                <nav class=\"navbar navbar-expand-lg navbar-light ml-auto\" id=\"nav\" style=\"background-color: #17324f\">
                    <ul class=\"navbar-nav\">
                        {% if is_granted ('ROLE_USER') %}
                            <li class=\"nav-item mr-sm-2\">
                                <a class=\"nav-link text-light {% if home is defined and home == 'active' %}active{% endif %}\"
                                   style=\"border-right: solid;margin-top: 15px\" href=\"{{ path('home') }}\">Accueil</a>
                            </li>
                            <li class=\"nav-item mr-sm-2\">
                                <a class=\"nav-link text-light {% if connexion is defined and connexion == 'active' %}active{% endif %}\"
                                   style=\"border-right: solid\" href=\"{{ path('creatPost') }}\">Création</a>
                            </li>
                            <li class=\"nav-item mr-sm-2\">
                                <a class=\"nav-link text-light {% if connexion is defined and connexion == 'active' %}active{% endif %}\"
                                   href=\"{{ path('profil') }}\" style=\"border-right: solid\">Profil</a>
                            </li>
                            <li class=\"nav-item mr-sm-2\">
                                <a class=\"nav-link text-light\" href=\"{{ path('logout') }}\">se déconnecter</a>
                            </li>
                        {% else %}
                            <li class=\"nav-item mr-sm-2\">
                                <a class=\"nav-link text-light {% if home is defined and home == 'active' %}active{% endif %}\"
                                   style=\"border-right: solid;margin-top: 15px\"
                                   href=\"{{ path('home') }}\">Accueil</a>
                            </li>
                            <li class=\"nav-item mr-sm-2\">
                                <a class=\"nav-link text-light {% if register is defined and register == 'active' %}active{% endif %}\"
                                   style=\"border-right: solid\" href=\"{{ path('register') }}\">Inscription</a>
                            </li>
                            <li class=\"nav-item mr-sm-2\">
                                <a class=\"nav-link text-light {% if connexion is defined and connexion == 'active' %}active{% endif %}\"
                                   href=\"{{ path('login') }}\">Connexion</a>
                            </li>
                        {% endif %}
                    </ul>
                </nav>
            </div>
        </div>
    </section>
</div>


{% block body %}{% endblock %}
</body>
{% block javascripts %}
    <script>
        i = 0;
        maDiv = document.getElementById(\"dev1\");
        maDiv.addEventListener(\"click\", function () {
            i++;
            if (i === 1) {
                document.getElementById('div2').style.display = 'block';
            }
            if (i === 2) {
                document.getElementById('div3').style.display = 'block';
            }
            if (i === 3) {
                alert('vous ne pouvez pas ajouter plus de 3 vidéo')
            }
        })
    </script>
    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\"
            integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\"
            crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\"
            integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\"
            crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"
            integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\"
            crossorigin=\"anonymous\"></script>


    <script src=\"{{ asset('../js/jquery.min.js') }}\"></script>
    <script src=\"{{ asset('../js/jquery.dropotron.min.js') }}\"></script>
    <script src=\"{{ asset('../js/browser.min.js') }}\"></script>
    <script src=\"{{ asset('../js/breakpoints.min.js') }}\"></script>
    <script src=\"{{ asset('../js/util.js') }}\"></script>
    <script src=\"{{ asset('../js/main.js') }}\"></script>
    <script src=\"{{ asset('../js/script.js') }}\"></script>
{% endblock %}
</html>
", "base.html.twig", "C:\\wamp\\www\\minichat\\Site_snow\\symphonie4\\symfoni\\Site_snow\\Soutenance6\\Soutenance6\\templates\\base.html.twig");
    }
}
