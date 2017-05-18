<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_dfcce4fe76447fdac95fc4a7ce0335beb8b1275fdeb1f9d5a0b29fdaed7bc034 extends Twig_Template
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
        $__internal_70a525c1830ed5472bf2af86be833e548dfb9a623e19eee68bf796362742b01a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70a525c1830ed5472bf2af86be833e548dfb9a623e19eee68bf796362742b01a->enter($__internal_70a525c1830ed5472bf2af86be833e548dfb9a623e19eee68bf796362742b01a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_70a525c1830ed5472bf2af86be833e548dfb9a623e19eee68bf796362742b01a->leave($__internal_70a525c1830ed5472bf2af86be833e548dfb9a623e19eee68bf796362742b01a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
    }
}
