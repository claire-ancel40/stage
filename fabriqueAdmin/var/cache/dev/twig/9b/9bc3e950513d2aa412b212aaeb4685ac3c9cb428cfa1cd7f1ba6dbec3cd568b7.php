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

/* editor/promotion/promo_liste.html.twig */
class __TwigTemplate_d9587578b0c34100e6e6e79dcc1ff61838377370cd53622e60ce4e5e60a697da extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "editor/promotion/promo_liste.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "editor/promotion/promo_liste.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "editor/promotion/promo_liste.html.twig", 1);
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

        echo "Gestion des Promotions";
        
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
 

    <div class=\"container-fluid\">
        <div class=\"row\" >
            <div class=\"col-xl-10 col-lg-9 col-md-8 ml-auto mb-5 mt-5\">

                    ";
            // line 14
            $this->loadTemplate("editor/promotion/_nav_promotion.html.twig", "editor/promotion/promo_liste.html.twig", 14)->display(twig_array_merge($context, ["p" => 1]));
            // line 15
            echo "                
                ";
            // line 17
            echo "                <div class=\"my-5\">
                    

                    ";
            // line 20
            $this->loadTemplate("template_parts/_flash_message.html.twig", "editor/promotion/promo_liste.html.twig", 20)->display($context);
            // line 21
            echo "
                    <input class=\"btn\" href=\"\"  type=\"button\" value=\"Liste des promotions\"/>

                    ";
            // line 25
            echo "                    ";
            // line 32
            echo "                    
                    ";
            // line 34
            echo "                    ";
            // line 35
            echo "                    <table class=\"table rounded table-hover\">
                    
                        <thead class=\"\">
                            <tr >
                                <th scope=\"col\" style=\"width: 10%;\">Année</th>
                                <th scope=\"col\" style=\"width: 10%;\">Début</th>
                                <th scope=\"col\" style=\"width: 10%;\">Fin</th>
                                <th scope=\"col\" style=\"width: 45%;\">Formation</th>
                                <th colspan=\"2\" scope=\"col\" style=\"width: 15%;\" >Actions </th>
                                
                            </tr>
                        </thead>

                    ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["promotions"]) || array_key_exists("promotions", $context) ? $context["promotions"] : (function () { throw new RuntimeError('Variable "promotions" does not exist.', 48, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
                // line 49
                echo "                    
                    <tbody>
                            <tr class=\"\" >
                                <td>";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promotion"], "annee", [], "any", false, false, false, 52), "html", null, true);
                echo "</td>
                                <td>";
                // line 53
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promotion"], "dateDebut", [], "any", false, false, false, 53), "d/m/Y"), "html", null, true);
                echo "</td>
                                <td>";
                // line 54
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promotion"], "dateFin", [], "any", false, false, false, 54), "d/m/Y"), "html", null, true);
                echo "</td>
                                <td>";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["promotion"], "formation", [], "any", false, false, false, 55), "intitule", [], "any", false, false, false, 55), "html", null, true);
                echo "</td>

                                <td >
                                    ";
                // line 59
                echo "
                                    <a class=\"btn btn-info btn-sm my-1\" title=\"visualiser\"
                                        href=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_show_promotion", ["id" => twig_get_attribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 61)]), "html", null, true);
                echo "\"><i class=\"fa fa-eye\"></i></a>
                                    
                                        ";
                // line 63
                if ((1 === twig_compare(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promotion"], "dateFin", [], "any", false, false, false, 63), "Y/m/d"), twig_date_format_filter($this->env, "now", "Y/m/d")))) {
                    // line 64
                    echo "                                            <a class=\"btn btn-success btn-sm modif_promotion my-1\" title=\"modifier\"
                                                href=\"";
                    // line 65
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_edit_promotion", ["id" => twig_get_attribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 65)]), "html", null, true);
                    echo "\"><i class=\"far fa-edit\"></i></a>

                                            <a class=\"btn btn-danger btn-sm delete-record my-1\" title=\"supprimer\" href=\"#\"><i
                                                    class=\"fas fa-trash-alt delete-promotion\"></i></a>
                                        ";
                }
                // line 70
                echo "                                    

                                    ";
                // line 73
                echo "                                    <div class=\"delete-confirm border bg-light  m-auto rounded p-3\" style=\"position: absolute;top:40%;left:30%\">
                                        <div>
                                            <h4>Vous êtes sûr de vouloir supprimer?</h4>
                                        </div>
                                        <div>
                                            <a class=\"btn btn-success non\" href=\"\">Non</a>
                                            <a class=\"btn btn-danger \" href=\"";
                // line 79
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_delete_promotion", ["id" => twig_get_attribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 79)]), "html", null, true);
                echo "\">Oui</a>

                                        </div>
                                    </div>
                                    ";
                // line 84
                echo "                                </td>
                                ";
                // line 86
                echo "                                
                            </tr>
                        
                            
                        
                    </tbody>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promotion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "                    
                    </table>
                    <a class=\"btn btn-primary btn-sm\" title=\"ajouter\" href=\"";
            // line 95
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_promo_new");
            echo "\"><i class=\"fas fa-plus-square\"></i></a>
                    
                    <!-- pagination -->
                    ";
            // line 98
            if ((0 === twig_compare((isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 98, $this->source); })()), 0))) {
                // line 99
                echo "                        ";
                $context["pages"] = 1;
                // line 100
                echo "                    ";
            }
            // line 101
            echo "                    <nav class=\"\">
                        <ul class=\"pagination pagination-sm justify-content-center\">
                            <li class=\"page-item ";
            // line 103
            if ((0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 103, $this->source); })()), 1))) {
                echo "disabled";
            }
            echo "\">
                                <a class=\"page-link\" href=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_promo_liste", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 104, $this->source); })()) - 1)]), "html", null, true);
            echo "\" tabindex=\"-1\">&laquo;</a>
                            </li>
                            ";
            // line 106
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 106, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 107
                echo "                            <li class=\"page-item ";
                if ((0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 107, $this->source); })()), $context["i"]))) {
                    echo "active";
                }
                echo "\">
                                <a class=\"page-link\" href=\"";
                // line 108
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_promo_liste", ["page" => $context["i"]]), "html", null, true);
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
            // line 112
            echo "                    
                            <li class=\"page-item ";
            // line 113
            if ((0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 113, $this->source); })()), (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 113, $this->source); })())))) {
                echo "disabled";
            }
            echo "\">
                                <a class=\"page-link\" href=\"";
            // line 114
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_promo_liste", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 114, $this->source); })()) + 1)]), "html", null, true);
            echo "\">&raquo;</a>
                            </li>
                        </ul>
                    </nav>


                </div>

            </div>
        </div>
    </div>
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 129
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 130
        echo "




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "editor/promotion/promo_liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 130,  310 => 129,  287 => 114,  281 => 113,  278 => 112,  266 => 108,  259 => 107,  255 => 106,  250 => 104,  244 => 103,  240 => 101,  237 => 100,  234 => 99,  232 => 98,  226 => 95,  222 => 93,  210 => 86,  207 => 84,  200 => 79,  192 => 73,  188 => 70,  180 => 65,  177 => 64,  175 => 63,  170 => 61,  166 => 59,  160 => 55,  156 => 54,  152 => 53,  148 => 52,  143 => 49,  139 => 48,  124 => 35,  122 => 34,  119 => 32,  117 => 25,  112 => 21,  110 => 20,  105 => 17,  102 => 15,  100 => 14,  91 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des Promotions{% endblock %}

