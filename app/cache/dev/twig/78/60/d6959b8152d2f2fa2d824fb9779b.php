<?php

/* ProyectoPrincipalBundle:Espacio:registrarEditar5.html.twig */
class __TwigTemplate_7860d6959b8152d2f2fa2d824fb9779b extends Twig_Template
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
\t\t\t\t\t<h2 > Registrar nuevo espacio (5/5)</h2>
\t\t\t\t\t<p >
\t\t\t\t\t\t&nbsp;
\t\t\t\t\t</p>

\t\t\t\t\t<p>
\t\t\t\t\t\t<strong>Detalles de la reserva:</strong>
\t\t\t\t\t</p>

\t\t\t\t\t<p>
\t\t\t\t\t\t";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "aceptacionReservaAutomatica"), 'widget');
        echo "
\t\t\t\t\t\tAceptación de la reserva automática
\t\t\t\t\t</p>

\t\t\t\t\t<p >
\t\t\t\t\t\t";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tiempoMaximoAceptacionReservaAutomatica24h"), 'widget');
        echo "
\t\t\t\t\t\tTiempo máximo de aceptación de reserva 24h
\t\t\t\t\t</p>

\t\t\t\t\t<p >
\t\t\t\t\t\t";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tiempoMaximoAceptacionReservaAutomatica48"), 'widget');
        echo "
\t\t\t\t\t\tTiempo máximo de aceptación de reserva 48h
\t\t\t\t\t</p>

\t\t\t\t\t<p >
\t\t\t\t\t\t&nbsp;
\t\t\t\t\t</p>

\t\t\t\t\t<p >
\t\t\t\t\t\t";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datosFacturacionPagoDelUsuario"), 'widget');
        echo "
\t\t\t\t\t\tLos datos de facturación y pago son los del usuario
\t\t\t\t\t</p>

\t\t\t\t\t<p >
\t\t\t\t\t\t";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "anadirDatosFacturacionPago"), 'widget');
        echo "
\t\t\t\t\t\t<a href=\"#\"> Añadir datos de facturación y pago</a>
\t\t\t\t\t</p>
\t\t\t\t\t<p >
\t\t\t\t\t\t&nbsp;
\t\t\t\t\t</p>

\t\t\t\t\t<p>
\t\t\t\t\t\t<strong>Señala las actividades permitidas:</strong>
\t\t\t\t\t</p>

\t\t\t\t\t<p>
\t\t\t\t\t\t";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "todas"), 'widget');
        echo "
\t\t\t\t\t\tTodas
\t\t\t\t\t</p>

\t\t\t\t\t<p >
\t\t\t\t\t\t";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "similaresCentroRealiza"), 'widget');
        echo "
\t\t\t\t\t\tSimilares a las que el centro ya realiza
\t\t\t\t\t</p>

\t\t\t\t\t<p >
\t\t\t\t\t\t";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "formacionTeorica"), 'widget');
        echo "
\t\t\t\t\t\tFormación Teórica
\t\t\t\t\t</p>

\t\t\t\t\t<p >
\t\t\t\t\t\t";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "formacionInformatica"), 'widget');
        echo "
\t\t\t\t\t\tFormación Informática
\t\t\t\t\t</p>

\t\t\t\t\t<p >
\t\t\t\t\t\t";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "formacionTaller"), 'widget');
        echo "
\t\t\t\t\t\tFormación Taller
\t\t\t\t\t</p>

\t\t\t\t\t<p >
\t\t\t\t\t\t";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "exposicion"), 'widget');
        echo "
\t\t\t\t\t\tExposición
\t\t\t\t\t</p>

\t\t\t\t\t<p >
\t\t\t\t\t\t";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ventaFeria"), 'widget');
        echo "
\t\t\t\t\t\tVenta, feria
\t\t\t\t\t</p>

\t\t\t\t\t<p >
\t\t\t\t\t\t";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "deporte"), 'widget');
        echo "
\t\t\t\t\t\tDeporte
\t\t\t\t\t</p>

\t\t\t\t\t<p >
\t\t\t\t\t\t";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "espectaculo"), 'widget');
        echo "
\t\t\t\t\t\tEspectáculo
\t\t\t\t\t</p>

\t\t\t\t\t<p >
\t\t\t\t\t\t";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "reunionAsamblea"), 'widget');
        echo "
\t\t\t\t\t\tReunión o asamblea
\t\t\t\t\t</p>

\t\t\t\t\t<p >
\t\t\t\t\t\t";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "boda"), 'widget');
        echo "
\t\t\t\t\t\tBoda
\t\t\t\t\t</p>

\t\t\t\t\t<p >
\t\t\t\t\t\t";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fiesta"), 'widget');
        echo "
\t\t\t\t\t\tFiesta
\t\t\t\t\t</p>

\t\t\t\t\t<p >
\t\t\t\t\t\t";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "jardin"), 'widget');
        echo "
\t\t\t\t\t\tJardín
\t\t\t\t\t</p>

\t\t\t\t\t<div class=\"clearfix\"></div>

\t\t\t\t\t<p>
\t\t\t\t\t\t&nbsp;
\t\t\t\t\t</p>
\t\t\t\t\t<h3 > Precio</h3>

\t\t\t\t\t<p>
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 135
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "precioPorHora"), 'widget', array("attr" => array("class" => "formstyle", "title" => "Precio por Hora (Euros)", "min" => "0", "step" => "1", "value" => "0")));
        echo "
\t\t\t\t\t</p>
\t\t\t\t\t<p>
\t\t\t\t\t\t&nbsp;
\t\t\t\t\t</p>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<p>
\t\t\t\t\t\t";
        // line 142
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "aceptoCondicionesUsoPoliticaPrivacidad"), 'widget');
        echo "
\t\t\t\t\t\t<a href=\"#\"> Acepto las condiciones de uso y la política de privacidad</a>
\t\t\t\t\t</p>

\t\t\t\t\t<div class=\"clearfix\"></div>

\t\t\t\t\t<input type=\"submit\" class=\"botonSubmitFormulario formstyle \" value=\"Enviar\">
\t\t\t\t\t<div class=\"enviar\">
\t\t\t\t\t\t<a href=\"registroespacio3.html\" title=\"Perfil\">Anterior </a>
\t\t\t\t\t</div>


\t\t\t\t\t";
        // line 154
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t\t\t\t</form>
\t\t\t</div>

\t\t\t<p>
\t\t\t\t&nbsp;
\t\t\t</p>

\t\t\t<div id=\"error\"></div>

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
        return "ProyectoPrincipalBundle:Espacio:registrarEditar5.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 154,  244 => 142,  234 => 135,  218 => 122,  210 => 117,  202 => 112,  194 => 107,  186 => 102,  178 => 97,  170 => 92,  162 => 87,  154 => 82,  146 => 77,  138 => 72,  130 => 67,  122 => 62,  107 => 50,  99 => 45,  87 => 36,  79 => 31,  71 => 26,  55 => 15,  48 => 10,  46 => 9,  42 => 7,  39 => 6,  32 => 3,  29 => 2,);
    }
}
