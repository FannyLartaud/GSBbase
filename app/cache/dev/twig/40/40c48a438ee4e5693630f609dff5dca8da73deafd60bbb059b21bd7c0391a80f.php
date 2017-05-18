<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_979697294d514278be6437328dd250133d56df8a4e5182ab26cf6250be969e81 extends Twig_Template
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
        $__internal_0b928690e5c7333100344dd523bf0c4e0852420be20265e9c1a9e707c0761e2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b928690e5c7333100344dd523bf0c4e0852420be20265e9c1a9e707c0761e2f->enter($__internal_0b928690e5c7333100344dd523bf0c4e0852420be20265e9c1a9e707c0761e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_0b928690e5c7333100344dd523bf0c4e0852420be20265e9c1a9e707c0761e2f->leave($__internal_0b928690e5c7333100344dd523bf0c4e0852420be20265e9c1a9e707c0761e2f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }
}
