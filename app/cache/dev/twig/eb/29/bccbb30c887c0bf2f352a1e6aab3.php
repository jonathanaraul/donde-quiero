<?php

/* ProyectoPrincipalBundle:Espacio:registrarEditar3.html.twig */
class __TwigTemplate_eb29bccbb30c887c0bf2f352a1e6aab3 extends Twig_Template
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
        echo "
\t<!-- Text Section End -->

\t<div class=\"verde\" id=\"work\"  >

\t\t<div class=\"nuevo\">

\t\t\t<div id=\"formnuevo\">
\t\t\t\t<form action=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " >
\t\t\t\t\t
\t\t\t\t<h2 > Registrar nuevo espacio (3/5)</h2>
\t\t\t\t\t<p>
\t\t\t\t\t\t";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t\t\t\t\t&nbsp;
\t\t\t\t\t</p>

\t\t\t\t<p>
\t\t\t\t\t<strong>Detalles del espacio :</strong>
\t\t\t\t</p>

\t\t\t\t<p>
\t\t\t\t\tSuperficie  (m2)
\t\t\t\t</p>
\t\t\t\t";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "superficie"), 'widget', array("attr" => array("class" => "formstyle", "title" => "Superficie  (m2)", "min" => "0", "step" => "1", "value" => "0")));
        echo "
\t\t\t\t<p>
\t\t\t\t\tAncho Mínimo Libre (m)
\t\t\t\t</p>\t\t
\t\t\t\t";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "anchoMinimoLibre"), 'widget', array("attr" => array("class" => "formstyle", "title" => "Ancho Mínimo Libre (m)", "min" => "0", "step" => "1", "value" => "0")));
        echo "
\t\t\t\t<p>
\t\t\t\t\tLargo Mínimo Libre (m)
\t\t\t\t</p>
\t\t\t\t";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "largoMinimoLibre"), 'widget', array("attr" => array("class" => "formstyle", "title" => "Largo Mínimo Libre (m)", "min" => "0", "step" => "1", "value" => "0")));
        echo "
\t\t\t\t<p>
\t\t\t\t\tAltura Mínima Libre (m)
\t\t\t\t</p>
\t\t\t\t";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "alturaMinimaLibre"), 'widget', array("attr" => array("class" => "formstyle", "title" => "Altura Mínima Libre (m)", "min" => "0", "step" => "1", "value" => "0")));
        echo "

\t\t\t\t<p>
\t\t\t\t\t&nbsp;
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t<strong>Permite las siguientes configuraciones:</strong>
\t\t\t\t</p>
\t\t\t\t<p class=\"left\">
\t\t\t\t\t";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "modoAula"), 'widget');
        echo "
\t\t\t\t\t<strong> Modo Aula (Sillas)</strong>
\t\t\t\t<p class=\"right\">
\t\t\t\t\thasta
\t\t\t\t\t";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "modoAulaCapacidad"), 'widget', array("attr" => array("class" => "formstyle3", "title" => "...", "min" => "0", "step" => "1", "value" => "0")));
        echo "
\t\t\t\t\tpersonas
\t\t\t\t</p>

\t\t\t\t<p class=\"left\">
\t\t\t\t\t";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "modoBanquete"), 'widget');
        echo "
\t\t\t\t\t<strong> Modo Banquete</strong>
\t\t\t\t<p class=\"right\">
\t\t\t\t\thasta
\t\t\t\t\t";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "modoBanqueteCapacidad"), 'widget', array("attr" => array("class" => "formstyle3", "title" => "...", "min" => "0", "step" => "1", "value" => "0")));
        echo "
\t\t\t\t\tpersonas
\t\t\t\t</p>

\t\t\t\t<p class=\"left\">
\t\t\t\t\t";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "modoCocktail"), 'widget');
        echo "
\t\t\t\t\t<strong> Modo Cocktail</strong>
\t\t\t\t<p class=\"right\">
\t\t\t\t\thasta
\t\t\t\t\t";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "modoCocktailCapacidad"), 'widget', array("attr" => array("class" => "formstyle3", "title" => "...", "min" => "0", "step" => "1", "value" => "0")));
        echo "
\t\t\t\t\tpersonas
\t\t\t\t</p>

\t\t\t\t<p class=\"left\">
\t\t\t\t\t";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "modoEscenario"), 'widget');
        echo "
