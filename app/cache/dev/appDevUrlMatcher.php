<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Proyecto\\PrincipalBundle\\Controller\\DefaultController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // proyecto_principal_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'proyecto_principal_homepage');
            }

            return array (  '_controller' => 'Proyecto\\PrincipalBundle\\Controller\\DefaultController::indexAction',  '_route' => 'proyecto_principal_homepage',);
        }

        if (0 === strpos($pathinfo, '/e')) {
            if (0 === strpos($pathinfo, '/evento')) {
                // proyecto_principal_eventos
                if ($pathinfo === '/eventos') {
                    return array (  '_controller' => 'Proyecto\\PrincipalBundle\\Controller\\DefaultController::eventosAction',  '_route' => 'proyecto_principal_eventos',);
                }

                // proyecto_principal_evento
                if ($pathinfo === '/evento') {
                    return array (  '_controller' => 'Proyecto\\PrincipalBundle\\Controller\\DefaultController::eventoAction',  '_route' => 'proyecto_principal_evento',);
                }

            }

            if (0 === strpos($pathinfo, '/espacio')) {
                // proyecto_principal_espacio
                if ($pathinfo === '/espacio') {
                    return array (  '_controller' => 'Proyecto\\PrincipalBundle\\Controller\\DefaultController::espacioAction',  '_route' => 'proyecto_principal_espacio',);
                }

                // proyecto_principal_espacios
                if ($pathinfo === '/espacios') {
                    return array (  '_controller' => 'Proyecto\\PrincipalBundle\\Controller\\DefaultController::espaciosAction',  '_route' => 'proyecto_principal_espacios',);
                }

            }

        }

        // proyecto_principal_espacio_registrar
        if ($pathinfo === '/registrar/espacio') {
            return array (  '_controller' => 'Proyecto\\PrincipalBundle\\Controller\\EspacioController::registrarAction',  '_route' => 'proyecto_principal_espacio_registrar',);
        }

        // proyecto_principal_espacio_editar
        if ($pathinfo === '/editar/espacio') {
            return array (  '_controller' => 'Proyecto\\PrincipalBundle\\Controller\\EspacioController::editarAction',  '_route' => 'proyecto_principal_espacio_editar',);
        }

        // proyecto_principal_espacio_registrar2
        if ($pathinfo === '/registrar/espacio/2') {
            return array (  '_controller' => 'Proyecto\\PrincipalBundle\\Controller\\EspacioController::registrar2Action',  '_route' => 'proyecto_principal_espacio_registrar2',);
        }

        // proyecto_principal_espacio_editar2
        if ($pathinfo === '/editar/espacio/2') {
            return array (  '_controller' => 'Proyecto\\PrincipalBundle\\Controller\\EspacioController::editar2Action',  '_route' => 'proyecto_principal_espacio_editar2',);
        }

        // proyecto_principal_espacio_registrar3
        if ($pathinfo === '/registrar/espacio/3') {
            return array (  '_controller' => 'Proyecto\\PrincipalBundle\\Controller\\EspacioController::registrar3Action',  '_route' => 'proyecto_principal_espacio_registrar3',);
        }

        // proyecto_principal_espacio_editar3
        if ($pathinfo === '/editar/espacio/3') {
            return array (  '_controller' => 'Proyecto\\PrincipalBundle\\Controller\\EspacioController::editar3Action',  '_route' => 'proyecto_principal_espacio_editar3',);
        }

        // proyecto_principal_espacio_registrar4
        if ($pathinfo === '/registrar/espacio/4') {
            return array (  '_controller' => 'Proyecto\\PrincipalBundle\\Controller\\EspacioController::registrar4Action',  '_route' => 'proyecto_principal_espacio_registrar4',);
        }

        // proyecto_principal_espacio_editar4
        if ($pathinfo === '/editar/espacio/4') {
            return array (  '_controller' => 'Proyecto\\PrincipalBundle\\Controller\\EspacioController::editar4Action',  '_route' => 'proyecto_principal_espacio_editar4',);
        }

        // proyecto_principal_espacio_registrar5
        if ($pathinfo === '/registrar/espacio/5') {
            return array (  '_controller' => 'Proyecto\\PrincipalBundle\\Controller\\EspacioController::registrar5Action',  '_route' => 'proyecto_principal_espacio_registrar5',);
        }

        // proyecto_principal_espacio_editar5
        if ($pathinfo === '/editar/espacio/5') {
            return array (  '_controller' => 'Proyecto\\PrincipalBundle\\Controller\\EspacioController::editar5Action',  '_route' => 'proyecto_principal_espacio_editar5',);
        }

        if (0 === strpos($pathinfo, '/se')) {
            if (0 === strpos($pathinfo, '/servicio')) {
                // proyecto_principal_servicio
                if ($pathinfo === '/servicio') {
                    return array (  '_controller' => 'Proyecto\\PrincipalBundle\\Controller\\DefaultController::servicioAction',  '_route' => 'proyecto_principal_servicio',);
                }

                // proyecto_principal_servicios
                if ($pathinfo === '/servicios') {
                    return array (  '_controller' => 'Proyecto\\PrincipalBundle\\Controller\\DefaultController::serviciosAction',  '_route' => 'proyecto_principal_servicios',);
                }

            }

            // proyecto_principal_sedes
            if ($pathinfo === '/sedes') {
                return array (  '_controller' => 'Proyecto\\PrincipalBundle\\Controller\\DefaultController::sedesAction',  '_route' => 'proyecto_principal_sedes',);
            }

        }

        // proyecto_users_buscar_ciudad
        if ($pathinfo === '/users/buscarCiudad') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_proyecto_users_buscar_ciudad;
            }

            return array (  '_controller' => 'Proyecto\\PrincipalBundle\\Controller\\UsersController::buscarCiudadAction',  '_route' => 'proyecto_users_buscar_ciudad',);
        }
        not_proyecto_users_buscar_ciudad:

        // proyecto_contacto_enviar_mensaje
        if ($pathinfo === '/contacto/enviarMensaje') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_proyecto_contacto_enviar_mensaje;
            }

            return array (  '_controller' => 'Proyecto\\PrincipalBundle\\Controller\\ContactoController::enviarMensajeAction',  '_route' => 'proyecto_contacto_enviar_mensaje',);
        }
        not_proyecto_contacto_enviar_mensaje:

        if (0 === strpos($pathinfo, '/perfil')) {
            if (0 === strpos($pathinfo, '/perfil/p')) {
                // proyecto_perfil_privado
                if ($pathinfo === '/perfil/privado') {
                    return array (  '_controller' => 'Proyecto\\PrincipalBundle\\Controller\\PerfilController::privadoAction',  '_route' => 'proyecto_perfil_privado',);
                }

                // proyecto_perfil_publico
                if ($pathinfo === '/perfil/publico') {
                    return array (  '_controller' => 'Proyecto\\PrincipalBundle\\Controller\\PerfilController::publicoAction',  '_route' => 'proyecto_perfil_publico',);
                }

            }

            // proyecto_perfil_editar
            if ($pathinfo === '/perfil/editar') {
                return array (  '_controller' => 'Proyecto\\PrincipalBundle\\Controller\\PerfilController::editarAction',  '_route' => 'proyecto_perfil_editar',);
            }

        }

        // proyecto_perfil_crearcuenta
        if ($pathinfo === '/crearcuenta') {
            return array (  '_controller' => 'Proyecto\\PrincipalBundle\\Controller\\PerfilController::crearCuentaAction',  '_route' => 'proyecto_perfil_crearcuenta',);
        }

        if (0 === strpos($pathinfo, '/perfil')) {
            // proyecto_perfil_facturacion
            if ($pathinfo === '/perfil/facturacion') {
                return array (  '_controller' => 'Proyecto\\PrincipalBundle\\Controller\\FacturacionController::indexAction',  '_route' => 'proyecto_perfil_facturacion',);
            }

            // proyecto_perfil_enviar_solicitud_baja
            if ($pathinfo === '/perfil/enviarSolicitudBaja') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_proyecto_perfil_enviar_solicitud_baja;
                }

                return array (  '_controller' => 'Proyecto\\PrincipalBundle\\Controller\\PerfilController::enviarSolicitudBajaAction',  '_route' => 'proyecto_perfil_enviar_solicitud_baja',);
            }
            not_proyecto_perfil_enviar_solicitud_baja:

            // proyecto_perfil_cancelar_solicitud_baja
            if ($pathinfo === '/perfil/cancelarSolicitudBaja') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_proyecto_perfil_cancelar_solicitud_baja;
                }

                return array (  '_controller' => 'Proyecto\\PrincipalBundle\\Controller\\PerfilController::cancelarSolicitudBajaAction',  '_route' => 'proyecto_perfil_cancelar_solicitud_baja',);
            }
            not_proyecto_perfil_cancelar_solicitud_baja:

        }

        // proyecto_principal_acceso
        if ($pathinfo === '/acceso') {
            return array (  '_controller' => 'Proyecto\\PrincipalBundle\\Controller\\UsersController::accesoAction',  '_route' => 'proyecto_principal_acceso',);
        }

        // proyecto_principal_registro
        if ($pathinfo === '/registro') {
            return array (  '_controller' => 'Proyecto\\PrincipalBundle\\Controller\\UsersController::registroAction',  '_route' => 'proyecto_principal_registro',);
        }

        // proyecto_principal_cuenta_guardar
        if ($pathinfo === '/cuenta/guardar') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_proyecto_principal_cuenta_guardar;
            }

            return array (  '_controller' => 'Proyecto\\PrincipalBundle\\Controller\\DefaultController::cuentaGuardarAction',  '_route' => 'proyecto_principal_cuenta_guardar',);
        }
        not_proyecto_principal_cuenta_guardar:

        // proyecto_principal_cerrarsesion
        if ($pathinfo === '/logout') {
            return array (  '_controller' => 'Proyecto\\PrincipalBundle\\Controller\\DefaultController::accesoAction',  '_route' => 'proyecto_principal_cerrarsesion',);
        }

        // proyecto_principal_perfil
        if ($pathinfo === '/perfil') {
            return array (  '_controller' => 'Proyecto\\PrincipalBundle\\Controller\\DefaultController::perfilAction',  '_route' => 'proyecto_principal_perfil',);
        }

        // proyecto_principal_listado
        if ($pathinfo === '/listado') {
            return array (  '_controller' => 'Proyecto\\PrincipalBundle\\Controller\\DefaultController::listadoAction',  '_route' => 'proyecto_principal_listado',);
        }

        // proyecto_principal_acerca
        if ($pathinfo === '/acerca') {
            return array (  '_controller' => 'Proyecto\\PrincipalBundle\\Controller\\DefaultController::acercaAction',  '_route' => 'proyecto_principal_acerca',);
        }

        // proyecto_principal_validacion
        if ($pathinfo === '/validacion') {
            return array('_route' => 'proyecto_principal_validacion');
        }

        // proyecto_principal_nuevo
        if ($pathinfo === '/nuevo') {
            return array (  '_controller' => 'Proyecto\\PrincipalBundle\\Controller\\DefaultController::nuevoAction',  '_route' => 'proyecto_principal_nuevo',);
        }

        // proyecto_principal_historia
        if ($pathinfo === '/historia') {
            return array (  '_controller' => 'Proyecto\\PrincipalBundle\\Controller\\DefaultController::historiaAction',  '_route' => 'proyecto_principal_historia',);
        }

        if (0 === strpos($pathinfo, '/login')) {
            // login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'AcmeSecurityBundle:Security:login',  '_route' => 'login',);
            }

            // login_check
            if ($pathinfo === '/login_check') {
                return array('_route' => 'login_check');
            }

        }

        // proyecto_principal_procesa_objeto
        if ($pathinfo === '/procesa/objeto') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_proyecto_principal_procesa_objeto;
            }

            return array (  '_controller' => 'Proyecto\\PrincipalBundle\\Controller\\DefaultController::procesaObjetoAction',  '_route' => 'proyecto_principal_procesa_objeto',);
        }
        not_proyecto_principal_procesa_objeto:

        if (0 === strpos($pathinfo, '/e')) {
            // proyecto_principal_elimina_objeto
            if ($pathinfo === '/elimina/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_proyecto_principal_elimina_objeto;
                }

                return array (  '_controller' => 'Proyecto\\PrincipalBundle\\Controller\\DefaultController::eliminarAction',  '_route' => 'proyecto_principal_elimina_objeto',);
            }
            not_proyecto_principal_elimina_objeto:

            // proyecto_principal_editar_objeto
            if (0 === strpos($pathinfo, '/editar') && preg_match('#^/editar(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'proyecto_principal_editar_objeto')), array (  '_controller' => 'Proyecto\\PrincipalBundle\\Controller\\DefaultController::editarAction',  'id' => '1',));
            }

        }

        // proyecto_principal_ver_objeto
        if (0 === strpos($pathinfo, '/ver') && preg_match('#^/ver(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'proyecto_principal_ver_objeto')), array (  '_controller' => 'Proyecto\\PrincipalBundle\\Controller\\DefaultController::verAction',  'id' => '1',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
