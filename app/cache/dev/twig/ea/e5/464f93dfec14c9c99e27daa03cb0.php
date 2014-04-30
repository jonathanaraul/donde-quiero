<?php

/* ProyectoPrincipalBundle:Default:index.html.twig */
class __TwigTemplate_eae5464f93dfec14c9c99e27daa03cb0 extends Twig_Template
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
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sistema/scripts/jquery.form.js"), "html", null, true);
        echo "\"></script>

";
    }

    // line 6
    public function block_contenedorbase($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"wrapper\">

\t";
        // line 9
        $this->env->loadTemplate("ProyectoPrincipalBundle:Helpers:top.html.twig")->display(array_merge($context, array("clase" => "gris")));
        // line 10
        echo "\t";
        $this->env->loadTemplate("ProyectoPrincipalBundle:Default:sesion.html.twig")->display(array_merge($context, array("datos" => (isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")))));
        // line 11
        echo "
\t<header>
\t\t<!-- Header Title Start -->
\t\t<h1>encuentra, ofrece, gestiona tus ...</h1>

\t</header>
\t<!-- Header Title End -->

\t<nav id=\"destacados\">

\t\t<ul>
\t\t\t<li>
\t\t\t\t<div class=\"item2\">
\t\t\t\t\t<a href=\"#espacios\"><img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sistema/images/icons/espaciosg.png"), "html", null, true);
        echo "\" title=\"Espacios\"></a>
\t\t\t\t\t<!-- Image must be 400px by 300px -->
\t\t\t\t\t<h4 style=\"color:#9BC321\">Espacios</h4><!--Title-->

\t\t\t\t</div><!--/item-->
\t\t\t</li>

\t\t\t<li>
\t\t\t\t<div class=\"item1\">
\t\t\t\t\t<a href=\"#eventos\"><img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sistema/images/icons/eventog.png"), "html", null, true);
        echo "\" title=\"Eventos\"></a>
\t\t\t\t\t<!-- Image must be 400px by 300px -->
\t\t\t\t\t<h4 style=\"color:#ED4CB7\">Eventos</h4><!--Title-->

\t\t\t\t</div><!--/item-->
\t\t\t</li>

\t\t\t<li>

\t\t\t\t<div class=\"item1\">
\t\t\t\t\t<a href=\"#servicios\"><img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sistema/images/icons/serviciog.png"), "html", null, true);
        echo "\" title=\"Servicios\"></a>
\t\t\t\t\t<!-- Image must be 400px by 300px -->
\t\t\t\t\t<h4 style=\"color:#43C0EF\">Servicios</h4><!--Title-->

\t\t\t\t</div><!--/item-->
\t\t\t</li>

\t\t\t<li>

\t\t\t\t<div class=\"item1\">
\t\t\t\t\t<a href=\"#sedes\"><img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sistema/images/icons/centro.png"), "html", null, true);
        echo "\" title=\"Sedes\"></a>
\t\t\t\t\t<!-- Image must be 400px by 300px -->
\t\t\t\t\t<h4 style=\"color:#F2D900\">Sedes</h4><!--Title-->

\t\t\t\t</div><!--/item-->
\t\t\t</li>
\t\t</ul>
\t\t<div class=\"clearfix\"></div>
\t</nav>

\t<div id=\"espacios\" ></div>
\t<div class=\"verde\" id=\"work\"  >
\t\t<!-- Work Links Section Start -->
\t\t<div class=\"añadir\">
\t\t\t<a href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_principal_espacios"), "html", null, true);
        echo "\">Espacios</a><!--/item-->
\t\t</div>
\t\t<div class=\"buscador\">
\t\t\t<select name=\"Ciudad...\" title=\"Ciudad..\" class=\"formstyle\">
\t\t\t\t<option value=\"Madrid\"> Ciudad </option>
\t\t\t\t<option value=\"Madrid\"> Todas </option>
\t\t\t\t<option value=\"Barcelona\"> Madrid(2) </option>
\t\t\t\t<option value=\"Barcelona\"> Barcelona(3)</option>
\t\t\t\t<option value=\"Tenerife\"> Las Palmas(1) </option>
\t\t\t\t<option value=\"Tenerife\"> A Coruña(1) </option>
\t\t\t</select>
\t\t</div><!--/item-->

\t\t<div class=\"buscador\">
\t\t\t<select name=\"Fecha...\" title=\"Disponibilidad..\" class=\"formstyle\">
\t\t\t\t<option value=\"Madrid\"> Disponibilidad </option>
\t\t\t\t<option value=\"Madrid\"> Todo </option>

\t\t\t\t<option value=\"Madrid\"> Enero </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8:00-14:00 </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 14:00-22:00 </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;fin de semana </option>

\t\t\t\t<option value=\"Madrid\"> Febrero </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8:00-14:00 </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 14:00-22:00 </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; fin de semana </option>

\t\t\t\t<option value=\"Madrid\"> Marzo </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8:00-14:00 </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 14:00-22:00 </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; fin de semana </option>

\t\t\t\t<option value=\"Madrid\"> Abril </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8:00-14:00 </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 14:00-22:00 </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; fin de semana </option>

\t\t\t\t<option value=\"Madrid\"> Mayo </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8:00-14:00 </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 14:00-22:00 </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; fin de semana </option>

\t\t\t\t<option value=\"Madrid\"> Junio </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8:00-14:00 </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 14:00-22:00 </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; fin de semana </option>

\t\t\t\t<option value=\"Madrid\"> Julio </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8:00-14:00 </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 14:00-22:00 </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; fin de semana </option>

\t\t\t\t<option value=\"Madrid\"> Agosto </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8:00-14:00 </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 14:00-22:00 </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;  fin de semana </option>

\t\t\t\t<option value=\"Madrid\"> Septiembre </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8:00-14:00 </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 14:00-22:00 </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;  fin de semana </option>

\t\t\t\t<option value=\"Madrid\"> Octubre </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8:00-14:00 </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 14:00-22:00 </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;  fin de semana </option>

\t\t\t\t<option value=\"Madrid\"> Noviembre </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8:00-14:00 </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 14:00-22:00 </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;  fin de semana </option>

\t\t\t\t<option value=\"Madrid\"> Diciembre </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8:00-14:00 </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 14:00-22:00 </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;  fin de semana </option>

\t\t\t</select>
\t\t</div><!--/item-->

\t\t<div class=\"buscador\">
\t\t\t<select name=\"Ciudades...\" title=\"Ciudades..\" class=\"formstyle\">
\t\t\t\t<option value=\"Madrid\"> Calidad y Precio €/h </option>
\t\t\t\t<option value=\"Madrid\"> Todas </option>

