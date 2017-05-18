<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_f8c08798f423e2f06827c710511318f6d80a627562523c9de7a7ca7f9cce780e extends Twig_Template
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
        $__internal_2970a2a516c9c845f774bf82d6b38e06814ad0326077476bdc20788a61398495 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2970a2a516c9c845f774bf82d6b38e06814ad0326077476bdc20788a61398495->enter($__internal_2970a2a516c9c845f774bf82d6b38e06814ad0326077476bdc20788a61398495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_2970a2a516c9c845f774bf82d6b38e06814ad0326077476bdc20788a61398495->leave($__internal_2970a2a516c9c845f774bf82d6b38e06814ad0326077476bdc20788a61398495_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
    }
}
