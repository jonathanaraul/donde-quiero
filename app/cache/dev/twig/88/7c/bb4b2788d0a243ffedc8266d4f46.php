<?php

/* ProyectoPrincipalBundle:Default:acceso.html.twig */
class __TwigTemplate_887cbb4b2788d0a243ffedc8266d4f46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ProyectoPrincipalBundle:Default:base.html.twig");

        $this->blocks = array(
            'contenedorbase' => array($this, 'block_contenedorbase'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ProyectoPrincipalBundle:Default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_contenedorbase($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"wrapper\">

 ";
        // line 6
        $this->env->loadTemplate("ProyectoPrincipalBundle:Helpers:top.html.twig")->display(array_merge($context, array("clase" => "gris")));
        // line 7
        echo "    <!-- Text Section End -->
    
  <header>\t<!-- Header Title Start -->
    \t<h1>&nbsp;</h1>
       
  </header>\t<!-- Header Title End -->
  
  <div class=\"inicio\">   
    <div id=\"forminicio\">
      <h3 >Inicio de Sesión</h3>    
      <form action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_check"), "html", null, true);
        echo "\" method=\"post\" id=\"submitform\"  >
        <p>   Si ya está registrado, por favor, introduzca su nombre de usuario y contraseña para Iniciar su sesión                   
          </p>
        <input type=\"text\" class=\"formstyle\" title=\"Nombre\" name=\"_username\" id=\"nombreusuario\"  value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["ultimo_nombreusuario"]) ? $context["ultimo_nombreusuario"] : $this->getContext($context, "ultimo_nombreusuario")), "html", null, true);
        echo "\"  />
        <input type=\"password\" class=\"formstyle\" title=\"Contraseña\"  name=\"_password\"/>
        <p><a href=\"#\" title=\"Inscribirse\">Recordar Contraseña</a></p>
        <div class=\"clearfix\"></div>        

      </form><div class=\"enviar\"><a href=\"javascript:void(0)\" title=\"Perfil\" id=\"botonAcceder\">Acceder</a></div>
      <div id=\"error\"></div>
      <div class=\"clearfix\"></div>
      <p>¿Aún no estas registrado? <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_perfil_crearcuenta"), "html", null, true);
        echo "\" title=\"Inscribirse\">Inscríbete ahora.</a> </p>
    </div>
  </div> 
  <div class=\"clearfix\"></div>
  <div id=\"espacios\" ></div>
  <div id=\"eventos\" ></div>
  <div id=\"servicios\" ></div>
  <div class=\"clearfix\"></div>
</div> <!-- Work Links Section End -->
    <!-- Last Words Section End-->
<div id=\"sedes\" ></div>

<!-- TO MAKE THE PHP FORM WORK, ALL YOU NEED TO DO IS OPEN UP THE FILE CALLED 'submitemail.php' AND CHANGE WHERE IT SAYS 'your email goes here' -->

<!-- DON'T TOUCH THIS SECTION -->


";
    }

    public function getTemplateName()
    {
        return "ProyectoPrincipalBundle:Default:acceso.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 28,  55 => 20,  49 => 17,  37 => 7,  35 => 6,  31 => 4,  28 => 3,);
    }
}