\t\t\t\t<option value=\"Madrid\"> Low Cost... hasta 20 </option>
\t\t\t\t<option value=\"Barcelona\">Normal... hasta 300</option>
\t\t\t\t<option value=\"Tenerife\"> Alto...  hasta 3000</option>
\t\t\t\t<option value=\"Tenerife\"> Especial...  hasta 10000</option>
\t\t\t\t<option value=\"Tenerife\"> Singular...  más de 10000</option>
\t\t\t</select>
\t\t</div><!--/item-->

\t\t<div class=\"añadir\">
\t\t\t<ul>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_principal_espacio_registrar"), "html", null, true);
        echo "\"><img class=\"icon\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sistema/images/icons/mas.png"), "html", null, true);
        echo "\" width=\"27\" height=\"27\" title=\"Añadir Gratis\"></a>
\t\t\t\t</li>
\t\t\t\t<li style=\"float:right;\">
\t\t\t\t\t<a href=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_principal_espacios"), "html", null, true);
        echo "\"><img class=\"icon\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sistema/images/icons/buscar.png"), "html", null, true);
        echo "\" width=\"27\" height=\"27\" alt=\"Buscar\"></a></a>
\t\t\t</ul>
\t\t</div><!--/item--><!--/item--><!--/item-->

\t\t<div class=\"buscador\">
\t\t\t<select name=\"Ciudades...\" title=\"Ciudades..\" class=\"formstyle\">
\t\t\t\t<option value=\"Madrid\"> Personas y disposición </option>
\t\t\t\t<option value=\"Madrid\"> Todas </option>

\t\t\t\t<option value=\"Madrid\"> Modo Escuela </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; _hasta 10 </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; _hasta 100 </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; _más de 100 </option>

\t\t\t\t<option value=\"Madrid\"> Banquete (con mesas) </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; _hasta 30 </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; _hasta 100 </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; _más de 100 </option>

\t\t\t\t<option value=\"Madrid\"> Modo Cocktail (de pie) </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; _hasta 30 </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; _hasta 100 </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; _más de 100 </option>

\t\t\t\t<option value=\"Madrid\"> Modo Teatro </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; _hasta 30 </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; _hasta 100 </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; _más de 100 </option>

\t\t\t\t<option value=\"Madrid\"> Modo Exposición </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; _hasta 30 </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; _hasta 100 </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; _más de 100 </option>

\t\t\t</select>
\t\t</div><!--/item-->

\t\t<div class=\"buscador\">
\t\t\t<select name=\"Fecha...\" title=\"Fecha..\" class=\"formstyle\">
\t\t\t\t<option value=\"Madrid\"> M2 </option>
\t\t\t\t<option value=\"Madrid\"> Todas </option>

\t\t\t\t<option value=\"Madrid\"> hasta 15 </option>
\t\t\t\t<option value=\"Madrid\"> hasta 30 </option>
\t\t\t\t<option value=\"Madrid\"> hasta 100 </option>
\t\t\t\t<option value=\"Madrid\"> hasta 500 </option>
\t\t\t\t<option value=\"Madrid\"> hasta 2000 </option>
\t\t\t\t<option value=\"Madrid\"> más de 2000 </option>

\t\t\t</select>
\t\t</div><!--/item-->

\t\t<div class=\"buscador\">
\t\t\t<select name=\"Fecha...\" title=\"Fecha..\" class=\"formstyle\">
\t\t\t\t<option value=\"Madrid\"> Actividades Posibles </option>
\t\t\t\t<option value=\"Madrid\"> Todas </option>

\t\t\t\t<option value=\"Madrid\"> Formación Teórica</option>
\t\t\t\t<option value=\"Barcelona\"> Formación Informática </option>
\t\t\t\t<option value=\"Barcelona\"> Formación Taller</option>
\t\t\t\t<option value=\"Barcelona\"> Venta, Feria</option>
\t\t\t\t<option value=\"Barcelona\"> Deporte</option>
\t\t\t\t<option value=\"Barcelona\"> Espectáculo</option>
\t\t\t\t<option value=\"Barcelona\"> Reunión o asamblea</option>
\t\t\t\t<option value=\"Barcelona\"> Boda</option>
\t\t\t\t<option value=\"Barcelona\"> Fiesta</option>
\t\t\t\t<option value=\"Barcelona\"> Jardín</option>

\t\t\t</select>
\t\t</div><!--/item-->
\t\t<!--/item-->
\t\t<div class=\"item\">
\t\t\t<a href=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_principal_espacio"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sistema/images/work/thumbs/espacio1.png"), "html", null, true);
        echo "\" alt=\"image 1\"></a><!-- Image must be 400px by 300px -->
\t\t\t<h3>Salón de Actos</h3><!--Title-->
\t\t\t<ul>
\t\t\t\t<li class=\"izquierda\">
\t\t\t\t\tMadrid
\t\t\t\t</li>
\t\t\t\t<li class=\"izquierda\">
\t\t\t\t\t380 m2
\t\t\t\t</li>
\t\t\t\t<li class=\"derecha\">
\t\t\t\t\tPrecio
\t\t\t\t</li>
\t\t\t</ul><!--Category-->
\t\t</div><!--/item-->

\t\t<div class=\"item\">
\t\t\t<a href=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_principal_espacio"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sistema/images/work/thumbs/espacio2.png"), "html", null, true);
        echo "\" alt=\"image 2\"></a><!-- Image must be 400px by 300px -->

\t\t\t<h3>Sala Mercadal</h3><!--Title-->
\t\t\t<ul>
\t\t\t\t<li class=\"izquierda\">
\t\t\t\t\tMadrid
\t\t\t\t</li>
\t\t\t\t<li class=\"izquierda\">
\t\t\t\t\t360 m2
\t\t\t\t</li>
\t\t\t\t<li class=\"derecha\">
\t\t\t\t\tPrecio
\t\t\t\t</li>
\t\t\t</ul><!--Category-->
\t\t</div><!--/item-->

\t\t<div class=\"item\">
\t\t\t<a href=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_principal_espacio"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sistema/images/work/thumbs/espacio3.png"), "html", null, true);
        echo "\" alt=\"image 3\"></a><!-- Image must be 400px by 300px -->

\t\t\t<h3>Sala de Reuniones</h3><!--Title-->
\t\t\t<ul>
\t\t\t\t<li class=\"izquierda\">
\t\t\t\t\tMadrid
\t\t\t\t</li>
\t\t\t\t<li class=\"izquierda\">
\t\t\t\t\t50 m2
\t\t\t\t</li>
\t\t\t\t<li class=\"derecha\">
\t\t\t\t\tPrecio
\t\t\t\t</li>
\t\t\t</ul><!--Category-->
\t\t</div><!--/item-->

\t\t<div class=\"item\">
\t\t\t<a href=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_principal_espacio"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sistema/images/work/thumbs/espacio4.png"), "html", null, true);
        echo "\" alt=\"image 4\"></a><!-- Image must be 400px by 300px -->

