<?php

/* base.html.twig */
class __TwigTemplate_72dc1157a74d75ab5eb92819ce97f4bd5b7fae3336b66a92a037c558f09e7168 extends Twig_Template
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
        $__internal_9998b665c66897081c8a32eeddd04114d039d358988c532b329acb3a6242d9ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9998b665c66897081c8a32eeddd04114d039d358988c532b329acb3a6242d9ad->enter($__internal_9998b665c66897081c8a32eeddd04114d039d358988c532b329acb3a6242d9ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_9998b665c66897081c8a32eeddd04114d039d358988c532b329acb3a6242d9ad->leave($__internal_9998b665c66897081c8a32eeddd04114d039d358988c532b329acb3a6242d9ad_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_50b8aae76b3df8103a420d9b8570e56da682de0d24ff880afa6ae4062a9410ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50b8aae76b3df8103a420d9b8570e56da682de0d24ff880afa6ae4062a9410ec->enter($__internal_50b8aae76b3df8103a420d9b8570e56da682de0d24ff880afa6ae4062a9410ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_50b8aae76b3df8103a420d9b8570e56da682de0d24ff880afa6ae4062a9410ec->leave($__internal_50b8aae76b3df8103a420d9b8570e56da682de0d24ff880afa6ae4062a9410ec_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5ed4ac215ae884b7069cff5ad94bef26589c8f1961e17065a1c834005e489cbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ed4ac215ae884b7069cff5ad94bef26589c8f1961e17065a1c834005e489cbf->enter($__internal_5ed4ac215ae884b7069cff5ad94bef26589c8f1961e17065a1c834005e489cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5ed4ac215ae884b7069cff5ad94bef26589c8f1961e17065a1c834005e489cbf->leave($__internal_5ed4ac215ae884b7069cff5ad94bef26589c8f1961e17065a1c834005e489cbf_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_451c16dab0b2746f063cff4d921d56fea026e7d12675fb3683c185aff75205c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_451c16dab0b2746f063cff4d921d56fea026e7d12675fb3683c185aff75205c7->enter($__internal_451c16dab0b2746f063cff4d921d56fea026e7d12675fb3683c185aff75205c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_451c16dab0b2746f063cff4d921d56fea026e7d12675fb3683c185aff75205c7->leave($__internal_451c16dab0b2746f063cff4d921d56fea026e7d12675fb3683c185aff75205c7_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a02e47dabb25da12f4c6eb4ddf27ed67b43f7822bc25efbee1d0c20c9b189a10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a02e47dabb25da12f4c6eb4ddf27ed67b43f7822bc25efbee1d0c20c9b189a10->enter($__internal_a02e47dabb25da12f4c6eb4ddf27ed67b43f7822bc25efbee1d0c20c9b189a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a02e47dabb25da12f4c6eb4ddf27ed67b43f7822bc25efbee1d0c20c9b189a10->leave($__internal_a02e47dabb25da12f4c6eb4ddf27ed67b43f7822bc25efbee1d0c20c9b189a10_prof);

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
