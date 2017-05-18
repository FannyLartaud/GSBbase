<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_4bd73b795300e38b7102e4c1d1ab0f7dd5bd8062b9fe47a231050e7bad74cb7b extends Twig_Template
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
        $__internal_b17d038261d505ed81fe2c9a3491e44aca0fd8601e4a0ae68c6695a95e6711db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b17d038261d505ed81fe2c9a3491e44aca0fd8601e4a0ae68c6695a95e6711db->enter($__internal_b17d038261d505ed81fe2c9a3491e44aca0fd8601e4a0ae68c6695a95e6711db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_b17d038261d505ed81fe2c9a3491e44aca0fd8601e4a0ae68c6695a95e6711db->leave($__internal_b17d038261d505ed81fe2c9a3491e44aca0fd8601e4a0ae68c6695a95e6711db_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
    }
}
