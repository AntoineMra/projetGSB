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

/* home/menu.html.twig */
class __TwigTemplate_281f0f1f35bf074c2ae56e0649403e6a34e3a885471c1bebdf1348a9a59e0240 extends \Twig\Template
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
            'javascript' => [$this, 'block_javascript'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/menu.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/menu.html.twig", 1);
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

        echo "Accueil";
        
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
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>
    

<div class=\"example-wrapper\">
<h1>Remplir la fiche de frais de ";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["mois"]) || array_key_exists("mois", $context) ? $context["mois"] : (function () { throw new RuntimeError('Variable "mois" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "</h1>
   <div class=\"card text-center\">
      <div class=\"card-header\">
       
      </div>
   <div class=\"card-body\">
      <h5 class=\"card-title\">";
        // line 19
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "m/Y"), "html", null, true);
        echo "</h5>
      <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("creaFiche", ["id_Vis" => 1]);
        echo "\" id=\"creaFiche\" class=\"btn btn-primary\">Créer une nouvelle fiche</a>
      <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifFiche", ["id_Vis" => 1, "id_Fiche" => twig_get_attribute($this->env, $this->source, (isset($context["lastFiche"]) || array_key_exists("lastFiche", $context) ? $context["lastFiche"] : (function () { throw new RuntimeError('Variable "lastFiche" does not exist.', 21, $this->source); })()), "idFiche", [], "any", false, false, false, 21)]), "html", null, true);
        echo "\" id=\"modifFiche\" class=\"btn btn-primary\">Remplir de nouveaux frais</a>
   </div>
   <div class=\"card-footer text-muted\">

   </div>
</div>
    <h1>Voici la liste de vos fiche de frais</h1>
      <div class=\"row\">
      ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesFiches"]) || array_key_exists("lesFiches", $context) ? $context["lesFiches"] : (function () { throw new RuntimeError('Variable "lesFiches" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["fiche"]) {
            // line 30
            echo "        <div class=\"col-md-12\">
          <div class=\"card mb-12\" style=\"max-width: 540px;\">
            <div class=\"card-body\">
              <h4>Voici la fiche du ";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fiche"], "mois", [], "any", false, false, false, 33), "m/Y"), "html", null, true);
            echo "</h4>
              <div class=\"row\">
              <a href=\"#\" class=\"btn btn-primary\">Consulter les anciennes fiches</a>
              </div>
            </div>
          </div>
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fiche'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "    </div>
      </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 44
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 45
        echo "  <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/menuFiche.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 45,  161 => 44,  149 => 41,  135 => 33,  130 => 30,  126 => 29,  115 => 21,  111 => 20,  107 => 19,  98 => 13,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil{% endblock %}
    
{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>
    

<div class=\"example-wrapper\">
<h1>Remplir la fiche de frais de {{mois}}</h1>
   <div class=\"card text-center\">
      <div class=\"card-header\">
       
      </div>
   <div class=\"card-body\">
      <h5 class=\"card-title\">{{ \"now\"|date(\"m/Y\") }}</h5>
      <a href=\"{{ path('creaFiche', {'id_Vis': 1})  }}\" id=\"creaFiche\" class=\"btn btn-primary\">Créer une nouvelle fiche</a>
      <a href=\"{{ path('modifFiche', {'id_Vis': 1 ,'id_Fiche': lastFiche.idFiche} ) }}\" id=\"modifFiche\" class=\"btn btn-primary\">Remplir de nouveaux frais</a>
   </div>
   <div class=\"card-footer text-muted\">

   </div>
</div>
    <h1>Voici la liste de vos fiche de frais</h1>
      <div class=\"row\">
      {% for fiche in lesFiches %}
        <div class=\"col-md-12\">
          <div class=\"card mb-12\" style=\"max-width: 540px;\">
            <div class=\"card-body\">
              <h4>Voici la fiche du {{fiche.mois|date('m/Y') }}</h4>
              <div class=\"row\">
              <a href=\"#\" class=\"btn btn-primary\">Consulter les anciennes fiches</a>
              </div>
            </div>
          </div>
        </div>
      {% endfor %}
    </div>
      </div>
{% endblock %}
{% block javascript %}
  <script type=\"text/javascript\" src=\"{{ asset('assets/menuFiche.js') }}\"></script>
{% endblock %}

", "home/menu.html.twig", "D:\\BTS SIO2\\projet\\projetGSB\\templates\\home\\menu.html.twig");
    }
}
