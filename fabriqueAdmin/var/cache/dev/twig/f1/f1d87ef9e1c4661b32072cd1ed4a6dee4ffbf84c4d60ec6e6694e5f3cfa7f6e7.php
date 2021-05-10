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
class __TwigTemplate_0c44f8f0253c21902dc6d2fe990f352c3a17930ecd4f956f9149dc0f99f9ab12 extends Template
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
            <div class=\"col-xl-10 col-lg-9 col-md-8 ml-auto mb-5 mt-5\">
                ";
            // line 14
            $this->loadTemplate("editor/promotion/_nav_promotion.html.twig", "suivi_post_formation/index.html.twig", 14)->display(twig_array_merge($context, ["p" => 1]));
            // line 15
            echo "                ";
            // line 16
            echo "                <section>
                <div class=\"styled\">
                    <form method=\"POST\">
                        <select name=\"formation\" id=\"selectFormations\">
                            <option value=\"0\">-----------</option>  
                            ";
            // line 22
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["formations"]) || array_key_exists("formations", $context) ? $context["formations"] : (function () { throw new RuntimeError('Variable "formations" does not exist.', 22, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
                // line 23
                echo "                                <option value=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 23), "html", null, true);
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "intitule", [], "any", false, false, false, 23), "html", null, true);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "                            ....              
                        </select>
                        
                        <select name=\"promotions\" id=\"selectPromotions\"></select>

                        <input class=\"filter\" href=\"\" type=\"submit\" value=\"Filtrer\"/>
                        ";
            // line 31
            echo "                       
                        
                    </form>  
                    
                    
                </div> 
                
                <div class=\"my-5\">
                    ";
            // line 40
            echo "                    ";
            $this->loadTemplate("template_parts/_flash_message.html.twig", "suivi_post_formation/index.html.twig", 40)->display($context);
            // line 41
            echo "                    ";
            // line 42
            echo "                    ";
            // line 43
            echo "                    <table class=\"table table-hover\">
                        
                        <thead class=\"\">
                            <tr >
                                <th scope=\"col\" style=\"width: 15%;\">Apprenant</th>
                                ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["postFormations"]) || array_key_exists("postFormations", $context) ? $context["postFormations"] : (function () { throw new RuntimeError('Variable "postFormations" does not exist.', 48, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["postFormation"]) {
                // line 49
                echo "                                <th scope=\"col\" style=\"width: 10%;\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["postFormation"], "periode", [], "any", false, false, false, 49), "html", null, true);
                echo "</th>
                                
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['postFormation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                           
                                ";
            // line 53
            echo "                                
                            </tr>
                        </thead>
                        
                        <tbody> 
                            ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["apprenants"]) || array_key_exists("apprenants", $context) ? $context["apprenants"] : (function () { throw new RuntimeError('Variable "apprenants" does not exist.', 58, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["apprenant"]) {
                // line 59
                echo "                            <tr>
                                <td>";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["apprenant"], "Fullname", [], "any", false, false, false, 60), "html", null, true);
                echo "</td>
                                
                                ";
                // line 62
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["postFormations"]) || array_key_exists("postFormations", $context) ? $context["postFormations"] : (function () { throw new RuntimeError('Variable "postFormations" does not exist.', 62, $this->source); })()));
                foreach ($context['_seq'] as $context["key"] => $context["postFormation"]) {
                    // line 63
                    echo "                                <td>
                                    ";
                    // line 64
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["apprenant"], "situationApprenantPeriodes", [], "any", false, false, false, 64));
                    foreach ($context['_seq'] as $context["_key"] => $context["situationApprenantPeriodes"]) {
                        // line 65
                        echo "                                    ";
                        // line 66
                        echo "                                    
                                    ";
                        // line 67
                        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["situationApprenantPeriodes"], "periode", [], "any", false, false, false, 67), "id", [], "any", false, false, false, 67), twig_get_attribute($this->env, $this->source, $context["postFormation"], "id", [], "any", false, false, false, 67))) {
                            // line 68
                            echo "                                    ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["situationApprenantPeriodes"], "situation", [], "any", false, false, false, 68), "situation", [], "any", false, false, false, 68), "html", null, true);
                            echo "
                                    
                                    ";
                        }
                        // line 71
                        echo "                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['situationApprenantPeriodes'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 72
                    echo "                                    
                                </td>
                                
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['postFormation'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 76
                echo "                                
                            </tr>                            
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['apprenant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "                        </tbody>
                        
                        <!-- formulaire de recherche -->
                        <article class=\"chercher\">
                            <form action=\"";
            // line 83
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editor_apprenant_chercher");
            echo "\" class=\"  ml-auto w-50 bg-info\">
                                <input class=\"float-right form-group mr-2 \" placeholder=\"chercher\" type=\"text\" name=\"chercher_apprenant\">
                                <button class=\" badge badge-primary mr-2\" type=\"submit\"><i
                                    class=\"fa fa-search \"></i></button>
                                </form>
                            </article>  
                        </div>
                    </div>
                </div>             
                
            </div>
        </div>
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
         
<!-- pagination -->


";
        }
        // line 136
        echo " 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 139
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 140
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
        return array (  327 => 140,  317 => 139,  306 => 136,  249 => 83,  243 => 79,  235 => 76,  226 => 72,  220 => 71,  213 => 68,  211 => 67,  208 => 66,  206 => 65,  202 => 64,  199 => 63,  195 => 62,  190 => 60,  187 => 59,  183 => 58,  176 => 53,  173 => 51,  163 => 49,  159 => 48,  152 => 43,  150 => 42,  148 => 41,  145 => 40,  135 => 31,  127 => 25,  116 => 23,  111 => 22,  104 => 16,  102 => 15,  100 => 14,  91 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Suivi Post-Formation{% endblock %}

{% block body %}
{% if app.user %}



    <div class=\"container-fluid\">
        
        <div class=\"row\">
            <div class=\"col-xl-10 col-lg-9 col-md-8 ml-auto mb-5 mt-5\">
                {% include \"editor/promotion/_nav_promotion.html.twig\" with {'p':1} %}
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
                        
                        <!-- formulaire de recherche -->
                        <article class=\"chercher\">
                            <form action=\"{{ path('editor_apprenant_chercher')}}\" class=\"  ml-auto w-50 bg-info\">
                                <input class=\"float-right form-group mr-2 \" placeholder=\"chercher\" type=\"text\" name=\"chercher_apprenant\">
                                <button class=\" badge badge-primary mr-2\" type=\"submit\"><i
                                    class=\"fa fa-search \"></i></button>
                                </form>
                            </article>  
                        </div>
                    </div>
                </div>             
                
            </div>
        </div>
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
         
<!-- pagination -->


{% endif %} 
{% endblock %}

{% block javascripts %}
    <script src=\"{{asset('assets/js/suiviPostFormation.js')}}\">       
              
    </script>
    
{% endblock %}", "suivi_post_formation/index.html.twig", "/var/www/html/fabriqueAdmin/templates/suivi_post_formation/index.html.twig");
    }
}
