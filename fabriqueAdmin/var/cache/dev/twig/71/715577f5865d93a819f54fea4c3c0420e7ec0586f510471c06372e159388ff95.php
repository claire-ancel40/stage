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

/* editor/apprenant/apprenant_liste.html.twig */
class __TwigTemplate_9d0ae9391e67284653b30a201334b88a2d900f50409c41bc89d69e40c9bd82bf extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "editor/apprenant/apprenant_liste.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "editor/apprenant/apprenant_liste.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "editor/apprenant/apprenant_liste.html.twig", 1);
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

        echo "Ajouter une Apprenants";
        
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

        // line 6
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11)) {
            // line 12
            echo "
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-xl-10 col-lg-9 col-md-8 ml-auto mb-3 mt-5\">

                ";
            // line 17
            $this->loadTemplate("editor/apprenant/_nav_apprenant.html.twig", "editor/apprenant/apprenant_liste.html.twig", 17)->display(twig_array_merge($context, ["p" => 1]));
            // line 18
            echo "
                <div class=\"my-5\">
                    <!-- flash messages -->
                    ";
            // line 21
            $this->loadTemplate("template_parts/_flash_message.html.twig", "editor/apprenant/apprenant_liste.html.twig", 21)->display($context);
            // line 22
            echo "
                    <input class=\"btn\" href=\"\" type=\"button\" value=\"Liste des apprenants\"/>

                    <!-- formulaire de recherche -->
                    <article class=\"chercher\">
                    <form action=\"";
            // line 27
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_apprenant_chercher");
            echo "\" class=\"  ml-auto w-50 bg-info\">
                        <input class=\"float-right form-group mr-2 \" placeholder=\"chercher\" type=\"text\" name=\"chercher_apprenant\">
                        <button class=\" badge badge-primary mr-2\" type=\"submit\"><i
                                class=\"fa fa-search \"></i></button>
                    </form>
                    </article>

                    <!-- lister toutes les promotion dans un tableau -->
                    <table class=\"table table-hover\">
                    
                        <thead>
                            <th>Nom</th>
                            <th>Git compte</th>
                            <th>Email</th>
                            <th>Avatar</th>
                            <th style=\"width: 15%;\">Actions</th>
                        </thead>
                        <tbody>

                            ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["apprenants"]) || array_key_exists("apprenants", $context) ? $context["apprenants"] : (function () { throw new RuntimeError('Variable "apprenants" does not exist.', 46, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["apprenant"]) {
                // line 47
                echo "                            <tr>
                                <td>";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["apprenant"], "apprenant", [], "any", false, false, false, 48), "Fullname", [], "any", false, false, false, 48), "html", null, true);
                echo "</td>
                                <td>";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["apprenant"], "apprenant", [], "any", false, false, false, 49), "Git", [], "any", false, false, false, 49), "html", null, true);
                echo "</td>
                                <td>";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["apprenant"], "apprenant", [], "any", false, false, false, 50), "Email", [], "any", false, false, false, 50), "html", null, true);
                echo "</td>
                                <td><img src=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/brochures/"), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["apprenant"], "apprenant", [], "any", false, false, false, 51), "Avatar", [], "any", false, false, false, 51), "html", null, true);
                echo "\" alt=\"\" class=\"avatar-sd\"></td>
                    
                                <!-- dans la dernère cellule, il trois liens: supprimer, modifier et visualiser -->
                                <td>
                                    <!-- visualiser un apprenant -->
                                    <a class=\"btn btn-info btn-sm modif_promotion my-1\" title=\"visualiser\" 
                                        href=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_apprenant_show", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["apprenant"], "apprenant", [], "any", false, false, false, 57), "id", [], "any", false, false, false, 57)]), "html", null, true);
                echo "\"><i class=\"fa fa-eye\"></i></a>
                                        
                                    <!-- modifier un apprenant -->
                                    <a class=\"btn btn-success btn-sm modif_promotion my-1\" title=\"modifier\"
                                        href=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_edit_apprenant", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["apprenant"], "apprenant", [], "any", false, false, false, 61), "id", [], "any", false, false, false, 61)]), "html", null, true);
                echo "\"><i class=\"far fa-edit\"></i></a>
                                    

                                    <!-- supprimer un apprenant qui va afficher d'abord un message de confirmation -->
                                    <a class=\"btn btn-danger btn-sm delete-record my-1\" title=\"supprimer\" href=\"#\"><i
                                        class=\"fas fa-trash-alt delete-promotion\"></i></a>

                                     <!-- div qui contient le message de confirmation afin de supprimer un apprenant -->
                                    <div class=\"delete-confirm border bg-light  m-auto rounded p-3\"
                                        style=\"position: absolute;top:40%;left:30%\">
                                        <div>
                                            <h4>Vous êtes sûr de vouloir supprimer?</h4>
                                        </div>
                                        <div>
                                            <a class=\"btn btn-success non\" href=\"\">Non</a>
                                            <a class=\"btn btn-danger \" href=\"";
                // line 76
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_apprenant_delete", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["apprenant"], "apprenant", [], "any", false, false, false, 76), "id", [], "any", false, false, false, 76)]), "html", null, true);
                echo "\">Oui</a>
                    
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['apprenant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "
                        </tbody>
                    </table>

                    <a class=\"btn btn-primary btn-sm\" title=\"ajouter\" href=\"";
            // line 87
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_apprenant_new");
            echo "\"><i
                            class=\"fas fa-plus-square\"></i></a>
                            
                    <!-- pagination -->
                    ";
            // line 91
            if ((0 === twig_compare((isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 91, $this->source); })()), 0))) {
                // line 92
                echo "                        ";
                $context["pages"] = 1;
                // line 93
                echo "                    ";
            }
            // line 94
            echo "                    <nav class=\"\">
                        <ul class=\"pagination pagination-sm justify-content-center\">
                            <li class=\"page-item ";
            // line 96
            if ((0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 96, $this->source); })()), 1))) {
                echo "disabled";
            }
            echo "\">
                                <a class=\"page-link\" href=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_apprenant_liste", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 97, $this->source); })()) - 1)]), "html", null, true);
            echo "\" tabindex=\"-1\">&laquo;</a>
                            </li>
                            ";
            // line 99
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 99, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                echo "                               
                                <li class=\"page-item ";
                // line 100
                if ((0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 100, $this->source); })()), $context["i"]))) {
                    echo "active";
                }
                echo "\">
                                    <a class=\"page-link\" href=\"";
                // line 101
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_apprenant_liste", ["page" => $context["i"]]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo " <span class=\"sr-only\">(current)</span></a>
                                </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "
                            <li class=\"page-item ";
            // line 105
            if ((0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 105, $this->source); })()), (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 105, $this->source); })())))) {
                echo "disabled";
            }
            echo "\">
                                <a class=\"page-link\" href=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_apprenant_liste", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 106, $this->source); })()) + 1)]), "html", null, true);
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

    public function getTemplateName()
    {
        return "editor/apprenant/apprenant_liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 106,  287 => 105,  284 => 104,  273 => 101,  267 => 100,  261 => 99,  256 => 97,  250 => 96,  246 => 94,  243 => 93,  240 => 92,  238 => 91,  231 => 87,  225 => 83,  212 => 76,  194 => 61,  187 => 57,  177 => 51,  173 => 50,  169 => 49,  165 => 48,  162 => 47,  158 => 46,  136 => 27,  129 => 22,  127 => 21,  122 => 18,  120 => 17,  113 => 12,  111 => 11,  101 => 10,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Ajouter une Apprenants{% endblock %}

{% block stylesheets %}


{% endblock %}

{% block body %}
{% if app.user %}

    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-xl-10 col-lg-9 col-md-8 ml-auto mb-3 mt-5\">

                {% include \"editor/apprenant/_nav_apprenant.html.twig\" with {\"p\": 1} %}

                <div class=\"my-5\">
                    <!-- flash messages -->
                    {% include \"template_parts/_flash_message.html.twig\" %}

                    <input class=\"btn\" href=\"\" type=\"button\" value=\"Liste des apprenants\"/>

                    <!-- formulaire de recherche -->
                    <article class=\"chercher\">
                    <form action=\"{{ path('editor_apprenant_chercher')}}\" class=\"  ml-auto w-50 bg-info\">
                        <input class=\"float-right form-group mr-2 \" placeholder=\"chercher\" type=\"text\" name=\"chercher_apprenant\">
                        <button class=\" badge badge-primary mr-2\" type=\"submit\"><i
                                class=\"fa fa-search \"></i></button>
                    </form>
                    </article>

                    <!-- lister toutes les promotion dans un tableau -->
                    <table class=\"table table-hover\">
                    
                        <thead>
                            <th>Nom</th>
                            <th>Git compte</th>
                            <th>Email</th>
                            <th>Avatar</th>
                            <th style=\"width: 15%;\">Actions</th>
                        </thead>
                        <tbody>

                            {% for apprenant in apprenants %}
                            <tr>
                                <td>{{ apprenant.apprenant.Fullname }}</td>
                                <td>{{ apprenant.apprenant.Git }}</td>
                                <td>{{ apprenant.apprenant.Email }}</td>
                                <td><img src=\"{{ asset('uploads/brochures/') }}{{ apprenant.apprenant.Avatar }}\" alt=\"\" class=\"avatar-sd\"></td>
                    
                                <!-- dans la dernère cellule, il trois liens: supprimer, modifier et visualiser -->
                                <td>
                                    <!-- visualiser un apprenant -->
                                    <a class=\"btn btn-info btn-sm modif_promotion my-1\" title=\"visualiser\" 
                                        href=\"{{ path('editor_apprenant_show',{'id':apprenant.apprenant.id}) }}\"><i class=\"fa fa-eye\"></i></a>
                                        
                                    <!-- modifier un apprenant -->
                                    <a class=\"btn btn-success btn-sm modif_promotion my-1\" title=\"modifier\"
                                        href=\"{{ path('editor_edit_apprenant',{'id':apprenant.apprenant.id}) }}\"><i class=\"far fa-edit\"></i></a>
                                    

                                    <!-- supprimer un apprenant qui va afficher d'abord un message de confirmation -->
                                    <a class=\"btn btn-danger btn-sm delete-record my-1\" title=\"supprimer\" href=\"#\"><i
                                        class=\"fas fa-trash-alt delete-promotion\"></i></a>

                                     <!-- div qui contient le message de confirmation afin de supprimer un apprenant -->
                                    <div class=\"delete-confirm border bg-light  m-auto rounded p-3\"
                                        style=\"position: absolute;top:40%;left:30%\">
                                        <div>
                                            <h4>Vous êtes sûr de vouloir supprimer?</h4>
                                        </div>
                                        <div>
                                            <a class=\"btn btn-success non\" href=\"\">Non</a>
                                            <a class=\"btn btn-danger \" href=\"{{ path('editor_apprenant_delete',{'id':apprenant.apprenant.id}) }}\">Oui</a>
                    
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            {% endfor %}

                        </tbody>
                    </table>

                    <a class=\"btn btn-primary btn-sm\" title=\"ajouter\" href=\"{{ path('editor_apprenant_new') }}\"><i
                            class=\"fas fa-plus-square\"></i></a>
                            
                    <!-- pagination -->
                    {% if pages == 0 %}
                        {% set pages = 1 %}
                    {% endif %}
                    <nav class=\"\">
                        <ul class=\"pagination pagination-sm justify-content-center\">
                            <li class=\"page-item {% if page == 1 %}disabled{%  endif %}\">
                                <a class=\"page-link\" href=\"{{ path('editor_apprenant_liste',{'page':page - 1}) }}\" tabindex=\"-1\">&laquo;</a>
                            </li>
                            {% for i in 1..pages %}                               
                                <li class=\"page-item {% if page == i %}active{% endif %}\">
                                    <a class=\"page-link\" href=\"{{ path('editor_apprenant_liste',{'page':i}) }}\">{{i}} <span class=\"sr-only\">(current)</span></a>
                                </li>
                            {% endfor %}

                            <li class=\"page-item {% if page == pages %}disabled{%  endif %}\">
                                <a class=\"page-link\" href=\"{{ path('editor_apprenant_liste',{'page':page + 1}) }}\">&raquo;</a>
                            </li>
                        </ul>
                    </nav>


                </div>

            </div>
        </div>
    </div>
{% endif %}
{% endblock %}", "editor/apprenant/apprenant_liste.html.twig", "/var/www/html/fabriqueAdmin/templates/editor/apprenant/apprenant_liste.html.twig");
    }
}
