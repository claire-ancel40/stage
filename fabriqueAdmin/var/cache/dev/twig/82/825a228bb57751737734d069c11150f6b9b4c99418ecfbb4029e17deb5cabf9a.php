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

/* suivi_post_formation/index.html.twig */
class __TwigTemplate_39ccc2d5f13d743ebf94215b3ba7ca8425d696596fb38856921c1cba18c61da5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "suivi_post_formation/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "suivi_post_formation/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "suivi_post_formation/index.html.twig", 1);
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

        echo " Suivi Post-Formation";
        
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

        echo "      
<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/statEvolution.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9)) {
            // line 10
            echo "


    <div class=\"container-fluid\">
        
        <div class=\"row\">
            <div class=\"col-xl-10 col-lg-9 col-md-8 ml-auto mb-5 mt-5\">
                ";
            // line 17
            $this->loadTemplate("suivi_post_formation/_nav_suivi_post_formation.html.twig", "suivi_post_formation/index.html.twig", 17)->display(twig_array_merge($context, ["p" => 1]));
            // line 18
            echo "                ";
            // line 19
            echo "                <section>
                <div class=\"styled\">
                    <form method=\"POST\">
                        <select name=\"formation\" id=\"selectFormations\">
                            <option value=\"0\">-----------</option>  
                            ";
            // line 25
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["formations"]) || array_key_exists("formations", $context) ? $context["formations"] : (function () { throw new RuntimeError('Variable "formations" does not exist.', 25, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
                // line 26
                echo "                                <option value=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 26), "html", null, true);
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "intitule", [], "any", false, false, false, 26), "html", null, true);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "                            ....              
                        </select>
                        
                        <select name=\"promotions\" id=\"selectPromotions\"></select>

                        <input class=\"filter\" href=\"\" type=\"submit\" value=\"Filtrer\"/>
                        ";
            // line 34
            echo "                       
                        
                    </form>                     
                    
                </div> 
                
                <div class=\"my-5\">
                    ";
            // line 42
            echo "                    ";
            $this->loadTemplate("template_parts/_flash_message.html.twig", "suivi_post_formation/index.html.twig", 42)->display($context);
            // line 43
            echo "                    ";
            // line 44
            echo "                    <!-- formulaire de recherche -->
                    <article class=\"chercher\">
                        <form action=\"";
            // line 46
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_apprenant_chercher");
            echo "\" class=\"  ml-auto w-50 bg-info\">
                            <input class=\"float-right form-group mr-2 \" placeholder=\"chercher\" type=\"text\" name=\"chercher_apprenant\">
                            <button class=\" badge badge-primary mr-2\" type=\"submit\"><i
                                class=\"fa fa-search \"></i></button>
                        </form>
                    </article>  
                    ";
            // line 53
            echo "                    <table class=\"table table-hover\">                        
                        <thead class=\"\">
                            <tr >
                                <th scope=\"col\" style=\"width: 15%;\">Apprenant</th>
                                ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["postFormations"]) || array_key_exists("postFormations", $context) ? $context["postFormations"] : (function () { throw new RuntimeError('Variable "postFormations" does not exist.', 57, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["postFormation"]) {
                // line 58
                echo "                                <th scope=\"col\" style=\"width: 10%;\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["postFormation"], "periode", [], "any", false, false, false, 58), "html", null, true);
                echo "</th>
                                
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['postFormation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "                           
                                ";
            // line 62
            echo "                                
                            </tr>
                        </thead>
                        
                        <tbody> 
                            ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["apprenants"]) || array_key_exists("apprenants", $context) ? $context["apprenants"] : (function () { throw new RuntimeError('Variable "apprenants" does not exist.', 67, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["apprenant"]) {
                // line 68
                echo "                            <tr>
                                <td>";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["apprenant"], "Fullname", [], "any", false, false, false, 69), "html", null, true);
                echo "</td>
                                
                                ";
                // line 71
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["postFormations"]) || array_key_exists("postFormations", $context) ? $context["postFormations"] : (function () { throw new RuntimeError('Variable "postFormations" does not exist.', 71, $this->source); })()));
                foreach ($context['_seq'] as $context["key"] => $context["postFormation"]) {
                    // line 72
                    echo "                                <td>
                                    ";
                    // line 73
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["apprenant"], "situationApprenantPeriodes", [], "any", false, false, false, 73));
                    foreach ($context['_seq'] as $context["_key"] => $context["situationApprenantPeriodes"]) {
                        // line 74
                        echo "                                    ";
                        // line 75
                        echo "                                    
                                    ";
                        // line 76
                        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["situationApprenantPeriodes"], "periode", [], "any", false, false, false, 76), "id", [], "any", false, false, false, 76), twig_get_attribute($this->env, $this->source, $context["postFormation"], "id", [], "any", false, false, false, 76)))) {
                            // line 77
                            echo "                                    ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["situationApprenantPeriodes"], "situation", [], "any", false, false, false, 77), "situation", [], "any", false, false, false, 77), "html", null, true);
                            echo "
                                    
                                    ";
                        }
                        // line 80
                        echo "                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['situationApprenantPeriodes'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 81
                    echo "                                    
                                </td>
                                
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['postFormation'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 85
                echo "                                
                            </tr>                            
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['apprenant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "                            
                            
                        </tbody>
                        
                        
                    </table>
                </div>             
                </section>
                
                <section class=\"tauxRetour\">
                              
                    <h4 class=\"titre\">Taux de retour à l'emploi par formation</h4>
                    <article class=\"groupeA\">
                      <div class=\"A\">
                          <div class=\"cercleA\"></div>
                          <div class=\"triangleA\"></div>
                      </div>
                      <div class=\"C\">
                          <div class=\"cercleC\"></div>
                          <div class=\"triangleC\"></div>
                      </div>
                  </article>
                    
                    <table class=\"barreEvolution\">
                        <tr>
                          <td class=\"type\">Formation</td>
                          <td class=\"trois\">3 mois</td>
                          <td class=\"six\">6 mois</td>
                          <td class=\"neuf\">9 mois</td>
                          <td class=\"douze\">12 mois</td>
                      </tr>
                  </table>
                  <article class=\"groupeB\">
                      <div class=\"B\">
                          <div class=\"triangleB\"></div>
                          <div class=\"cercleB\"></div>
                      </div>
                      <div class=\"D\">
                          <div class=\"triangleD\"></div>
                          <div class=\"cercleD\"></div>
                      </div>
                  </article>
                </section>       
            </div>
        </div>
    </div>
            


";
        }
        // line 137
        echo " 

<!-- pagination -->
<article class=\"paginer\"> 
    ";
        // line 141
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["apprenants"]) || array_key_exists("apprenants", $context) ? $context["apprenants"] : (function () { throw new RuntimeError('Variable "apprenants" does not exist.', 141, $this->source); })()));
        echo "
    
