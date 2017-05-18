<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_eff74008838206ce2e5c0d4e2b8444e2db74dd4c9b0e5bb679cc82d75cabb30d extends Twig_Template
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
        $__internal_000438f528b6321b57006d4bef4db1f6b8671bebc38801afb3fd2de1af7cc378 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_000438f528b6321b57006d4bef4db1f6b8671bebc38801afb3fd2de1af7cc378->enter($__internal_000438f528b6321b57006d4bef4db1f6b8671bebc38801afb3fd2de1af7cc378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_000438f528b6321b57006d4bef4db1f6b8671bebc38801afb3fd2de1af7cc378->leave($__internal_000438f528b6321b57006d4bef4db1f6b8671bebc38801afb3fd2de1af7cc378_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
    }
}
