<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_fb8d2c83ee29cbea0077231e398871034fd82a172f3fa3056e4585e6d4d26fb5 extends Twig_Template
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
        $__internal_407300d177009ee7cc9bc5dc4b1bdce2a57781096cd4d7a09024bf23c7c2c4ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_407300d177009ee7cc9bc5dc4b1bdce2a57781096cd4d7a09024bf23c7c2c4ae->enter($__internal_407300d177009ee7cc9bc5dc4b1bdce2a57781096cd4d7a09024bf23c7c2c4ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_407300d177009ee7cc9bc5dc4b1bdce2a57781096cd4d7a09024bf23c7c2c4ae->leave($__internal_407300d177009ee7cc9bc5dc4b1bdce2a57781096cd4d7a09024bf23c7c2c4ae_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/error.xml.twig' %}
";
    }
}
