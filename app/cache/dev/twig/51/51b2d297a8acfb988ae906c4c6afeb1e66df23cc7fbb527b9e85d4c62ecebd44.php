<?php

/* PgGsbFraisBundle::accueildaf.html.twig */
class __TwigTemplate_6391b8465b2c8ca56696e6ff9300920d7a52a2cd8a2e7653cae4bb1a90cd6b76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PgGsbFraisBundle::layout.html.twig", "PgGsbFraisBundle::accueildaf.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PgGsbFraisBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ab872c0203f2477f08a09557c72b15f6ab6e5b92d9444b2959ab6de7900d801c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab872c0203f2477f08a09557c72b15f6ab6e5b92d9444b2959ab6de7900d801c->enter($__internal_ab872c0203f2477f08a09557c72b15f6ab6e5b92d9444b2959ab6de7900d801c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle::accueildaf.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab872c0203f2477f08a09557c72b15f6ab6e5b92d9444b2959ab6de7900d801c->leave($__internal_ab872c0203f2477f08a09557c72b15f6ab6e5b92d9444b2959ab6de7900d801c_prof);

    }

    // line 2
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f16d2e642d590a76322cd6032c7ce4bc231be61350241b36a9addb8f001a3098 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f16d2e642d590a76322cd6032c7ce4bc231be61350241b36a9addb8f001a3098->enter($__internal_f16d2e642d590a76322cd6032c7ce4bc231be61350241b36a9addb8f001a3098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 3
        echo "<div id=\"menuGauche\">
     <div id=\"infosUtil\">
         <h3>
                           Visiteur: bonjour DAF<br>   
        </h3>
     </div>  
        <ul id=\"menuList\">
\t   <li class=\"smenu\">
              <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pg_gsb_frais_affectertablette");
        echo "\" title=\"Affecter tablette \">affectation des tablettes</a>
           </li>
           <li class=\"smenu\">
              <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pg_gsb_frais_listefrais");
        echo "\" title=\"Validation des frais\">Validation des frais</a>
           </li>\t
           <li class=\"smenu\">
              <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pg_gsb_frais_listetablette");
        echo "\" title=\"tablettes\">Tablettes</a>
           </li>
           <li class=\"smenu\">
              <a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pg_gsb_frais_deconnexion");
        echo "\" title=\"Se déconnecter\">Déconnexion</a>
           </li>
         </ul>
     </div> 
";
        
        $__internal_f16d2e642d590a76322cd6032c7ce4bc231be61350241b36a9addb8f001a3098->leave($__internal_f16d2e642d590a76322cd6032c7ce4bc231be61350241b36a9addb8f001a3098_prof);

    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle::accueildaf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 20,  62 => 17,  56 => 14,  50 => 11,  40 => 3,  34 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"PgGsbFraisBundle::layout.html.twig\" %}
{% block menu %}
<div id=\"menuGauche\">
     <div id=\"infosUtil\">
         <h3>
                           Visiteur: bonjour DAF<br>   
        </h3>
     </div>  
        <ul id=\"menuList\">
\t   <li class=\"smenu\">
              <a href=\"{{path('pg_gsb_frais_affectertablette')}}\" title=\"Affecter tablette \">affectation des tablettes</a>
           </li>
           <li class=\"smenu\">
              <a href=\"{{path('pg_gsb_frais_listefrais')}}\" title=\"Validation des frais\">Validation des frais</a>
           </li>\t
           <li class=\"smenu\">
              <a href=\"{{path('pg_gsb_frais_listetablette')}}\" title=\"tablettes\">Tablettes</a>
           </li>
           <li class=\"smenu\">
              <a href=\"{{path('pg_gsb_frais_deconnexion')}}\" title=\"Se déconnecter\">Déconnexion</a>
           </li>
         </ul>
     </div> 
{% endblock%}


";
    }
}
