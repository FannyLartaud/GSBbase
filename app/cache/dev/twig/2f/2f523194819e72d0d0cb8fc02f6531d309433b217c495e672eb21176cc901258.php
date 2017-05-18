<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_4e80811b7d288255a3df18f9558121dfd10ff91e2c5b4ac4eb269738d151f4c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_502fdd768cfab5b46b3bf55427fc01c45e6a1ec154cd62b57c571a945d2d2b94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_502fdd768cfab5b46b3bf55427fc01c45e6a1ec154cd62b57c571a945d2d2b94->enter($__internal_502fdd768cfab5b46b3bf55427fc01c45e6a1ec154cd62b57c571a945d2d2b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_502fdd768cfab5b46b3bf55427fc01c45e6a1ec154cd62b57c571a945d2d2b94->leave($__internal_502fdd768cfab5b46b3bf55427fc01c45e6a1ec154cd62b57c571a945d2d2b94_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0d889b15b2dde8fc1451533bc1fbdd0391e5656faba29a5f71c9d03fe77c36e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d889b15b2dde8fc1451533bc1fbdd0391e5656faba29a5f71c9d03fe77c36e4->enter($__internal_0d889b15b2dde8fc1451533bc1fbdd0391e5656faba29a5f71c9d03fe77c36e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0d889b15b2dde8fc1451533bc1fbdd0391e5656faba29a5f71c9d03fe77c36e4->leave($__internal_0d889b15b2dde8fc1451533bc1fbdd0391e5656faba29a5f71c9d03fe77c36e4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b6b3be1e56607d4476de69602afb859bc37a75484fe846810e2f64aa572cd98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b6b3be1e56607d4476de69602afb859bc37a75484fe846810e2f64aa572cd98->enter($__internal_1b6b3be1e56607d4476de69602afb859bc37a75484fe846810e2f64aa572cd98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_1b6b3be1e56607d4476de69602afb859bc37a75484fe846810e2f64aa572cd98->leave($__internal_1b6b3be1e56607d4476de69602afb859bc37a75484fe846810e2f64aa572cd98_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
";
    }
}
