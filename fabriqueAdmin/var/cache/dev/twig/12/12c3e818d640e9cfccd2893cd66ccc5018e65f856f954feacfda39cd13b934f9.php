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

/* editor/entreprise/contact_list.html.twig */
class __TwigTemplate_ea34dd3f598b3ac4227b44bb964db58da93b6444c04acfff90a7a3f5a2777ad9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "editor/entreprise/contact_list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "editor/entreprise/contact_list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "editor/entreprise/contact_list.html.twig", 1);
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

        echo "Gestion des Contacts";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "


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
        <div class=\"col-xl-10 col-lg-9 col-md-8 ml-auto mb-5 mt-5\">

            ";
            // line 16
            $this->loadTemplate("editor/entreprise/_nav_entreprise.html.twig", "editor/entreprise/contact_list.html.twig", 16)->display(twig_array_merge($context, ["p" => 3]));
            // line 17
            echo "
            ";
            // line 19
            echo "            <div class=\"my-5\">

                <!-- flash messages -->
                ";
            // line 22
            $this->loadTemplate("template_parts/_flash_message.html.twig", "editor/entreprise/contact_list.html.twig", 22)->display($context);
            // line 23
            echo "
                <input class=\"btn\" href=\"\" type=\"button\" value=\"Liste des contacts\"/>
                <article class=\"chercher\">
                <form action=\"";
            // line 26
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_contact_chercher");
            echo "\" class=\"  ml-auto w-50 bg-info\">
                    <input class=\"float-right form-group mr-2 \" placeholder=\"chercher par entreprise\" type=\"text\"
                            name=\"chercher_contact\">
                    <button class=\" badge badge-primary mr-2\" id=\"chercher_user\" type=\"submit\"><i class=\"fa fa-search \"></i>
                    </button>
                </form>
                </article>
                <table class=\"table table-hover\">
                    <thead>
                        <th scope=\"col\" style=\"width: 20%;\">Entreprise</th>
                        <th scope=\"col\" style=\"width: 20%;\">Nom</th>
                        <th scope=\"col\" style=\"width: 15%;\">TEL</th>
                        <th scope=\"col\" style=\"width: 15%;\">MOBILE</th>
                        <th scope=\"col\" style=\"width: 15%;\">EMAIL</th>
                        <th scope=\"col\" style=\"width: 15%;\">Actions</th>

                    </thead>
                    <tbody>

                        ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 45, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
                // line 46
                echo "                        <tr>
                            <td>";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contact"], "Entreprise", [], "any", false, false, false, 47), "Nom", [], "any", false, false, false, 47), "html", null, true);
                echo "</td>
                            <td>";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "fullName", [], "any", false, false, false, 48), "html", null, true);
                echo "</td>
                            <td>";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "tel", [], "any", false, false, false, 49), "html", null, true);
                echo "</td>
                            <td>";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "mobile", [], "any", false, false, false, 50), "html", null, true);
                echo "</td>
                            <td>";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "email", [], "any", false, false, false, 51), "html", null, true);
                echo "</td>


                            <td>
                                <a class=\"btn btn-success btn-sm modif_promotion\" title=\"modifier\"
                                    href=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_edit_contact", ["id" => twig_get_attribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 56)]), "html", null, true);
                echo "\"><i
                                        class=\"far fa-edit\"></i></a>

                                <a class=\"btn btn-danger btn-sm delete-record\" title=\"supprimer\" href=\"#\"><i
                                        class=\"fas fa-trash-alt delete-promotion\"></i></a>

                                <div class=\"delete-confirm border bg-light  m-auto rounded p-3\"
                                    style=\"position: absolute;top:40%;left:30%\">
                                    <div>
                                        <h4>Vous êtes sûr de vouloir supprimer?</h4>
                                    </div>
                                    <div>
                                        <a class=\"btn btn-success non\" href=\"\">Non</a>
                                        <a class=\"btn btn-danger\"
                                            href=\"";
                // line 70
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_contact_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 70)]), "html", null, true);
                echo "\">Oui</a>

                                    </div>
                                </div>
                            </td>
                        </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "
                    </tbody>
                </table>
                

                <!-- pagination -->
                ";
            // line 83
            if (0 === twig_compare((isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 83, $this->source); })()), 0)) {
                // line 84
                echo "                ";
                $context["pages"] = 1;
                // line 85
                echo "                ";
            }
            // line 86
            echo "                <nav class=\"\">
                    <ul class=\"pagination pagination-sm justify-content-center\">
                        <li class=\"page-item ";
            // line 88
            if (0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 88, $this->source); })()), 1)) {
                echo "disabled";
            }
            echo "\">
                            <a class=\"page-link\" href=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_contact", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 89, $this->source); })()) - 1)]), "html", null, true);
            echo "\"
                                tabindex=\"-1\">&laquo;</a>
                        </li>
                        ";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 92, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 93
                echo "                        <li class=\"page-item ";
                if (0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 93, $this->source); })()), $context["i"])) {
                    echo "active";
                }
                echo "\">
                            <a class=\"page-link\" href=\"";
                // line 94
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_contact", ["page" => $context["i"]]), "html", null, true);
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
            // line 98
            echo "
                        <li class=\"page-item ";
            // line 99
            if (0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 99, $this->source); })()), (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 99, $this->source); })()))) {
                echo "disabled";
            }
            echo "\">
                            <a class=\"page-link\" href=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_contact", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 100, $this->source); })()) + 1)]), "html", null, true);
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
        return "editor/entreprise/contact_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 100,  279 => 99,  276 => 98,  264 => 94,  257 => 93,  253 => 92,  247 => 89,  241 => 88,  237 => 86,  234 => 85,  231 => 84,  229 => 83,  221 => 77,  208 => 70,  191 => 56,  183 => 51,  179 => 50,  175 => 49,  171 => 48,  167 => 47,  164 => 46,  160 => 45,  138 => 26,  133 => 23,  131 => 22,  126 => 19,  123 => 17,  121 => 16,  114 => 11,  112 => 10,  102 => 9,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des Contacts{% endblock %}
{% block stylesheets %}



