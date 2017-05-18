<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_504ff7c622fb41f5c53d0a14145a74eb4e7698c8656ab8f759c3f538adc357bd extends Twig_Template
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
        $__internal_aae5e755814dbda828057615967fb9c12aca9d328618cdce12b7b0d7a7975ed3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aae5e755814dbda828057615967fb9c12aca9d328618cdce12b7b0d7a7975ed3->enter($__internal_aae5e755814dbda828057615967fb9c12aca9d328618cdce12b7b0d7a7975ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_aae5e755814dbda828057615967fb9c12aca9d328618cdce12b7b0d7a7975ed3->leave($__internal_aae5e755814dbda828057615967fb9c12aca9d328618cdce12b7b0d7a7975ed3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
    }
}
