<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_fa1f09d1176a2fa4c300a906a021e5827dd6aab44f6c2356da6e7694ebb40119 extends Twig_Template
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
        $__internal_0ef36ce5054f817429a6104d837c05f51a582e1b0efb79ee31a3368fe6b7c019 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ef36ce5054f817429a6104d837c05f51a582e1b0efb79ee31a3368fe6b7c019->enter($__internal_0ef36ce5054f817429a6104d837c05f51a582e1b0efb79ee31a3368fe6b7c019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_0ef36ce5054f817429a6104d837c05f51a582e1b0efb79ee31a3368fe6b7c019->leave($__internal_0ef36ce5054f817429a6104d837c05f51a582e1b0efb79ee31a3368fe6b7c019_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
    }
}