\t\t\t<h3>Sala Triangular</h3><!--Title-->
\t\t\t<ul>
\t\t\t\t<li class=\"izquierda\">
\t\t\t\t\tMadrid
\t\t\t\t</li>
\t\t\t\t<li class=\"izquierda\">
\t\t\t\t\t300 m2
\t\t\t\t</li>
\t\t\t\t<li class=\"derecha\">
\t\t\t\t\tPrecio
\t\t\t\t</li>
\t\t\t</ul><!--Category-->
\t\t</div><!--/item-->
\t\t<div class=\"item\">
\t\t\t<a href=\"";
        // line 305
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_principal_espacio"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sistema/images/work/thumbs/espacio9.png"), "html", null, true);
        echo "\" alt=\"image 1\"></a><!-- Image must be 400px by 300px -->
\t\t\t<h3>Sala</h3><!--Title-->
\t\t\t<ul>
\t\t\t\t<li class=\"izquierda\">
\t\t\t\t\tLas Palmas
\t\t\t\t</li>
\t\t\t\t<li class=\"izquierda\">
\t\t\t\t\t200 m2
\t\t\t\t</li>
\t\t\t\t<li class=\"derecha\">
\t\t\t\t\tPrecio
\t\t\t\t</li>
\t\t\t</ul><!--Category-->
\t\t</div><!--/item-->

\t\t<div class=\"item\">
\t\t\t<a href=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_principal_espacio"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sistema/images/work/thumbs/espacio11.png"), "html", null, true);
        echo "\" alt=\"image 2\"></a><!-- Image must be 400px by 300px -->

\t\t\t<h3>Espacio díafano</h3><!--Title-->
\t\t\t<ul>
\t\t\t\t<li class=\"izquierda\">
\t\t\t\t\tLas Palmas
\t\t\t\t</li>
\t\t\t\t<li class=\"izquierda\">
\t\t\t\t\t450 m2
\t\t\t\t</li>
\t\t\t\t<li class=\"derecha\">
\t\t\t\t\tPrecio
\t\t\t\t</li>
\t\t\t</ul><!--Category-->
\t\t</div><!--/item-->

\t\t<div class=\"item\">
\t\t\t<a href=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_principal_espacio"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sistema/images/work/thumbs/espacio7.png"), "html", null, true);
        echo "\" alt=\"image 3\"></a><!-- Image must be 400px by 300px -->

\t\t\t<h3>Aula </h3><!--Title-->
\t\t\t<ul>
\t\t\t\t<li class=\"izquierda\">
\t\t\t\t\tMadrid
\t\t\t\t</li>
\t\t\t\t<li class=\"izquierda\">
\t\t\t\t\t31 m2
\t\t\t\t</li>
\t\t\t\t<li class=\"derecha\">
\t\t\t\t\tPrecio
\t\t\t\t</li>
\t\t\t</ul><!--Category-->
\t\t</div><!--/item-->

\t\t<div class=\"item\">
\t\t\t<a href=\"";
        // line 355
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_principal_espacio"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sistema/images/work/thumbs/espacio8.png"), "html", null, true);
        echo "\" alt=\"image 4\"></a><!-- Image must be 400px by 300px -->

\t\t\t<h3>Salón de Actos</h3><!--Title-->
\t\t\t<ul>
\t\t\t\t<li class=\"izquierda\">
\t\t\t\t\tMadrid
\t\t\t\t</li>
\t\t\t\t<li class=\"izquierda\">
\t\t\t\t\t1000 m2
\t\t\t\t</li>
\t\t\t\t<li class=\"derecha\">
\t\t\t\t\tPrecio
\t\t\t\t</li>
\t\t\t</ul><!--Category-->
\t\t</div><!--/item-->

\t\t<div class=\"clearfix\"></div>
\t\t<div id=\"contador\">
\t\t\t<a href=\"";
        // line 373
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_principal_espacios"), "html", null, true);
        echo "\">8 de 100 (Ver más)</a>
\t\t</div>
\t</div>
\t<div id=\"eventos\" ></div>

\t<div id=\"work\"  class=\"rosa\">
\t\t<!-- Work Links Section Start -->

\t\t<div class=\"añadir\">
\t\t\t<a href=\"";
        // line 382
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_principal_eventos"), "html", null, true);
        echo "\">Eventos</a><!--/item-->
\t\t</div>
\t\t<div class=\"buscador\">
\t\t\t<select name=\"Ciudad...\" title=\"Ciudad..\" class=\"formstyle\">
\t\t\t\t<option value=\"Madrid\"> Ciudad </option>
\t\t\t\t<option value=\"Madrid\"> Todas </option>
\t\t\t\t<option value=\"Barcelona\"> Madrid(2) </option>
\t\t\t\t<option value=\"Barcelona\"> Barcelona(3)</option>
\t\t\t\t<option value=\"Tenerife\"> Las Palmas(1) </option>
\t\t\t\t<option value=\"Tenerife\"> A Coruña(1) </option>
\t\t\t</select>
\t\t</div><!--/item-->

\t\t<div class=\"buscador\">
\t\t\t<select name=\"Fecha...\" title=\"Disponibilidad..\" class=\"formstyle\">
\t\t\t\t<option value=\"Madrid\"> Disponibilidad </option>
\t\t\t\t<option value=\"Madrid\"> Todo </option>

\t\t\t\t<option value=\"Madrid\"> Enero </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8:00-14:00 </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 14:00-22:00 </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;fin de semana </option>

\t\t\t\t<option value=\"Madrid\"> Febrero </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8:00-14:00 </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 14:00-22:00 </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; fin de semana </option>

\t\t\t\t<option value=\"Madrid\"> Marzo </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8:00-14:00 </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 14:00-22:00 </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; fin de semana </option>

\t\t\t\t<option value=\"Madrid\"> Abril </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8:00-14:00 </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 14:00-22:00 </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; fin de semana </option>

\t\t\t\t<option value=\"Madrid\"> Mayo </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8:00-14:00 </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 14:00-22:00 </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; fin de semana </option>

\t\t\t\t<option value=\"Madrid\"> Junio </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8:00-14:00 </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 14:00-22:00 </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; fin de semana </option>

\t\t\t\t<option value=\"Madrid\"> Julio </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8:00-14:00 </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 14:00-22:00 </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; fin de semana </option>

\t\t\t\t<option value=\"Madrid\"> Agosto </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8:00-14:00 </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 14:00-22:00 </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;  fin de semana </option>

\t\t\t\t<option value=\"Madrid\"> Septiembre </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8:00-14:00 </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 14:00-22:00 </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;  fin de semana </option>

\t\t\t\t<option value=\"Madrid\"> Octubre </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8:00-14:00 </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 14:00-22:00 </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;  fin de semana </option>

\t\t\t\t<option value=\"Madrid\"> Noviembre </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8:00-14:00 </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 14:00-22:00 </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;  fin de semana </option>

