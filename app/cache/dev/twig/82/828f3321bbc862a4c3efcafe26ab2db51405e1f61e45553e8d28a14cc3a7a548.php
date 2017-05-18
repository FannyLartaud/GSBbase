<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_611559c987804e88fd4c01878c80ac279741e5ee4be57a9f51e1ce8cc966d8a3 extends Twig_Template
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
        $__internal_ec0d02a69a4f4cd8038a3ecd8ff0cc4299990df9e8917acc6298dbe96cde5eb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec0d02a69a4f4cd8038a3ecd8ff0cc4299990df9e8917acc6298dbe96cde5eb4->enter($__internal_ec0d02a69a4f4cd8038a3ecd8ff0cc4299990df9e8917acc6298dbe96cde5eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_ec0d02a69a4f4cd8038a3ecd8ff0cc4299990df9e8917acc6298dbe96cde5eb4->leave($__internal_ec0d02a69a4f4cd8038a3ecd8ff0cc4299990df9e8917acc6298dbe96cde5eb4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
    }
}
