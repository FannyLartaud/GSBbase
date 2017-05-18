<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_a8e5fe187cefd8edfb1c72fa5fd8414f741a56d93dc20e0c4cbc1bb4548b7239 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_894a176f188f74c1a96e372b5cd4214732e04f9fb3a8f6133a5f7c778a793ebd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_894a176f188f74c1a96e372b5cd4214732e04f9fb3a8f6133a5f7c778a793ebd->enter($__internal_894a176f188f74c1a96e372b5cd4214732e04f9fb3a8f6133a5f7c778a793ebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_894a176f188f74c1a96e372b5cd4214732e04f9fb3a8f6133a5f7c778a793ebd->leave($__internal_894a176f188f74c1a96e372b5cd4214732e04f9fb3a8f6133a5f7c778a793ebd_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_989c57a1003f57d3422ee69013178c6d268b05d211e047fc720e23732d0994f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_989c57a1003f57d3422ee69013178c6d268b05d211e047fc720e23732d0994f2->enter($__internal_989c57a1003f57d3422ee69013178c6d268b05d211e047fc720e23732d0994f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_989c57a1003f57d3422ee69013178c6d268b05d211e047fc720e23732d0994f2->leave($__internal_989c57a1003f57d3422ee69013178c6d268b05d211e047fc720e23732d0994f2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSource()
    {
        return "{% block panel '' %}
";
    }
}
