<?php

/* PgGsbFraisBundle:ListeFrais:listefraisforfait.html.twig */
class __TwigTemplate_8305d484693c5c8152c3cd8d23d4611464f1f5a222d2a1e2b8f85bdd977e95e6 extends Twig_Template
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
        $__internal_399d5ab61cb9c173d06524932ed85baadf1e500f755f04d603e2dd8df86df194 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_399d5ab61cb9c173d06524932ed85baadf1e500f755f04d603e2dd8df86df194->enter($__internal_399d5ab61cb9c173d06524932ed85baadf1e500f755f04d603e2dd8df86df194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle:ListeFrais:listefraisforfait.html.twig"));

        // line 1
        echo "<h3>Fiche de frais du mois ";
        echo twig_escape_filter($this->env, (isset($context["nummois"]) ? $context["nummois"] : $this->getContext($context, "nummois")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["numannee"]) ? $context["numannee"] : $this->getContext($context, "numannee")), "html", null, true);
        echo " : 
    </h3>
    <div class=\"encadre\">
    <p>
        Etat : ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["libetat"]) ? $context["libetat"] : $this->getContext($context, "libetat")), "html", null, true);
        echo " depuis le ";
        echo twig_escape_filter($this->env, (isset($context["datemodif"]) ? $context["datemodif"] : $this->getContext($context, "datemodif")), "html", null, true);
        echo " <br> Montant validé : ";
        echo twig_escape_filter($this->env, (isset($context["montantvalide"]) ? $context["montantvalide"] : $this->getContext($context, "montantvalide")), "html", null, true);
        echo "
   </p>
  \t<table class=\"listeLegere\">
  \t   <caption>Eléments forfaitisés </caption>
        <tr>
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesfraisforfait"]) ? $context["lesfraisforfait"] : $this->getContext($context, "lesfraisforfait")));
        foreach ($context['_seq'] as $context["_key"] => $context["unfrais"]) {
            // line 11
            echo "          ";
            $context["libelle"] = $this->getAttribute($context["unfrais"], "libelle", array());
            // line 12
            echo "\t\t<th> ";
            echo twig_escape_filter($this->env, (isset($context["libelle"]) ? $context["libelle"] : $this->getContext($context, "libelle")), "html", null, true);
            echo "</th>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unfrais'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "  
\t</tr>
        <tr>
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lesfraisforfait"]) ? $context["lesfraisforfait"] : $this->getContext($context, "lesfraisforfait")));
        foreach ($context['_seq'] as $context["_key"] => $context["unfrais"]) {
            // line 17
            echo "\t  ";
            $context["quantite"] = $this->getAttribute($context["unfrais"], "quantite", array());
            // line 18
            echo "\t       <td class=\"qteForfait\">";
            echo twig_escape_filter($this->env, (isset($context["quantite"]) ? $context["quantite"] : $this->getContext($context, "quantite")), "html", null, true);
            echo " </td>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unfrais'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "  
\t</tr>
    </table>
   </div>
 
";
        
        $__internal_399d5ab61cb9c173d06524932ed85baadf1e500f755f04d603e2dd8df86df194->leave($__internal_399d5ab61cb9c173d06524932ed85baadf1e500f755f04d603e2dd8df86df194_prof);

    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle:ListeFrais:listefraisforfait.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 19,  72 => 18,  69 => 17,  65 => 16,  60 => 13,  51 => 12,  48 => 11,  44 => 10,  32 => 5,  22 => 1,);
    }

    public function getSource()
    {
        return "<h3>Fiche de frais du mois {{nummois}}-{{numannee}} : 
    </h3>
    <div class=\"encadre\">
    <p>
        Etat : {{libetat}} depuis le {{datemodif}} <br> Montant validé : {{montantvalide}}
   </p>
  \t<table class=\"listeLegere\">
  \t   <caption>Eléments forfaitisés </caption>
        <tr>
    {% for unfrais in  lesfraisforfait %}
          {%   set libelle = unfrais.libelle %}
\t\t<th> {{libelle}}</th>
    {% endfor %}  
\t</tr>
        <tr>
    {% for unfrais in  lesfraisforfait %}
\t  {%   set quantite = unfrais.quantite %}
\t       <td class=\"qteForfait\">{{quantite}} </td>
    {% endfor %}  
\t</tr>
    </table>
   </div>
 
";
    }
}
