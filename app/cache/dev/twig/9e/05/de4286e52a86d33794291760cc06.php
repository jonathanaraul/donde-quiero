<?php

/* ProyectoPrincipalBundle:Espacio:registrarEditar4.html.twig */
class __TwigTemplate_9e05de4286e52a86d33794291760cc06 extends Twig_Template
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
        echo "
<div class=\"wrapper\">
\t";
        // line 9
        $this->env->loadTemplate("ProyectoPrincipalBundle:Helpers:top.html.twig")->display(array_merge($context, array("clase" => "verde")));
        // line 10
        echo "\t<div class=\"verde\" id=\"work\"  >

\t\t<div class=\"nuevo\">

\t\t\t<div id=\"formnuevo\">
\t\t\t\t<form action=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " >
\t\t\t\t\t<h2 > Registrar nuevo espacio (4/5)</h2>
\t\t\t\t\t<p >
\t\t\t\t\t\t&nbsp;
\t\t\t\t\t</p>
\t\t\t\t\t<p>
\t\t\t\t\t\t<strong>Equipamiento incluido:</strong> (si no es gratuito, <a href=\"#\">regístralo</a> con su precio como servicio adjunto al de la sede).
\t\t\t\t\t</p>
\t\t\t\t\t<p>
\t\t\t\t\t\t&nbsp;
\t\t\t\t\t</p>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<p style=\"float:left; width:200px;\"> ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "proyectorPantallaSala"), 'widget');
        echo " Proyector y pantalla de sala   </p>
\t\t\t\t\t</br>
\t\t\t\t\t<p style=\"float:left; width:200px;\"> ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "microfonoAltavoces"), 'widget');
        echo "  Micrófono y altavoces  </p>
\t\t\t\t\t</br>
\t\t\t\t\t<p style=\"float:left; width:200px;\"> ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "videocamara"), 'widget');
        echo " Videocámara  </p>
\t\t\t\t\t</br>
\t\t\t\t\t<p>&nbsp;</p>
\t\t\t\t\t</br>
\t\t\t\t\t<p style=\"float:left; width:200px;\">
\t\t\t\t\t\t";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "wifi"), 'widget');
        echo "
\t\t\t\t\t\tWiFi
\t\t\t\t\t</p>
\t\t\t\t\t</br>
\t\t\t\t\t<p style=\"float:left; width:200px;\"> ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "internetCable"), 'widget');
        echo "Internet por Cable </p>
\t\t\t\t\t</br>
\t\t\t\t\t<p>&nbsp;</p>
\t\t\t\t\t</br>
\t\t\t\t\t<p style=\"float:left; width:200px;\">
\t\t\t\t\t\t";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "maquinaBebidas"), 'widget');
        echo "
\t\t\t\t\t\tMáquina de bebidas
\t\t\t\t\t</p>
\t\t\t\t\t</br>
\t\t\t\t\t<p style=\"float:left; width:200px;\">";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pizarra"), 'widget');
        echo "  Pizarra  </p>
\t\t\t\t\t</br>
\t\t\t\t\t<p style=\"float:left; width:200px;\">
\t\t\t\t\t\t";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "conserjeria"), 'widget');
        echo "
\t\t\t\t\t\tConserjería
\t\t\t\t\t</p>
\t\t\t\t\t</br>
\t\t\t\t\t<p>
\t\t\t\t\t\t&nbsp;
\t\t\t\t\t</p>
\t\t\t\t\t</br>
\t\t\t\t\t<p style=\"float:left; width:200px;\">";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "aireAcondicionado"), 'widget');
        echo "  Aire acondicionado  </p>
\t\t\t\t\t</br>
\t\t\t\t\t<p style=\"float:left; width:200px;\">
\t\t\t\t\t\t";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "calefaccion"), 'widget');
        echo "
\t\t\t\t\t\tCalefacción
\t\t\t\t\t</p>
\t\t\t\t\t</br>

\t\t\t\t\t<p>
\t\t\t\t\t\t&nbsp;
\t\t\t\t\t</p>

\t\t\t\t\t
\t\t\t\t\t";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "otros"), 'widget', array("attr" => array("class" => "formstyle", "title" => "Otros...")));
        echo "
\t\t\t\t\t</br>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<p>
\t\t\t\t\t\t&nbsp;
\t\t\t\t\t</p>

\t\t\t\t\t<input type=\"submit\" class=\"botonSubmitFormulario formstyle \" value=\"Siguiente\">
\t\t\t\t\t<div class=\"enviar\">
\t\t\t\t\t\t<a href=\"registroespacio2.html\" title=\"Perfil\">Anterior</a>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t\t</form>
\t\t\t\t<div id=\"error\"></div>
\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t</div>
\t\t</div>

\t</div>

</div>

";
    }

    public function getTemplateName()
    {
        return "ProyectoPrincipalBundle:Espacio:registrarEditar4.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 86,  149 => 74,  136 => 64,  130 => 61,  119 => 53,  113 => 50,  106 => 46,  98 => 41,  91 => 37,  83 => 32,  78 => 30,  73 => 28,  55 => 15,  48 => 10,  46 => 9,  42 => 7,  39 => 6,  32 => 3,  29 => 2,);
    }
}
