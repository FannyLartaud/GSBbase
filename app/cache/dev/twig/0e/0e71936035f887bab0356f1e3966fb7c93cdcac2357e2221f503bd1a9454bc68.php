<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_273dc3cae6b1fedc999ed87452ffb1f09f5f844f4833053cb48e73c602540064 extends Twig_Template
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
        $__internal_f8d12d94864a9cbf3cd4d2092f059cd3e6104452f0ae12ba6e05f6f29e9511b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8d12d94864a9cbf3cd4d2092f059cd3e6104452f0ae12ba6e05f6f29e9511b8->enter($__internal_f8d12d94864a9cbf3cd4d2092f059cd3e6104452f0ae12ba6e05f6f29e9511b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f8d12d94864a9cbf3cd4d2092f059cd3e6104452f0ae12ba6e05f6f29e9511b8->leave($__internal_f8d12d94864a9cbf3cd4d2092f059cd3e6104452f0ae12ba6e05f6f29e9511b8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
