<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_d9370d85d37e881de446ae715c52241fefbaadcc1dfbb741601baa8288f3e5be extends Twig_Template
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
        $__internal_43739b41d26e1b3eaca7bd19f621ab75f95ec89b46b7cb3fb811b3900d04e15d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43739b41d26e1b3eaca7bd19f621ab75f95ec89b46b7cb3fb811b3900d04e15d->enter($__internal_43739b41d26e1b3eaca7bd19f621ab75f95ec89b46b7cb3fb811b3900d04e15d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_43739b41d26e1b3eaca7bd19f621ab75f95ec89b46b7cb3fb811b3900d04e15d->leave($__internal_43739b41d26e1b3eaca7bd19f621ab75f95ec89b46b7cb3fb811b3900d04e15d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
    }
}
