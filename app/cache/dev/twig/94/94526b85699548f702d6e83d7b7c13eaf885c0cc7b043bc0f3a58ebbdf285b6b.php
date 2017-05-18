<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_fcea5fe6f03a557d9c2cb30b3f0ff1d56a33ebb6fc060d533de849127ff8ee22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_4e20eae1968d9ed3bb2ba0ee30682f6d34341e788353af59650cd69e17ca80cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e20eae1968d9ed3bb2ba0ee30682f6d34341e788353af59650cd69e17ca80cc->enter($__internal_4e20eae1968d9ed3bb2ba0ee30682f6d34341e788353af59650cd69e17ca80cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e20eae1968d9ed3bb2ba0ee30682f6d34341e788353af59650cd69e17ca80cc->leave($__internal_4e20eae1968d9ed3bb2ba0ee30682f6d34341e788353af59650cd69e17ca80cc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5099336de5fe201bf4d30ef863d1e76d32fba6d5ac5387cf5931255fc769e349 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5099336de5fe201bf4d30ef863d1e76d32fba6d5ac5387cf5931255fc769e349->enter($__internal_5099336de5fe201bf4d30ef863d1e76d32fba6d5ac5387cf5931255fc769e349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5099336de5fe201bf4d30ef863d1e76d32fba6d5ac5387cf5931255fc769e349->leave($__internal_5099336de5fe201bf4d30ef863d1e76d32fba6d5ac5387cf5931255fc769e349_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5772e2b149cf4da2f54a5ee7a4a9366b0f455158d8b166c956f6d410887ff625 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5772e2b149cf4da2f54a5ee7a4a9366b0f455158d8b166c956f6d410887ff625->enter($__internal_5772e2b149cf4da2f54a5ee7a4a9366b0f455158d8b166c956f6d410887ff625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5772e2b149cf4da2f54a5ee7a4a9366b0f455158d8b166c956f6d410887ff625->leave($__internal_5772e2b149cf4da2f54a5ee7a4a9366b0f455158d8b166c956f6d410887ff625_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_25b3490fa9db4f2c1ffc0d245d621e76845017bdde486366dbdb6d41db395b4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25b3490fa9db4f2c1ffc0d245d621e76845017bdde486366dbdb6d41db395b4f->enter($__internal_25b3490fa9db4f2c1ffc0d245d621e76845017bdde486366dbdb6d41db395b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_25b3490fa9db4f2c1ffc0d245d621e76845017bdde486366dbdb6d41db395b4f->leave($__internal_25b3490fa9db4f2c1ffc0d245d621e76845017bdde486366dbdb6d41db395b4f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
