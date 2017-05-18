<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_17124419cad85312d76c2f18c1c8497aeea0c4585cd4d96187bd49c2e63ae7bb extends Twig_Template
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
        $__internal_34e0b21cd15e0da8e9d9fdbd67fc6d4106e2477ddd4c113b2ffddde6fe68e4f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34e0b21cd15e0da8e9d9fdbd67fc6d4106e2477ddd4c113b2ffddde6fe68e4f2->enter($__internal_34e0b21cd15e0da8e9d9fdbd67fc6d4106e2477ddd4c113b2ffddde6fe68e4f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_34e0b21cd15e0da8e9d9fdbd67fc6d4106e2477ddd4c113b2ffddde6fe68e4f2->leave($__internal_34e0b21cd15e0da8e9d9fdbd67fc6d4106e2477ddd4c113b2ffddde6fe68e4f2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
