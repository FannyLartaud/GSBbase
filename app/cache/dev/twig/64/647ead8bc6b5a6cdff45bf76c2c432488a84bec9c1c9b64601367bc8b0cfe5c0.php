<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_dd29aa5ae756583ec986c22b189a673f663d42d994b95890e0db67774c90641f extends Twig_Template
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
        $__internal_eb750cebd67502fe716234416252f88faf9c25f64c1b831fb282c3f49bde93ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb750cebd67502fe716234416252f88faf9c25f64c1b831fb282c3f49bde93ac->enter($__internal_eb750cebd67502fe716234416252f88faf9c25f64c1b831fb282c3f49bde93ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_eb750cebd67502fe716234416252f88faf9c25f64c1b831fb282c3f49bde93ac->leave($__internal_eb750cebd67502fe716234416252f88faf9c25f64c1b831fb282c3f49bde93ac_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return "{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
";
    }
}