{% block body %}
{% if app.user %}

 

    <div class=\"container-fluid\">
        <div class=\"row\" >
            <div class=\"col-xl-10 col-lg-9 col-md-8 ml-auto mb-5 mt-5\">

                    {% include \"editor/promotion/_nav_promotion.html.twig\" with {'p':1} %}
                
                {# pour afficher le flash message #}
                <div class=\"my-5\">
                    

                    {% include \"template_parts/_flash_message.html.twig\" %}

                    <input class=\"btn\" href=\"\"  type=\"button\" value=\"Liste des promotions\"/>

                    {# formulaire de recherche #}
                    {# <article class=\"chercher\">
                        <form action=\"\" class=\"  ml-auto w-50 bg-info\">
                        <input class=\"float-right form-group mr-2 \" placeholder=\"chercher\" type=\"text\" name=\"chercher_promotion\">
                        <button class=\" badge badge-primary mr-2\" id=\"chercher_user\"
                            type=\"submit\"><i class=\"fa fa-search \"></i></button>
                    </form>
                    </article> #}
                    
                    {# parcourir la table des promotions #}
                    {# استعراض كامل جدول البروموسييون #}
                    <table class=\"table rounded table-hover\">
                    
                        <thead class=\"\">
                            <tr >
                                <th scope=\"col\" style=\"width: 10%;\">Année</th>
                                <th scope=\"col\" style=\"width: 10%;\">Début</th>
                                <th scope=\"col\" style=\"width: 10%;\">Fin</th>
                                <th scope=\"col\" style=\"width: 45%;\">Formation</th>
                                <th colspan=\"2\" scope=\"col\" style=\"width: 15%;\" >Actions </th>
                                
                            </tr>
                        </thead>

                    {% for promotion in promotions %}
                    
                    <tbody>
                            <tr class=\"\" >
                                <td>{{ promotion.annee }}</td>
                                <td>{{ promotion.dateDebut|date(\"d/m/Y\") }}</td>
                                <td>{{ promotion.dateFin|date(\"d/m/Y\") }}</td>
                                <td>{{ promotion.formation.intitule }}</td>

                                <td >
                                    {# 3link to delete or edit or show #}

                                    <a class=\"btn btn-info btn-sm my-1\" title=\"visualiser\"
                                        href=\"{{ path('editor_show_promotion',{'id':promotion.id}) }}\"><i class=\"fa fa-eye\"></i></a>
                                    
                                        {% if promotion.dateFin|date('Y/m/d') > \"now\"|date(\"Y/m/d\") %}
                                            <a class=\"btn btn-success btn-sm modif_promotion my-1\" title=\"modifier\"
                                                href=\"{{ path('editor_edit_promotion',{'id':promotion.id}) }}\"><i class=\"far fa-edit\"></i></a>

                                            <a class=\"btn btn-danger btn-sm delete-record my-1\" title=\"supprimer\" href=\"#\"><i
                                                    class=\"fas fa-trash-alt delete-promotion\"></i></a>
                                        {% endif %}
                                    

                                    {# delete confirmation #}
                                    <div class=\"delete-confirm border bg-light  m-auto rounded p-3\" style=\"position: absolute;top:40%;left:30%\">
                                        <div>
                                            <h4>Vous êtes sûr de vouloir supprimer?</h4>
                                        </div>
                                        <div>
                                            <a class=\"btn btn-success non\" href=\"\">Non</a>
                                            <a class=\"btn btn-danger \" href=\"{{ path('editor_delete_promotion',{'id':promotion.id}) }}\">Oui</a>

                                        </div>
                                    </div>
                                    {# end delete confirmation #}
                                </td>
                                {# <td class=\"show-liste\" style=\"cursor: pointer;\" title=\"afficher les apprenants\"><i class=\"fa fa-chevron-down icon\"></i></td> #}
                                
                            </tr>
                        
                            
                        
                    </tbody>
                    {% endfor %}
                    
                    </table>
                    <a class=\"btn btn-primary btn-sm\" title=\"ajouter\" href=\"{{ path('editor_promo_new') }}\"><i class=\"fas fa-plus-square\"></i></a>
                    
                    <!-- pagination -->
                    {% if pages == 0 %}
                        {% set pages = 1 %}
                    {% endif %}
                    <nav class=\"\">
                        <ul class=\"pagination pagination-sm justify-content-center\">
                            <li class=\"page-item {% if page == 1 %}disabled{%  endif %}\">
                                <a class=\"page-link\" href=\"{{ path('editor_promo_liste',{'page':page - 1}) }}\" tabindex=\"-1\">&laquo;</a>
                            </li>
                            {% for i in 1..pages %}
                            <li class=\"page-item {% if page == i %}active{% endif %}\">
                                <a class=\"page-link\" href=\"{{ path('editor_promo_liste',{'page':i}) }}\">{{i}} <span
                                        class=\"sr-only\">(current)</span></a>
                            </li>
                            {% endfor %}
                    
                            <li class=\"page-item {% if page == pages %}disabled{%  endif %}\">
                                <a class=\"page-link\" href=\"{{ path('editor_promo_liste',{'page':page + 1}) }}\">&raquo;</a>
                            </li>
                        </ul>
                    </nav>


                </div>

            </div>
        </div>
    </div>
{% endif %}
{% endblock %}


{% block javascripts %}





{% endblock %}", "editor/promotion/promo_liste.html.twig", "/var/www/html/fabriqueAdmin/templates/editor/promotion/promo_liste.html.twig");
    }
}
