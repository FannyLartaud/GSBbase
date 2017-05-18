<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_cc7829549824b77a4d711d2bfdac8b4a24222296c10dca4b84c660bfa8215b92 extends Twig_Template
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
        $__internal_f19069ff890f0371d0735a35e0549d3f487081f07bfcc33b97681f92d8a5a97c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f19069ff890f0371d0735a35e0549d3f487081f07bfcc33b97681f92d8a5a97c->enter($__internal_f19069ff890f0371d0735a35e0549d3f487081f07bfcc33b97681f92d8a5a97c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_f19069ff890f0371d0735a35e0549d3f487081f07bfcc33b97681f92d8a5a97c->leave($__internal_f19069ff890f0371d0735a35e0549d3f487081f07bfcc33b97681f92d8a5a97c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
    }
}
