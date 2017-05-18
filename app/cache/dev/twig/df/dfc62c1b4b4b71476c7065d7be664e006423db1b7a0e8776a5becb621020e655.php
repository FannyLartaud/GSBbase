<?php

/* PgGsbFraisBundle::layout.html.twig */
class __TwigTemplate_f6b431e2a5cbba4474bf5c37d2f1a5e27c1e98e38ae1bb2a75b6de25b7b68998 extends Twig_Template
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
        $__internal_b24dda09d953fed8532028c6b9a3bab8d78fd5db0e24eb2a61d44077a1e781bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b24dda09d953fed8532028c6b9a3bab8d78fd5db0e24eb2a61d44077a1e781bb->enter($__internal_b24dda09d953fed8532028c6b9a3bab8d78fd5db0e24eb2a61d44077a1e781bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle::layout.html.twig"));

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
        
        $__internal_b24dda09d953fed8532028c6b9a3bab8d78fd5db0e24eb2a61d44077a1e781bb->leave($__internal_b24dda09d953fed8532028c6b9a3bab8d78fd5db0e24eb2a61d44077a1e781bb_prof);

    }

    // line 17
    public function block_menu($context, array $blocks = array())
    {
        $__internal_07518967b22fab7c73e719cae6d01b6498ce6543ea6223ccebe0693bbac41bce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07518967b22fab7c73e719cae6d01b6498ce6543ea6223ccebe0693bbac41bce->enter($__internal_07518967b22fab7c73e719cae6d01b6498ce6543ea6223ccebe0693bbac41bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 18
        echo "          ";
        
        $__internal_07518967b22fab7c73e719cae6d01b6498ce6543ea6223ccebe0693bbac41bce->leave($__internal_07518967b22fab7c73e719cae6d01b6498ce6543ea6223ccebe0693bbac41bce_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_c38774a04bc76c91e04ccdad1b40d5d1184ac979272c6184ae2303441f2e67d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c38774a04bc76c91e04ccdad1b40d5d1184ac979272c6184ae2303441f2e67d5->enter($__internal_c38774a04bc76c91e04ccdad1b40d5d1184ac979272c6184ae2303441f2e67d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " 
                 ";
        // line 20
        $this->displayBlock('bloc1', $context, $blocks);
        // line 22
        echo "          ";
        
        $__internal_c38774a04bc76c91e04ccdad1b40d5d1184ac979272c6184ae2303441f2e67d5->leave($__internal_c38774a04bc76c91e04ccdad1b40d5d1184ac979272c6184ae2303441f2e67d5_prof);

    }

    // line 20
    public function block_bloc1($context, array $blocks = array())
    {
        $__internal_ef9f2b984aa8bc2fd3eaf0ded140d6f11f432bcacb1e4a3173294226f2de7414 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef9f2b984aa8bc2fd3eaf0ded140d6f11f432bcacb1e4a3173294226f2de7414->enter($__internal_ef9f2b984aa8bc2fd3eaf0ded140d6f11f432bcacb1e4a3173294226f2de7414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bloc1"));

        // line 21
        echo "                 ";
        
        $__internal_ef9f2b984aa8bc2fd3eaf0ded140d6f11f432bcacb1e4a3173294226f2de7414->leave($__internal_ef9f2b984aa8bc2fd3eaf0ded140d6f11f432bcacb1e4a3173294226f2de7414_prof);

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
