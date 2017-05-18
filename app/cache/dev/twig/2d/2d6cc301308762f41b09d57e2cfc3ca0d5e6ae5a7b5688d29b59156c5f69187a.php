<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_4f1aaa7a7b4ec8053ea1002ce41b11a668106c140e4b9533df967c78b0da5307 extends Twig_Template
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
        $__internal_0a2713340d55a89cf343fac81c1c1c5eb58ac0efaadbb6c9278eef5491467d26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a2713340d55a89cf343fac81c1c1c5eb58ac0efaadbb6c9278eef5491467d26->enter($__internal_0a2713340d55a89cf343fac81c1c1c5eb58ac0efaadbb6c9278eef5491467d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_0a2713340d55a89cf343fac81c1c1c5eb58ac0efaadbb6c9278eef5491467d26->leave($__internal_0a2713340d55a89cf343fac81c1c1c5eb58ac0efaadbb6c9278eef5491467d26_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return "{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
";
    }
}
