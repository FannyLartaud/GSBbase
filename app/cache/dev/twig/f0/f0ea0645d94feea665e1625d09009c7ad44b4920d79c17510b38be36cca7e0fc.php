<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_6f212409e255d63224b9836f5fdf3b5be0b6fe3402b4ca9955a88e6f0c3b84b2 extends Twig_Template
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
        $__internal_3fd06049aecc09feb4ab1f04e61106cb5e45023d8943ae9d534cedc1ea52fc4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fd06049aecc09feb4ab1f04e61106cb5e45023d8943ae9d534cedc1ea52fc4a->enter($__internal_3fd06049aecc09feb4ab1f04e61106cb5e45023d8943ae9d534cedc1ea52fc4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_3fd06049aecc09feb4ab1f04e61106cb5e45023d8943ae9d534cedc1ea52fc4a->leave($__internal_3fd06049aecc09feb4ab1f04e61106cb5e45023d8943ae9d534cedc1ea52fc4a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }

    public function getSource()
    {
        return "Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
    }
}
