<?php

/* ProyectoPrincipalBundle:Perfil:privado.html.twig */
class __TwigTemplate_ad5431b84d761623e66b95c3913ef71a extends Twig_Template
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
\tvar direccionEnviarSolicitudBaja = \"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_perfil_enviar_solicitud_baja"), "html", null, true);
        echo "\";
\tvar direccionCancelarSolicitudBaja = \"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_perfil_cancelar_solicitud_baja"), "html", null, true);
        echo "\";

</script>
";
    }

    // line 9
    public function block_contenedorbase($context, array $blocks = array())
    {
        // line 10
        echo "<div class=\"wrapper\">

\t";
        // line 12
        $this->env->loadTemplate("ProyectoPrincipalBundle:Helpers:top.html.twig")->display(array_merge($context, array("clase" => "gris")));
        // line 13
        echo "
\t<div id=\"registro\">
\t\t<p>
\t\t\tBienvenido ";
        // line 16
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nombre")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "apellido")), "html", null, true);
        echo " - <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_principal_cerrarsesion"), "html", null, true);
        echo "\">Cerrar Sesión</a>
\t\t</p>
\t</div>

\t<aside id=\"about\" class=\" left\">
\t\t<!-- Text Section Start -->
\t\t<!-- Replace all text with what you want -->

\t\t<div class=\"perfilimg\">
\t\t\t<p>
\t\t\t\t<img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("" . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getWebPath")) . "")), "html", null, true);
        echo "\"  >

\t\t\t</p>
\t\t\t<p>
\t\t\t\t<a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_perfil_publico"), "html", null, true);
        echo "\">Ver Mi Pérfil Público</a>
\t\t\t</p>
\t\t\t<p>
\t\t\t\t&nbsp;
\t\t\t</p>

\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"clearfix\"></div>

\t\t\t<p>
\t\t\t\t<a href=\"#\">Reservas</a>
\t\t\t</p>

\t\t\t<div class=\"datos\">
\t\t\t\t<p>
\t\t\t\t\tdd/mm/aa <a href=\"reservas.html\" class=\"rosa\">Cod-Reserva</a><span id=\"circulo\" class=\"verde\"> </span><a href=\"evento.html\"> Emprende Galicia. </a>
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\tdd/mm/aa <a href=\"reservas.html\" class=\"verde\">Cod-Reserva</a><a href=\"espacio.html\"> Espacio Coam. </a>
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\tdd/mm/aa <a href=\"reservas.html\" class=\"azul\">Cod-Reserva</a><a href=\"servicio.html\"> Fotografia . </a>
\t\t\t\t</p>
\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t<div class=\"otras\">
\t\t\t\t\t<p>
\t\t\t\t\t\t<a href=\"reservas.html\">Todas</a>
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"clearfix\"></div>
\t\t\t<p>
\t\t\t\t<a href=\"notificaciones.html\">Notificaciones pendientes</a>
\t\t\t</p>
\t\t\t<div class=\"datos\">
\t\t\t\t<div class=\"datos\">
\t\t\t\t\t<p>
\t\t\t\t\t\tdd/mm/aa <a href=\"espaciogestion.html\" class=\"verde\">Cod-Solicitud</a><span id=\"circulo\" class=\"verde\"> </span><a href=\"espacioact.html\"> Espacio Coam. </a>
\t\t\t\t\t</p>
\t\t\t\t\t<p>
\t\t\t\t\t\tdd/mm/aa <a href=\"espaciogestion.html\" class=\"verde\">Cod-Solicitud</a><a href=\"espacioact.html\"> Espacio Coam. </a>
\t\t\t\t\t</p>
\t\t\t\t\t<p>
\t\t\t\t\t\tdd/mm/aa <a href=\"reservas.html\" class=\"azul\">Cod-Solicitud</a><a href=\"servicio.html\"> Fotografia . </a>
\t\t\t\t\t</p>
\t\t\t\t\t<p>
\t\t\t\t\t\tdd/mm/aa <a href=\"espaciogestion.html\" class=\"verde\">Cod-Solicitud</a><a href=\"espacioact.html\"> Espacio Coam. </a>
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t<div class=\"otras\">
\t\t\t\t\t<p>
\t\t\t\t\t\t<a href=\"notificaciones.html\">Todas</a>
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>

\t\t</div>

\t\t<div class=\"clearfix\"></div>

\t</aside>
\t<aside class=\"right\">
\t\t<div class=\"sede\" style=\"margin-top:1%;\" >
\t\t\t<h3>";
        // line 96
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nombre")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "apellido")), "html", null, true);
        echo "</h3>
\t\t\t<ul>
\t\t\t\t<li class=\"izquierda\">
\t\t\t\t\t<h4> Profesión</h4>
\t\t\t\t</li>
\t\t\t\t<li class=\"derecha\">
\t\t\t\t\t<h4> ";
        // line 102
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "localidad"), "nombre")), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "pais")), "html", null, true);
        echo "</h4>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<!--Category-->
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<p>
\t\t\t\t";
        // line 108
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "descripcion"), "html", null, true);
        echo "
