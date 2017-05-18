<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_44ba2b3370725914b92adadda83c52a12c93d4a13a6c47adadc319a624531c88 extends Twig_Template
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
        $__internal_58bf22a7c61bac5f3076a7a453ff5362c7db83c08cc6da2bc88fb07bc2f8513c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58bf22a7c61bac5f3076a7a453ff5362c7db83c08cc6da2bc88fb07bc2f8513c->enter($__internal_58bf22a7c61bac5f3076a7a453ff5362c7db83c08cc6da2bc88fb07bc2f8513c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_58bf22a7c61bac5f3076a7a453ff5362c7db83c08cc6da2bc88fb07bc2f8513c->leave($__internal_58bf22a7c61bac5f3076a7a453ff5362c7db83c08cc6da2bc88fb07bc2f8513c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
    }
}
