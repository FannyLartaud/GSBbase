<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_c49764c4095cb35c1d2faf47bd67ad81b81ad4d90c8e0f5bd6b1a25ccadbb01c extends Twig_Template
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
        $__internal_37dca9c7a83c27e2982acd0ee9333eccba4d24f4075bb18416714ba3f760faf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37dca9c7a83c27e2982acd0ee9333eccba4d24f4075bb18416714ba3f760faf2->enter($__internal_37dca9c7a83c27e2982acd0ee9333eccba4d24f4075bb18416714ba3f760faf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_37dca9c7a83c27e2982acd0ee9333eccba4d24f4075bb18416714ba3f760faf2->leave($__internal_37dca9c7a83c27e2982acd0ee9333eccba4d24f4075bb18416714ba3f760faf2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
";
    }
}
