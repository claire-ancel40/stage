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

/* editor/formation/formation_liste.html.twig */
class __TwigTemplate_59bfe0c9ce4de0088008438c0604fa0788a38cfb694f0a6eb3026a42186d6ab4 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "editor/formation/formation_liste.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "editor/formation/formation_liste.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "editor/formation/formation_liste.html.twig", 1);
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

        echo "Gestion des Formations";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "user", [], "any", false, false, false, 6)) {
            // line 7
            echo "

";
            // line 9
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9)) {
                // line 10
                echo "
";
                // line 12
                echo "<div class=\"container-fluid \">
    <div class=\"row\">
        <div class=\"col-xl-10 col-lg-9 col-md-8 ml-auto my-5\">

            ";
                // line 17
                echo "
            
            ";
                // line 19
                $this->loadTemplate("editor/promotion/_nav_promotion.html.twig", "editor/formation/formation_liste.html.twig", 19)->display(twig_array_merge($context, ["p" => 2]));
                // line 20
                echo "            <div class=\"my-5\">

                ";
                // line 22
                $this->loadTemplate("template_parts/_flash_message.html.twig", "editor/formation/formation_liste.html.twig", 22)->display($context);
                // line 23
                echo "
                <input class=\"btn\" href=\"\" type=\"button\" value=\"Liste des formations\"/>
                ";
                // line 33
                echo "                    <table class=\"table table-hover\">
                        <thead>
                            <th scope=\"col\" style=\"width: 15%;\">Intitulé</th>
                            <th scope=\"col\" style=\"width: 7%;\">Durée</th>
                            <th scope=\"col\">Heures</th>
                            <th scope=\"col\">Diplôme</th>
                            <th scope=\"col\">Modalites</th>
                            <th scope=\"col\" style=\"width: 15%;\">Actions</th>
                        </thead>
                        <tbody>
                        ";
                // line 43
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["formations"]) || array_key_exists("formations", $context) ? $context["formations"] : (function () { throw new RuntimeError('Variable "formations" does not exist.', 43, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
                    // line 44
                    echo "                        <tr>
                            <td>";
                    // line 45
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "Intitule", [], "any", false, false, false, 45), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 46
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "Duree", [], "any", false, false, false, 46), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 47
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "NombreHeure", [], "any", false, false, false, 47), "html", null, true);
                    echo "h</td>
                            <td>";
                    // line 48
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "Diplome", [], "any", false, false, false, 48), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 49
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "Modalites", [], "any", false, false, false, 49), "html", null, true);
                    echo "</td>
                        
                            <td>
                                <a class=\"btn btn-danger btn-sm delete-record  my-1\" title=\"supprimer\" href=\"#\"><i
                                        class=\"fas fa-trash-alt delete-promotion\"></i></a>
                                <a class=\"btn btn-success btn-sm modif_promotion my-1\" title=\"modifier\"
                                    href=\"";
                    // line 55
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_edit_formation", ["id" => twig_get_attribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 55)]), "html", null, true);
                    echo "\"><i class=\"far fa-edit\"></i></a>
                                <div class=\"delete-confirm border bg-light  m-auto rounded p-3\" style=\"position: absolute;top:40%;left:30%\">
                                    <div>
                                        <h4>Vous êtes sûr de vouloir supprimer?</h4>
                                    </div>
                                    <div>
                                        <a class=\"btn btn-success non\" href=\"\">Non</a>
                                        <a class=\"btn btn-danger\" href=\"";
                    // line 62
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_delete_formation", ["id" => twig_get_attribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 62)]), "html", null, true);
                    echo "\">Oui</a>
                        
                                    </div>
                                </div>
                            </td>
                        </tr>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 69
                echo "                            
                        </tbody>
                    </table>
                    <a class=\"btn btn-primary btn-sm\" title=\"ajouter\" 
                        href=\"";
                // line 73
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_formation_new");
                echo "\"><i class=\"fas fa-plus-square\"></i></a>

                    <!-- pagination -->
                    ";
                // line 76
                if ((0 === twig_compare((isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 76, $this->source); })()), 0))) {
                    // line 77
                    echo "                        ";
                    $context["pages"] = 1;
                    // line 78
                    echo "                    ";
                }
                // line 79
                echo "                    <nav class=\"\">
                        <ul class=\"pagination pagination-sm justify-content-center\">
                            <li class=\"page-item ";
                // line 81
                if ((0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 81, $this->source); })()), 1))) {
                    echo "disabled";
                }
                echo "\">
                                <a class=\"page-link\" href=\"";
                // line 82
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_formation", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 82, $this->source); })()) - 1)]), "html", null, true);
                echo "\" tabindex=\"-1\">&laquo;</a>
                            </li>
                            ";
                // line 84
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 84, $this->source); })())));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 85
                    echo "                            <li class=\"page-item ";
                    if ((0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 85, $this->source); })()), $context["i"]))) {
                        echo "active";
                    }
                    echo "\">
                                <a class=\"page-link\" href=\"";
                    // line 86
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_formation", ["page" => $context["i"]]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo " <span
                                        class=\"sr-only\">(current)</span></a>
                            </li>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 90
                echo "                    
                            <li class=\"page-item ";
                // line 91
                if ((0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 91, $this->source); })()), (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 91, $this->source); })())))) {
                    echo "disabled";
                }
                echo "\">
                                <a class=\"page-link\" href=\"";
                // line 92
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_formation", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 92, $this->source); })()) + 1)]), "html", null, true);
                echo "\">&raquo;</a>
                            </li>
                        </ul>
                    </nav>
            </div>

                
           
            ";
                // line 101
                echo "
        </div>
    </div>
