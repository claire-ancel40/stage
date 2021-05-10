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

/* suivi_post_formation/formulaireDeSuivi.html.twig */
class __TwigTemplate_dffbfc2a57dbde3ba36128f2d9456c10015efa0f919c1719e4980f2389a21216 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "suivi_post_formation/formulaireDeSuivi.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "suivi_post_formation/formulaireDeSuivi.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "suivi_post_formation/formulaireDeSuivi.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Formulaire de suivi";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "      
<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/formulaireSuivi.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10)) {
            // line 11
            echo "
<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-xl-10 col-lg-9 col-md-8 ml-auto mb-3 mt-5\">
            <div class=\"my-5\">
                ";
            // line 16
            $this->loadTemplate("suivi_post_formation/_nav_suivi_post_formation.html.twig", "suivi_post_formation/formulaireDeSuivi.html.twig", 16)->display(twig_array_merge($context, ["p" => 1]));
            // line 17
            echo "                <section class=\"saisir\">
                    <article class=\"connaitre\">
                        Quelle est votre situation professionnelle 3 mois après votre formation?
                    </article>
                    <article class=\"activite\">
                        <div> 
                            <input type=\"radio\" id=\"dewey\" name=\"drone\" value=\"huey\"checked>
                            <label for=\"huey\">Activité</label>
                        </div>
                        <div>
                            <input type=\"radio\" id=\"dewey\" name=\"drone\" value=\"dewey\">
                            <label for=\"dewey\">Formation</label>
                        </div>
                    </article>
                    <article class=\"styled\"> 
                        <select name=\"activite\" id=\"selectActivites\"> #}
                            <option value=\"0\">-----------</option>   #}
                                ";
            // line 35
            echo "                                ";
            // line 38
            echo "                                ....              
                        </select> 
                                                             
                        <select name=\"formation\" id=\"selectformations\">
                            <option value=\"0\">-----------</option>   #}
                                    ";
            // line 44
            echo "                                    ";
            // line 47
            echo "                        </select> 

                    </article>
                    
                </section>

                <section class=\"saisir\">
                    <article class=\"connaitre\">
                        Quelle est votre situation professionnelle 3 mois après votre formation?
                    </article>
                    <article class=\"activite\">
                        <div> 
                            <input type=\"radio\" id=\"dewey\" name=\"drone\" value=\"huey\"checked>
                            <label for=\"huey\">Activité</label>
                        </div>
                        <div>
                            <input type=\"radio\" id=\"dewey\" name=\"drone\" value=\"dewey\">
                            <label for=\"dewey\">Formation</label>
                        </div>

                        <div>
                            <input type=\"radio\" id=\"dewey\" name=\"drone\" value=\"dewey\">
                            <label for=\"dewey\">Sans emploi</label>
                        </div>
                    </article>
                    <article class=\"styled\"> 
                        <select name=\"activite\" id=\"selectActivites\"> #}
                            <option value=\"0\">-----------</option>   #}
                                ";
            // line 76
            echo "                                ";
            // line 79
            echo "                                ....              
                        </select> 
                                                             
                        <select name=\"formation\" id=\"selectformations\">
                            <option value=\"0\">-----------</option>   #}
                                    ";
            // line 85
            echo "                                    ";
            // line 88
            echo "                        </select> 

                    </article>
                </section>
            </div>         
        </div>
    </div>
</div>

";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "suivi_post_formation/formulaireDeSuivi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 88,  193 => 85,  186 => 79,  184 => 76,  154 => 47,  152 => 44,  145 => 38,  143 => 35,  124 => 17,  122 => 16,  115 => 11,  113 => 10,  103 => 9,  91 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Formulaire de suivi{% endblock %}

{% block stylesheets %}      
<link rel=\"stylesheet\" href=\"{{ asset(\"assets/css/formulaireSuivi.css\") }}\">
{% endblock %}

{% block body %}
{% if app.user %}

<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-xl-10 col-lg-9 col-md-8 ml-auto mb-3 mt-5\">
            <div class=\"my-5\">
                {% include \"suivi_post_formation/_nav_suivi_post_formation.html.twig\" with {'p':1} %}
                <section class=\"saisir\">
                    <article class=\"connaitre\">
                        Quelle est votre situation professionnelle 3 mois après votre formation?
                    </article>
                    <article class=\"activite\">
                        <div> 
                            <input type=\"radio\" id=\"dewey\" name=\"drone\" value=\"huey\"checked>
                            <label for=\"huey\">Activité</label>
                        </div>
                        <div>
                            <input type=\"radio\" id=\"dewey\" name=\"drone\" value=\"dewey\">
                            <label for=\"dewey\">Formation</label>
                        </div>
                    </article>
                    <article class=\"styled\"> 
                        <select name=\"activite\" id=\"selectActivites\"> #}
                            <option value=\"0\">-----------</option>   #}
                                {# mettre une boucle our afficher les options #}
                                {# {% for situation in situations %}
                            <option value={{situations.id}}>{{situations.situation}}</option>
                                {% endfor %} #}
                                ....              
                        </select> 
                                                             
                        <select name=\"formation\" id=\"selectformations\">
                            <option value=\"0\">-----------</option>   #}
                                    {# mettre une boucle our afficher les options #}
                                    {# {% for situation in situations %}
                            <option value={{situations.id}}>{{situations.situation}}</option>
                                    {% endfor %} #}
                        </select> 

                    </article>
                    
                </section>

                <section class=\"saisir\">
                    <article class=\"connaitre\">
                        Quelle est votre situation professionnelle 3 mois après votre formation?
                    </article>
                    <article class=\"activite\">
                        <div> 
                            <input type=\"radio\" id=\"dewey\" name=\"drone\" value=\"huey\"checked>
                            <label for=\"huey\">Activité</label>
                        </div>
                        <div>
                            <input type=\"radio\" id=\"dewey\" name=\"drone\" value=\"dewey\">
                            <label for=\"dewey\">Formation</label>
                        </div>

                        <div>
                            <input type=\"radio\" id=\"dewey\" name=\"drone\" value=\"dewey\">
                            <label for=\"dewey\">Sans emploi</label>
                        </div>
                    </article>
                    <article class=\"styled\"> 
                        <select name=\"activite\" id=\"selectActivites\"> #}
                            <option value=\"0\">-----------</option>   #}
                                {# mettre une boucle our afficher les options #}
                                {# {% for situation in situations %}
                            <option value={{situations.id}}>{{situations.situation}}</option>
                                {% endfor %} #}
                                ....              
                        </select> 
                                                             
                        <select name=\"formation\" id=\"selectformations\">
                            <option value=\"0\">-----------</option>   #}
                                    {# mettre une boucle our afficher les options #}
                                    {# {% for situation in situations %}
                            <option value={{situations.id}}>{{situations.situation}}</option>
                                    {% endfor %} #}
                        </select> 

                    </article>
                </section>
            </div>         
        </div>
    </div>
</div>

{% endif %}
{% endblock %}", "suivi_post_formation/formulaireDeSuivi.html.twig", "/var/www/html/fabriqueAdmin/templates/suivi_post_formation/formulaireDeSuivi.html.twig");
    }
}
