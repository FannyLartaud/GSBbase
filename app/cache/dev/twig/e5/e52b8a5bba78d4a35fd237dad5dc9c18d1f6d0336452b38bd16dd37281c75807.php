<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_38eb750ca96d6c39b93f21cf5ddd86a2879a86c4488de7ec241d5a550b82a2d0 extends Twig_Template
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
        $__internal_99be909e7325f88d49eefe3eddf8a380aa54b78679d4ad5658b2b64ceb6dbd50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99be909e7325f88d49eefe3eddf8a380aa54b78679d4ad5658b2b64ceb6dbd50->enter($__internal_99be909e7325f88d49eefe3eddf8a380aa54b78679d4ad5658b2b64ceb6dbd50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_99be909e7325f88d49eefe3eddf8a380aa54b78679d4ad5658b2b64ceb6dbd50->leave($__internal_99be909e7325f88d49eefe3eddf8a380aa54b78679d4ad5658b2b64ceb6dbd50_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
    }
}
