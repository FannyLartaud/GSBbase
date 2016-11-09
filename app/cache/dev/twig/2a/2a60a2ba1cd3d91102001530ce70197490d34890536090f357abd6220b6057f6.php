<?php

/* PgGsbFraisBundle::layout.html.twig */
class __TwigTemplate_ca18e3088b357a0c4f64a9d074ed0681b7997c7534da30a971ee0599f3456616 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'bloc1' => array($this, 'block_bloc1'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7ae4390fbe1e284afe123c4a064ee52dd19d970fbfbc44ec849209897e12e769 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ae4390fbe1e284afe123c4a064ee52dd19d970fbfbc44ec849209897e12e769->enter($__internal_7ae4390fbe1e284afe123c4a064ee52dd19d970fbfbc44ec849209897e12e769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\"
       \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"fr\" lang=\"fr\">
  <head>
    <title>Intranet du Laboratoire Galaxy-Swiss Bourdin</title>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/gsbfrais/styles/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"./images/favicon.ico\" />
  </head>
  <body>
    <div id=\"page\">
      <div id=\"entete\">
        <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/gsbfrais/images/logo.jpg"), "html", null, true);
        echo "\" id=\"logoGSB\" alt=\"Laboratoire Galaxy-Swiss Bourdin\" title=\"Laboratoire Galaxy-Swiss Bourdin\" />
        <h1>Suivi du remboursement des frais</h1>
      </div>
     </div>
          ";
        // line 17
        $this->displayBlock('menu', $context, $blocks);
        // line 19
        echo "          ";
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "    </body>
  </html>

          
          
";
        
        $__internal_7ae4390fbe1e284afe123c4a064ee52dd19d970fbfbc44ec849209897e12e769->leave($__internal_7ae4390fbe1e284afe123c4a064ee52dd19d970fbfbc44ec849209897e12e769_prof);

    }

    // line 17
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a0a9cf02f431ca23e374e3a0e1236a4cc803648be05b5b0dc738186bfcd84300 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0a9cf02f431ca23e374e3a0e1236a4cc803648be05b5b0dc738186bfcd84300->enter($__internal_a0a9cf02f431ca23e374e3a0e1236a4cc803648be05b5b0dc738186bfcd84300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 18
        echo "          ";
        
        $__internal_a0a9cf02f431ca23e374e3a0e1236a4cc803648be05b5b0dc738186bfcd84300->leave($__internal_a0a9cf02f431ca23e374e3a0e1236a4cc803648be05b5b0dc738186bfcd84300_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_1def40f7c47bcce0f7a8edc26216a72c996595c1bafb0c47b1996410299c169e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1def40f7c47bcce0f7a8edc26216a72c996595c1bafb0c47b1996410299c169e->enter($__internal_1def40f7c47bcce0f7a8edc26216a72c996595c1bafb0c47b1996410299c169e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " 
                 ";
        // line 20
        $this->displayBlock('bloc1', $context, $blocks);
        // line 22
        echo "          ";
        
        $__internal_1def40f7c47bcce0f7a8edc26216a72c996595c1bafb0c47b1996410299c169e->leave($__internal_1def40f7c47bcce0f7a8edc26216a72c996595c1bafb0c47b1996410299c169e_prof);

    }

    // line 20
    public function block_bloc1($context, array $blocks = array())
    {
        $__internal_9aef6b15e5b632975d8c3a4cdaa3d46e4bf3c24ae51093b5e507877ffe8db926 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aef6b15e5b632975d8c3a4cdaa3d46e4bf3c24ae51093b5e507877ffe8db926->enter($__internal_9aef6b15e5b632975d8c3a4cdaa3d46e4bf3c24ae51093b5e507877ffe8db926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bloc1"));

        // line 21
        echo "                 ";
        
        $__internal_9aef6b15e5b632975d8c3a4cdaa3d46e4bf3c24ae51093b5e507877ffe8db926->leave($__internal_9aef6b15e5b632975d8c3a4cdaa3d46e4bf3c24ae51093b5e507877ffe8db926_prof);

    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 21,  96 => 20,  89 => 22,  87 => 20,  79 => 19,  72 => 18,  66 => 17,  54 => 23,  51 => 19,  49 => 17,  42 => 13,  33 => 7,  25 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\"
       \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"fr\" lang=\"fr\">
  <head>
    <title>Intranet du Laboratoire Galaxy-Swiss Bourdin</title>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
    <link href=\"{{ asset('bundles/gsbfrais/styles/styles.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"./images/favicon.ico\" />
  </head>
  <body>
    <div id=\"page\">
      <div id=\"entete\">
        <img src=\"{{ asset('bundles/gsbfrais/images/logo.jpg')}}\" id=\"logoGSB\" alt=\"Laboratoire Galaxy-Swiss Bourdin\" title=\"Laboratoire Galaxy-Swiss Bourdin\" />
        <h1>Suivi du remboursement des frais</h1>
      </div>
     </div>
          {% block menu %}
          {% endblock %}
          {% block body %} 
                 {% block bloc1 %}
                 {% endblock %}
          {% endblock %}
    </body>
  </html>

          
          
";
    }
}
