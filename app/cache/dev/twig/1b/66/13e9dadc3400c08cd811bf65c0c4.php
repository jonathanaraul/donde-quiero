<?php

/* ProyectoPrincipalBundle:Espacio:registrarEditar.html.twig */
class __TwigTemplate_1b6613e9dadc3400c08cd811bf65c0c4 extends Twig_Template
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
        echo "<script type=\"text/javascript\">//var direccionBuscarCiudad = \"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_users_buscar_ciudad"), "html", null, true);
        echo "\";</script>
";
    }

    // line 6
    public function block_contenedorbase($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"wrapper\">

\t";
        // line 9
        $this->env->loadTemplate("ProyectoPrincipalBundle:Helpers:top.html.twig")->display(array_merge($context, array("clase" => "verde")));
        // line 10
        echo "
\t<div class=\"verde\" id=\"work\"  >
\t\t<div class=\"aviso\"   >
\t\t\t<h2 class=\"izquierda\">registrando tu espacio.... </h2><h2 class=\"derecha\">(1/5) </h2>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<p>
\t\t\t\t- No pagas nada.  </br>
\t\t\t\t- Te alquilarán y pagarán online. </br>
\t\t\t\t- Gestionarás tu calendario de reservas y cancelaciones gratis. </br>
\t\t\t\t- Tendrás difusión y posicionamiento gratuito en internet.
\t\t\t</p>

\t\t\t<h2 class=\"izquierda\">a cambio.... </h2>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<p>
\t\t\t\t- Esfuérzate definiendo bien con datos, fotos,.. ¡Tendrás más éxito!.   </br>
\t\t\t\t- Lee las <a href=\"condiciones.html\">Condiciones detalladas</a> que aceptas al registrar el espacio. </br>
\t\t\t\t- Nuestro premio es un  % ¡Sólo de las contrataciones reales que te consigamos! .
\t\t\t</p>
\t\t</div>
\t</div>
\t<!-- Text Section End -->

\t<div class=\"verde\" id=\"work\"  >

\t\t<div class=\"nuevo\">

\t\t\t<div id=\"formnuevo\">
\t\t\t\t<form action=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " id=\"\">
\t\t\t\t\t<!--
\t\t\t\t\t<p>  (Sesión no iniciada)</p>

\t\t\t\t\t<input type=\"text\" class=\"formstyle\" title=\"Nombre\" name=\"name\" />
\t\t\t\t\t<input type=\"text\" class=\"formstyle\" title=\"Contraseña (Máx 20 carácteres)\" name=\"Contraseña\" />
\t\t\t\t\t-->
\t\t\t\t\t<p>
\t\t\t\t\t\t&nbsp;
\t\t\t\t\t</p>
\t\t\t\t\t<div class=\"clearfix\"></div>

\t\t\t\t\t<p>
\t\t\t\t\t\t<strong>Registrar un nuevo espacio como:</strong>
\t\t\t\t\t</p>

\t\t\t\t\t
\t\t\t\t\t<p>";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "</p>

\t\t\t\t\t
\t\t\t\t\t<p>
\t\t\t\t\t";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "propietarioEmpleado"), 'widget');
        echo "Propietario/a ó Empleado
\t\t\t\t\t</p>

\t\t\t\t\t<p>
\t\t\t\t\t";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "agenteComercial"), 'widget');
        echo "Agente Comercial
\t\t\t\t\t</p>

\t\t\t\t\t<p>
\t\t\t\t\t";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "administradorWeb"), 'widget');
        echo "Administrador de la Web
\t\t\t\t\t</p>

\t\t\t\t\t<p>
\t\t\t\t\t\t&nbsp;
\t\t\t\t\t</p>

\t\t\t\t\t<div class=\"clearfix\"></div>

\t\t\t\t\t<input type=\"submit\" class=\"botonSubmitFormulario formstyle \" value=\"Siguiente\">

\t\t\t\t\t<div class=\"clearfix\"></div>

\t\t\t\t\t

\t\t\t\t\t";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

\t\t\t\t</form>
\t\t\t</div>

\t\t\t<div class=\"clearfix\"></div>

\t\t\t<div id=\"espacios\" ></div>
\t\t\t<div id=\"eventos\" ></div>
\t\t\t<div id=\"servicios\" ></div>
\t\t\t<div class=\"clearfix\"></div>
\t\t</div>
\t\t<!-- Work Links Section End -->
\t\t<!-- Last Words Section End-->
\t\t<div id=\"sedes\" ></div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "ProyectoPrincipalBundle:Espacio:registrarEditar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 82,  121 => 67,  114 => 63,  107 => 59,  100 => 55,  78 => 38,  48 => 10,  46 => 9,  42 => 7,  39 => 6,  32 => 3,  29 => 2,);
    }
}
