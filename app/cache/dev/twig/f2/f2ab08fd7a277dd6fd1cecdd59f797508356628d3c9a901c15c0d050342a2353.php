<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_fcfac7499b86f5b29c506b5562dccacdce530144c91f1401c5e2df1841577606 extends Twig_Template
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
        $__internal_459ebe65f2d0ecffad59305f9d46df94ceb5a9962177b8ffc865b8571a694d2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_459ebe65f2d0ecffad59305f9d46df94ceb5a9962177b8ffc865b8571a694d2f->enter($__internal_459ebe65f2d0ecffad59305f9d46df94ceb5a9962177b8ffc865b8571a694d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_459ebe65f2d0ecffad59305f9d46df94ceb5a9962177b8ffc865b8571a694d2f->leave($__internal_459ebe65f2d0ecffad59305f9d46df94ceb5a9962177b8ffc865b8571a694d2f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }
}
