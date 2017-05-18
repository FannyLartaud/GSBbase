<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_28dc84112f8210f3089c02756003f9f901fcdc67921f35a0b60d0614a94b7c4c extends Twig_Template
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
        $__internal_7f160ec6495cbd27c2cde3499713a4f6eb17ad1c5a457291d812006211ac387c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f160ec6495cbd27c2cde3499713a4f6eb17ad1c5a457291d812006211ac387c->enter($__internal_7f160ec6495cbd27c2cde3499713a4f6eb17ad1c5a457291d812006211ac387c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_7f160ec6495cbd27c2cde3499713a4f6eb17ad1c5a457291d812006211ac387c->leave($__internal_7f160ec6495cbd27c2cde3499713a4f6eb17ad1c5a457291d812006211ac387c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{{ status_code }} {{ status_text }}

*/
";
    }
}
