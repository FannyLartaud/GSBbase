<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_4b6ed2e9a742fd90a7fa9be2bdec7e0e5f00e5f3ca57dce86392fbf3bdfc0eed extends Twig_Template
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
        $__internal_31aab8db237408d826a684bb2e2ebfb4afa6972488c3fc7eb3373a43f40326bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31aab8db237408d826a684bb2e2ebfb4afa6972488c3fc7eb3373a43f40326bd->enter($__internal_31aab8db237408d826a684bb2e2ebfb4afa6972488c3fc7eb3373a43f40326bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_31aab8db237408d826a684bb2e2ebfb4afa6972488c3fc7eb3373a43f40326bd->leave($__internal_31aab8db237408d826a684bb2e2ebfb4afa6972488c3fc7eb3373a43f40326bd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
    }
}
