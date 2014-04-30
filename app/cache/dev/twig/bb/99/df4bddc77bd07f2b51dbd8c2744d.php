<?php

/* ProyectoPrincipalBundle:Default:registro.html.twig */
class __TwigTemplate_bb99df4bddc77bd07f2b51dbd8c2744d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ProyectoPrincipalBundle:Default:base.html.twig");

        $this->blocks = array(
            'scripts' => array($this, 'block_scripts'),
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

    // line 2
    public function block_scripts($context, array $blocks = array())
    {
        // line 3
        echo "<script type=\"text/javascript\">
  var direccionBuscarCiudad = \"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_users_buscar_ciudad"), "html", null, true);
        echo "\";
</script>
";
    }

    // line 8
    public function block_contenedorbase($context, array $blocks = array())
    {
        // line 9
        echo "
   <!-- Text Section End -->
    
   <header>\t<!-- Header Title Start -->
     <h1>&nbsp;</h1>

   </header>\t<!-- Header Title End -->

   <div class=\"inicio\">
    <div id=\"forminicio\">
      <form action=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " id=\"usuarioRegistroFormulario\">

        <h3 > Inscríbete gratis</h3>
        <h4>";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "</h4>

        <p>  Rellena los siguientes datos para crear un perfil de usuario                   </p>



        ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget', array("attr" => array("class" => "formstyle", "placeholder" => "E-Mail")));
        echo "
        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre"), 'widget', array("attr" => array("class" => "formstyle", "placeholder" => "Nombre")));
        echo "
        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellido"), 'widget', array("attr" => array("class" => "formstyle", "placeholder" => "Apellidos")));
        echo "

        ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono"), 'widget', array("attr" => array("class" => "formstyle", "placeholder" => "Telefono")));
        echo "
        <p>Datos de acceso</p>
        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username"), 'widget', array("attr" => array("class" => "formstyle", "placeholder" => "Usuario")));
        echo "
        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'widget', array("attr" => array("class" => "formstyle", "placeholder" => "Contraseña")));
        echo "

        <p style=\"float:left\"> Foto de perfil   </p><!-- <div class=\"enviar\">Buscar imagen .. Examinar</div>-->

        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file"), 'widget', array("attr" => array("class" => "formstyle", "accept" => "image/*")));
        echo "
        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion"), 'widget', array("attr" => array("placeholder" => "Descripcion")));
        echo "
        ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pais"), 'widget', array("attr" => array("class" => "formstyle", "placeholder" => "Pais", "value" => "España", "readonly" => "")));
        echo "
        <p>Provincia</p>
        ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "provincia"), 'widget', array("attr" => array("class" => "formstyle")));
        echo "
        <p>Localidad</p>
        ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "localidad"), 'widget', array("attr" => array("class" => "formstyle")));
        echo "
        <p>¿Cómo nos ha conocido?</p>
        ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "marketing"), 'widget', array("attr" => array("class" => "formstyle")));
        echo "

        <p> ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "eventos"), 'widget');
        echo "Disponible para organizar eventos</p>

        
        <input type=\"submit\" class=\"botonSubmitFormulario formstyle \">


        ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "



        <p>&nbsp;</p>
        <div class=\"clearfix\"></div>    
      </form>                     
    </div>

    <div id=\"loader\" style=\"display:none\">
      <p style=\"text-align:center\">
        <img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sistema/images/loader.gif"), "html", null, true);
        echo "\" style=\"width: 100px;\">
      </p>
    </div>
    <div id=\"error\"></div>
    <div class=\"clearfix\"></div>
      <!--  <p> <input name=\"condiciones\" type=\"checkbox\" >
      <a href=\"ayuda.html\"> Acepto las condiciones de uso y la política de privacidad</a></p></div>-->
    </div> 
    <div class=\"clearfix\"></div>
    <div id=\"espacios\" ></div>
    <div id=\"eventos\" ></div>
    <div id=\"servicios\" ></div>
    <div class=\"clearfix\"></div>
  

<!-- TO MAKE THE PHP FORM WORK, ALL YOU NEED TO DO IS OPEN UP THE FILE CALLED 'submitemail.php' AND CHANGE WHERE IT SAYS 'your email goes here' -->

<!-- DON'T TOUCH THIS SECTION -->

";
    }

    public function getTemplateName()
    {
        return "ProyectoPrincipalBundle:Default:registro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 66,  140 => 55,  131 => 49,  126 => 47,  121 => 45,  116 => 43,  111 => 41,  107 => 40,  103 => 39,  96 => 35,  92 => 34,  87 => 32,  82 => 30,  78 => 29,  74 => 28,  65 => 22,  57 => 19,  45 => 9,  42 => 8,  35 => 4,  32 => 3,  29 => 2,);
    }
}
