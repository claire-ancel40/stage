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

/* editor/retard_absence/absence_edit.html.twig */
class __TwigTemplate_85768d6d0603cc88a6b0d1689ed2b7dc765bc874c262233edd826c005dc734ef extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "editor/retard_absence/absence_edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Modifier un absence";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 6)) {
            // line 7
            echo "

";
            // line 10
            echo "<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-xl-10 col-lg-9 col-md-8 ml-auto mb-5 mt-5\">
            ";
            // line 13
            $this->loadTemplate("editor/apprenant/_nav_apprenant.html.twig", "editor/retard_absence/absence_edit.html.twig", 13)->display(twig_array_merge($context, ["p" => 3]));
            // line 14
            echo "            
            
            <div class=\"my-5\">
                
                <h4 class=\"btn btn-info btn-sm\">Modifier un absence</h4>
                ";
            // line 19
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
            echo "
                ";
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            echo "
                <button class=\"btn btn-outline-danger d-block ml-auto\">Enregistrer</button>
                ";
            // line 22
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
            echo "

            </div>
            ";
            // line 26
            echo "
        </div>
    </div>
</div>
";
        }
    }

    // line 33
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "
<script>
    let \$token = \$('#absence__token')
    let \$absence_promotion = \$('#absence_promotion')
    let \$absence_dateDebut = \$('#absence_dateDebut')
    let \$absence_dateFin = \$('#absence_dateFin')

    \$absence_promotion.change(function () {
        let \$form = \$(this).closest('form')
        let data = {}
        data[\$token.attr('name')] = \$token.val()
        data[\$absence_promotion.attr('name')] = \$absence_promotion.val()
        data[\$absence_dateDebut.attr('name')] = \$absence_dateDebut.val()
        data[\$absence_dateFin.attr('name')] = \$absence_dateFin.val()



        \$.post(\$form.attr('action'), data).then(function (data) {
            \$('#absence_apprenant').replaceWith(
                \$(data).find('#absence_apprenant')
            )
        })
    })

</script>

";
    }

    public function getTemplateName()
    {
        return "editor/retard_absence/absence_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 34,  103 => 33,  94 => 26,  88 => 22,  83 => 20,  79 => 19,  72 => 14,  70 => 13,  65 => 10,  61 => 7,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "editor/retard_absence/absence_edit.html.twig", "/var/www/html/FabriqueAdmin/templates/editor/retard_absence/absence_edit.html.twig");
    }
}
