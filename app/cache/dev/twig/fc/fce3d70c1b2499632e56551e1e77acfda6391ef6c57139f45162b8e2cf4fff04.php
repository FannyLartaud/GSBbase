<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_2f59e84bb27314182ef18396e98d133754a64d2c682f4fa1080d81e1f895d208 extends Twig_Template
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
        $__internal_d87b1e4a9621ce198d2a7dedd34f215d71a2793789ab407dc8fd214533796d5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d87b1e4a9621ce198d2a7dedd34f215d71a2793789ab407dc8fd214533796d5e->enter($__internal_d87b1e4a9621ce198d2a7dedd34f215d71a2793789ab407dc8fd214533796d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d87b1e4a9621ce198d2a7dedd34f215d71a2793789ab407dc8fd214533796d5e->leave($__internal_d87b1e4a9621ce198d2a7dedd34f215d71a2793789ab407dc8fd214533796d5e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
    }
}
