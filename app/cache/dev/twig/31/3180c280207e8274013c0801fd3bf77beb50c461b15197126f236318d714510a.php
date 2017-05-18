<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_5a33b90203a84301563a0ac2efc40ce5875d540ce7e392e32ef79c416f9b6903 extends Twig_Template
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
        $__internal_efb6c3dc89fa98f7f2b341212805b15ad6b234a098de9ed91830c05d6bc4b2b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efb6c3dc89fa98f7f2b341212805b15ad6b234a098de9ed91830c05d6bc4b2b3->enter($__internal_efb6c3dc89fa98f7f2b341212805b15ad6b234a098de9ed91830c05d6bc4b2b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_efb6c3dc89fa98f7f2b341212805b15ad6b234a098de9ed91830c05d6bc4b2b3->leave($__internal_efb6c3dc89fa98f7f2b341212805b15ad6b234a098de9ed91830c05d6bc4b2b3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
    }
}
