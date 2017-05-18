<?php

/* PgGsbFraisBundle::accueil.html.twig */
class __TwigTemplate_fb24f648791969fe2684daf413e43a8651015dfdeaeb6faf65ab99f740cfc7db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PgGsbFraisBundle::layout.html.twig", "PgGsbFraisBundle::accueil.html.twig", 1);
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
        $__internal_e95d7382fc9da783bd461c7b5f73635d721f1fa28965fa65b32a8125c97296cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e95d7382fc9da783bd461c7b5f73635d721f1fa28965fa65b32a8125c97296cd->enter($__internal_e95d7382fc9da783bd461c7b5f73635d721f1fa28965fa65b32a8125c97296cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PgGsbFraisBundle::accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e95d7382fc9da783bd461c7b5f73635d721f1fa28965fa65b32a8125c97296cd->leave($__internal_e95d7382fc9da783bd461c7b5f73635d721f1fa28965fa65b32a8125c97296cd_prof);

    }

    // line 2
    public function block_menu($context, array $blocks = array())
    {
        $__internal_56fcb62aaf7ed1261d380be6819b2e7ac37f2a4d45fdcb021b306834a76052a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56fcb62aaf7ed1261d380be6819b2e7ac37f2a4d45fdcb021b306834a76052a8->enter($__internal_56fcb62aaf7ed1261d380be6819b2e7ac37f2a4d45fdcb021b306834a76052a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 3
        echo "<div id=\"menuGauche\">
     <div id=\"infosUtil\">
         <h3>
            ";
        // line 6
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array(), "any", false, true), "get", array(0 => "nom"), "method", true, true)) {
            // line 7
            echo "                           Visiteurs: bonjour ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "nom"), "method"), "html", null, true);
            echo "<br>   
            ";
        }
        // line 9
        echo "        </h3>
     </div>  
        <ul id=\"menuList\">
\t   <li class=\"smenu\">
              <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pg_gsb_frais_saisirfrais");
        echo "\" title=\"Saisie fiche de frais \">Saisie fiche de frais</a>
           </li>
           <li class=\"smenu\">
              <a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pg_gsb_frais_listefrais");
        echo "\" title=\"Consultation de mes fiches de frais\">Mes fiches de frais</a>
           </li>\t
           <li class=\"smenu\">
              <a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pg_gsb_frais_deconnexion");
        echo "\" title=\"Se déconnecter\">Déconnexion</a>
           </li>
         </ul>
     </div> 
";
        
        $__internal_56fcb62aaf7ed1261d380be6819b2e7ac37f2a4d45fdcb021b306834a76052a8->leave($__internal_56fcb62aaf7ed1261d380be6819b2e7ac37f2a4d45fdcb021b306834a76052a8_prof);

    }

    public function getTemplateName()
    {
        return "PgGsbFraisBundle::accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 19,  65 => 16,  59 => 13,  53 => 9,  47 => 7,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"PgGsbFraisBundle::layout.html.twig\" %}
{% block menu %}
<div id=\"menuGauche\">
     <div id=\"infosUtil\">
         <h3>
            {%if(app.session.get('nom') is defined )%}
                           Visiteurs: bonjour {{app.session.get('nom')}}<br>   
            {%endif%}
        </h3>
     </div>  
        <ul id=\"menuList\">
\t   <li class=\"smenu\">
              <a href=\"{{path('pg_gsb_frais_saisirfrais')}}\" title=\"Saisie fiche de frais \">Saisie fiche de frais</a>
           </li>
           <li class=\"smenu\">
              <a href=\"{{path('pg_gsb_frais_listefrais')}}\" title=\"Consultation de mes fiches de frais\">Mes fiches de frais</a>
           </li>\t
           <li class=\"smenu\">
              <a href=\"{{path('pg_gsb_frais_deconnexion')}}\" title=\"Se déconnecter\">Déconnexion</a>
           </li>
         </ul>
     </div> 
{% endblock%}


{#
 <li class=\"smenu\">
              <a href=\"{{path('pg_gsb_frais_saisirfrais')}}\" title=\"Saisie fiche de frais \">Saisie fiche de frais</a>
           </li>
           <li class=\"smenu\">
              <a href=\"{{path('pg_gsb_frais_listefrais')}}\" title=\"Consultation de mes fiches de frais\">Mes fiches de frais</a>
           </li>
#}";
    }
}
