<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_2e69b2723f6d5f035ba80a396aea0eebbcf2f470c4d32ba9149f03b8e32e688e extends Twig_Template
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
        $__internal_af3dd721bd9f10dc71dfd5900a61864b2ee687a68137cad1d7aafcf47c5c6038 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af3dd721bd9f10dc71dfd5900a61864b2ee687a68137cad1d7aafcf47c5c6038->enter($__internal_af3dd721bd9f10dc71dfd5900a61864b2ee687a68137cad1d7aafcf47c5c6038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_af3dd721bd9f10dc71dfd5900a61864b2ee687a68137cad1d7aafcf47c5c6038->leave($__internal_af3dd721bd9f10dc71dfd5900a61864b2ee687a68137cad1d7aafcf47c5c6038_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
    }
}
