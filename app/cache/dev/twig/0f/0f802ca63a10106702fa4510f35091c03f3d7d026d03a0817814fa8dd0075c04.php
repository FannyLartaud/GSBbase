<?php

/* base.html.twig */
class __TwigTemplate_02abc05679a472d10613cebed644d38ab28c8259373b7edf120b8505794fe139 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4f8c177d417ab1cf15dab41eb09f40615a5f36d8cbd2ed9db4369cbfde7f6b20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f8c177d417ab1cf15dab41eb09f40615a5f36d8cbd2ed9db4369cbfde7f6b20->enter($__internal_4f8c177d417ab1cf15dab41eb09f40615a5f36d8cbd2ed9db4369cbfde7f6b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_4f8c177d417ab1cf15dab41eb09f40615a5f36d8cbd2ed9db4369cbfde7f6b20->leave($__internal_4f8c177d417ab1cf15dab41eb09f40615a5f36d8cbd2ed9db4369cbfde7f6b20_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_37bfd00ce85d799c3132ace5b2ac4187351ccb9c536312575c0e4503b5971fdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37bfd00ce85d799c3132ace5b2ac4187351ccb9c536312575c0e4503b5971fdf->enter($__internal_37bfd00ce85d799c3132ace5b2ac4187351ccb9c536312575c0e4503b5971fdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_37bfd00ce85d799c3132ace5b2ac4187351ccb9c536312575c0e4503b5971fdf->leave($__internal_37bfd00ce85d799c3132ace5b2ac4187351ccb9c536312575c0e4503b5971fdf_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4a0489c7465439ff0f158180dd3dcbd24003a61e37ef7254a0edde6742dc1f89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a0489c7465439ff0f158180dd3dcbd24003a61e37ef7254a0edde6742dc1f89->enter($__internal_4a0489c7465439ff0f158180dd3dcbd24003a61e37ef7254a0edde6742dc1f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4a0489c7465439ff0f158180dd3dcbd24003a61e37ef7254a0edde6742dc1f89->leave($__internal_4a0489c7465439ff0f158180dd3dcbd24003a61e37ef7254a0edde6742dc1f89_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f20b86e81d79089bcec6bc6119f19896ea0a772b4ced4b6090fb0fa4c6894c84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f20b86e81d79089bcec6bc6119f19896ea0a772b4ced4b6090fb0fa4c6894c84->enter($__internal_f20b86e81d79089bcec6bc6119f19896ea0a772b4ced4b6090fb0fa4c6894c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f20b86e81d79089bcec6bc6119f19896ea0a772b4ced4b6090fb0fa4c6894c84->leave($__internal_f20b86e81d79089bcec6bc6119f19896ea0a772b4ced4b6090fb0fa4c6894c84_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_293f07c20cd1cef14d32aadc62d63fe0760c4e4ae9f1c89166935597ce8985de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_293f07c20cd1cef14d32aadc62d63fe0760c4e4ae9f1c89166935597ce8985de->enter($__internal_293f07c20cd1cef14d32aadc62d63fe0760c4e4ae9f1c89166935597ce8985de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_293f07c20cd1cef14d32aadc62d63fe0760c4e4ae9f1c89166935597ce8985de->leave($__internal_293f07c20cd1cef14d32aadc62d63fe0760c4e4ae9f1c89166935597ce8985de_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
";
    }
}
