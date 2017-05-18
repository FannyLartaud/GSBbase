<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_0c1f4f2d42304169fecd35a7a98aeb74bbb45d6564b7831923c4ee8055dfb932 extends Twig_Template
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
        $__internal_6bf95f7eafb073b0d79e2cf12323385b8c98d6f0accb03eb02897d3028a7e8e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bf95f7eafb073b0d79e2cf12323385b8c98d6f0accb03eb02897d3028a7e8e9->enter($__internal_6bf95f7eafb073b0d79e2cf12323385b8c98d6f0accb03eb02897d3028a7e8e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_6bf95f7eafb073b0d79e2cf12323385b8c98d6f0accb03eb02897d3028a7e8e9->leave($__internal_6bf95f7eafb073b0d79e2cf12323385b8c98d6f0accb03eb02897d3028a7e8e9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
    }
}
