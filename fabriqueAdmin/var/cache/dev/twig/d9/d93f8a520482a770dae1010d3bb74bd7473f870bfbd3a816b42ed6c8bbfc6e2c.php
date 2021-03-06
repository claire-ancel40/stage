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

/* editor/retard_absence/retard.html.twig */
class __TwigTemplate_e9cc7e9af205547354e129725afb1b8ec5560e9d77180f3d8f6895339c3f779d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "editor/retard_absence/retard.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "editor/retard_absence/retard.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "editor/retard_absence/retard.html.twig", 1);
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

        echo "Liste des retards";
        
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
    <div class=\"row\">
        <div class=\"col-xl-10 col-lg-9 col-md-8 ml-auto mb-3 mt-5\">

            ";
            // line 12
            $this->loadTemplate("editor/apprenant/_nav_apprenant.html.twig", "editor/retard_absence/retard.html.twig", 12)->display(twig_array_merge($context, ["p" => 2]));
            // line 13
            echo "
            <div class=\"my-5\">
                <!-- flash messages -->
                ";
            // line 16
            $this->loadTemplate("template_parts/_flash_message.html.twig", "editor/retard_absence/retard.html.twig", 16)->display($context);
            // line 17
            echo "
                <input class=\"btn\" href=\"\" type=\"button\" value=\"Liste des retards\"/>
                <!-- formulaire de recherche -->
                <article class=\"chercher\">
                <form action=\"";
            // line 21
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_retard_chercher");
            echo "\" class=\"  ml-auto w-50 bg-info\">
                    <input class=\"float-right form-group mr-2 \" placeholder=\"chercher\" type=\"text\"
                        name=\"chercher_retard\">
                    <button class=\" badge badge-primary mr-2\" type=\"submit\"><i class=\"fa fa-search \"></i></button>
                </form>
                </article>
                
                <table class=\"table table-hover\">
                
                    <thead>
                
                        <th scope=\"col\">Date</th>
                        <th scope=\"col\">N?? d'heures</th>
                        <th scope=\"col\">Justifi??</th>
                        <th scope=\"col\">Apprenant</th>
                        <th scope=\"col\">Promotion</th>
                
                        <th style=\"width: 15%;\">Actions</th>
                    </thead>
                    <tbody>

                        ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["retards"]) || array_key_exists("retards", $context) ? $context["retards"] : (function () { throw new RuntimeError('Variable "retards" does not exist.', 42, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["retard"]) {
                // line 43
                echo "                        <tr>
                            
                            <td>";
                // line 45
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["retard"], "date", [], "any", false, false, false, 45), "d/m/Y"), "html", null, true);
                echo "</td>
                            <td>";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["retard"], "nombreheure", [], "any", false, false, false, 46), "html", null, true);
                echo "</td>
                            <td>";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["retard"], "justifie", [], "any", false, false, false, 47), "html", null, true);
                echo "</td>
                            <td>";
                // line 48
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["retard"], "promoAppre", [], "any", false, false, false, 48), "apprenant", [], "any", false, false, false, 48), "fullname", [], "any", false, false, false, 48)), "html", null, true);
                echo "</td>
                            <td>";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["retard"], "promoAppre", [], "any", false, false, false, 49), "promotion", [], "any", false, false, false, 49), "annee", [], "any", false, false, false, 49), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["retard"], "promoAppre", [], "any", false, false, false, 49), "promotion", [], "any", false, false, false, 49), "formation", [], "any", false, false, false, 49), "intitule", [], "any", false, false, false, 49), "html", null, true);
                echo "</td>

                            
                        
                
                            <!-- dans la dern??re cellule, il y a trois liens: supprimer, modifier et visualiser -->
                            <td>
                                
                                <!-- modifier un apprenant -->
                                <a class=\"btn btn-success btn-sm modif_promotion\" title=\"modifier\"
                                href=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_retard_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["retard"], "id", [], "any", false, false, false, 59)]), "html", null, true);
                echo "\"><i class=\"far fa-edit\"></i></a>
                                
                                <!-- supprimer un apprenant qui va afficher d'abord un message de confirmation -->
                                <a class=\"btn btn-danger btn-sm delete-record\" title=\"supprimer\" 
                                    href=\"#\"><i class=\"fas fa-trash-alt delete-promotion\"></i></a>
                                
                
                                <!-- div qui contient le message de confirmation afin de supprimer un apprenant -->
                                <div class=\"delete-confirm border bg-light  m-auto rounded p-3\"
                                    style=\"position: absolute;top:40%;left:30%\">
                                    <div>
                                        <h4>Vous ??tes s??r de vouloir supprimer?</h4>
                                    </div>
                                    <div>
                                        <a class=\"btn btn-success non\" href=\"\">Non</a>
                                        <a class=\"btn btn-danger \"
                                            href=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_retard_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["retard"], "id", [], "any", false, false, false, 75)]), "html", null, true);
                echo "\">Oui</a>
                
                                    </div>
                                </div>
                            </td>
                        </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['retard'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "                
                    </tbody>
                </table>
                <a class=\"btn btn-primary btn-sm\" title=\"ajouter\" href=\"";
            // line 85
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_retard_new");
            echo "\"><i
                        class=\"fas fa-plus-square\"></i></a>
                    
                <!-- pagination -->
                ";
            // line 89
            if ((0 === twig_compare((isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 89, $this->source); })()), 0))) {
                // line 90
                echo "                ";
                $context["pages"] = 1;
                // line 91
                echo "                ";
            }
            // line 92
            echo "                <nav class=\"\">
                    <ul class=\"pagination pagination-sm justify-content-center\">
                        <li class=\"page-item ";
            // line 94
            if ((0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 94, $this->source); })()), 1))) {
                echo "disabled";
            }
            echo "\">
                            <a class=\"page-link\" href=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_retard", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 95, $this->source); })()) - 1)]), "html", null, true);
            echo "\" tabindex=\"-1\">&laquo;</a>
                        </li>
                        ";
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 97, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 98
                echo "                        <li class=\"page-item ";
                if ((0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 98, $this->source); })()), $context["i"]))) {
                    echo "active";
                }
                echo "\">
                            <a class=\"page-link\" href=\"";
                // line 99
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_retard", ["page" => $context["i"]]), "html", null, true);
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
            // line 103
            echo "                
                        <li class=\"page-item ";
            // line 104
            if ((0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 104, $this->source); })()), (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 104, $this->source); })())))) {
                echo "disabled";
            }
            echo "\">
                            <a class=\"page-link\" href=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_retard", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 105, $this->source); })()) + 1)]), "html", null, true);
            echo "\">&raquo;</a>
                        </li>
                    </ul>
                </nav>

            </div>
            ";
            // line 112
            echo "
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
        return "editor/retard_absence/retard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 112,  274 => 105,  268 => 104,  265 => 103,  253 => 99,  246 => 98,  242 => 97,  237 => 95,  231 => 94,  227 => 92,  224 => 91,  221 => 90,  219 => 89,  212 => 85,  207 => 82,  194 => 75,  175 => 59,  160 => 49,  156 => 48,  152 => 47,  148 => 46,  144 => 45,  140 => 43,  136 => 42,  112 => 21,  106 => 17,  104 => 16,  99 => 13,  97 => 12,  90 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des retards{% endblock %}