\t\t\t\t<option value=\"Madrid\"> Diciembre </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 8:00-14:00 </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 14:00-22:00 </option>
\t\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;  fin de semana </option>

\t\t\t</select>
\t\t</div><!--/item-->

\t\t<div class=\"buscador\">
\t\t\t<select name=\"Ciudades...\" title=\"Ciudades..\" class=\"formstyle\">
\t\t\t\t<option value=\"Madrid\"> Coste por hora (€/h) </option>
\t\t\t\t<option value=\"Madrid\"> Todos </option>

\t\t\t\t<option value=\"Madrid\"> Gratis </option>
\t\t\t\t<option value=\"Barcelona\">hasta 20</option>
\t\t\t\t<option value=\"Tenerife\"> hasta 300</option>
\t\t\t\t<option value=\"Tenerife\"> hasta 1000</option>
\t\t\t\t<option value=\"Tenerife\"> más de 1000</option>
\t\t\t</select>
\t\t</div><!--/item-->

\t\t<div class=\"añadir\">
\t\t\t<ul>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"registro.html\"><img class=\"icon\" src=\"";
        // line 479
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sistema/images/icons/mas.png"), "html", null, true);
        echo "\" width=\"27\" height=\"27\" title=\"Añadir Gratis\"></a>
\t\t\t\t</li>
\t\t\t\t<li style=\"float:right;\">
\t\t\t\t\t<a href=\"";
        // line 482
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_principal_eventos"), "html", null, true);
        echo "\"><img class=\"icon\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sistema/images/icons/buscar.png"), "html", null, true);
        echo "\" width=\"27\" height=\"27\" alt=\"Buscar\"></a></a>
\t\t\t</ul>
\t\t</div>
\t\t<div class=\"buscador\">
\t\t\t<select name=\"Ciudades...\" title=\"Ciudades..\" class=\"formstyle\">
\t\t\t\t<option value=\"Madrid\"> Precio Total (€) </option>
\t\t\t\t<option value=\"Madrid\"> Todos </option>

\t\t\t\t<option value=\"Madrid\"> Gratis </option>
\t\t\t\t<option value=\"Barcelona\">hasta 20</option>
\t\t\t\t<option value=\"Tenerife\"> hasta 100</option>
\t\t\t\t<option value=\"Tenerife\"> hasta 300</option>
\t\t\t\t<option value=\"Tenerife\"> hasta 1000</option>
\t\t\t\t<option value=\"Tenerife\"> hasta 5000</option>
\t\t\t\t<option value=\"Tenerife\"> hasta 10000</option>
\t\t\t\t<option value=\"Tenerife\"> más de 10000</option>
\t\t\t</select>
\t\t</div><!--/item-->

\t\t<div class=\"buscador\">
\t\t\t<select name=\"Ciudades...\" title=\"Ciudades..\" class=\"formstyle\">
\t\t\t\t<option value=\"Madrid\">Duración Total (h) </option>
\t\t\t\t<option value=\"Madrid\"> Todos </option>

\t\t\t\t<option value=\"Madrid\"> 1 </option>
\t\t\t\t<option value=\"Barcelona\">hasta 4</option>
\t\t\t\t<option value=\"Tenerife\"> hasta 30</option>
\t\t\t\t<option value=\"Tenerife\"> hasta 100</option>
\t\t\t\t<option value=\"Tenerife\"> hasta 300</option>
\t\t\t\t<option value=\"Tenerife\"> más de 300</option>
\t\t\t</select>
\t\t</div><!--/item-->

\t\t<div class=\"buscador\">
\t\t\t<select name=\"Fecha...\" title=\"Fecha..\" class=\"formstyle\">
\t\t\t\t<option value=\"Madrid\"> Tipo de Actividad </option>
\t\t\t\t<option value=\"Madrid\"> Todas </option>

\t\t\t\t<option value=\"Madrid\"> Formación Teórica</option>
\t\t\t\t<option value=\"Barcelona\"> Formación Informática </option>
\t\t\t\t<option value=\"Barcelona\"> Formación Taller</option>
\t\t\t\t<option value=\"Barcelona\"> Venta, Feria</option>
\t\t\t\t<option value=\"Barcelona\"> Deporte</option>
\t\t\t\t<option value=\"Barcelona\"> Espectáculo</option>
\t\t\t\t<option value=\"Barcelona\"> Reunión o asamblea</option>
\t\t\t\t<option value=\"Barcelona\"> Boda</option>
\t\t\t\t<option value=\"Barcelona\"> Fiesta</option>
\t\t\t\t<option value=\"Barcelona\"> Jardín</option>

\t\t\t</select>
\t\t</div><!--/item-->

\t\t<div class=\"item\">
\t\t\t<a href=\"";
        // line 535
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_principal_evento"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sistema/images/work/thumbs/evento1.png"), "html", null, true);
        echo "\" alt=\"image 1\"></a><!-- Image must be 400px by 300px -->
\t\t\t<h3>TedxCanarias</h3><!--Title-->
\t\t\t<ul>
\t\t\t\t<li class=\"izquierda\">
\t\t\t\t\tLas Palmas
\t\t\t\t</li>
\t\t\t\t<li class=\"izquierda\">
\t\t\t\t\t3h
\t\t\t\t</li>
\t\t\t\t<li class=\"derecha\">
\t\t\t\t\tPrecio
\t\t\t\t</li>
\t\t\t</ul><!--Category-->
\t\t</div><!--/item-->

\t\t<div class=\"item\">
\t\t\t<a href=\"";
        // line 551
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_principal_evento"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sistema/images/work/thumbs/evento2.png"), "html", null, true);
        echo "\" alt=\"image 2\"></a><!-- Image must be 400px by 300px -->

\t\t\t<h3>Curso Eficiencia</h3><!--Title-->
\t\t\t<ul>
\t\t\t\t<li class=\"izquierda\">
\t\t\t\t\tMadrid
\t\t\t\t</li>
\t\t\t\t<li class=\"izquierda\">
\t\t\t\t\t8h
\t\t\t\t</li>
\t\t\t\t<li class=\"derecha\">
\t\t\t\t\tPrecio
\t\t\t\t</li>
\t\t\t</ul><!--Category-->
\t\t</div><!--/item-->

\t\t<div class=\"item\">
\t\t\t<a href=\"";
        // line 568
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_principal_evento"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sistema/images/work/thumbs/evento3.png"), "html", null, true);
        echo "\" alt=\"image 3\"></a><!-- Image must be 400px by 300px -->

\t\t\t<h3>Emprende Galicia</h3><!--Title-->
\t\t\t<ul>
\t\t\t\t<li class=\"izquierda\">
\t\t\t\t\tA Coruña
\t\t\t\t</li>
\t\t\t\t<li class=\"izquierda\">
\t\t\t\t\t6h
\t\t\t\t</li>
\t\t\t\t<li class=\"derecha\">
\t\t\t\t\tPrecio
\t\t\t\t</li>
\t\t\t</ul><!--Category-->
\t\t</div><!--/item-->

