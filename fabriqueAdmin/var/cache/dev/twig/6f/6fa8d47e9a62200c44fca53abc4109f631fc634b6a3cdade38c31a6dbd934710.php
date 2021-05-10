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

/* template_parts/_nav_user.html.twig */
class __TwigTemplate_96eadda1791e262274f56d20f90d4a5c14fda348171011a41046df3f7361b4b1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "template_parts/_nav_user.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "template_parts/_nav_user.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-md navbar-light \">
    <button class=\"navbar-toggler ml-auto mb-2 bg-light\" type=\"button\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse \" id=\"myNavbar\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <!-- sidebar -->
                <div class=\"col-xl-2 col-lg-3 col-md-4 sidebar fixed-top  bg-danger\">
                    <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/FA.png"), "html", null, true);
        echo "\" class=\"navbar-brand text-white d-block mx-auto text-center py-3 mb-4 w-25\" alt=\"\">
                    
                    <div class=\"dropdown-divider\"></div>

                    <!-- tester le rôle et l'afficher  -->

                    ";
        // line 16
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "roles", [], "any", false, false, false, 16), 0, [], "array", false, false, false, 16), "ROLE_ADMIN"))) {
            // line 17
            echo "                        <h5 class=\"text-center text-light\">Rôle: Administrateur</h5>
                    ";
        }
        // line 19
        echo "
                    ";
        // line 20
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "roles", [], "any", false, false, false, 20), 0, [], "array", false, false, false, 20), "ROLE_EDITOR"))) {
            // line 21
            echo "                        <h5 class=\"text-center text-light\">Rôle: Editeur</h5>
                    ";
        }
        // line 23
        echo "
                    ";
        // line 24
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "roles", [], "any", false, false, false, 24), 0, [], "array", false, false, false, 24), "ROLE_RESERVE"))) {
            // line 25
            echo "                        <h5 class=\"text-center text-light\">Rôle: Accèss Réservé<h5>
                    ";
        }
        // line 27
        echo "
                    ";
        // line 28
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28), "roles", [], "any", false, false, false, 28), 0, [], "array", false, false, false, 28), "ROLE_USER"))) {
            // line 29
            echo "                        <h5 class=\"text-center text-light\">Rôle: Apprenant</h5>
                    ";
        }
        // line 31
        echo "                    

                    <div class=\"dropdown-divider\"></div>

                    <!-- vertical menu (sidebar) with many buttons -->
                    <ul class=\"navbar-nav flex-column mt-4 \">
                    
                        <!-- selon le rôle on affiche les boutons de menu -->
                        <!-- نقوم بتفحص دور المستخدم وبناءً عليه نقوم بعرض القائمة ذات العلاقة -->
                       
                       

                        ";
        // line 43
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EDITOR"))) {
            // line 44
            echo "                            <li class=\"nav-item\">
                                <a href=\"";
            // line 45
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_dashbord");
            echo "\" class=\"nav-link text-white p-3 mb-2 sidebar-link\"><i
                                        class=\"fas fa-home text-light fa-lg mr-3\"></i> Tableau de bord</a>
                            </li>
                    
                            ";
            // line 49
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 50
                echo "                                <li class=\"nav-item\"><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_utilisateur");
                echo "\" class=\"nav-link text-white p-3 mb-2 sidebar-link\"><i
                                            class=\"fas fa-users text-light fa-lg mr-3\"></i> Utilisateurs</a></li>
                            ";
            }
            // line 53
            echo "                            
                                <li class=\"nav-item\">
                                    <a class=\"nav-link p-3 mb-2 sidebar-link text-white\" href=\"";
            // line 55
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_promo_liste");
            echo "\"><i
                                            class=\"fas fa-certificate text-light fa-lg mr-3\"></i> Promotion</a>
                                </li>
                            
                                <li class=\"nav-item\">
                                    <a class=\"nav-link p-3 mb-2 sidebar-link text-white\" href=\"";
            // line 60
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_apprenant_liste");
            echo "\"><i
                                            class=\"fas fa-user-graduate text-light fa-lg mr-3\"></i> Apprenants</a>
                                </li>
                            
                                <li class=\"nav-item\">
                                    <a class=\"nav-link p-3 mb-2 sidebar-link text-white\" href=\"";
            // line 65
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_entreprise");
            echo "\"\"><i
                                            class=\"fas fa-chart-line text-light fa-lg mr-3\"></i> Entreprises</a>
                                </li>
                            
                                <li class=\"nav-item \">
                                    <a class=\"nav-link p-3 mb-2 sidebar-link text-white\" href=\"\"><i
                                            class=\"far fa-address-card text-light fa-lg mr-3\"></i> Fiche profil</a>
                                </li>

                                <li class=\"nav-item \">
                                    <a class=\"nav-link p-3 mb-2 sidebar-link text-white\" href=\"";
            // line 75
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("suivi_post_formation");
            echo "\"><i
                                            class=\"fas fa-desktop text-light fa-lg mr-3\"></i> Suivi Post-formation</a>
                                </li>

                                <li class=\"nav-item \">
                                    <a class=\"nav-link p-3 mb-2 sidebar-link text-white\" href=\"";
            // line 80
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("evaluations");
            echo "\"><i
                                            class=\"fas fa-sort-amount-up text-light fa-lg mr-3\"></i> Evaluations</a>
                                </li>

                        ";
        }
        // line 85
        echo "                    
                        ";
        // line 86
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 86, $this->source); })()), "user", [], "any", false, false, false, 86), "roles", [], "any", false, false, false, 86), 0, [], "array", false, false, false, 86), "ROLE_RESERVE"))) {
            // line 87
            echo "                    
                            <li class=\"nav-item\">
                                <a class=\"nav-link p-3 mb-2 sidebar-link text-white\" href=\"";
            // line 89
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reserve_promotion");
            echo "\"><i
                                        class=\"fas fa-certificate text-light fa-lg mr-3\"></i> Promotions</a>
                            </li>
                        
                            <li class=\"nav-item\">
                                <a class=\"nav-link p-3 mb-2 sidebar-link text-white\" href=\"\"><i
                                        class=\"fas fa-user-graduate text-light fa-lg mr-3\"></i> Apprenants</a>
                            </li>
                        
                            <li class=\"nav-item\">
                                <a href=\"\" class=\"nav-link text-white p-3 mb-2 sidebar-link\"><i class=\"fas fa-table text-light fa-lg mr-3\"></i>
                                    Bilan</a>
                            </li>

                            
                            <li class=\"nav-item \">
                                <a class=\"nav-link p-3 mb-2 sidebar-link text-white\" href=\"";
            // line 105
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("suivi_post_formation");
            echo "\"><i
                                        class=\"fas fa-desktop text-light fa-lg mr-3\"></i> Suivi Post-formation</a>
                            </li>

                            
                        ";
        }
        // line 111
        echo "                    
                        ";
        // line 112
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 112, $this->source); })()), "user", [], "any", false, false, false, 112), "roles", [], "any", false, false, false, 112), 0, [], "array", false, false, false, 112), "ROLE_USER"))) {
            // line 113
            echo "                    
                            <li class=\"nav-item\">
                                <a class=\"nav-link p-3 mb-2 sidebar-link text-white\" href=\"";
            // line 115
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("apprenant_profil");
            echo "\"><i
                                        class=\"fas fa-user text-light fa-lg mr-3\"></i> Profil</a>
                            </li>
                        
                           
                            <li class=\"nav-item\">
                                <a href=\"";
            // line 121
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("apprenant_profil");
            echo "\" class=\"nav-link text-white p-3 mb-2 sidebar-link\"><i
                                        class=\"fas fa-table text-light fa-lg mr-3\"></i> Bilan Individuel</a>
                            </li>
                        
                            <li class=\"nav-item\">
                                <a href=\"";
            // line 126
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("apprenant_profil");
            echo "\" class=\"nav-link text-white p-3 mb-2 sidebar-link\"><i
                                        class=\"fa fa-cubes text-light fa-lg mr-3\"></i> Mes Compétences</a>
                            </li>
                    
                        ";
        }
        // line 131
        echo "                    
                    </ul>
                </div>
                <!-- end of sidebar -->

                <!-- top-nav -->
                <!-- this menu contain an application title, email and avatar user and finally a logout button -->
                <div class=\"col-xl-10 col-lg-9 col-md-8 ml-auto bg-dark fixed-top py-2 top-navbar\">
                    <div class=\"row align-items-center \">
                        <div class=\"col-md-6\">
                            <h4 class=\"text-light mb-0\" >Fabrique Admin</h4>
                        </div>
                        
                        ";
        // line 150
        echo "                        <div class=\"col-md-6\">
                            <ul class=\"navbar-nav\">
                                <!-- logout button -->
                                ";
        // line 153
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 153, $this->source); })()), "user", [], "any", false, false, false, 153), "roles", [], "any", false, false, false, 153), 0, [], "array", false, false, false, 153), "ROLE_USER"))) {
            // line 154
            echo "                                <li class=\"nav-item ml-auto\">
                                    <a class=\"nav-link dropdown-toggle text-light p-0 \" data-toggle=\"dropdown\" id=\"drop-logout\" href=\"#\">
                                        <img src=\"";
            // line 156
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/brochures/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 156, $this->source); })()), "user", [], "any", false, false, false, 156), "avatar", [], "any", false, false, false, 156), "html", null, true);
            echo "\" class=\"avatar-sd\" alt=\"\">
                                        ";
            // line 157
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 157, $this->source); })()), "user", [], "any", false, false, false, 157), "fullname", [], "any", false, false, false, 157)), "html", null, true);
            echo "
                                    </a>
                                    <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"drop-logout\">
                                        <a href=\"#\" class=\"dropdown-item\">Mon profil</a>
                                        <div class=\"dropdown-divider\"></div>
                                        <a href=\"\" data-toggle=\"modal\" data-target=\"#sign-out\" class=\"dropdown-item\">Déconnexion</a>
                                         
                                    </div>
                                    ";
        } else {
            // line 166
            echo "                                    <li class=\"nav-item ml-auto my-3\">
                                        <span class=\"text-light\">";
            // line 167
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 167, $this->source); })()), "user", [], "any", false, false, false, 167), "email", [], "any", false, false, false, 167), "html", null, true);
            echo "</span>
                                        <a href=\"\" class=\"m-2\" data-toggle=\"modal\" data-target=\"#sign-out\">
                                            <i class=\"fas fa-sign-out-alt text-light fa-lg\"></i>
                                        </a>
                                    </li>
                                    ";
        }
        // line 173
        echo "                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end of top-nav -->
            </div>
        </div>
    </div>
