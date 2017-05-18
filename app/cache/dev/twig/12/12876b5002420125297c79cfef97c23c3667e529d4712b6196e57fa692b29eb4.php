<?php

/* PgGsbFraisBundle:Default:index.html.twig */
class __TwigTemplate_db893f8e868ffddd6b7e9b8f73c2b96d39be1167e821d72d9c778e7d11aa29f0 extends Twig_Template
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
        $__internal_b6136641b906d557095ba4e983497b5069f584eee060b420e3a0e73c5bdefbfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6136641b906d557095ba4e983497b5069f584eee060b420e3a0e73c5bdefbfc->enter($__internal_b6136641b906d557095ba4e983497b5069f584eee060b420e3a0e73c5bdefbfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_b6136641b906d557095ba4e983497b5069f584eee060b420e3a0e73c5bdefbfc->leave($__internal_b6136641b906d557095ba4e983497b5069f584eee060b420e3a0e73c5bdefbfc_prof);

    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle:Default:index.html.twig";
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
        return "Hello {{ name }}!
";
    }
}
