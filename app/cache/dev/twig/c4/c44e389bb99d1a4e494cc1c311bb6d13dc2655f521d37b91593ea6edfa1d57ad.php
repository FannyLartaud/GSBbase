<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_16a3e43443da4d2bf583d5cf1ca97d59cbf60ac24175ac605060ecf798c16eaf extends Twig_Template
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
        $__internal_6715ef06cb82140e7dfdc4dab5ba47a04e2c10a455b25ff501ea7ac8dfcb6755 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6715ef06cb82140e7dfdc4dab5ba47a04e2c10a455b25ff501ea7ac8dfcb6755->enter($__internal_6715ef06cb82140e7dfdc4dab5ba47a04e2c10a455b25ff501ea7ac8dfcb6755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_6715ef06cb82140e7dfdc4dab5ba47a04e2c10a455b25ff501ea7ac8dfcb6755->leave($__internal_6715ef06cb82140e7dfdc4dab5ba47a04e2c10a455b25ff501ea7ac8dfcb6755_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
    }
}