\t\t<div class=\"item\">
\t\t\t<a href=\"";
        // line 585
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_principal_evento"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sistema/images/work/thumbs/evento4.png"), "html", null, true);
        echo "\" alt=\"image 4\"></a><!-- Image must be 400px by 300px -->

\t\t\t<h3>Workshop Creativo</h3><!--Title-->
\t\t\t<ul>
\t\t\t\t<li class=\"izquierda\">
\t\t\t\t\tMadrid
\t\t\t\t</li>
\t\t\t\t<li class=\"izquierda\">
\t\t\t\t\t10h
\t\t\t\t</li>
\t\t\t\t<li class=\"derecha\">
\t\t\t\t\tPrecio
\t\t\t\t</li>
\t\t\t</ul><!--Category-->
\t\t</div><!--/item-->

\t\t<div class=\"item\">
\t\t\t<a href=\"";
        // line 602
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_principal_evento"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sistema/images/work/thumbs/evento5.png"), "html", null, true);
        echo "\" alt=\"image 1\"></a><!-- Image must be 400px by 300px -->
\t\t\t<h3>Creative Lab Session</h3><!--Title-->
\t\t\t<ul>
\t\t\t\t<li class=\"izquierda\">
\t\t\t\t\tCENP Madrid
\t\t\t\t</li>
\t\t\t\t<li class=\"izquierda\">
\t\t\t\t\t19/10
\t\t\t\t</li>
\t\t\t\t<li class=\"derecha\">
\t\t\t\t\tPrecio
\t\t\t\t</li>
\t\t\t</ul><!--Category-->
\t\t</div><!--/item-->

\t\t<div class=\"item\">
\t\t\t<a href=\"";
        // line 618
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_principal_evento"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sistema/images/work/thumbs/evento6.png"), "html", null, true);
        echo "\" alt=\"image 2\"></a><!-- Image must be 400px by 300px -->

\t\t\t<h3>Cata de Vinos</h3><!--Title-->
\t\t\t<ul>
\t\t\t\t<li class=\"izquierda\">
\t\t\t\t\tMadrid
\t\t\t\t</li>
\t\t\t\t<li class=\"izquierda\">
\t\t\t\t\t2h
\t\t\t\t</li>
\t\t\t\t<li class=\"derecha\">
\t\t\t\t\tPrecio
\t\t\t\t</li>
\t\t\t</ul><!--Category-->
\t\t</div><!--/item-->

\t\t<div class=\"item\">
\t\t\t<a href=\"";
        // line 635
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_principal_evento"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sistema/images/work/thumbs/evento7.png"), "html", null, true);
        echo "\" alt=\"image 3\"></a><!-- Image must be 400px by 300px -->

\t\t\t<h3>Congreso SBMAD13</h3><!--Title-->
\t\t\t<ul>
\t\t\t\t<li class=\"izquierda\">
\t\t\t\t\tMadrid
\t\t\t\t</li>
\t\t\t\t<li class=\"izquierda\">
\t\t\t\t\t10h
\t\t\t\t</li>
\t\t\t\t<li class=\"derecha\">
\t\t\t\t\tPrecio
\t\t\t\t</li>
\t\t\t</ul><!--Category-->
\t\t</div><!--/item-->

\t\t<div class=\"item\">
\t\t\t<a href=\"";
        // line 652
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_principal_evento"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sistema/images/work/thumbs/evento8.png"), "html", null, true);
        echo "\" alt=\"image 4\"></a><!-- Image must be 400px by 300px -->

\t\t\t<h3>Fiesta de Colectivos</h3><!--Title-->
\t\t\t<ul>
\t\t\t\t<li class=\"izquierda\">
\t\t\t\t\tMadrid
\t\t\t\t</li>
\t\t\t\t<li class=\"izquierda\">
\t\t\t\t\t3h
\t\t\t\t</li>
\t\t\t\t<li class=\"derecha\">
\t\t\t\t\tPrecio
\t\t\t\t</li>
\t\t\t</ul><!--Category-->
\t\t</div><!--/item-->

\t\t<div class=\"clearfix\"></div>
\t\t<div id=\"contador\">
\t\t\t<a href=\"";
        // line 670
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_principal_eventos"), "html", null, true);
        echo "\">8 de 100 (Ver más)</a>
\t\t</div>
\t</div>
\t<div id=\"servicios\" ></div>
\t<div id=\"work\"  class=\"azul\">
\t\t<!-- Work Links Section Start -->
\t\t<div class=\"añadir\">
\t\t\t<a href=\"";
        // line 677
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_principal_servicios"), "html", null, true);
        echo "\">Servicios</a><!--/item-->
\t\t</div>
\t\t<div class=\"buscador\">
\t\t\t<select name=\"Ciudades...\" title=\"Ciudad..\" class=\"formstyle\">
\t\t\t\t<option value=\"Madrid\"> Ofrecidos por.. </option>
\t\t\t\t<option value=\"Madrid\">Todos </option>
\t\t\t\t<option value=\"Barcelona\">…una sede para sus propios eventos</option>
\t\t\t\t<option value=\"Tenerife\">…una empresa para eventos de otros </option>
\t\t\t</select>
\t\t</div><!--/item-->

\t\t<div class=\"buscador\">
\t\t\t<select name=\"Fecha...\" title=\"Fecha..\" class=\"formstyle\">
\t\t\t\t<option value=\"Madrid\">Multimedia </option>
\t\t\t\t<option value=\"Madrid\">Todos </option>
\t\t\t\t<option value=\"Barcelona\">Grabación y edición vídeo </option>
\t\t\t\t<option value=\"Barcelona\">Fotógrafo del evento </option>
\t\t\t\t<option value=\"Barcelona\">Alquiler cámaras </option>
\t\t\t\t<option value=\"Barcelona\">Alquiler portátiles </option>
\t\t\t\t<option value=\"Barcelona\">Alquiler proyectores y pantallas </option>
\t\t\t\t<option value=\"Barcelona\">Sonido, Micrófono y altavoces </option>
\t\t\t\t<option value=\"Barcelona\">Iluminación </option>

\t\t\t</select>
\t\t</div><!--/item-->

\t\t<div class=\"buscador\">
\t\t\t<select name=\"Fecha...\" title=\"Fecha..\" class=\"formstyle\">
\t\t\t\t<option value=\"Madrid\">Mejora de espacios </option>
\t\t\t\t<option value=\"Madrid\">Todos </option>
\t\t\t\t<option value=\"Barcelona\">Decoración con accesorios </option>
\t\t\t\t<option value=\"Barcelona\">Floristería </option>
\t\t\t\t<option value=\"Barcelona\">Diseño de exposiciones temporales. </option>
\t\t\t\t<option value=\"Barcelona\">Montaje de exposición</option>
\t\t\t\t<option value=\"Barcelona\">Escenografía</option>
\t\t\t\t<option value=\"Barcelona\">Rehabilitación arquitectónica </option>
\t\t\t\t<option value=\"Barcelona\">Limpieza (uso normal e intensivo)  </option>
\t\t\t\t<option value=\"Barcelona\">Seguros  </option>

