<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_0e1f7a9fe971fbfdc312d3ed2a2d2c280ae84ce0123ebc3c874a6269a47286c7 extends Twig_Template
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
        $__internal_57c862c90189ec9155c3830606ff77242016ed3e35dfc7b9c092fedbbace75b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57c862c90189ec9155c3830606ff77242016ed3e35dfc7b9c092fedbbace75b8->enter($__internal_57c862c90189ec9155c3830606ff77242016ed3e35dfc7b9c092fedbbace75b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_57c862c90189ec9155c3830606ff77242016ed3e35dfc7b9c092fedbbace75b8->leave($__internal_57c862c90189ec9155c3830606ff77242016ed3e35dfc7b9c092fedbbace75b8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
    }
}
