<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_d541ee2a087800903ead15d939827ca27cbca8e4c990ebeea620d56a34943892 extends Twig_Template
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
        $__internal_e2c3386d5e52c4098a3592a0edc852480dc0b64862d5164537d69df8a346f5a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2c3386d5e52c4098a3592a0edc852480dc0b64862d5164537d69df8a346f5a4->enter($__internal_e2c3386d5e52c4098a3592a0edc852480dc0b64862d5164537d69df8a346f5a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_e2c3386d5e52c4098a3592a0edc852480dc0b64862d5164537d69df8a346f5a4->leave($__internal_e2c3386d5e52c4098a3592a0edc852480dc0b64862d5164537d69df8a346f5a4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
    }
}
