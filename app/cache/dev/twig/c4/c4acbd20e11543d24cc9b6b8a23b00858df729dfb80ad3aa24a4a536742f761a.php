<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_8410e493f06e0ec0144dd44e85eb03ca4869089149d4298db3e3552c92ab3c70 extends Twig_Template
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
        $__internal_d5b1764fb51ff2d2c7e1ef867807827cfc20b5df8c8b86ecc3a592c7501b7920 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5b1764fb51ff2d2c7e1ef867807827cfc20b5df8c8b86ecc3a592c7501b7920->enter($__internal_d5b1764fb51ff2d2c7e1ef867807827cfc20b5df8c8b86ecc3a592c7501b7920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_d5b1764fb51ff2d2c7e1ef867807827cfc20b5df8c8b86ecc3a592c7501b7920->leave($__internal_d5b1764fb51ff2d2c7e1ef867807827cfc20b5df8c8b86ecc3a592c7501b7920_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
    }
}
