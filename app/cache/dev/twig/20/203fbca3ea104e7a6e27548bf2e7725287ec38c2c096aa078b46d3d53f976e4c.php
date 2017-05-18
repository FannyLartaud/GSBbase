<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_58f4ae2479d2d9ca7f6959155710f230ed8dd7518233bbb0afa2a41ca69f3e44 extends Twig_Template
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
        $__internal_0bb1a9077aec76ba083f07f2a24d2c83d30cf0bd8c9a7d04c787d226e766c0ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bb1a9077aec76ba083f07f2a24d2c83d30cf0bd8c9a7d04c787d226e766c0ab->enter($__internal_0bb1a9077aec76ba083f07f2a24d2c83d30cf0bd8c9a7d04c787d226e766c0ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_0bb1a9077aec76ba083f07f2a24d2c83d30cf0bd8c9a7d04c787d226e766c0ab->leave($__internal_0bb1a9077aec76ba083f07f2a24d2c83d30cf0bd8c9a7d04c787d226e766c0ab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
    }
}
