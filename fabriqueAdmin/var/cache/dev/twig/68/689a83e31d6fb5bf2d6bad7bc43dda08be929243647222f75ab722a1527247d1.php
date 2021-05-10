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

/* editor/retard_absence/absence.html.twig */
class __TwigTemplate_5c3d017baf7544a1c6527f45338e4df4a2542387b1d3d2921ba114ee56a734cb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "editor/retard_absence/absence.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "editor/retard_absence/absence.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "editor/retard_absence/absence.html.twig", 1);
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

        echo "Liste des absences";
        
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
            // line 13
            $this->loadTemplate("editor/apprenant/_nav_apprenant.html.twig", "editor/retard_absence/absence.html.twig", 13)->display(twig_array_merge($context, ["p" => 3]));
            // line 14
            echo "
            <div class=\"my-5\">
                <!-- flash messages -->
                ";
            // line 17
            $this->loadTemplate("template_parts/_flash_message.html.twig", "editor/retard_absence/absence.html.twig", 17)->display($context);
            // line 18
            echo "
                <input class=\"btn\" href=\"\" type=\"button\" value=\"Liste des absences\"/>
                <!-- formulaire de recherche -->
                <article class=\"chercher\">
                <form action=\"";
            // line 22
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_absence_chercher");
            echo "\" class=\"  ml-auto w-50 bg-info\">
                    <input class=\"float-right form-group mr-2 \" placeholder=\"chercher\" type=\"text\"
                        name=\"chercher_absence\">
                    <button class=\" badge badge-primary mr-2\" type=\"submit\"><i class=\"fa fa-search \"></i></button>
                </form>
                </article>

                <table class=\"table table-hover\">

                    <thead>

                        <th scope=\"col\">Date de début</th>
                        <th scope=\"col\">date de fin</th>
                        <th scope=\"col\">Justifié</th>
                        <th scope=\"col\">Apprenant</th>
                        <th scope=\"col\">Promotion</th>

                        <th style=\"width: 15%;\">Actions</th>
                    </thead>
                    <tbody>
                        ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["absences"]) || array_key_exists("absences", $context) ? $context["absences"] : (function () { throw new RuntimeError('Variable "absences" does not exist.', 42, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["absence"]) {
                // line 43
                echo "                        <tr>
                            <td>";
                // line 44
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["absence"], "dateDebut", [], "any", false, false, false, 44), "d/m/Y"), "html", null, true);
                echo "</td>
                            <td>";
                // line 45
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["absence"], "datefin", [], "any", false, false, false, 45), "d/m/Y"), "html", null, true);
                echo "</td>
                            <td>";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["absence"], "justifie", [], "any", false, false, false, 46), "html", null, true);
                echo "</td>
                            <td>";
                // line 47
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["absence"], "promoappre", [], "any", false, false, false, 47), "apprenant", [], "any", false, false, false, 47), "fullname", [], "any", false, false, false, 47)), "html", null, true);
                echo "</td>
                            <td>";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["absence"], "promoappre", [], "any", false, false, false, 48), "promotion", [], "any", false, false, false, 48), "annee", [], "any", false, false, false, 48), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["absence"], "promoappre", [], "any", false, false, false, 48), "promotion", [], "any", false, false, false, 48), "formation", [], "any", false, false, false, 48), "intitule", [], "any", false, false, false, 48), "html", null, true);
                echo "</td>
                        
                        
                        
                        
                            <!-- dans la dernère cellule, il y a trois liens: supprimer, modifier et visualiser -->
                            <td>
                                <!-- modifier un apprenant -->
                                <a class=\"btn btn-success btn-sm modif_promotion\" title=\"modifier\"
                                    href=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_absence_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["absence"], "id", [], "any", false, false, false, 57)]), "html", null, true);
                echo "\"><i class=\"far fa-edit\"></i></a>
                                    
                                <!-- supprimer un apprenant qui va afficher d'abord un message de confirmation -->
                                <a class=\"btn btn-danger btn-sm delete-record\" title=\"supprimer\" href=\"#\"><i
                                        class=\"fas fa-trash-alt delete-promotion\"></i></a>
                        
                        
                        
                        
                                <!-- div qui contient le message de confirmation afin de supprimer un apprenant -->
                                <div class=\"delete-confirm border bg-light  m-auto rounded p-3\" style=\"position: absolute;top:40%;left:30%\">
                                    <div>
                                        <h4>Vous êtes sûr de vouloir supprimer?</h4>
                                    </div>
                                    <div>
                                        <a class=\"btn btn-success non\" href=\"\">Non</a>
                                        <a class=\"btn btn-danger \" href=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_absence_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["absence"], "id", [], "any", false, false, false, 73)]), "html", null, true);
                echo "\">Oui</a>
                        
                                    </div>
                                </div>
                            </td>
                        </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['absence'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "
                    </tbody>
                </table>
                <a class=\"btn btn-primary btn-sm\" title=\"ajouter\" href=\"";
            // line 83
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_absence_new");
            echo "\"><i
                        class=\"fas fa-plus-square\"></i></a>

                <!-- pagination -->
                ";
            // line 87
            if ((0 === twig_compare((isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 87, $this->source); })()), 0))) {
                // line 88
                echo "                ";
                $context["pages"] = 1;
                // line 89
                echo "                ";
            }
            // line 90
            echo "                <nav class=\"\">
                    <ul class=\"pagination pagination-sm justify-content-center\">
                        <li class=\"page-item ";
            // line 92
            if ((0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 92, $this->source); })()), 1))) {
                echo "disabled";
            }
            echo "\">
                            <a class=\"page-link\" href=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_absence", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 93, $this->source); })()) - 1)]), "html", null, true);
            echo "\" tabindex=\"-1\">&laquo;</a>
                        </li>
                        ";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 95, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 96
                echo "                        <li class=\"page-item ";
                if ((0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 96, $this->source); })()), $context["i"]))) {
                    echo "active";
                }
                echo "\">
                            <a class=\"page-link\" href=\"";
                // line 97
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_absence", ["page" => $context["i"]]), "html", null, true);
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
            // line 101
            echo "                
                        <li class=\"page-item ";
            // line 102
            if ((0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 102, $this->source); })()), (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 102, $this->source); })())))) {
                echo "disabled";
            }
            echo "\">
                            <a class=\"page-link\" href=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_absence", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 103, $this->source); })()) + 1)]), "html", null, true);
            echo "\">&raquo;</a>
                        </li>
                    </ul>
                </nav>

            </div>
            ";
            // line 110
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
        return "editor/retard_absence/absence.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 110,  272 => 103,  266 => 102,  263 => 101,  251 => 97,  244 => 96,  240 => 95,  235 => 93,  229 => 92,  225 => 90,  222 => 89,  219 => 88,  217 => 87,  210 => 83,  205 => 80,  192 => 73,  173 => 57,  159 => 48,  155 => 47,  151 => 46,  147 => 45,  143 => 44,  140 => 43,  136 => 42,  113 => 22,  107 => 18,  105 => 17,  100 => 14,  98 => 13,  90 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des absences{% endblock %}

