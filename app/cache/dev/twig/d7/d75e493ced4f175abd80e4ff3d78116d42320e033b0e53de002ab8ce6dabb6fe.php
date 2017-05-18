<?php

/* PgGsbFraisBundle:ListeFrais:listemois.html.twig */
class __TwigTemplate_1f11e4abbbaab04cdf1b1e3f3ab588ff6c336c9e9931ce2e89614c3c4b8dd9db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PgGsbFraisBundle::accueil.html.twig", "PgGsbFraisBundle:ListeFrais:listemois.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'bloc1' => array($this, 'block_bloc1'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PgGsbFraisBundle::accueil.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e4af61f265e993e97378d1ad5b998142ba4fc9b39d06a10a93afaa815397b393 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4af61f265e993e97378d1ad5b998142ba4fc9b39d06a10a93afaa815397b393->enter($__internal_e4af61f265e993e97378d1ad5b998142ba4fc9b39d06a10a93afaa815397b393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle:ListeFrais:listemois.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4af61f265e993e97378d1ad5b998142ba4fc9b39d06a10a93afaa815397b393->leave($__internal_e4af61f265e993e97378d1ad5b998142ba4fc9b39d06a10a93afaa815397b393_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_306b47d458960609afebdb4c5c439e8af53e26bd4ec0678564a8a351ee95d966 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_306b47d458960609afebdb4c5c439e8af53e26bd4ec0678564a8a351ee95d966->enter($__internal_306b47d458960609afebdb4c5c439e8af53e26bd4ec0678564a8a351ee95d966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        $this->displayBlock('bloc1', $context, $blocks);
        
        $__internal_306b47d458960609afebdb4c5c439e8af53e26bd4ec0678564a8a351ee95d966->leave($__internal_306b47d458960609afebdb4c5c439e8af53e26bd4ec0678564a8a351ee95d966_prof);

    }

    public function block_bloc1($context, array $blocks = array())
    {
        $__internal_68ad786f1a401e9f1552f58d4d5eb93fbd04ccc4c32cd968b501a472be838e3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68ad786f1a401e9f1552f58d4d5eb93fbd04ccc4c32cd968b501a472be838e3b->enter($__internal_68ad786f1a401e9f1552f58d4d5eb93fbd04ccc4c32cd968b501a472be838e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bloc1"));

        // line 4
        echo "<div id=\"contenu\">
      <h2>Mes fiches de frais</h2>
      <h3>Mois à sélectionner : </h3>
      <form  method=\"post\">
      <div class=\"corpsForm\">
      <p>
\t<label for=\"lstMois\" accesskey=\"n\">Mois : </label>
        <select id=\"lstMois\" name=\"lstMois\">
             ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesmois"]) ? $context["lesmois"] : $this->getContext($context, "lesmois")));
        foreach ($context['_seq'] as $context["_key"] => $context["unMois"]) {
            // line 13
            echo "                  ";
            $context["mois"] = $this->getAttribute($context["unMois"], "mois", array());
            // line 14
            echo "                  ";
            $context["numAnnee"] = $this->getAttribute($context["unMois"], "numAnnee", array());
            // line 15
            echo "                  ";
            $context["numMois"] = $this->getAttribute($context["unMois"], "numMois", array());
            // line 16
            echo "                  ";
            if (((isset($context["mois"]) ? $context["mois"] : $this->getContext($context, "mois")) == (isset($context["lemois"]) ? $context["lemois"] : $this->getContext($context, "lemois")))) {
                // line 17
                echo "                        <option selected value=\"";
                echo twig_escape_filter($this->env, (isset($context["mois"]) ? $context["mois"] : $this->getContext($context, "mois")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["numMois"]) ? $context["numMois"] : $this->getContext($context, "numMois")), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["numAnnee"]) ? $context["numAnnee"] : $this->getContext($context, "numAnnee")), "html", null, true);
                echo " </option>
                  ";
            } else {
                // line 19
                echo "                        <option value=\"";
                echo twig_escape_filter($this->env, (isset($context["mois"]) ? $context["mois"] : $this->getContext($context, "mois")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["numMois"]) ? $context["numMois"] : $this->getContext($context, "numMois")), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, (isset($context["numAnnee"]) ? $context["numAnnee"] : $this->getContext($context, "numAnnee")), "html", null, true);
                echo " </option>
                  ";
            }
            // line 21
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unMois'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "  
       </select>
      </p>
      </div>
      <div class=\"piedForm\">
      <p>
            <input id=\"ok\" type=\"submit\" value=\"Valider\" size=\"20\" />
            <input id=\"annuler\" type=\"reset\" value=\"Effacer\" size=\"20\" />
      </p> 
      </div>
        </form>
";
        
        $__internal_68ad786f1a401e9f1552f58d4d5eb93fbd04ccc4c32cd968b501a472be838e3b->leave($__internal_68ad786f1a401e9f1552f58d4d5eb93fbd04ccc4c32cd968b501a472be838e3b_prof);

    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle:ListeFrais:listemois.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 21,  89 => 19,  79 => 17,  76 => 16,  73 => 15,  70 => 14,  67 => 13,  63 => 12,  53 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"PgGsbFraisBundle::accueil.html.twig\" %}
{% block body %}
{% block bloc1 %}
<div id=\"contenu\">
      <h2>Mes fiches de frais</h2>
      <h3>Mois à sélectionner : </h3>
      <form  method=\"post\">
      <div class=\"corpsForm\">
      <p>
\t<label for=\"lstMois\" accesskey=\"n\">Mois : </label>
        <select id=\"lstMois\" name=\"lstMois\">
             {% for unMois in  lesmois %}
                  {% set mois = unMois.mois %}
                  {% set numAnnee =  unMois.numAnnee %}
                  {% set numMois =  unMois.numMois%}
                  {% if mois == lemois %}
                        <option selected value=\"{{ mois }}\">{{ numMois }}/{{ numAnnee }} </option>
                  {% else %}
                        <option value=\"{{ mois }}\">{{ numMois }}/{{ numAnnee }} </option>
                  {% endif %}
            {% endfor %}  
       </select>
      </p>
      </div>
      <div class=\"piedForm\">
      <p>
            <input id=\"ok\" type=\"submit\" value=\"Valider\" size=\"20\" />
            <input id=\"annuler\" type=\"reset\" value=\"Effacer\" size=\"20\" />
      </p> 
      </div>
        </form>
{% endblock %}
{% endblock %}";
    }
}
