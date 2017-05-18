<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_8cd29587e0d0ed907ac3c062a61833fb38bd8296d2ed9c2c1499505f9a8500cf extends Twig_Template
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
        $__internal_d4e937b4f8b17aabc8379beff054588cfd9b31fcc178e46330b2d32896620a4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4e937b4f8b17aabc8379beff054588cfd9b31fcc178e46330b2d32896620a4c->enter($__internal_d4e937b4f8b17aabc8379beff054588cfd9b31fcc178e46330b2d32896620a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_d4e937b4f8b17aabc8379beff054588cfd9b31fcc178e46330b2d32896620a4c->leave($__internal_d4e937b4f8b17aabc8379beff054588cfd9b31fcc178e46330b2d32896620a4c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