</article>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 146
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 147
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/suiviPostFormation.js"), "html", null, true);
        echo "\">       
              
    </script>
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "suivi_post_formation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  359 => 147,  349 => 146,  335 => 141,  329 => 137,  277 => 88,  269 => 85,  260 => 81,  254 => 80,  247 => 77,  245 => 76,  242 => 75,  240 => 74,  236 => 73,  233 => 72,  229 => 71,  224 => 69,  221 => 68,  217 => 67,  210 => 62,  207 => 60,  197 => 58,  193 => 57,  187 => 53,  178 => 46,  174 => 44,  172 => 43,  169 => 42,  160 => 34,  152 => 28,  141 => 26,  136 => 25,  129 => 19,  127 => 18,  125 => 17,  116 => 10,  114 => 9,  104 => 8,  92 => 5,  80 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Suivi Post-Formation{% endblock %}
{% block stylesheets %}      
<link rel=\"stylesheet\" href=\"{{ asset(\"assets/css/statEvolution.css\") }}\">
{% endblock %}

{% block body %}
{% if app.user %}



    <div class=\"container-fluid\">
        
        <div class=\"row\">
            <div class=\"col-xl-10 col-lg-9 col-md-8 ml-auto mb-5 mt-5\">
                {% include \"suivi_post_formation/_nav_suivi_post_formation.html.twig\" with {'p':1} %}
                {# {{ dump(promotions) }}  #}
                <section>
                <div class=\"styled\">
                    <form method=\"POST\">
                        <select name=\"formation\" id=\"selectFormations\">
                            <option value=\"0\">-----------</option>  
                            {# mettre une boucle our afficher les options #}
                            {% for formation in formations %}
                                <option value={{formation.id}}>{{formation.intitule}}</option>
                            {% endfor %}
                            ....              
                        </select>
                        
                        <select name=\"promotions\" id=\"selectPromotions\"></select>

                        <input class=\"filter\" href=\"\" type=\"submit\" value=\"Filtrer\"/>
                        {# {{ dump(formations) }} #}                       
                        
                    </form>                     
                    
                </div> 
                
                <div class=\"my-5\">
                    {# pour afficher le flash message #}
                    {% include \"template_parts/_flash_message.html.twig\" %}
                    {#{{ dump(postFormations) }}#}
                    <!-- formulaire de recherche -->
                    <article class=\"chercher\">
                        <form action=\"{{ path('editor_apprenant_chercher')}}\" class=\"  ml-auto w-50 bg-info\">
                            <input class=\"float-right form-group mr-2 \" placeholder=\"chercher\" type=\"text\" name=\"chercher_apprenant\">
                            <button class=\" badge badge-primary mr-2\" type=\"submit\"><i
                                class=\"fa fa-search \"></i></button>
                        </form>
                    </article>  
                    {# {{ dump(apprenants) }} #}
                    <table class=\"table table-hover\">                        
                        <thead class=\"\">
                            <tr >
                                <th scope=\"col\" style=\"width: 15%;\">Apprenant</th>
                                {% for postFormation in postFormations %}
                                <th scope=\"col\" style=\"width: 10%;\">{{postFormation.periode}}</th>
                                
                                {% endfor %}                           
                                {# {{ dump(apprenants[0].situationApprenantPeriodes[0]) }}     #}
                                
                            </tr>
                        </thead>
                        
                        <tbody> 
                            {% for apprenant in apprenants %}
                            <tr>
                                <td>{{ apprenant.Fullname }}</td>
                                
                                {% for key,postFormation in postFormations %}
                                <td>
                                    {% for situationApprenantPeriodes in apprenant.situationApprenantPeriodes %}
                                    {# {{situationApprenantPeriodes.situation.id}}  #}
                                    
                                    {% if situationApprenantPeriodes.periode.id == postFormation.id %}
                                    {{situationApprenantPeriodes.situation.situation}}
                                    
                                    {% endif %}
                                    {% endfor %}
                                    
                                </td>
                                
                                {% endfor %}
                                
                            </tr>                            
                            {% endfor %}
                            
                            
                        </tbody>
                        
                        
                    </table>
                </div>             
                </section>
                
                <section class=\"tauxRetour\">
                              
                    <h4 class=\"titre\">Taux de retour à l'emploi par formation</h4>
                    <article class=\"groupeA\">
                      <div class=\"A\">
                          <div class=\"cercleA\"></div>
                          <div class=\"triangleA\"></div>
                      </div>
                      <div class=\"C\">
                          <div class=\"cercleC\"></div>
                          <div class=\"triangleC\"></div>
                      </div>
                  </article>
                    
                    <table class=\"barreEvolution\">
                        <tr>
                          <td class=\"type\">Formation</td>
                          <td class=\"trois\">3 mois</td>
                          <td class=\"six\">6 mois</td>
                          <td class=\"neuf\">9 mois</td>
                          <td class=\"douze\">12 mois</td>
                      </tr>
                  </table>
                  <article class=\"groupeB\">
                      <div class=\"B\">
                          <div class=\"triangleB\"></div>
                          <div class=\"cercleB\"></div>
                      </div>
                      <div class=\"D\">
                          <div class=\"triangleD\"></div>
                          <div class=\"cercleD\"></div>
                      </div>
                  </article>
                </section>       
            </div>
        </div>
    </div>
            


{% endif %} 

<!-- pagination -->
<article class=\"paginer\"> 
    {{knp_pagination_render(apprenants)}}
    
</article>
{% endblock %}

{% block javascripts %}
    <script src=\"{{asset('assets/js/suiviPostFormation.js')}}\">       
              
    </script>
    
{% endblock %}", "suivi_post_formation/index.html.twig", "/var/www/html/fabriqueAdmin/templates/suivi_post_formation/index.html.twig");
    }
}
