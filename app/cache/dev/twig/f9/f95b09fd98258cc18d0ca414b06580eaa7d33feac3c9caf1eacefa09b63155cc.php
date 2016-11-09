<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1bd3d4e21492d43ada5250d7548e5d804a39949fff0422754861e23eeab07dbd extends Twig_Template
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
        $__internal_870e3fcbd9fd365f4b130a1fb531fa2e29c848cd69aab62e89b98c522813b7fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_870e3fcbd9fd365f4b130a1fb531fa2e29c848cd69aab62e89b98c522813b7fb->enter($__internal_870e3fcbd9fd365f4b130a1fb531fa2e29c848cd69aab62e89b98c522813b7fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_870e3fcbd9fd365f4b130a1fb531fa2e29c848cd69aab62e89b98c522813b7fb->leave($__internal_870e3fcbd9fd365f4b130a1fb531fa2e29c848cd69aab62e89b98c522813b7fb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_596b44471039ab58bab340e7febb5d31fd7b2442dd829af5f89901c66cae1ef4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_596b44471039ab58bab340e7febb5d31fd7b2442dd829af5f89901c66cae1ef4->enter($__internal_596b44471039ab58bab340e7febb5d31fd7b2442dd829af5f89901c66cae1ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_596b44471039ab58bab340e7febb5d31fd7b2442dd829af5f89901c66cae1ef4->leave($__internal_596b44471039ab58bab340e7febb5d31fd7b2442dd829af5f89901c66cae1ef4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3b67f55b2bc0026abbc6f25c6a089801c6527f24c0227aab2cbf74fb8df1169d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b67f55b2bc0026abbc6f25c6a089801c6527f24c0227aab2cbf74fb8df1169d->enter($__internal_3b67f55b2bc0026abbc6f25c6a089801c6527f24c0227aab2cbf74fb8df1169d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3b67f55b2bc0026abbc6f25c6a089801c6527f24c0227aab2cbf74fb8df1169d->leave($__internal_3b67f55b2bc0026abbc6f25c6a089801c6527f24c0227aab2cbf74fb8df1169d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ef056308ced44cf08153d9a083160a7af531778647515a75f2699f5b4f140e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ef056308ced44cf08153d9a083160a7af531778647515a75f2699f5b4f140e0->enter($__internal_6ef056308ced44cf08153d9a083160a7af531778647515a75f2699f5b4f140e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_6ef056308ced44cf08153d9a083160a7af531778647515a75f2699f5b4f140e0->leave($__internal_6ef056308ced44cf08153d9a083160a7af531778647515a75f2699f5b4f140e0_prof);

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
