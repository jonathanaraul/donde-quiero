<?php

/* ProyectoPrincipalBundle:Helpers:top.html.twig */
class __TwigTemplate_2de1af4f605d6bb4dc6ec740abafdde4 extends Twig_Template
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
        // line 1
        echo "      <div id=\"top\" class=\"";
        echo twig_escape_filter($this->env, (isset($context["clase"]) ? $context["clase"] : $this->getContext($context, "clase")), "html", null, true);
        echo "\">
       <div id=\"logo\"><!-- Logo image -->
          <nav class=\"iconos\">\t<!-- Navigation Start -->
            <ul>
              <li> <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_principal_espacios"), "html", null, true);
        echo "\"><img class=\"icon\" 
                ";
        // line 6
        if (((isset($context["clase"]) ? $context["clase"] : $this->getContext($context, "clase")) == "verde")) {
            // line 7
            echo "                src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sistema/images/icons/espaciosact.png"), "html", null, true);
            echo "\"
                ";
        } else {
            // line 9
            echo "                src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sistema/images/icons/espacios.png"), "html", null, true);
            echo "\"
                ";
        }
        // line 11
        echo "                width=\"30\" height=\"30\" title=\"Espacios\"></a></li>
              <li> <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_principal_eventos"), "html", null, true);
        echo "\"><img class=\"icon\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sistema/images/icons/eventos.png"), "html", null, true);
        echo "\" width=\"30\" height=\"30\" title=\"Eventos\" ></a></li>
              <li ><a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_principal_servicios"), "html", null, true);
        echo "\"><img class=\"icon\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sistema/images/icons/servicios.png"), "html", null, true);
        echo "\" width=\"30\" height=\"30\" title=\"Servicios\"></a></li>
              <li > <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_principal_sedes"), "html", null, true);
        echo "\" ><img class=\"icon\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sistema/images/icons/centros.png"), "html", null, true);
        echo "\" width=\"30\" height=\"30\" title=\"Sedes\"></a></li> 
            </ul>      
          </nav>
          <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_principal_homepage"), "html", null, true);
        echo "\" title=\"Inicio\"> 
            <h1 id=\"logotitle\"  > donde<spam class=\"donde\">quiero</spam> </h1>
          </a>
        </div>
        <nav class=\"redes\">\t<!-- Navigation Start -->
          <ul>     
            <li> <a href=\"#footer\"><img class=\"icon\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sistema/images/icons/contacto.png"), "html", null, true);
        echo "\" height=\"26\" title=\"contacto\"></a></li>
            <li style=\"margin-right:2px\"><a href=\"ayuda.html\"><img class=\"icon\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sistema/images/icons/ayuda.png"), "html", null, true);
        echo "\" height=\"26\" title=\"twitter\"></a></li>
            <li > <a href=\"http://facebook.com\"><img class=\"icon\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sistema/images/icons/facebook.png"), "html", null, true);
        echo "\" width=\"26\" height=\"26\" title=\"facebook\"></a></li>
            <li><a href=\"http://twitter.com\"><img class=\"icon\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sistema/images/icons/twitter.png"), "html", null, true);
        echo "\" width=\"26\" height=\"26\" title=\"twitter\"></a></li>
            <li><a href=\"https://es.linkedin.com/\"><img class=\"icon\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sistema/images/icons/linkenin.png"), "html", null, true);
        echo "\" width=\"26\" height=\"26\" title=\"linkendin\"></a></li>     
          </ul>      
        </nav>\t<!-- Navigation End --> 
      </div><!--/top-->";
    }

    public function getTemplateName()
    {
        return "ProyectoPrincipalBundle:Helpers:top.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 27,  89 => 26,  85 => 25,  81 => 24,  77 => 23,  68 => 17,  60 => 14,  54 => 13,  48 => 12,  45 => 11,  39 => 9,  33 => 7,  31 => 6,  27 => 5,  19 => 1,);
    }
}