\t\t\t</select>
\t\t</div><!--/item-->

\t\t<div class=\"añadir\">
\t\t\t<ul>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"registro.html\"><img class=\"icon\" src=\"";
        // line 722
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sistema/images/icons/mas.png"), "html", null, true);
        echo "\" width=\"27\" height=\"27\" title=\"Añadir Gratis\"></a>
\t\t\t\t</li>
\t\t\t\t<li style=\"float:right;\">
\t\t\t\t\t<a href=\"";
        // line 725
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_principal_servicios"), "html", null, true);
        echo "\"><img class=\"icon\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sistema/images/icons/buscar.png"), "html", null, true);
        echo "\" width=\"27\" height=\"27\" alt=\"Buscar\"></a></a>
\t\t\t</ul>
\t\t</div>
\t\t<div class=\"buscador\">
\t\t\t<select name=\"Fecha...\" title=\"Fecha..\" class=\"formstyle\">
\t\t\t\t<option value=\"Madrid\">Mejora de contenidos </option>
\t\t\t\t<option value=\"Madrid\">Todos </option>
\t\t\t\t<option value=\"Barcelona\">Impresión  y grabación docs </option>
\t\t\t\t<option value=\"Barcelona\">Transporte de mercancías </option>
\t\t\t\t<option value=\"Barcelona\">Envíos </option>
\t\t\t\t<option value=\"Barcelona\">Mobiliario aula, taller, recepción...</option>
\t\t\t\t<option value=\"Barcelona\">Accesorios formación (Pizarras...)</option>
\t\t\t\t<option value=\"Barcelona\">Papelería normal y corporativa </option>
\t\t\t\t<option value=\"Barcelona\">Internet cable  </option>
\t\t\t\t<option value=\"Barcelona\">Internet WIFI </option>
\t\t\t\t<option value=\"Barcelona\">Animación </option>
\t\t\t\t<option value=\"Barcelona\">Interpretación musical </option>
\t\t\t\t<option value=\"Barcelona\">Interpretación teatral </option>

\t\t\t</select>
\t\t</div><!--/item-->

\t\t<div class=\"buscador\">
\t\t\t<select name=\"Fecha...\" title=\"Fecha..\" class=\"formstyle\">
\t\t\t\t<option value=\"Madrid\">Servicio para asistentes </option>
\t\t\t\t<option value=\"Madrid\">Todos </option>
\t\t\t\t<option value=\"Barcelona\">Catering</option>
\t\t\t\t<option value=\"Barcelona\">Azafatas</option>
\t\t\t\t<option value=\"Barcelona\">Recepcionista </option>
\t\t\t\t<option value=\"Barcelona\">Traducción</option>
\t\t\t\t<option value=\"Barcelona\">Intérpretes</option>
\t\t\t\t<option value=\"Barcelona\">Receptores con auricular para escuchar intérprete </option>
\t\t\t\t<option value=\"Barcelona\">Alojamiento </option>
\t\t\t\t<option value=\"Barcelona\">Internet WIFI </option>
\t\t\t\t<option value=\"Barcelona\">Viaje </option>
\t\t\t\t<option value=\"Barcelona\">Transporte local de asistentes </option>
\t\t\t\t<option value=\"Barcelona\">Guía o acompañante para asistentes </option>

\t\t\t</select>
\t\t</div><!--/item-->

\t\t<div class=\"buscador\">
\t\t\t<select name=\"Fecha...\" title=\"Fecha..\" class=\"formstyle\">
\t\t\t\t<option value=\"Madrid\"> Imagen Corporativa </option>
\t\t\t\t<option value=\"Madrid\"> Todos </option>
\t\t\t\t<option value=\"Barcelona\">Logos y docs corporativos</option>
\t\t\t\t<option value=\"Barcelona\">Web del evento o de la Sede</option>
\t\t\t\t<option value=\"Barcelona\">Impresión  y grabación </option>
\t\t\t\t<option value=\"Barcelona\">Reparto publicitario</option>
\t\t\t\t<option value=\"Barcelona\">Posicionamiento</option>
\t\t\t\t<option value=\"Barcelona\">Community Management </option>
\t\t\t\t<option value=\"Barcelona\">Difusión en internet </option>
\t\t\t\t<option value=\"Barcelona\">Difusión otros medios </option>
\t\t\t\t<option value=\"Barcelona\">Emisión online en página del evento</option>

\t\t\t</select>
\t\t</div><!--/item-->

\t\t<div class=\"item\">
\t\t\t<a href=\"";
        // line 784
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_principal_servicio"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sistema/images/work/thumbs/servicio1.png"), "html", null, true);
        echo "\" alt=\"image 1\"></a><!-- Image must be 400px by 300px -->
\t\t\t<h3>Mini-Site del Evento</h3><!--Title-->
\t\t\t<ul>
\t\t\t\t<li class=\"izquierda\">
\t\t\t\t\tDiseño Web
\t\t\t\t</li>
\t\t\t\t<li class=\"izquierda\"></li>
\t\t\t\t<li class=\"derecha\">
\t\t\t\t\tPrecio
\t\t\t\t</li>
\t\t\t</ul><!--Category-->
\t\t</div><!--/item-->

\t\t<div class=\"item\">
\t\t\t<a href=\"";
        // line 798
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_principal_servicio"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sistema/images/work/thumbs/servicio2.png"), "html", null, true);
        echo "\" alt=\"image 2\"></a><!-- Image must be 400px by 300px -->

\t\t\t<h3>Reportaje  Eventos</h3><!--Title-->
\t\t\t<ul>
\t\t\t\t<li class=\"izquierda\">
\t\t\t\t\tFotografía
\t\t\t\t</li>
\t\t\t\t<li class=\"izquierda\"></li>
\t\t\t\t<li class=\"derecha\">
\t\t\t\t\tPrecio
\t\t\t\t</li>
\t\t\t</ul><!--Category-->
\t\t</div><!--/item-->

\t\t<div class=\"item\">
\t\t\t<a href=\"";
        // line 813
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_principal_servicio"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sistema/images/work/thumbs/servicio3.png"), "html", null, true);
        echo "\" alt=\"image 3\"></a><!-- Image must be 400px by 300px -->

\t\t\t<h3>Grupo de Jazz</h3><!--Title-->
\t\t\t<ul>
\t\t\t\t<li class=\"izquierda\">
\t\t\t\t\tMúsica
\t\t\t\t</li>
\t\t\t\t<li class=\"izquierda\"></li>
\t\t\t\t<li class=\"derecha\">
\t\t\t\t\tPrecio
\t\t\t\t</li>
\t\t\t</ul><!--Category-->
\t\t</div><!--/item-->

