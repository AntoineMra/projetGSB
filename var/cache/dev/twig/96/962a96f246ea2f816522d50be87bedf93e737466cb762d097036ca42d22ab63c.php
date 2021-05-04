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

/* home/connection.html.twig */
class __TwigTemplate_b9ff17d8bff6e444026cd521496dae5375f58cc8a8cb76851a42fa3ba9eeb666 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/connection.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/connection.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>Connexion GSB</title>
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\">
        <link rel=\"icon\" href=\"https://7e150783-a-62cb3a1a-s-sites.googlegroups.com/site/portfoliospielmann/formation/gsb---application-frais-comptables/gsb.png?attachauth=ANoY7cq7o2Y4QlFCl2wSjgpT_9qWGizRpqNRQ_HArXpporN6WuY6ZAkitZUP5NZCwnHjDTBD9XLZ8n55WuJ03FXkMc7_dn14SoVtNeekFM5KIVpgRoQWSCtdcf9cT2T7FHrA9J03l0VQJOWmZC9Uhv4CuTQrS2uE8MfnjRkkB4Y5jY2iKDz8SA_dSuKxylKUCAcIq9grTIbNd1EO_QrT9OT6xFvCrnA0qdsm6nFCO38GxJIC-854tUBDhXpQz0V0CGW3FZrC2foddMlQYWoqYnd8-uCSC1JqGA%3D%3D&attredirects=0\" />
    </head>
    
";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>
    

<div class=\"example-wrapper\">
    <h1>Bienvenue sur l'utilitaire GSB</h1>
    <div class=\"sidenav\">
         <div class=\"login-main-text\">
            <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://baptiste-bisson.com/wp-content/uploads/2016/04/Logo-gsb.png"), "html", null, true);
        echo "\" alt=\"Gsb_logo\">
         </div>
      </div>
      <div class=\"main\">
         <div class=\"col-md-6 col-sm-12\">
            <div class=\"login-form\">
               <form>
                  <div class=\"form-group\">
                     <label>Identifiant</label>
                     <input type=\"text\" class=\"form-control\" placeholder=\"Identifiant\">
                  </div>
                  <div class=\"form-group\">
                     <label>Mot de passe</label>
                     <input type=\"password\" class=\"form-control\" placeholder=\"Mot de Passe\">
                  </div>
                  <a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("menu", ["id" => 1]);
        echo "\" class=\"btn btn-primary\">Se Connecter</a>
               </form>
            </div>
         </div>
      </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/connection.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  104 => 36,  86 => 21,  74 => 11,  55 => 10,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>Connexion GSB</title>
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\">
        <link rel=\"icon\" href=\"https://7e150783-a-62cb3a1a-s-sites.googlegroups.com/site/portfoliospielmann/formation/gsb---application-frais-comptables/gsb.png?attachauth=ANoY7cq7o2Y4QlFCl2wSjgpT_9qWGizRpqNRQ_HArXpporN6WuY6ZAkitZUP5NZCwnHjDTBD9XLZ8n55WuJ03FXkMc7_dn14SoVtNeekFM5KIVpgRoQWSCtdcf9cT2T7FHrA9J03l0VQJOWmZC9Uhv4CuTQrS2uE8MfnjRkkB4Y5jY2iKDz8SA_dSuKxylKUCAcIq9grTIbNd1EO_QrT9OT6xFvCrnA0qdsm6nFCO38GxJIC-854tUBDhXpQz0V0CGW3FZrC2foddMlQYWoqYnd8-uCSC1JqGA%3D%3D&attredirects=0\" />
    </head>
    
{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>
    

<div class=\"example-wrapper\">
    <h1>Bienvenue sur l'utilitaire GSB</h1>
    <div class=\"sidenav\">
         <div class=\"login-main-text\">
            <img src=\"{{asset ('https://baptiste-bisson.com/wp-content/uploads/2016/04/Logo-gsb.png')}}\" alt=\"Gsb_logo\">
         </div>
      </div>
      <div class=\"main\">
         <div class=\"col-md-6 col-sm-12\">
            <div class=\"login-form\">
               <form>
                  <div class=\"form-group\">
                     <label>Identifiant</label>
                     <input type=\"text\" class=\"form-control\" placeholder=\"Identifiant\">
                  </div>
                  <div class=\"form-group\">
                     <label>Mot de passe</label>
                     <input type=\"password\" class=\"form-control\" placeholder=\"Mot de Passe\">
                  </div>
                  <a href=\"{{ path('menu', {'id': 1}) }}\" class=\"btn btn-primary\">Se Connecter</a>
               </form>
            </div>
         </div>
      </div>
{% endblock %}
", "home/connection.html.twig", "D:\\BTS SIO2\\projet\\projetGSB\\templates\\home\\connection.html.twig");
    }
}