</nav>
<!-- end of navbar -->

<!-- modal -->
<!-- this modal is called when we want to logout to confirm -->
<div class=\"modal fade\" id=\"sign-out\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\">Voulez-vous vous déconnecter?</h4>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
            </div>
            <div class=\"modal-body\">
                Appuyer sur <span class=\"badge badge-danger\">Déconnexion</span>  pour quitter
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-success\" data-dismiss=\"modal\">Rester connécté</button>
                <a href=\"";
        // line 199
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\" class=\"btn btn-danger\">Déconnexion</a>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "template_parts/_nav_user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  334 => 199,  306 => 173,  297 => 167,  294 => 166,  282 => 157,  277 => 156,  273 => 154,  271 => 153,  266 => 150,  251 => 131,  243 => 126,  235 => 121,  226 => 115,  222 => 113,  220 => 112,  217 => 111,  208 => 105,  189 => 89,  185 => 87,  183 => 86,  180 => 85,  172 => 80,  164 => 75,  151 => 65,  143 => 60,  135 => 55,  131 => 53,  124 => 50,  122 => 49,  115 => 45,  112 => 44,  110 => 43,  96 => 31,  92 => 29,  90 => 28,  87 => 27,  83 => 25,  81 => 24,  78 => 23,  74 => 21,  72 => 20,  69 => 19,  65 => 17,  63 => 16,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-md navbar-light \">
    <button class=\"navbar-toggler ml-auto mb-2 bg-light\" type=\"button\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse \" id=\"myNavbar\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <!-- sidebar -->
                <div class=\"col-xl-2 col-lg-3 col-md-4 sidebar fixed-top  bg-danger\">
                    <img src=\"{{ asset('assets/img/FA.png') }}\" class=\"navbar-brand text-white d-block mx-auto text-center py-3 mb-4 w-25\" alt=\"\">
                    
                    <div class=\"dropdown-divider\"></div>

                    <!-- tester le rôle et l'afficher  -->

                    {% if app.user.roles[0]=='ROLE_ADMIN' %}
                        <h5 class=\"text-center text-light\">Rôle: Administrateur</h5>
                    {% endif %}

                    {% if app.user.roles[0]=='ROLE_EDITOR' %}
                        <h5 class=\"text-center text-light\">Rôle: Editeur</h5>
                    {% endif %}

                    {% if app.user.roles[0]=='ROLE_RESERVE' %}
                        <h5 class=\"text-center text-light\">Rôle: Accèss Réservé<h5>
                    {% endif %}

                    {% if app.user.roles[0]=='ROLE_USER' %}
                        <h5 class=\"text-center text-light\">Rôle: Apprenant</h5>
                    {% endif %}
                    

                    <div class=\"dropdown-divider\"></div>

                    <!-- vertical menu (sidebar) with many buttons -->
                    <ul class=\"navbar-nav flex-column mt-4 \">
                    
                        <!-- selon le rôle on affiche les boutons de menu -->
                        <!-- نقوم بتفحص دور المستخدم وبناءً عليه نقوم بعرض القائمة ذات العلاقة -->
                       
                       

                        {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_EDITOR') %}
                            <li class=\"nav-item\">
                                <a href=\"{{ path('editor_dashbord') }}\" class=\"nav-link text-white p-3 mb-2 sidebar-link\"><i
                                        class=\"fas fa-home text-light fa-lg mr-3\"></i> Tableau de bord</a>
                            </li>
                    
                            {% if is_granted('ROLE_ADMIN') %}
                                <li class=\"nav-item\"><a href=\"{{ path('admin_utilisateur') }}\" class=\"nav-link text-white p-3 mb-2 sidebar-link\"><i
                                            class=\"fas fa-users text-light fa-lg mr-3\"></i> Utilisateurs</a></li>
                            {% endif %}
                            
                                <li class=\"nav-item\">
                                    <a class=\"nav-link p-3 mb-2 sidebar-link text-white\" href=\"{{ path('editor_promo_liste') }}\"><i
                                            class=\"fas fa-certificate text-light fa-lg mr-3\"></i> Promotion</a>
                                </li>
                            
                                <li class=\"nav-item\">
                                    <a class=\"nav-link p-3 mb-2 sidebar-link text-white\" href=\"{{ path('editor_apprenant_liste') }}\"><i
                                            class=\"fas fa-user-graduate text-light fa-lg mr-3\"></i> Apprenants</a>
                                </li>
                            
                                <li class=\"nav-item\">
                                    <a class=\"nav-link p-3 mb-2 sidebar-link text-white\" href=\"{{ path('editor_entreprise') }}\"\"><i
                                            class=\"fas fa-chart-line text-light fa-lg mr-3\"></i> Entreprises</a>
                                </li>
                            
                                <li class=\"nav-item \">
                                    <a class=\"nav-link p-3 mb-2 sidebar-link text-white\" href=\"\"><i
                                            class=\"far fa-address-card text-light fa-lg mr-3\"></i> Fiche profil</a>
                                </li>

                                <li class=\"nav-item \">
                                    <a class=\"nav-link p-3 mb-2 sidebar-link text-white\" href=\"{{ path('suivi_post_formation') }}\"><i
                                            class=\"fas fa-desktop text-light fa-lg mr-3\"></i> Suivi Post-formation</a>
                                </li>

                                <li class=\"nav-item \">
                                    <a class=\"nav-link p-3 mb-2 sidebar-link text-white\" href=\"{{ path('evaluations') }}\"><i
                                            class=\"fas fa-sort-amount-up text-light fa-lg mr-3\"></i> Evaluations</a>
                                </li>

                        {% endif %}
                    
                        {% if app.user.roles[0]=='ROLE_RESERVE' %}
                    
                            <li class=\"nav-item\">
                                <a class=\"nav-link p-3 mb-2 sidebar-link text-white\" href=\"{{ path('reserve_promotion') }}\"><i
                                        class=\"fas fa-certificate text-light fa-lg mr-3\"></i> Promotions</a>
                            </li>
                        
                            <li class=\"nav-item\">
                                <a class=\"nav-link p-3 mb-2 sidebar-link text-white\" href=\"\"><i
                                        class=\"fas fa-user-graduate text-light fa-lg mr-3\"></i> Apprenants</a>
                            </li>
                        
                            <li class=\"nav-item\">
                                <a href=\"\" class=\"nav-link text-white p-3 mb-2 sidebar-link\"><i class=\"fas fa-table text-light fa-lg mr-3\"></i>
                                    Bilan</a>
                            </li>

                            
                            <li class=\"nav-item \">
                                <a class=\"nav-link p-3 mb-2 sidebar-link text-white\" href=\"{{ path('suivi_post_formation') }}\"><i
                                        class=\"fas fa-desktop text-light fa-lg mr-3\"></i> Suivi Post-formation</a>
                            </li>

                            
                        {% endif %}
                    
                        {% if app.user.roles[0]=='ROLE_USER' %}
                    
                            <li class=\"nav-item\">
                                <a class=\"nav-link p-3 mb-2 sidebar-link text-white\" href=\"{{ path('apprenant_profil') }}\"><i
                                        class=\"fas fa-user text-light fa-lg mr-3\"></i> Profil</a>
                            </li>
                        
                           
                            <li class=\"nav-item\">
                                <a href=\"{{ path('apprenant_profil') }}\" class=\"nav-link text-white p-3 mb-2 sidebar-link\"><i
                                        class=\"fas fa-table text-light fa-lg mr-3\"></i> Bilan Individuel</a>
                            </li>
                        
                            <li class=\"nav-item\">
                                <a href=\"{{ path('apprenant_profil') }}\" class=\"nav-link text-white p-3 mb-2 sidebar-link\"><i
                                        class=\"fa fa-cubes text-light fa-lg mr-3\"></i> Mes Compétences</a>
                            </li>
                    
                        {% endif %}
                    
                    </ul>
                </div>
                <!-- end of sidebar -->

                <!-- top-nav -->
                <!-- this menu contain an application title, email and avatar user and finally a logout button -->
                <div class=\"col-xl-10 col-lg-9 col-md-8 ml-auto bg-dark fixed-top py-2 top-navbar\">
                    <div class=\"row align-items-center \">
                        <div class=\"col-md-6\">
                            <h4 class=\"text-light mb-0\" >Fabrique Admin</h4>
                        </div>
                        
                        {# <div class=\"col-md-4 d-flex align-items-center \">
                            {% if app.user.roles[0] == 'ROLE_USER' %}
                                <img src=\"{{ asset('uploads/brochures/') }}{{app.user.avatar}}\" class=\"rounded-circle\"  >
                            {% endif %}
                            <h5 class=\"text-white ml-2 \" >{{ app.user.email }}</h5>
                        </div> #}
                        <div class=\"col-md-6\">
                            <ul class=\"navbar-nav\">
                                <!-- logout button -->
                                {% if app.user.roles[0] == 'ROLE_USER' %}
                                <li class=\"nav-item ml-auto\">
                                    <a class=\"nav-link dropdown-toggle text-light p-0 \" data-toggle=\"dropdown\" id=\"drop-logout\" href=\"#\">
                                        <img src=\"{{ asset('uploads/brochures/') }}{{app.user.avatar}}\" class=\"avatar-sd\" alt=\"\">
                                        {{app.user.fullname|upper}}
                                    </a>
                                    <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"drop-logout\">
                                        <a href=\"#\" class=\"dropdown-item\">Mon profil</a>
                                        <div class=\"dropdown-divider\"></div>
                                        <a href=\"\" data-toggle=\"modal\" data-target=\"#sign-out\" class=\"dropdown-item\">Déconnexion</a>
                                         
                                    </div>
                                    {% else %}
                                    <li class=\"nav-item ml-auto my-3\">
                                        <span class=\"text-light\">{{app.user.email}}</span>
                                        <a href=\"\" class=\"m-2\" data-toggle=\"modal\" data-target=\"#sign-out\">
                                            <i class=\"fas fa-sign-out-alt text-light fa-lg\"></i>
                                        </a>
                                    </li>
                                    {% endif %}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end of top-nav -->
            </div>
        </div>
    </div>
</nav>
<!-- end of navbar -->

<!-- modal -->
<!-- this modal is called when we want to logout to confirm -->
<div class=\"modal fade\" id=\"sign-out\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\">Voulez-vous vous déconnecter?</h4>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
            </div>
            <div class=\"modal-body\">
                Appuyer sur <span class=\"badge badge-danger\">Déconnexion</span>  pour quitter
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-success\" data-dismiss=\"modal\">Rester connécté</button>
                <a href=\"{{ path('app_logout') }}\" class=\"btn btn-danger\">Déconnexion</a>
            </div>
        </div>
    </div>
</div>", "template_parts/_nav_user.html.twig", "/var/www/html/fabriqueAdmin/templates/template_parts/_nav_user.html.twig");
    }
}
