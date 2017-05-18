<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_9bd51848ef68437d3820f0369f179b6c62f459c97d3fc19cef64be25736de376 extends Twig_Template
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
        $__internal_1024b914dd70ea1474d083067abd1e6c605dbc8c151b8eb2ce3500c2756df1fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1024b914dd70ea1474d083067abd1e6c605dbc8c151b8eb2ce3500c2756df1fb->enter($__internal_1024b914dd70ea1474d083067abd1e6c605dbc8c151b8eb2ce3500c2756df1fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_1024b914dd70ea1474d083067abd1e6c605dbc8c151b8eb2ce3500c2756df1fb->leave($__internal_1024b914dd70ea1474d083067abd1e6c605dbc8c151b8eb2ce3500c2756df1fb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
    }
}