\t\t\t\t\t<strong> Modo Escenario</strong>
\t\t\t\t<p class=\"right\">
\t\t\t\t\thasta
\t\t\t\t\t";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "modoEscenarioCapacidad"), 'widget', array("attr" => array("class" => "formstyle3", "title" => "...", "min" => "0", "step" => "1", "value" => "0")));
        echo "
\t\t\t\t\tpersonas
\t\t\t\t</p>

\t\t\t\t<p class=\"left\">
\t\t\t\t\t";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "modoExposicion"), 'widget');
        echo "
\t\t\t\t\t<strong> Modo Exposición</strong>
\t\t\t\t<p class=\"right\">
\t\t\t\t\thasta
\t\t\t\t\t";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "modoExposicionCapacidad"), 'widget', array("attr" => array("class" => "formstyle3", "title" => "...", "min" => "0", "step" => "1", "value" => "0")));
        echo "
\t\t\t\t\tpersonas
\t\t\t\t</p>

\t\t\t\t<p>
\t\t\t\t\t&nbsp;
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t&nbsp;
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t<strong>El espacio tiene:</strong>
\t\t\t\t</p>

\t\t\t\t<p style=\"float:left; width:200px;\">
\t\t\t\t\t";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "jardin"), 'widget');
        echo "
\t\t\t\t\tJardín
\t\t\t\t</p>

\t\t\t\t</br>
\t\t\t\t<p style=\"float:left; width:200px;\">
\t\t\t\t\t";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pilaresSueltos"), 'widget');
        echo "
\t\t\t\t\tPilares sueltos
\t\t\t\t</p>
\t\t\t\t</br>
\t\t\t\t<p style=\"float:left; width:270px;\">
\t\t\t\t\t";
        // line 120
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "entradaAseosMovilidadReducida"), 'widget');
        echo "
\t\t\t\t\tEntrada y aseos movilidad reducida
\t\t\t\t</p>
\t\t\t\t</br>
\t\t\t\t<p style=\"float:left;width:200px;\">
\t\t\t\t\t";
        // line 125
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ventanasExterior"), 'widget');
        echo "
\t\t\t\t\tVentanas al exterior
\t\t\t\t</p>
\t\t\t\t</br>
\t\t\t\t<p style=\"float:left; width:200px;\">
\t\t\t\t\t";
        // line 130
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ventanasPatioInterior"), 'widget');
        echo "
\t\t\t\t\tVentanas al patio interior
\t\t\t\t</p>
\t\t\t\t</br>
\t\t\t\t<p style=\"float:left; width:280px;\">
\t\t\t\t\t";
        // line 135
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "posibilidadOscurecerSala"), 'widget');
        echo "
\t\t\t\t\tPosibilidad de oscurecer la sala
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t&nbsp;
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t&nbsp;
\t\t\t\t</p>
\t\t\t\t
\t\t\t\t";
        // line 145
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "otros"), 'widget', array("attr" => array("class" => "formstyle", "title" => "Otros...")));
        echo "
\t\t\t\t</br>

\t\t\t\t<div class=\"clearfix\"></div>

\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t<p>
\t\t\t\t\t&nbsp;
\t\t\t\t</p>

\t\t\t\t<input type=\"submit\" class=\"botonSubmitFormulario formstyle \" value=\"Siguiente\">
\t\t\t\t<div class=\"enviar\">
\t\t\t\t\t<a href=\"registroespacio1.html\" title=\"Perfil\">Anterior</a>
\t\t\t\t</div>



\t\t\t\t\t\t
\t\t\t

\t\t\t\t";
        // line 165
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "


\t\t\t\t</form>


\t\t\t\t<div id=\"error\"></div>
\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t</div>
\t\t</div>

\t</div>
\t<!-- Work Links Section End -->
\t<!-- Last Words Section End-->
\t<div id=\"sedes\" ></div>
</div>

";
    }

    public function getTemplateName()
    {
        return "ProyectoPrincipalBundle:Espacio:registrarEditar3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 165,  253 => 145,  240 => 135,  232 => 130,  224 => 125,  216 => 120,  208 => 115,  199 => 109,  181 => 94,  174 => 90,  166 => 85,  159 => 81,  151 => 76,  144 => 72,  136 => 67,  129 => 63,  121 => 58,  114 => 54,  102 => 45,  95 => 41,  88 => 37,  81 => 33,  67 => 22,  58 => 18,  48 => 10,  46 => 9,  42 => 7,  39 => 6,  32 => 3,  29 => 2,);
    }
}
