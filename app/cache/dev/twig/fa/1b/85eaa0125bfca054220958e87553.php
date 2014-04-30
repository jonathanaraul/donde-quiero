<?php

/* ProyectoPrincipalBundle:Default:base.html.twig */
class __TwigTemplate_fa1b85eaa0125bfca054220958e87553 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'estilos' => array($this, 'block_estilos'),
            'scripts' => array($this, 'block_scripts'),
            'contenedorbase' => array($this, 'block_contenedorbase'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>

<html>
  <head>
     <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
     <meta name=\"viewport\" content=\"width=device-width, minimum-scale=1.0, maximum-scale=1.0\">
     <title>Show me</title>
     <meta name=\"description\" content=\"La Web que te ayuda a encontrar locales y todo lo que necesitas para la organización de cursos, de eventos o fiesta presentación. Eventos, locales, Centros y Servicios\">
     <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sistema/css/style.css"), "html", null, true);
        echo "\">
     <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sistema/css/font.css"), "html", null, true);
        echo "\">
     ";
        // line 11
        $this->displayBlock('estilos', $context, $blocks);
        // line 13
        echo "    <!--<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>-->
    <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sistema/scripts/jquery-1.7.1.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sistema/scripts/jquery.carouFredSel-5.5.2.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sistema/scripts/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sistema/scripts/scripts.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sistema/scripts/gallery.js"), "html", null, true);
        echo "\"></script>  
    <script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sistema/scripts/procesos.js"), "html", null, true);
        echo "\"></script>  
    ";
        // line 20
        $this->displayBlock('scripts', $context, $blocks);
        // line 22
        echo "    <script type=\"text/javascript\">
    \tvar direccionGuardarUsuario = \"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_principal_cuenta_guardar"), "html", null, true);
        echo "\";
      var direccionEnviarMensaje = \"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_contacto_enviar_mensaje"), "html", null, true);
        echo "\";
    </script>
    <link href=\"//fonts.googleapis.com/css?family=Roboto:100italic,100,300italic,300,400italic,400,500italic,500,700italic,700,900italic,900\" rel=\"stylesheet\" type=\"text/css\">
  </head>
  <!-- END OF DON'T TOUCH -->
  <body>
   
  \t";
        // line 31
        $this->displayBlock('contenedorbase', $context, $blocks);
        // line 33
        echo "    
    <!-- DON'T TOUCH THIS SECTION -->

    <div id=\"footer\">
    \t<div class=\"wrapper\">
        \t<div class=\"left\">
        \t<h4> Contacto</h4>
          <p style=\"color:#FFF\"> Para cualquier duda o pregunta que les surja, por favor no duden en contactar con nosotros a través del formulario. Le contestaremos lo antes posible. Muchas gracias. </p>    
            </div>

    <!-- DON'T TOUCH THIS SECTION END -->        
            
       \t  <div class=\"right\">
           
                <div id=\"formulario-mensaje\">
                 <h2>Formulario</h2>
                   
                  <input type=\"text\" class=\"formstyle formulario-mensaje\" title=\"Nombre\" name=\"name\" id=\"nombre-mensaje\" />
                  <input type=\"text\" class=\"formstyle formulario-mensaje\" title=\"E-mail\" name=\"email\"  id=\"email-mensaje\"/>
                  <textarea name=\"message\" title=\"Mensaje\" class=\"formulario-mensaje\"  id=\"mensaje-mensaje\"></textarea>
                  <input class=\"formstyletwo\" type=\"submit\" value=\"Enviar\" id=\"boton-formulario-mensaje\">  
                   
                  <div id=\"error-mensaje\"></div>
                </div>
                <div id=\"loader-mensaje\" style=\"display:none\">
                  <p style=\"text-align: center;padding-left: 60px;\">
                    <img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sistema/images/loadernegro.gif"), "html", null, true);
        echo "\" style=\"width: 100px;\">
                  </p>
                </div>
    
                 <h2 id=\"exito-mensaje\" style=\"display:none;text-align: center;margin-top: 3px;font-size: 148%;\"> Mensaje enviado...</h2> 
            
            </div> 
          <div class=\"clearfix\"></div>
          
        <a href=\"ayuda.html\"> Ayuda / Condiciones Legales / Quiénes Somos </a></div>
        <div class=\"clearfix\"></div>
    </div>

    <!-- SLIDESHOW SCRIPT START -->
    <script type=\"text/javascript\">
    \$(\"#slider\").carouFredSel({
    \tresponsive\t: true,
    \tscroll\t\t: {
    \t\tfx\t\t\t: \"crossfade\",
    \t\teasing\t\t: \"swing\",
    \t\tduration\t: 1000,
    \t\t
    \t},
    \titems\t\t: {
    \t\tvisible\t\t: 1,
    \t\theight\t\t: \"27%\"
    \t}
    });
    </script>
    <!-- SLIDESHOW SCRIPT END -->
  </body>
</html>

<!-- Thanks for looking at Liquid Gem! I hope you find it useful :) -->
";
    }

    // line 11
    public function block_estilos($context, array $blocks = array())
    {
        // line 12
        echo "     ";
    }

    // line 20
    public function block_scripts($context, array $blocks = array())
    {
        // line 21
        echo "    ";
    }

    // line 31
    public function block_contenedorbase($context, array $blocks = array())
    {
        // line 32
        echo "  \t";
    }

    public function getTemplateName()
    {
        return "ProyectoPrincipalBundle:Default:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 32,  171 => 31,  167 => 21,  164 => 20,  160 => 12,  157 => 11,  118 => 59,  90 => 33,  88 => 31,  78 => 24,  74 => 23,  71 => 22,  69 => 20,  65 => 19,  61 => 18,  57 => 17,  53 => 16,  45 => 14,  42 => 13,  36 => 10,  22 => 1,  1009 => 790,  1005 => 789,  954 => 741,  937 => 729,  922 => 719,  907 => 709,  893 => 700,  878 => 690,  863 => 680,  848 => 670,  834 => 661,  767 => 599,  763 => 598,  716 => 554,  708 => 549,  693 => 539,  678 => 529,  663 => 519,  649 => 510,  634 => 500,  619 => 490,  604 => 480,  590 => 471,  532 => 418,  528 => 417,  428 => 320,  418 => 313,  402 => 302,  387 => 292,  372 => 282,  358 => 273,  344 => 264,  329 => 254,  314 => 244,  300 => 235,  217 => 157,  213 => 156,  113 => 59,  94 => 43,  83 => 35,  72 => 27,  63 => 21,  51 => 11,  49 => 15,  47 => 9,  43 => 7,  40 => 11,  32 => 9,  29 => 2,);
    }
}
