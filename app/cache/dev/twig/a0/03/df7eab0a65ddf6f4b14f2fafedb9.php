<?php

/* ProyectoPrincipalBundle:Espacio:registrarEditar2.html.twig */
class __TwigTemplate_a003df7eab0a65ddf6f4b14f2fafedb9 extends Twig_Template
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

\t\t<div class=\"nuevo\">

\t\t\t<div id=\"formnuevo\">
\t\t\t\t<form action=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " >

\t\t\t\t\t<h2 > Registrar nuevo espacio (2/5)</h2>
\t\t\t\t\t<p >
\t\t\t\t\t\t&nbsp;
\t\t\t\t\t</p>
\t\t\t\t\t<p>
\t\t\t\t\t\tRellena los siguientes datos para registrar del nuevo espacio:
\t\t\t\t\t</p>

\t\t\t\t\t<p>
\t\t\t\t\t\t";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t\t\t\t&nbsp;
\t\t\t\t\t</p>

\t\t\t\t


\t\t\t\t    ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreEspacio"), 'widget', array("attr" => array("class" => "formstyle", "title" => "Nombre del Espacio (Max 20 carácteres)")));
        echo "



\t\t\t\t\t


\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t
\t\t\t\t\t";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcionGeneral"), 'widget', array("attr" => array("title" => "Descripción general")));
        echo "\t\t\t\t\t\t
    
    \t\t\t\t<p>
\t\t\t\t\t\tPertenece a la sede:
\t\t\t\t\t</p>

\t\t\t\t\t";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sede1"), 'widget', array("attr" => array("class" => "formstyle")));
        echo "

\t\t\t\t\t<p>
\t\t\t\t\t\t&nbsp;
\t\t\t\t\t</p>
\t\t\t\t\t<p style=\"float:left\">
\t\t\t\t\t\tAñadir Imágenes
\t\t\t\t\t</p>
\t\t\t\t\t";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file"), 'widget', array("attr" => array("class" => "formstyle", "accept" => "image/*")));
        echo "


\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<!--<div class=\"enviar\">
\t\t\t\t\t\t+
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<p style=\"float:left\">
\t\t\t\t\t\tAñadir Planos Jpeg
\t\t\t\t\t</p>
\t\t\t\t\t<div class=\"enviar\">
\t\t\t\t\t\tBuscar imagen ...
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"enviar\">
\t\t\t\t\t\t+
\t\t\t\t\t</div>-->
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "enlaceVideo"), 'widget', array("attr" => array("class" => "formstyle", "title" => "Añadir enlace a Video")));
        echo "

\t\t\t\t\t<!--
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"enviar\">
\t\t\t\t\t\t+
\t\t\t\t\t</div>-->
\t\t\t\t\t<div class=\"clearfix\"></div>

\t\t\t\t\t<p>
\t\t\t\t\t\t&nbsp;
\t\t\t\t\t</p>
\t\t\t\t\t<p>
\t\t\t\t\t\t&nbsp;
\t\t\t\t\t</p>
\t\t\t\t\t<div class=\"clearfix\"></div>

\t

\t\t\t\t\t\t<input type=\"submit\" class=\"botonSubmitFormulario formstyle \" value=\"Siguiente\">
\t\t\t
\t\t\t\t\t<div class=\"enviar\">
\t\t\t\t\t\t<a href=\"registroespacio.html\" title=\"Perfil\">Anterior</a>
\t\t\t\t\t</div>

\t\t\t\t\t\t";
        // line 101
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
        return "ProyectoPrincipalBundle:Espacio:registrarEditar2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 101,  136 => 76,  114 => 57,  103 => 49,  94 => 43,  82 => 34,  72 => 27,  56 => 16,  48 => 10,  46 => 9,  42 => 7,  39 => 6,  32 => 3,  29 => 2,);
    }
}
