<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_52a6ec1cbb10cd1e6141dfc04ec42f273d7c28e6ac0cd5fc1b868ad8eae78ded extends Twig_Template
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
        $__internal_738b2d5b4e189490db07bbf9f9088976467f3170a83ebd429338af9dac90b238 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_738b2d5b4e189490db07bbf9f9088976467f3170a83ebd429338af9dac90b238->enter($__internal_738b2d5b4e189490db07bbf9f9088976467f3170a83ebd429338af9dac90b238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_738b2d5b4e189490db07bbf9f9088976467f3170a83ebd429338af9dac90b238->leave($__internal_738b2d5b4e189490db07bbf9f9088976467f3170a83ebd429338af9dac90b238_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
