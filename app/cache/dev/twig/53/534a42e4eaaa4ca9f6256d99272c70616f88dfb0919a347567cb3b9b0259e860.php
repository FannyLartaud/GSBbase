<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_fbc30e6db5311be86ad67ce0c6b46ecc5cf15d32a415868e7d47eb9696812d36 extends Twig_Template
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
        $__internal_d3029c6ad3fe9f5b755c9d6d693f77c5c72f7d8830cc8f90be3533043c90c72e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3029c6ad3fe9f5b755c9d6d693f77c5c72f7d8830cc8f90be3533043c90c72e->enter($__internal_d3029c6ad3fe9f5b755c9d6d693f77c5c72f7d8830cc8f90be3533043c90c72e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_d3029c6ad3fe9f5b755c9d6d693f77c5c72f7d8830cc8f90be3533043c90c72e->leave($__internal_d3029c6ad3fe9f5b755c9d6d693f77c5c72f7d8830cc8f90be3533043c90c72e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
