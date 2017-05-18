<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_905adacd6aa446b4d2ff9fa1bdb5eb745efeb15a504f6ce65b2373534b6f6bcc extends Twig_Template
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
        $__internal_9bbe19763ce00142cc14d5a7fccba3a55ff30c01507c484ae40879b33e306662 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bbe19763ce00142cc14d5a7fccba3a55ff30c01507c484ae40879b33e306662->enter($__internal_9bbe19763ce00142cc14d5a7fccba3a55ff30c01507c484ae40879b33e306662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_9bbe19763ce00142cc14d5a7fccba3a55ff30c01507c484ae40879b33e306662->leave($__internal_9bbe19763ce00142cc14d5a7fccba3a55ff30c01507c484ae40879b33e306662_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
    }
}
