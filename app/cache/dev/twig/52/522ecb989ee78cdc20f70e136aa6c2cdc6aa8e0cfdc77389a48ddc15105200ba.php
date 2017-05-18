<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_2d4cc7167281f295585d1b099e0729bb6a3f6670baabba20a868d10134ee1280 extends Twig_Template
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
        $__internal_dcaa6567627e2249d16643e4a5f81540afa338efb901992ef0a025133648df34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcaa6567627e2249d16643e4a5f81540afa338efb901992ef0a025133648df34->enter($__internal_dcaa6567627e2249d16643e4a5f81540afa338efb901992ef0a025133648df34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_dcaa6567627e2249d16643e4a5f81540afa338efb901992ef0a025133648df34->leave($__internal_dcaa6567627e2249d16643e4a5f81540afa338efb901992ef0a025133648df34_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
    }
}
