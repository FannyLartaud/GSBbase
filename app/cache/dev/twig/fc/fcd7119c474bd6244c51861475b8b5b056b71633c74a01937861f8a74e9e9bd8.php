<?php

/* PgGsbFraisBundle:SaisirFrais:erreurs.html.twig */
class __TwigTemplate_8db5c019bfa6a3491582ec7210880ac1aae87bff401884274638f02b72b59415 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_81c085ba207399db7ea6d85ec09360dea1cd2da5f62ea5ea9d7b0bf2bcb38124 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81c085ba207399db7ea6d85ec09360dea1cd2da5f62ea5ea9d7b0bf2bcb38124->enter($__internal_81c085ba207399db7ea6d85ec09360dea1cd2da5f62ea5ea9d7b0bf2bcb38124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle:SaisirFrais:erreurs.html.twig"));

        // line 1
        echo "<div class =\"erreur\">
<ul>
 ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["leserreurs"]) ? $context["leserreurs"] : $this->getContext($context, "leserreurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["erreur"]) {
            // line 4
            echo "\t
      <li>";
            // line 5
            echo twig_escape_filter($this->env, $context["erreur"], "html", null, true);
            echo "</li>
\t
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['erreur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "</ul></div>
";
        
        $__internal_81c085ba207399db7ea6d85ec09360dea1cd2da5f62ea5ea9d7b0bf2bcb38124->leave($__internal_81c085ba207399db7ea6d85ec09360dea1cd2da5f62ea5ea9d7b0bf2bcb38124_prof);

    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle:SaisirFrais:erreurs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  33 => 5,  30 => 4,  26 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "<div class =\"erreur\">
<ul>
 {% for erreur in  leserreurs %}
\t
      <li>{{erreur}}</li>
\t
{%endfor%}
</ul></div>
";
    }
}