\t\t\t</p>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<p>
\t\t\t\t<input name=\"condiciones\" type=\"checkbox\" ";
        // line 112
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "eventos")) {
            echo "checked";
        }
        echo " >
\t\t\t\tDisponible para organizar eventos
\t\t\t</p>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<h4> Información de Contacto</h4>
\t\t\t<div class=\"datos\">
\t\t\t\t<p>
\t\t\t\t\tTeléfono: ";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "telefono"), "html", null, true);
        echo "
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\tE-mail: ";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email"), "html", null, true);
        echo "
\t\t\t\t</p>
\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t<div class=\"otras\">
\t\t\t\t\t<h4><a href=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_perfil_editar"), "html", null, true);
        echo "\">Editar datos personales</a></h4>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<h4 style=\"margin-top:1%\">Información de Facturación</h4>
\t\t\t<div class=\"datos\">
\t\t\t\t";
        // line 132
        if ((null === (isset($context["facturacion"]) ? $context["facturacion"] : $this->getContext($context, "facturacion")))) {
            // line 133
            echo "\t\t\t\t<p>
\t\t\t\t\tNombre de Empresa:
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\tCIF:
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\tDirección de Facturación:
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\tNúmero de Cuenta:
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t&nbsp;
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\tNúmero de Tarjeta de Crédito :
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\tCaducidad:
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\tCódigo:
\t\t\t\t</p>
\t\t\t\t";
        } else {
            // line 158
            echo "\t\t\t\t<p>
\t\t\t\t\tNombre de Empresa: ";
            // line 159
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["facturacion"]) ? $context["facturacion"] : $this->getContext($context, "facturacion")), "empresa"), "html", null, true);
            echo "
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\tCIF: ";
            // line 162
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["facturacion"]) ? $context["facturacion"] : $this->getContext($context, "facturacion")), "identificador"), "html", null, true);
            echo "
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\tDirección de Facturación: ";
            // line 165
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["facturacion"]) ? $context["facturacion"] : $this->getContext($context, "facturacion")), "direccion"), "html", null, true);
            echo "
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\tNúmero de Cuenta: ";
            // line 168
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["facturacion"]) ? $context["facturacion"] : $this->getContext($context, "facturacion")), "numeroCuenta"), "html", null, true);
            echo "
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t&nbsp;
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\tNúmero de Tarjeta de Crédito : ";
            // line 174
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["facturacion"]) ? $context["facturacion"] : $this->getContext($context, "facturacion")), "numeroTarjeta"), "html", null, true);
            echo "
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\tCaducidad: ";
            // line 177
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["facturacion"]) ? $context["facturacion"] : $this->getContext($context, "facturacion")), "fechaCaducidad"), "format", array(0 => "Y-m-d"), "method"), "html", null, true);
            echo "
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\tCódigo: ";
            // line 180
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["facturacion"]) ? $context["facturacion"] : $this->getContext($context, "facturacion")), "codigo"), "html", null, true);
            echo "
\t\t\t\t</p>
\t\t\t\t";
        }
        // line 183
        echo "
\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t<div class=\"otras\">
\t\t\t\t\t<h4><a href=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_perfil_facturacion"), "html", null, true);
        echo "\">Editar datos de facturación</a></h4>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"clearfix\"></div>
\t\t\t<h4> Dar de baja de Este perfil.</h4>
\t\t\t<div class=\"datos\" id=\"datos-razon-baja\">
\t\t\t\t<p>
\t\t\t\t\t<textarea name=\"message\" title=\"Describa la razón por la que quiere dar de baja este perfil\" id=\"razonSolicitudBaja\">";
        // line 194
        if ((!(null === (isset($context["retiro"]) ? $context["retiro"] : $this->getContext($context, "retiro"))))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["retiro"]) ? $context["retiro"] : $this->getContext($context, "retiro")), "razon"), "html", null, true);
        }
        echo "</textarea>
</p>\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t<div class=\"otras\">
\t\t\t\t\t<h4> ";
        // line 197
        if ((null === (isset($context["retiro"]) ? $context["retiro"] : $this->getContext($context, "retiro")))) {
            echo " <a href=\"javascript:void(0)\" id=\"enviarSolicitudBaja\" >Enviar Solicitud de Baja</a> ";
        } else {
            echo " <a href=\"javascript:void(0)\" id=\"cancelarSolicitudBaja\" >Cancelar solicitud de baja</a> ";
        }
        echo " </h4>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</aside>
\t<div class=\"clearfix\" ></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "ProyectoPrincipalBundle:Perfil:privado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 197,  310 => 194,  299 => 186,  294 => 183,  288 => 180,  282 => 177,  276 => 174,  267 => 168,  261 => 165,  255 => 162,  249 => 159,  246 => 158,  219 => 133,  217 => 132,  208 => 126,  201 => 122,  195 => 119,  183 => 112,  176 => 108,  165 => 102,  154 => 96,  85 => 30,  78 => 26,  61 => 16,  56 => 13,  54 => 12,  50 => 10,  47 => 9,  39 => 5,  35 => 4,  32 => 3,  29 => 2,);
    }
}
