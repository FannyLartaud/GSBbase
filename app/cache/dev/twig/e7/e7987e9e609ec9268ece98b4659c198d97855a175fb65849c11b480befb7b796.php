<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_17d80d7549548fb8e7cf8004dc2fe53e2673b01688cd25cb6b946b12b93c7821 extends Twig_Template
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
        $__internal_2ab7fe77595fc8ce35e8364ce0c81b57a1ecdedf68f8bd750355e5662e639bd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ab7fe77595fc8ce35e8364ce0c81b57a1ecdedf68f8bd750355e5662e639bd3->enter($__internal_2ab7fe77595fc8ce35e8364ce0c81b57a1ecdedf68f8bd750355e5662e639bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_2ab7fe77595fc8ce35e8364ce0c81b57a1ecdedf68f8bd750355e5662e639bd3->leave($__internal_2ab7fe77595fc8ce35e8364ce0c81b57a1ecdedf68f8bd750355e5662e639bd3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
    }
}
