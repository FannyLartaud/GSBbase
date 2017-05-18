<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_af2b293707d2621f6464ca26b5a5ddac62807bab1fa0d22b3bfa6f4797792535 extends Twig_Template
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
        $__internal_f32c2be8505d41ffc6fb1315b83ec02ca0c33ad7c8d265d575875e2981766f9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f32c2be8505d41ffc6fb1315b83ec02ca0c33ad7c8d265d575875e2981766f9c->enter($__internal_f32c2be8505d41ffc6fb1315b83ec02ca0c33ad7c8d265d575875e2981766f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f32c2be8505d41ffc6fb1315b83ec02ca0c33ad7c8d265d575875e2981766f9c->leave($__internal_f32c2be8505d41ffc6fb1315b83ec02ca0c33ad7c8d265d575875e2981766f9c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