\t\t<div class=\"item\">
\t\t\t<a href=\"";
        // line 828
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_principal_servicio"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sistema/images/work/thumbs/servicio4.png"), "html", null, true);
        echo "\" alt=\"image 4\"></a><!-- Image must be 400px by 300px -->

\t\t\t<h3>Catering Creativo</h3><!--Title-->
\t\t\t<ul>
\t\t\t\t<li class=\"izquierda\">
\t\t\t\t\tCatering
\t\t\t\t</li>
\t\t\t\t<li class=\"izquierda\"></li>
\t\t\t\t<li class=\"derecha\">
\t\t\t\t\tPrecio
\t\t\t\t</li>
\t\t\t</ul><!--Category-->
\t\t</div><!--/item-->

\t\t<div class=\"item\">
\t\t\t<a href=\"";
        // line 843
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_principal_servicio"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sistema/images/work/thumbs/servicio5.png"), "html", null, true);
        echo "\" alt=\"image 1\"></a><!-- Image must be 400px by 300px -->
\t\t\t<h3>Iluminación </h3><!--Title-->
\t\t\t<ul>
\t\t\t\t<li class=\"izquierda\">
\t\t\t\t\tAudiovisual
\t\t\t\t</li>
\t\t\t\t<li class=\"derecha\">
\t\t\t\t\tPrecio
\t\t\t\t</li>
\t\t\t\t<li class=\"izquierda\"></li>
\t\t\t</ul><!--Category-->
\t\t</div><!--/item-->

\t\t<div class=\"item\">
\t\t\t<a href=\"";
        // line 857
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_principal_servicio"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sistema/images/work/thumbs/servicio6.png"), "html", null, true);
        echo "\" alt=\"image 2\"></a><!-- Image must be 400px by 300px -->

\t\t\t<h3>Pack Photocall</h3><!--Title-->
\t\t\t<ul>
\t\t\t\t<li class=\"izquierda\">
\t\t\t\t\tEscenografía
\t\t\t\t</li>
\t\t\t\t<li class=\"izquierda\"></li>
\t\t\t\t<li class=\"derecha\">
\t\t\t\t\tPrecio
\t\t\t\t</li>
\t\t\t</ul><!--Category-->
\t\t</div><!--/item-->

\t\t<div class=\"item\">
\t\t\t<a href=\"";
        // line 872
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_principal_servicio"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sistema/images/work/thumbs/evento6.png"), "html", null, true);
        echo "\" alt=\"image 3\"></a><!-- Image must be 400px by 300px -->

\t\t\t<h3>Vinos </h3><!--Title-->
\t\t\t<ul>
\t\t\t\t<li class=\"izquierda\">
\t\t\t\t\tCatering
\t\t\t\t</li>
\t\t\t\t<li class=\"izquierda\"></li>
\t\t\t\t<li class=\"derecha\">
\t\t\t\t\tPrecio
\t\t\t\t</li>
\t\t\t</ul><!--Category-->
\t\t</div><!--/item-->

\t\t<div class=\"item\">
\t\t\t<a href=\"";
        // line 887
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_principal_servicio"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sistema/images/work/thumbs/servicio7.png"), "html", null, true);
        echo "\" alt=\"image 4\"></a><!-- Image must be 400px by 300px -->

\t\t\t<h3>Azafatas  Eventos</h3><!--Title-->
\t\t\t<ul>
\t\t\t\t<li class=\"izquierda\">
\t\t\t\t\tPersonal
\t\t\t\t</li>
\t\t\t\t<li class=\"izquierda\"></li>
\t\t\t\t<li class=\"derecha\">
\t\t\t\t\tPrecio
\t\t\t\t</li>
\t\t\t</ul><!--Category-->
\t\t</div><!--/item-->

\t\t<div class=\"clearfix\"></div>

\t\t<div id=\"contador\">
\t\t\t<a href=\"";
        // line 904
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_principal_servicios"), "html", null, true);
        echo "\">8 de 100 (Ver más)</a>
\t\t</div>
\t</div>

\t<div class=\"clearfix\"></div>
</div>
<!-- Work Links Section End -->
<!-- Last Words Section End-->
<div id=\"sedes\" ></div>
<div id=\"work\"  class=\"amarillo\">
\t<!-- Work Links Section Start -->
\t<div class=\"añadir\">
\t\t<a href=\"sedes.html\">Sedes</a><!--/item-->
\t</div>
\t<div class=\"buscador\">
\t\t<select name=\"Ciudad...\" title=\"Ciudad..\" class=\"formstyle\">
\t\t\t<option value=\"Madrid\">Ciudad </option>
\t\t\t<option value=\"Madrid\">Todas </option>
\t\t\t<option value=\"Barcelona\">Madrid(2) </option>
\t\t\t<option value=\"Barcelona\">Barcelona(3)</option>
\t\t\t<option value=\"Tenerife\">Las Palmas(1) </option>
\t\t\t<option value=\"Tenerife\">A Coruña(1) </option>
\t\t</select>
\t</div><!--/item-->

\t<div class=\"buscador\">
\t\t<select name=\"Fecha...\" title=\"Fecha..\" class=\"formstyle\">
\t\t\t<option value=\"Madrid\">Accesibilidad </option>
\t\t\t<option value=\"Madrid\"> Todas </option>
\t\t\t<option value=\"Barcelona\">En centro ciudad </option>
\t\t\t<option value=\"Barcelona\">Cerca de Autobús </option>
\t\t\t<option value=\"Barcelona\">Cerca de aeropuerto </option>
\t\t\t<option value=\"Barcelona\">Accesible para Movilidad Reducida </option>

\t\t</select>
\t</div><!--/item-->

\t<div class=\"buscador\">
\t\t<select name=\"Ciudades...\" title=\"Ciudades..\" class=\"formstyle\">
\t\t\t<option value=\"Madrid\"> Calidad y Precio €/h </option>
\t\t\t<option value=\"Madrid\"> Todas </option>

\t\t\t<option value=\"Madrid\"> Low Cost... hasta 20 </option>
\t\t\t<option value=\"Barcelona\">Normal... hasta 300</option>
\t\t\t<option value=\"Tenerife\"> Alto...  hasta 3000</option>
\t\t\t<option value=\"Tenerife\"> Especial...  hasta 10000</option>
\t\t\t<option value=\"Tenerife\"> Singular...  más de 10000</option>
\t\t</select>
\t</div><!--/item-->

\t<div class=\"añadir\">
\t\t<ul>
\t\t\t<li>
\t\t\t\t<a href=\"registro.html\"><img class=\"icon\" src=\"";
        // line 957
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sistema/images/icons/mas.png"), "html", null, true);
        echo "\" width=\"27\" height=\"27\" title=\"Añadir Gratis\"></a>
