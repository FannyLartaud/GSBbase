<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_72faf76fedea7fea310c118fb6cc8b555a02d8c9886ddbc89b40f60f3f24b94f extends Twig_Template
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
        $__internal_ad004adeee6756782fa0294605d1a20937987cace37ae4c1909fe9836674f4aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad004adeee6756782fa0294605d1a20937987cace37ae4c1909fe9836674f4aa->enter($__internal_ad004adeee6756782fa0294605d1a20937987cace37ae4c1909fe9836674f4aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_ad004adeee6756782fa0294605d1a20937987cace37ae4c1909fe9836674f4aa->leave($__internal_ad004adeee6756782fa0294605d1a20937987cace37ae4c1909fe9836674f4aa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
    }
}
