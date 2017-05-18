<?php

/* PgGsbFraisBundle:Home:connexion.html.twig */
class __TwigTemplate_43db1bdd48a803d15cfc4bc9a07cff8e9e72ded51299b570f71a35907dcafed2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PgGsbFraisBundle::layout.html.twig", "PgGsbFraisBundle:Home:connexion.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'bloc1' => array($this, 'block_bloc1'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PgGsbFraisBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a8b755f74f3bae24c851593461bbac75664dcd58e34ba67d417f83c96fd451dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8b755f74f3bae24c851593461bbac75664dcd58e34ba67d417f83c96fd451dd->enter($__internal_a8b755f74f3bae24c851593461bbac75664dcd58e34ba67d417f83c96fd451dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle:Home:connexion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8b755f74f3bae24c851593461bbac75664dcd58e34ba67d417f83c96fd451dd->leave($__internal_a8b755f74f3bae24c851593461bbac75664dcd58e34ba67d417f83c96fd451dd_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_401b581e64970e06ecb03f1416a6805a75767ddafa372e648acc7c2478a81cdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_401b581e64970e06ecb03f1416a6805a75767ddafa372e648acc7c2478a81cdf->enter($__internal_401b581e64970e06ecb03f1416a6805a75767ddafa372e648acc7c2478a81cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo " ";
        $this->displayBlock('bloc1', $context, $blocks);
        // line 24
        echo "    
    ";
        
        $__internal_401b581e64970e06ecb03f1416a6805a75767ddafa372e648acc7c2478a81cdf->leave($__internal_401b581e64970e06ecb03f1416a6805a75767ddafa372e648acc7c2478a81cdf_prof);

    }

    // line 3
    public function block_bloc1($context, array $blocks = array())
    {
        $__internal_63a65ff56bacaed185720bf4f05bd24a2edfdea42040ffa1b8c17cb744dc7862 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63a65ff56bacaed185720bf4f05bd24a2edfdea42040ffa1b8c17cb744dc7862->enter($__internal_63a65ff56bacaed185720bf4f05bd24a2edfdea42040ffa1b8c17cb744dc7862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bloc1"));

        echo " 
 <div id=\"contenu\">
      <h2>Identification utilisateur</h2>
      ";
        // line 6
        if (array_key_exists("message", $context)) {
            // line 7
            echo "            <div class =\"erreur\">
            <ul>";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</ul></div>
      ";
        }
        // line 10
        echo "<form method=\"POST\" action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pg_gsb_frais_validerconnexion");
        echo "\">
        <p>
          <label for=\"nom\">Login*</label>
           <input id=\"login\" type=\"text\" name=\"login\"  size=\"30\" maxlength=\"45\">
        </p>
\t<p>
            <label for=\"mdp\">Mot de passe*</label>
            <input id=\"mdp\"  type=\"password\"  name=\"mdp\" size=\"30\" maxlength=\"45\">
        </p>
         <input type=\"submit\" value=\"Valider\" name=\"valider\">
         <input type=\"reset\" value=\"Annuler\" name=\"annuler\"> 
      </p>
</form>
</div>
    ";
        
        $__internal_63a65ff56bacaed185720bf4f05bd24a2edfdea42040ffa1b8c17cb744dc7862->leave($__internal_63a65ff56bacaed185720bf4f05bd24a2edfdea42040ffa1b8c17cb744dc7862_prof);

    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle:Home:connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 10,  67 => 8,  64 => 7,  62 => 6,  52 => 3,  44 => 24,  41 => 3,  35 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"PgGsbFraisBundle::layout.html.twig\" %}
{% block body %}
 {% block bloc1 %} 
 <div id=\"contenu\">
      <h2>Identification utilisateur</h2>
      {%if(message is defined )%}
            <div class =\"erreur\">
            <ul>{{message}}</ul></div>
      {%endif%}
<form method=\"POST\" action=\"{{path('pg_gsb_frais_validerconnexion')}}\">
        <p>
          <label for=\"nom\">Login*</label>
           <input id=\"login\" type=\"text\" name=\"login\"  size=\"30\" maxlength=\"45\">
        </p>
\t<p>
            <label for=\"mdp\">Mot de passe*</label>
            <input id=\"mdp\"  type=\"password\"  name=\"mdp\" size=\"30\" maxlength=\"45\">
        </p>
         <input type=\"submit\" value=\"Valider\" name=\"valider\">
         <input type=\"reset\" value=\"Annuler\" name=\"annuler\"> 
      </p>
</form>
</div>
    {% endblock %}    
    {% endblock%}
     ";
    }
}