\t\t\t</li>
\t\t\t<li style=\"float:right;\">
\t\t\t\t<a href=\"sedes.html\"><img class=\"icon\" src=\"";
        // line 960
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sistema/images/icons/buscar.png"), "html", null, true);
        echo "\" width=\"27\" height=\"27\" alt=\"Buscar\"></a></a>
\t\t</ul>
\t</div>
\t<div class=\"buscador\">
\t\t<select name=\"Ciudades...\" title=\"Ciudades..\" class=\"formstyle\">
\t\t\t<option value=\"Madrid\"> Personas y disposición </option>
\t\t\t<option value=\"Madrid\"> Todas </option>

\t\t\t<option value=\"Madrid\"> Modo Escuela </option>
\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; _hasta 10 </option>
\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; _hasta 100 </option>
\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; _más de 100 </option>

\t\t\t<option value=\"Madrid\"> Banquete (con mesas) </option>
\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; _hasta 30 </option>
\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; _hasta 100 </option>
\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; _más de 100 </option>

\t\t\t<option value=\"Madrid\"> Modo Cocktail (de pie) </option>
\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; _hasta 30 </option>
\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; _hasta 100 </option>
\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; _más de 100 </option>

\t\t\t<option value=\"Madrid\"> Modo Teatro </option>
\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; _hasta 30 </option>
\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; _hasta 100 </option>
\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; _más de 100 </option>

\t\t\t<option value=\"Madrid\"> Modo Exposición </option>
\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; _hasta 30 </option>
\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; _hasta 100 </option>
\t\t\t<option value=\"Barcelona\" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; _más de 100 </option>

\t\t</select>
\t</div><!--/item-->

\t<div class=\"buscador\">
\t\t<select name=\"Fecha...\" title=\"Fecha..\" class=\"formstyle\">
\t\t\t<option value=\"Madrid\"> Tipo </option>
\t\t\t<option value=\"Madrid\"> Todos </option>
\t\t\t<option value=\"Barcelona\">Colegio/Instituto </option>
\t\t\t<option value=\"Barcelona\">Universidad </option>
\t\t\t<option value=\"Barcelona\">Otros Centros de Formación </option>
\t\t\t<option value=\"Barcelona\">Coworking </option>
\t\t\t<option value=\"Barcelona\">Centro de Negocios</option>
\t\t\t<option value=\"Barcelona\">Oficina Profesional</option>
\t\t\t<option value=\"Barcelona\">Hotel</option>
\t\t\t<option value=\"Barcelona\">Restaurante, bar, discoteca</option>
\t\t\t<option value=\"Barcelona\">Finca</option>
\t\t\t<option value=\"Barcelona\">Colegio Profesional</option>
\t\t\t<option value=\"Barcelona\">Fundación, Centro Cultural</option>
\t\t\t<option value=\"Barcelona\">Club privado o asociación</option>
\t\t\t<option value=\"Barcelona\">Cine o teatro</option>
\t\t\t<option value=\"Barcelona\">Centro Deportivo</option>
\t\t\t<option value=\"Barcelona\">Centro Ferial</option>
\t\t\t<option value=\"Barcelona\">Centro Recreativo</option>
\t\t\t<option value=\"Barcelona\">Centro Comercial</option>

\t\t</select>
\t</div><!--/item-->

\t<div class=\"buscador\">
\t\t<select name=\"Fecha...\" title=\"Fecha..\" class=\"formstyle\">
\t\t\t<option value=\"Madrid\"> Tipo de Actividad </option>
\t\t\t<option value=\"Madrid\"> Todas </option>

\t\t\t<option value=\"Madrid\"> Formación Teórica</option>
\t\t\t<option value=\"Barcelona\"> Formación Informática </option>
\t\t\t<option value=\"Barcelona\"> Formación Taller</option>
\t\t\t<option value=\"Barcelona\"> Venta, Feria</option>
\t\t\t<option value=\"Barcelona\"> Deporte</option>
\t\t\t<option value=\"Barcelona\"> Espectáculo</option>
\t\t\t<option value=\"Barcelona\"> Reunión o asamblea</option>
\t\t\t<option value=\"Barcelona\"> Boda</option>
\t\t\t<option value=\"Barcelona\"> Fiesta</option>
\t\t\t<option value=\"Barcelona\"> Jardín</option>

\t\t</select>
\t</div><!--/item-->

\t<div class=\"itemmap\">
\t\t<iframe width=\"770\" height=\"350\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://maps.google.es/maps?f=q&amp;source=s_q&amp;hl=es&amp;geocode=&amp;q=espa%C3%B1a&amp;aq=&amp;sll=37.333351,-4.576501&amp;sspn=8.66189,18.314209&amp;ie=UTF8&amp;hq=&amp;hnear=Espa%C3%B1a&amp;t=m&amp;ll=39.656456,-3.493652&amp;spn=5.919918,17.138672&amp;z=6&amp;output=embed\"></iframe>
\t\t<br />
\t\t<small><a href=\"https://maps.google.es/maps?f=q&amp;source=embed&amp;hl=es&amp;geocode=&amp;q=espa%C3%B1a&amp;aq=&amp;sll=37.333351,-4.576501&amp;sspn=8.66189,18.314209&amp;ie=UTF8&amp;hq=&amp;hnear=Espa%C3%B1a&amp;t=m&amp;ll=39.656456,-3.493652&amp;spn=5.919918,17.138672&amp;z=6\" style=\"color:#0000FF;text-align:left\">Ver mapa más grande</a></small>
\t</div><!--/item-->

\t<div id=\"contador\">
\t\t<a href=\"sedescanarias.html\" style=\"color:#999\">Ver Mapa de Islas Canarias</a>
\t</div>
</div>

<!-- TO MAKE THE PHP FORM WORK, ALL YOU NEED TO DO IS OPEN UP THE FILE CALLED 'submitemail.php' AND CHANGE WHERE IT SAYS 'your email goes here' -->
";
    }

    public function getTemplateName()
    {
        return "ProyectoPrincipalBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1182 => 960,  1176 => 957,  1120 => 904,  1098 => 887,  1078 => 872,  1058 => 857,  1039 => 843,  1019 => 828,  999 => 813,  979 => 798,  960 => 784,  896 => 725,  890 => 722,  842 => 677,  832 => 670,  809 => 652,  787 => 635,  765 => 618,  744 => 602,  722 => 585,  700 => 568,  678 => 551,  657 => 535,  599 => 482,  593 => 479,  493 => 382,  481 => 373,  458 => 355,  436 => 338,  414 => 321,  393 => 305,  372 => 289,  350 => 272,  328 => 255,  307 => 239,  230 => 167,  222 => 164,  122 => 67,  105 => 53,  92 => 43,  79 => 33,  67 => 24,  52 => 11,  49 => 10,  47 => 9,  43 => 7,  40 => 6,  32 => 3,  29 => 2,);
    }
}