{% block body %}
{% if app.user %}

<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-xl-10 col-lg-9 col-md-8 ml-auto mb-3 mt-5\">

            {% include \"editor/apprenant/_nav_apprenant.html.twig\" with {\"p\": 2} %}

            <div class=\"my-5\">
                <!-- flash messages -->
                {% include \"template_parts/_flash_message.html.twig\" %}

                <input class=\"btn\" href=\"\" type=\"button\" value=\"Liste des retards\"/>
                <!-- formulaire de recherche -->
                <article class=\"chercher\">
                <form action=\"{{ path('editor_retard_chercher') }}\" class=\"  ml-auto w-50 bg-info\">
                    <input class=\"float-right form-group mr-2 \" placeholder=\"chercher\" type=\"text\"
                        name=\"chercher_retard\">
                    <button class=\" badge badge-primary mr-2\" type=\"submit\"><i class=\"fa fa-search \"></i></button>
                </form>
                </article>
                
                <table class=\"table table-hover\">
                
                    <thead>
                
                        <th scope=\"col\">Date</th>
                        <th scope=\"col\">N?? d'heures</th>
                        <th scope=\"col\">Justifi??</th>
                        <th scope=\"col\">Apprenant</th>
                        <th scope=\"col\">Promotion</th>
                
                        <th style=\"width: 15%;\">Actions</th>
                    </thead>
                    <tbody>

                        {% for retard in retards %}
                        <tr>
                            
                            <td>{{ retard.date|date(\"d/m/Y\") }}</td>
                            <td>{{ retard.nombreheure }}</td>
                            <td>{{ retard.justifie }}</td>
                            <td>{{ retard.promoAppre.apprenant.fullname|upper }}</td>
                            <td>{{ retard.promoAppre.promotion.annee }}-{{ retard.promoAppre.promotion.formation.intitule }}</td>

                            
                        
                
                            <!-- dans la dern??re cellule, il y a trois liens: supprimer, modifier et visualiser -->
                            <td>
                                
                                <!-- modifier un apprenant -->
                                <a class=\"btn btn-success btn-sm modif_promotion\" title=\"modifier\"
                                href=\"{{ path('editor_retard_edit',{'id':retard.id}) }}\"><i class=\"far fa-edit\"></i></a>
                                
                                <!-- supprimer un apprenant qui va afficher d'abord un message de confirmation -->
                                <a class=\"btn btn-danger btn-sm delete-record\" title=\"supprimer\" 
                                    href=\"#\"><i class=\"fas fa-trash-alt delete-promotion\"></i></a>
                                
                
                                <!-- div qui contient le message de confirmation afin de supprimer un apprenant -->
                                <div class=\"delete-confirm border bg-light  m-auto rounded p-3\"
                                    style=\"position: absolute;top:40%;left:30%\">
                                    <div>
                                        <h4>Vous ??tes s??r de vouloir supprimer?</h4>
                                    </div>
                                    <div>
                                        <a class=\"btn btn-success non\" href=\"\">Non</a>
                                        <a class=\"btn btn-danger \"
                                            href=\"{{ path('editor_retard_delete',{'id':retard.id}) }}\">Oui</a>
                
                                    </div>
                                </div>
                            </td>
                        </tr>
                        {% endfor %}
                
                    </tbody>
                </table>
                <a class=\"btn btn-primary btn-sm\" title=\"ajouter\" href=\"{{ path('editor_retard_new') }}\"><i
                        class=\"fas fa-plus-square\"></i></a>
                    
                <!-- pagination -->
                {% if pages == 0 %}
                {% set pages = 1 %}
                {% endif %}
                <nav class=\"\">
                    <ul class=\"pagination pagination-sm justify-content-center\">
                        <li class=\"page-item {% if page == 1 %}disabled{%  endif %}\">
                            <a class=\"page-link\" href=\"{{ path('editor_retard',{'page':page - 1}) }}\" tabindex=\"-1\">&laquo;</a>
                        </li>
                        {% for i in 1..pages %}
                        <li class=\"page-item {% if page == i %}active{% endif %}\">
                            <a class=\"page-link\" href=\"{{ path('editor_retard',{'page':i}) }}\">{{i}} <span
                                    class=\"sr-only\">(current)</span></a>
                        </li>
                        {% endfor %}
                
                        <li class=\"page-item {% if page == pages %}disabled{%  endif %}\">
                            <a class=\"page-link\" href=\"{{ path('editor_retard',{'page':page + 1}) }}\">&raquo;</a>
                        </li>
                    </ul>
                </nav>

            </div>
            {# end body #}

        </div>
    </div>
</div>
{% endif %}
{% endblock %}", "editor/retard_absence/retard.html.twig", "/var/www/html/fabriqueAdmin/templates/editor/retard_absence/retard.html.twig");
    }
}
