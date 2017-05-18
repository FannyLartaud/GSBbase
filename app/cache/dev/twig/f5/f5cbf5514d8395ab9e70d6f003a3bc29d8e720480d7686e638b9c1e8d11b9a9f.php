<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_024859b66a8fb4e05e9609b3dd67b07ebf36f41f25fab10acd33332fcf628e86 extends Twig_Template
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
        $__internal_f53bb4f97cd0761c9b47180795977ba515e1c517e34da033dec36c5014b579ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f53bb4f97cd0761c9b47180795977ba515e1c517e34da033dec36c5014b579ed->enter($__internal_f53bb4f97cd0761c9b47180795977ba515e1c517e34da033dec36c5014b579ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_f53bb4f97cd0761c9b47180795977ba515e1c517e34da033dec36c5014b579ed->leave($__internal_f53bb4f97cd0761c9b47180795977ba515e1c517e34da033dec36c5014b579ed_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/error.xml.twig' %}
";
    }
}
