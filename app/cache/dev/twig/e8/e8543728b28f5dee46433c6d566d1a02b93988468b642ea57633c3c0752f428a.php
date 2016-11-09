<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_47ab23715e142683c1cb1d77fe3034f837e66976a6e7b38a4e4db85d601f3deb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_68d90f64956b64ab12b8b0a049ec553a578ac2253522203993fd2879621eb284 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68d90f64956b64ab12b8b0a049ec553a578ac2253522203993fd2879621eb284->enter($__internal_68d90f64956b64ab12b8b0a049ec553a578ac2253522203993fd2879621eb284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68d90f64956b64ab12b8b0a049ec553a578ac2253522203993fd2879621eb284->leave($__internal_68d90f64956b64ab12b8b0a049ec553a578ac2253522203993fd2879621eb284_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5f19b799920bcd75e67a2e93236ef6e390471c935dda41b5cfccbb6981b7b695 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f19b799920bcd75e67a2e93236ef6e390471c935dda41b5cfccbb6981b7b695->enter($__internal_5f19b799920bcd75e67a2e93236ef6e390471c935dda41b5cfccbb6981b7b695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5f19b799920bcd75e67a2e93236ef6e390471c935dda41b5cfccbb6981b7b695->leave($__internal_5f19b799920bcd75e67a2e93236ef6e390471c935dda41b5cfccbb6981b7b695_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e84a00926fdaafc1210311a2ef4babcbc2e83d4f949dfe6836d8c3f64a41a8c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e84a00926fdaafc1210311a2ef4babcbc2e83d4f949dfe6836d8c3f64a41a8c1->enter($__internal_e84a00926fdaafc1210311a2ef4babcbc2e83d4f949dfe6836d8c3f64a41a8c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e84a00926fdaafc1210311a2ef4babcbc2e83d4f949dfe6836d8c3f64a41a8c1->leave($__internal_e84a00926fdaafc1210311a2ef4babcbc2e83d4f949dfe6836d8c3f64a41a8c1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_77b5ce2164ee7274cd25f2db1d41bba237470db80a3e230a5d33eb4148a4ba10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77b5ce2164ee7274cd25f2db1d41bba237470db80a3e230a5d33eb4148a4ba10->enter($__internal_77b5ce2164ee7274cd25f2db1d41bba237470db80a3e230a5d33eb4148a4ba10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_77b5ce2164ee7274cd25f2db1d41bba237470db80a3e230a5d33eb4148a4ba10->leave($__internal_77b5ce2164ee7274cd25f2db1d41bba237470db80a3e230a5d33eb4148a4ba10_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
