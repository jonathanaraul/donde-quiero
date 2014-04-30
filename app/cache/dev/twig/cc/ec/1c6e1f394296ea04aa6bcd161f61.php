<?php

/* ProyectoPrincipalBundle:Default:sesion.html.twig */
class __TwigTemplate_ccec1c6e1f394296ea04aa6bcd161f61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
  \t<div id=\"registro\">
  \t\t";
        // line 3
        if ((null === $this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "usuario"))) {
            // line 4
            echo "      <p><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_principal_acceso"), "html", null, true);
            echo "\">Iniciar Sesión</a></p>
      ";
        } else {
            // line 6
            echo "\t  <p>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["datos"]) ? $context["datos"] : $this->getContext($context, "datos")), "usuario"), "html", null, true);
            echo " - <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_perfil_privado"), "html", null, true);
            echo "\">Perfil Privado</a> - <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("proyecto_principal_cerrarsesion"), "html", null, true);
            echo "\">Cerrar Sesión</a></p>
      ";
        }
        // line 8
        echo "

   </div>
\t<div class=\"clearfix\"></div> 
    <!-- Text Section End -->";
    }

    public function getTemplateName()
    {
        return "ProyectoPrincipalBundle:Default:sesion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 8,  31 => 6,  25 => 4,  23 => 3,  19 => 1,  1003 => 787,  999 => 786,  948 => 738,  931 => 726,  916 => 716,  901 => 706,  887 => 697,  872 => 687,  857 => 677,  842 => 667,  828 => 658,  761 => 596,  757 => 595,  710 => 551,  702 => 546,  687 => 536,  672 => 526,  657 => 516,  643 => 507,  628 => 497,  613 => 487,  598 => 477,  584 => 468,  526 => 415,  522 => 414,  422 => 317,  412 => 310,  396 => 299,  381 => 289,  366 => 279,  352 => 270,  338 => 261,  323 => 251,  308 => 241,  294 => 232,  211 => 154,  207 => 153,  107 => 56,  88 => 40,  77 => 32,  66 => 24,  57 => 18,  45 => 8,  43 => 7,  40 => 6,  32 => 3,  29 => 2,);
    }
}
