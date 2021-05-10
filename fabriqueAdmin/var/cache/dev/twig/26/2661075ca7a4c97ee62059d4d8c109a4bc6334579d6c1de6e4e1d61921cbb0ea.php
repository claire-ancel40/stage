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

/* admin/utilisateur.html.twig */
class __TwigTemplate_d3c55c6dfb48cfbd214fa76c2eb3e6962b7635d874bf1ceba1e818f82a9e8d95 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/utilisateur.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/utilisateur.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/utilisateur.html.twig", 1);
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

        echo "Gestion des utilisateurs";
        
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
        echo "

";
        // line 9
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9)) {
            // line 10
            echo "<div class=\"container-fluid \">
    <div class=\"row\">
        <div class=\"col-xl-10 col-lg-9 col-md-8 ml-auto my-5\">

            ";
            // line 15
            echo "
            
            <div class=\"my-5\">
                <!-- flash messages -->
                ";
            // line 19
            $this->loadTemplate("template_parts/_flash_message.html.twig", "admin/utilisateur.html.twig", 19)->display($context);
            // line 20
            echo "                
                
                <input class=\"btn\" href=\"\" type=\"button\" value=\"Liste des utilisateurs\"/>
                <article class=\"chercher\">
                <form action=\"";
            // line 24
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_chercher_user");
            echo "\" class=\"  ml-auto w-50 bg-info\">
                    <input class=\"float-right form-group mr-2 \" placeholder=\"chercher\" type=\"text\" name=\"chercher\">
                    <button class=\" badge badge-primary mr-2\" id=\"chercher_user\" type=\"submit\"><i
                            class=\"fa fa-search \"></i></button>
                </form>
                </article>
                    

                <table class=\"table table-hover\">
                    <thead>
                        <th>Email</th>
                        <th>Rôle</th>
                        <th>Actions</th>
                    </thead>
                <tbody>
                            
                    ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 40, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 41
                echo "                        <tr>
                                    
                            <td>";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 43), "html", null, true);
                echo "</td>
                                    
                            <td>
                                ";
                // line 46
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 46));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    // line 47
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $context["role"], "html", null, true);
                    echo "        
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 49
                echo "                            </td>
                            <td>
                                ";
                // line 51
                if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51), "email", [], "any", false, false, false, 51), twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 51)))) {
                    // line 52
                    echo "                                    ";
                    // line 54
                    echo "
                                    <a class=\"btn btn-danger btn-sm delete-record\" title=\"supprimer\" href=\"#\"><i
                                            class=\"fas fa-trash-alt \"></i></a>
                                
                                ";
                }
                // line 59
                echo "                                <div class=\"delete-confirm border bg-light  m-auto rounded p-3\" style=\"position: absolute;top:40%;left:30%\">
                                            
                                    <div>
                                        <h4>Vous êtes sûr de vouloir supprimer?</h4>
                                    </div>
                                    <div>
                                        <a class=\"btn btn-success non\" href=\"\">Non</a>
                                        <a class=\"btn btn-danger\" href=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_delete_user", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 66)]), "html", null, true);
                echo "\">Oui</a>
                                                
                                    </div>
                                </div>
                            </td>
                                   
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "                </tbody>
                </table>
                    <a class=\"btn btn-primary btn-sm\" title=\"ajouter\" href=\"";
            // line 76
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\"><i class=\"fa fa-user-plus\"></i></a>
                   
            </div>
                
            ";
            // line 81
            echo "
        </div>
    </div>
</div>
";
        }
        // line 86
        echo "
<script>
    
</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/utilisateur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 86,  209 => 81,  202 => 76,  198 => 74,  184 => 66,  175 => 59,  168 => 54,  166 => 52,  164 => 51,  160 => 49,  151 => 47,  147 => 46,  141 => 43,  137 => 41,  133 => 40,  114 => 24,  108 => 20,  106 => 19,  100 => 15,  94 => 10,  92 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des utilisateurs{% endblock %}

{% block body %}


{# structure de la page 10 colonnes de largeur et alignée à droite #}
{% if app.user %}
<div class=\"container-fluid \">
    <div class=\"row\">
        <div class=\"col-xl-10 col-lg-9 col-md-8 ml-auto my-5\">

            {# page body #}

            
            <div class=\"my-5\">
                <!-- flash messages -->
                {% include \"template_parts/_flash_message.html.twig\" %}
                
                
                <input class=\"btn\" href=\"\" type=\"button\" value=\"Liste des utilisateurs\"/>
                <article class=\"chercher\">
                <form action=\"{{ path('admin_chercher_user')}}\" class=\"  ml-auto w-50 bg-info\">
                    <input class=\"float-right form-group mr-2 \" placeholder=\"chercher\" type=\"text\" name=\"chercher\">
                    <button class=\" badge badge-primary mr-2\" id=\"chercher_user\" type=\"submit\"><i
                            class=\"fa fa-search \"></i></button>
                </form>
                </article>
                    

                <table class=\"table table-hover\">
                    <thead>
                        <th>Email</th>
                        <th>Rôle</th>
                        <th>Actions</th>
                    </thead>
                <tbody>
                            
                    {% for user in users %}
                        <tr>
                                    
                            <td>{{ user.email }}</td>
                                    
                            <td>
                                {% for role in user.roles %}
                                    {{ role }}        
                                {% endfor %}
                            </td>
                            <td>
                                {% if app.user.email != user.email %}
                                    {# <a class=\"btn btn-success btn-sm modif_user\" title=\"modifier\" 
                                        href=\"{{ path('admin_modif_user',{'id':user.id}) }}\"><i class=\"far fa-edit\"></i></a> #}

                                    <a class=\"btn btn-danger btn-sm delete-record\" title=\"supprimer\" href=\"#\"><i
                                            class=\"fas fa-trash-alt \"></i></a>
                                
                                {% endif %}
                                <div class=\"delete-confirm border bg-light  m-auto rounded p-3\" style=\"position: absolute;top:40%;left:30%\">
                                            
                                    <div>
                                        <h4>Vous êtes sûr de vouloir supprimer?</h4>
                                    </div>
                                    <div>
                                        <a class=\"btn btn-success non\" href=\"\">Non</a>
                                        <a class=\"btn btn-danger\" href=\"{{ path('admin_delete_user',{'id':user.id}) }}\">Oui</a>
                                                
                                    </div>
                                </div>
                            </td>
                                   
                        </tr>
                    {% endfor %}
                </tbody>
                </table>
                    <a class=\"btn btn-primary btn-sm\" title=\"ajouter\" href=\"{{ path('app_register') }}\"><i class=\"fa fa-user-plus\"></i></a>
                   
            </div>
                
            {# end body #}

        </div>
    </div>
</div>
{% endif %}

<script>
    
</script>

{% endblock %}


", "admin/utilisateur.html.twig", "/var/www/html/fabriqueAdmin/templates/admin/utilisateur.html.twig");
    }
}
