<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_6245fc4a5ea53039acf403b43c2681c498d4b2ee8901e4ab5aa74eda23a06669 extends Twig_Template
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
        $__internal_156e7dfdb6deff33e2b9d97f9812aba1eceb4709f5dd836858b3afe42827283b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_156e7dfdb6deff33e2b9d97f9812aba1eceb4709f5dd836858b3afe42827283b->enter($__internal_156e7dfdb6deff33e2b9d97f9812aba1eceb4709f5dd836858b3afe42827283b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_156e7dfdb6deff33e2b9d97f9812aba1eceb4709f5dd836858b3afe42827283b->leave($__internal_156e7dfdb6deff33e2b9d97f9812aba1eceb4709f5dd836858b3afe42827283b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
";
    }
}