</div>
";
            }
            // line 106
            echo "

";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 111
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 112
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "editor/formation/formation_liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 112,  287 => 111,  274 => 106,  267 => 101,  256 => 92,  250 => 91,  247 => 90,  235 => 86,  228 => 85,  224 => 84,  219 => 82,  213 => 81,  209 => 79,  206 => 78,  203 => 77,  201 => 76,  195 => 73,  189 => 69,  176 => 62,  166 => 55,  157 => 49,  153 => 48,  149 => 47,  145 => 46,  141 => 45,  138 => 44,  134 => 43,  122 => 33,  118 => 23,  116 => 22,  112 => 20,  110 => 19,  106 => 17,  100 => 12,  97 => 10,  95 => 9,  91 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des Formations{% endblock %}

{% block body %}
{% if app.user %}


{% if app.user %}

{# structure de la page 10 colonnes de largeur et alignée à droite #}
<div class=\"container-fluid \">
    <div class=\"row\">
        <div class=\"col-xl-10 col-lg-9 col-md-8 ml-auto my-5\">

            {# page body #}

            
            {% include \"editor/promotion/_nav_promotion.html.twig\" with {'p':2} %}
            <div class=\"my-5\">

                {% include \"template_parts/_flash_message.html.twig\" %}

                <input class=\"btn\" href=\"\" type=\"button\" value=\"Liste des formations\"/>
                {#<article class=\"chercher\">
                    <form action=\"\" class=\"  ml-auto w-50 bg-info\">
                        <input class=\"float-right form-group mr-2 \" placeholder=\"chercher\" type=\"text\"
                            name=\"chercher_formation\">
                        <button class=\" badge badge-primary mr-2\" id=\"chercher_user\" type=\"submit\"><i class=\"fa fa-search \"></i></button>
                    </form> 
                    </article>
                    #}
                    <table class=\"table table-hover\">
                        <thead>
                            <th scope=\"col\" style=\"width: 15%;\">Intitulé</th>
                            <th scope=\"col\" style=\"width: 7%;\">Durée</th>
                            <th scope=\"col\">Heures</th>
                            <th scope=\"col\">Diplôme</th>
                            <th scope=\"col\">Modalites</th>
                            <th scope=\"col\" style=\"width: 15%;\">Actions</th>
                        </thead>
                        <tbody>
                        {% for formation in formations %}
                        <tr>
                            <td>{{ formation.Intitule }}</td>
                            <td>{{ formation.Duree }}</td>
                            <td>{{ formation.NombreHeure }}h</td>
                            <td>{{ formation.Diplome }}</td>
                            <td>{{ formation.Modalites }}</td>
                        
                            <td>
                                <a class=\"btn btn-danger btn-sm delete-record  my-1\" title=\"supprimer\" href=\"#\"><i
                                        class=\"fas fa-trash-alt delete-promotion\"></i></a>
                                <a class=\"btn btn-success btn-sm modif_promotion my-1\" title=\"modifier\"
                                    href=\"{{ path('editor_edit_formation',{'id':formation.id}) }}\"><i class=\"far fa-edit\"></i></a>
                                <div class=\"delete-confirm border bg-light  m-auto rounded p-3\" style=\"position: absolute;top:40%;left:30%\">
                                    <div>
                                        <h4>Vous êtes sûr de vouloir supprimer?</h4>
                                    </div>
                                    <div>
                                        <a class=\"btn btn-success non\" href=\"\">Non</a>
                                        <a class=\"btn btn-danger\" href=\"{{ path('editor_delete_formation',{'id':formation.id}) }}\">Oui</a>
                        
                                    </div>
                                </div>
                            </td>
                        </tr>
                        {% endfor %}
                            
                        </tbody>
                    </table>
                    <a class=\"btn btn-primary btn-sm\" title=\"ajouter\" 
                        href=\"{{ path('editor_formation_new') }}\"><i class=\"fas fa-plus-square\"></i></a>

                    <!-- pagination -->
                    {% if pages == 0 %}
                        {% set pages = 1 %}
                    {% endif %}
                    <nav class=\"\">
                        <ul class=\"pagination pagination-sm justify-content-center\">
                            <li class=\"page-item {% if page == 1 %}disabled{%  endif %}\">
                                <a class=\"page-link\" href=\"{{ path('editor_formation',{'page':page - 1}) }}\" tabindex=\"-1\">&laquo;</a>
                            </li>
                            {% for i in 1..pages %}
                            <li class=\"page-item {% if page == i %}active{% endif %}\">
                                <a class=\"page-link\" href=\"{{ path('editor_formation',{'page':i}) }}\">{{i}} <span
                                        class=\"sr-only\">(current)</span></a>
                            </li>
                            {% endfor %}
                    
                            <li class=\"page-item {% if page == pages %}disabled{%  endif %}\">
                                <a class=\"page-link\" href=\"{{ path('editor_formation',{'page':page + 1}) }}\">&raquo;</a>
                            </li>
                        </ul>
                    </nav>
            </div>

                
           
            {# end body #}

        </div>
    </div>
</div>
{% endif %}


{% endif %}
{% endblock %}

{% block javascripts %}


{% endblock %}", "editor/formation/formation_liste.html.twig", "/var/www/html/fabriqueAdmin/templates/editor/formation/formation_liste.html.twig");
    }
}
