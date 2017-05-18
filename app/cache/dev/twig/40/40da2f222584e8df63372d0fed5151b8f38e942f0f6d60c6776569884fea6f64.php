<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_85a3f2651818ee99d4b71357a2ed50aef9670e8c49d2f62718b3e8ac20d3238f extends Twig_Template
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
        $__internal_c052f424694e92106320a5281756111430a228104942e666bcfe04c3f3ef917d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c052f424694e92106320a5281756111430a228104942e666bcfe04c3f3ef917d->enter($__internal_c052f424694e92106320a5281756111430a228104942e666bcfe04c3f3ef917d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_c052f424694e92106320a5281756111430a228104942e666bcfe04c3f3ef917d->leave($__internal_c052f424694e92106320a5281756111430a228104942e666bcfe04c3f3ef917d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
    }
}
