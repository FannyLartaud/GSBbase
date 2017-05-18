<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_36edf30d66664a82083d0da1dffdd2f251f17362e092069bf2d71eee0d14b01c extends Twig_Template
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
        $__internal_dbe642fa3438ea08e077c2c1ea8713930d6d494e89341cf570941166ae4ce5ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbe642fa3438ea08e077c2c1ea8713930d6d494e89341cf570941166ae4ce5ff->enter($__internal_dbe642fa3438ea08e077c2c1ea8713930d6d494e89341cf570941166ae4ce5ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_dbe642fa3438ea08e077c2c1ea8713930d6d494e89341cf570941166ae4ce5ff->leave($__internal_dbe642fa3438ea08e077c2c1ea8713930d6d494e89341cf570941166ae4ce5ff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
    }
}
