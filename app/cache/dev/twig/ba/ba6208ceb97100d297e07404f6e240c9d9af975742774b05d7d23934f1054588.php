<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_de6a08bd97e70a4a98c417c805109a9da168f78dfbd8ff75347fef5d3d7acd22 extends Twig_Template
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
        $__internal_6d31b34fdded9a9f6f753478d7762c71767885dedd9d06b3130f9a73b02f7f91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d31b34fdded9a9f6f753478d7762c71767885dedd9d06b3130f9a73b02f7f91->enter($__internal_6d31b34fdded9a9f6f753478d7762c71767885dedd9d06b3130f9a73b02f7f91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d31b34fdded9a9f6f753478d7762c71767885dedd9d06b3130f9a73b02f7f91->leave($__internal_6d31b34fdded9a9f6f753478d7762c71767885dedd9d06b3130f9a73b02f7f91_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cfc1e6590f3df5a67fd82d8ab1886d72508ba3f73e8f68bc3027456167598d27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfc1e6590f3df5a67fd82d8ab1886d72508ba3f73e8f68bc3027456167598d27->enter($__internal_cfc1e6590f3df5a67fd82d8ab1886d72508ba3f73e8f68bc3027456167598d27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cfc1e6590f3df5a67fd82d8ab1886d72508ba3f73e8f68bc3027456167598d27->leave($__internal_cfc1e6590f3df5a67fd82d8ab1886d72508ba3f73e8f68bc3027456167598d27_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_73c3c7a917d282572614161e596365988ae96b4319cf20af44c2e3792b0c847e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73c3c7a917d282572614161e596365988ae96b4319cf20af44c2e3792b0c847e->enter($__internal_73c3c7a917d282572614161e596365988ae96b4319cf20af44c2e3792b0c847e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_73c3c7a917d282572614161e596365988ae96b4319cf20af44c2e3792b0c847e->leave($__internal_73c3c7a917d282572614161e596365988ae96b4319cf20af44c2e3792b0c847e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f6f375b66201927b54a5715da15d5b427d729ab418a90e5d8b87b0096c37b720 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6f375b66201927b54a5715da15d5b427d729ab418a90e5d8b87b0096c37b720->enter($__internal_f6f375b66201927b54a5715da15d5b427d729ab418a90e5d8b87b0096c37b720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f6f375b66201927b54a5715da15d5b427d729ab418a90e5d8b87b0096c37b720->leave($__internal_f6f375b66201927b54a5715da15d5b427d729ab418a90e5d8b87b0096c37b720_prof);

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