{% block body %}
{% if app.user %}


<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-xl-10 col-lg-9 col-md-8 ml-auto mb-3 mt-5\">

            {% include \"editor/apprenant/_nav_apprenant.html.twig\" with {\"p\": 3} %}

            <div class=\"my-5\">
                <!-- flash messages -->
                {% include \"template_parts/_flash_message.html.twig\" %}

                <input class=\"btn\" href=\"\" type=\"button\" value=\"Liste des absences\"/>
                <!-- formulaire de recherche -->
                <article class=\"chercher\">
                <form action=\"{{ path('editor_absence_chercher') }}\" class=\"  ml-auto w-50 bg-info\">
                    <input class=\"float-right form-group mr-2 \" placeholder=\"chercher\" type=\"text\"
                        name=\"chercher_absence\">
                    <button class=\" badge badge-primary mr-2\" type=\"submit\"><i class=\"fa fa-search \"></i></button>
                </form>
                </article>

                <table class=\"table table-hover\">

                    <thead>

                        <th scope=\"col\">Date de début</th>
                        <th scope=\"col\">date de fin</th>
                        <th scope=\"col\">Justifié</th>
                        <th scope=\"col\">Apprenant</th>
                        <th scope=\"col\">Promotion</th>

                        <th style=\"width: 15%;\">Actions</th>
                    </thead>
                    <tbody>
                        {% for absence in absences %}
                        <tr>
                            <td>{{ absence.dateDebut|date(\"d/m/Y\") }}</td>
                            <td>{{ absence.datefin|date(\"d/m/Y\") }}</td>
                            <td>{{ absence.justifie }}</td>
                            <td>{{ absence.promoappre.apprenant.fullname|upper }}</td>
                            <td>{{ absence.promoappre.promotion.annee }}-{{ absence.promoappre.promotion.formation.intitule }}</td>
                        
                        
                        
                        
                            <!-- dans la dernère cellule, il y a trois liens: supprimer, modifier et visualiser -->
                            <td>
                                <!-- modifier un apprenant -->
                                <a class=\"btn btn-success btn-sm modif_promotion\" title=\"modifier\"
                                    href=\"{{ path('editor_absence_edit',{'id':absence.id}) }}\"><i class=\"far fa-edit\"></i></a>
                                    
                                <!-- supprimer un apprenant qui va afficher d'abord un message de confirmation -->
                                <a class=\"btn btn-danger btn-sm delete-record\" title=\"supprimer\" href=\"#\"><i
                                        class=\"fas fa-trash-alt delete-promotion\"></i></a>
                        
                        
                        
                        
                                <!-- div qui contient le message de confirmation afin de supprimer un apprenant -->
                                <div class=\"delete-confirm border bg-light  m-auto rounded p-3\" style=\"position: absolute;top:40%;left:30%\">
                                    <div>
                                        <h4>Vous êtes sûr de vouloir supprimer?</h4>
                                    </div>
                                    <div>
                                        <a class=\"btn btn-success non\" href=\"\">Non</a>
                                        <a class=\"btn btn-danger \" href=\"{{ path('editor_absence_delete',{'id':absence.id}) }}\">Oui</a>
                        
                                    </div>
                                </div>
                            </td>
                        </tr>
                        {% endfor %}

                    </tbody>
                </table>
                <a class=\"btn btn-primary btn-sm\" title=\"ajouter\" href=\"{{ path('editor_absence_new') }}\"><i
                        class=\"fas fa-plus-square\"></i></a>

                <!-- pagination -->
                {% if pages == 0 %}
                {% set pages = 1 %}
                {% endif %}
                <nav class=\"\">
                    <ul class=\"pagination pagination-sm justify-content-center\">
                        <li class=\"page-item {% if page == 1 %}disabled{%  endif %}\">
                            <a class=\"page-link\" href=\"{{ path('editor_absence',{'page':page - 1}) }}\" tabindex=\"-1\">&laquo;</a>
                        </li>
                        {% for i in 1..pages %}
                        <li class=\"page-item {% if page == i %}active{% endif %}\">
                            <a class=\"page-link\" href=\"{{ path('editor_absence',{'page':i}) }}\">{{i}} <span
                                    class=\"sr-only\">(current)</span></a>
                        </li>
                        {% endfor %}
                
                        <li class=\"page-item {% if page == pages %}disabled{%  endif %}\">
                            <a class=\"page-link\" href=\"{{ path('editor_absence',{'page':page + 1}) }}\">&raquo;</a>
                        </li>
                    </ul>
                </nav>

            </div>
            {# end body #}

        </div>
    </div>
</div>
{% endif %}
{% endblock %}

", "editor/retard_absence/absence.html.twig", "/var/www/html/fabriqueAdmin/templates/editor/retard_absence/absence.html.twig");
    }
}
