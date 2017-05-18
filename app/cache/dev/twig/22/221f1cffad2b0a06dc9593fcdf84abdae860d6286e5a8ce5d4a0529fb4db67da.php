<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_47538a7426320dc95a505fa52a02803578ea77d7ef1241c5c5ca0418100b1e3f extends Twig_Template
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
        $__internal_656a7ed75be7bf7f519110a539fbf892fb808e55ea2ab56f9125f92fb708eae1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_656a7ed75be7bf7f519110a539fbf892fb808e55ea2ab56f9125f92fb708eae1->enter($__internal_656a7ed75be7bf7f519110a539fbf892fb808e55ea2ab56f9125f92fb708eae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_656a7ed75be7bf7f519110a539fbf892fb808e55ea2ab56f9125f92fb708eae1->leave($__internal_656a7ed75be7bf7f519110a539fbf892fb808e55ea2ab56f9125f92fb708eae1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
    }
}
