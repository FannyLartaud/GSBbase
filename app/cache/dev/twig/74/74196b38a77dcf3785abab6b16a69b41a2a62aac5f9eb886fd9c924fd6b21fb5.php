<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_6187f5dd419f2ed4ef915e6980ec7b60b83eb2ca135dec241d44ecce73a15611 extends Twig_Template
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
        $__internal_e9c37e36d695eaf6e04ce5090339c36fdc2232a2b1b0a8d90342ddb9281ca040 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9c37e36d695eaf6e04ce5090339c36fdc2232a2b1b0a8d90342ddb9281ca040->enter($__internal_e9c37e36d695eaf6e04ce5090339c36fdc2232a2b1b0a8d90342ddb9281ca040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_e9c37e36d695eaf6e04ce5090339c36fdc2232a2b1b0a8d90342ddb9281ca040->leave($__internal_e9c37e36d695eaf6e04ce5090339c36fdc2232a2b1b0a8d90342ddb9281ca040_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
    }
}
