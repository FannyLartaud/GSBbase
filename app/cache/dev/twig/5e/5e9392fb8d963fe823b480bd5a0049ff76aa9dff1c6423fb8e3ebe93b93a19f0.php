<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_e7106bd526c47b39a87bfc37c5f23c6c28bc36a0c3578c3c2ed15d04e9fcd75f extends Twig_Template
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
        $__internal_5399ac7abd354ba4c2513caa78ad05d454ec854445bcc6f23617b5b8679f7d65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5399ac7abd354ba4c2513caa78ad05d454ec854445bcc6f23617b5b8679f7d65->enter($__internal_5399ac7abd354ba4c2513caa78ad05d454ec854445bcc6f23617b5b8679f7d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_5399ac7abd354ba4c2513caa78ad05d454ec854445bcc6f23617b5b8679f7d65->leave($__internal_5399ac7abd354ba4c2513caa78ad05d454ec854445bcc6f23617b5b8679f7d65_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
    }
}