{% endblock %}
{% block body %}
{% if app.user %}

<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-xl-10 col-lg-9 col-md-8 ml-auto mb-5 mt-5\">

            {% include \"editor/entreprise/_nav_entreprise.html.twig\" with {'p':3} %}

            {# pour afficher le flash message #}
            <div class=\"my-5\">

                <!-- flash messages -->
                {% include \"template_parts/_flash_message.html.twig\" %}

                <input class=\"btn\" href=\"\" type=\"button\" value=\"Liste des contacts\"/>
                <article class=\"chercher\">
                <form action=\"{{ path('editor_contact_chercher') }}\" class=\"  ml-auto w-50 bg-info\">
                    <input class=\"float-right form-group mr-2 \" placeholder=\"chercher par entreprise\" type=\"text\"
                            name=\"chercher_contact\">
                    <button class=\" badge badge-primary mr-2\" id=\"chercher_user\" type=\"submit\"><i class=\"fa fa-search \"></i>
                    </button>
                </form>
                </article>
                <table class=\"table table-hover\">
                    <thead>
                        <th scope=\"col\" style=\"width: 20%;\">Entreprise</th>
                        <th scope=\"col\" style=\"width: 20%;\">Nom</th>
                        <th scope=\"col\" style=\"width: 15%;\">TEL</th>
                        <th scope=\"col\" style=\"width: 15%;\">MOBILE</th>
                        <th scope=\"col\" style=\"width: 15%;\">EMAIL</th>
                        <th scope=\"col\" style=\"width: 15%;\">Actions</th>

                    </thead>
                    <tbody>

                        {% for contact in contacts %}
                        <tr>
                            <td>{{ contact.Entreprise.Nom }}</td>
                            <td>{{ contact.fullName }}</td>
                            <td>{{ contact.tel }}</td>
                            <td>{{ contact.mobile }}</td>
                            <td>{{ contact.email }}</td>


                            <td>
                                <a class=\"btn btn-success btn-sm modif_promotion\" title=\"modifier\"
                                    href=\"{{ path('editor_edit_contact',{'id':contact.id}) }}\"><i
                                        class=\"far fa-edit\"></i></a>

                                <a class=\"btn btn-danger btn-sm delete-record\" title=\"supprimer\" href=\"#\"><i
                                        class=\"fas fa-trash-alt delete-promotion\"></i></a>

                                <div class=\"delete-confirm border bg-light  m-auto rounded p-3\"
                                    style=\"position: absolute;top:40%;left:30%\">
                                    <div>
                                        <h4>Vous êtes sûr de vouloir supprimer?</h4>
                                    </div>
                                    <div>
                                        <a class=\"btn btn-success non\" href=\"\">Non</a>
                                        <a class=\"btn btn-danger\"
                                            href=\"{{ path('editor_contact_delete',{'id':contact.id}) }}\">Oui</a>

                                    </div>
                                </div>
                            </td>
                        </tr>
                        {% endfor %}

                    </tbody>
                </table>
                

                <!-- pagination -->
                {% if pages == 0 %}
                {% set pages = 1 %}
                {% endif %}
                <nav class=\"\">
                    <ul class=\"pagination pagination-sm justify-content-center\">
                        <li class=\"page-item {% if page == 1 %}disabled{%  endif %}\">
                            <a class=\"page-link\" href=\"{{ path('editor_contact',{'page':page - 1}) }}\"
                                tabindex=\"-1\">&laquo;</a>
                        </li>
                        {% for i in 1..pages %}
                        <li class=\"page-item {% if page == i %}active{% endif %}\">
                            <a class=\"page-link\" href=\"{{ path('editor_contact',{'page':i}) }}\">{{i}} <span
                                    class=\"sr-only\">(current)</span></a>
                        </li>
                        {% endfor %}

                        <li class=\"page-item {% if page == pages %}disabled{%  endif %}\">
                            <a class=\"page-link\" href=\"{{ path('editor_contact',{'page':page + 1}) }}\">&raquo;</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
{% endif %}
{% endblock %}", "editor/entreprise/contact_list.html.twig", "/var/www/html/fabriqueAdmin/templates/editor/entreprise/contact_list.html.twig");
    }
}
