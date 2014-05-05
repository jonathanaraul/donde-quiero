<?php

namespace Proyecto\PrincipalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Security\Core\SecurityContext;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use JMS\SecurityExtraBundle\Annotation\Secure;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Proyecto\PrincipalBundle\Entity\User;
use Proyecto\PrincipalBundle\Entity\Evento;

class EventoController extends Controller {


	public function eventoAction() {
		$firstArray = UtilitiesAPI::getDefaultContent($this);
		$secondArray = array();

		$array = array_merge($firstArray, $secondArray);
		return $this -> render('ProyectoPrincipalBundle:Evento:evento.html.twig', $array);
	}
	public function eventosAction() {
		$firstArray = UtilitiesAPI::getDefaultContent($this);
		$secondArray = array();

		$array = array_merge($firstArray, $secondArray);
		return $this -> render('ProyectoPrincipalBundle:Evento:eventos.html.twig', $array);
	}

	public function registrarAction(Request $request) {
		$id = null;
		$url = $this -> generateUrl('proyecto_principal_evento_registrar');

		return EventoController::registrarEditar($id ,$url, $request,$this);
	}
	public function editarAction(Request $request) {

		$user = UtilitiesAPI::getActiveUser($this);
		$id = $user->getId();
		$url = $this -> generateUrl('proyecto_principal_evento_editar');

		return EventoController::registrarEditar($id ,$url,$request, $this);

	}

	public static function registrarEditar($id ,$url,Request $request,$class) {
		if($id == null )$object = new Evento();
		else $object = $class -> getDoctrine() -> getRepository('ProyectoPrincipalBundle:Evento') -> find($id);
		
		$firstArray = UtilitiesAPI::getDefaultContent($class);
		$secondArray = array();
		$user = UtilitiesAPI::getActiveUser($class);
		$provincias = HelpersController::getProvincias($class);
		$idProvincia = $user->getProvincia()->getId();

		$parametro = $user->getProvincia()->getId();
		$object->setLocalidad($user->getLocalidad());

        $form = $class->createFormBuilder($object)

            ->add('propietarioEmpleado', 'checkbox',array('required'  => false))
            ->add('agenteComercial', 'checkbox',array('required'  => false))
            ->add('administradorWeb', 'checkbox',array('required'  => false))

            ->add('nombre', 'text')
            ->add('descripcionGeneral', 'textarea')
            ->add('sede1', 'entity', array(
			    'class' => 'ProyectoPrincipalBundle:Sede1',
			    'property' => 'nombre',
			    'required'  => false,
			    'query_builder' => function(EntityRepository $er) {
			        return $er->createQueryBuilder('u')
			            ->orderBy('u.nombre', 'ASC');
			    },
			))
            ->add('localidad', 'entity', array(
			    'class' => 'ProyectoPrincipalBundle:Localidad',
			    'property' => 'nombre',
			    'query_builder' => function(EntityRepository $er)use ( $parametro ) {


			        return $er->createQueryBuilder('u')
			            ->add('where', 'u.provincia = ?1')
			            ->orderBy('u.nombre', 'ASC')
			            ->setParameter(1, $parametro); // Sustituye ?1 por 100
			    },

			))
			->add('duracionTotal', 'text')
			->add('file','file') 
            ->add('enlaceVideo', 'text')


            ->add('proyectorPantallaSala', 'checkbox',array('required'  => false))
            ->add('microfonoAltavoces', 'checkbox',array('required'  => false))
            ->add('videocamara', 'checkbox',array('required'  => false))
            ->add('wifi', 'checkbox',array('required'  => false))
            ->add('internetCable', 'checkbox',array('required'  => false))
            ->add('maquinaBebidas', 'checkbox',array('required'  => false))
            ->add('pizarra', 'checkbox',array('required'  => false))
            ->add('conserjeria', 'checkbox',array('required'  => false))
            ->add('aireAcondicionado', 'checkbox',array('required'  => false))
            ->add('calefaccion', 'checkbox',array('required'  => false))
            ->add('otrosServicios', 'text')


            ->add('aceptacionReservaAutomatica', 'checkbox',array('required'  => false))
            ->add('tiempoMaximoAceptacionReservaAutomatica24h', 'checkbox',array('required'  => false))
            ->add('tiempoMaximoAceptacionReservaAutomatica48', 'checkbox',array('required'  => false))
            ->add('datosFacturacionPagoDelUsuario', 'checkbox',array('required'  => false))
            ->add('anadirDatosFacturacionPago', 'checkbox',array('required'  => false))

            ->add('formacionTeorica', 'checkbox',array('required'  => false))
            ->add('formacionInformatica', 'checkbox',array('required'  => false))
            ->add('formacionTaller', 'checkbox',array('required'  => false))
            ->add('exposicion', 'checkbox',array('required'  => false))
            ->add('ventaFeria', 'checkbox',array('required'  => false))
            ->add('deporte', 'checkbox',array('required'  => false))
            ->add('espectaculo', 'checkbox',array('required'  => false))
            ->add('reunionAsamblea', 'checkbox',array('required'  => false))
            ->add('boda', 'checkbox',array('required'  => false))
            ->add('fiesta', 'checkbox',array('required'  => false))
            ->add('jardineria', 'checkbox',array('required'  => false))


            ->add('aceptoCondicionesUsoPoliticaPrivacidad', 'checkbox',array('required'  => false))
        	->add('precioPorHora','number',array('required'  => true))
            ->add('precio','number',array('required'  => true))


            

            ->getForm();




	    if ($request->isMethod('POST')) {

        	$form->bind($request);

        	if ($form->isValid()) {


	        	$em = $class->getDoctrine()->getManager();
	        	

				if($id == null) {
					$object -> setFechaRegistro(new \DateTime());
				}
				
				//Casos especiales
				if($object->getEnlaceVideo()=='Añadir enlace a Video') $object->setEnlaceVideo(null);
				if($object->getOtrosServicios()=='Otros...') $object->setOtrosServicios(null);


				$object -> setUser($user);	
    			
    			$em->persist($object);
				$em->flush();

				return $class->redirect($class->generateUrl('proyecto_principal_homepage'));

    		}
	
	    }

        $secondArray = array('form' => $form->createView(),'url'=>$url,'idProvincia'=>$idProvincia,'provincias'=>$provincias);
		$array = array_merge($firstArray, $secondArray);
		return $class -> render('ProyectoPrincipalBundle:Evento:registrarEditar.html.twig', $array);
	}

    public function widgetAction($numResults,$paginacion)
    {
		$arreglo = array();
        $em = $this->getDoctrine()->getManager();

        if($paginacion==1)$paginacion = true;
        else $paginacion = false;
        $arreglo = EventoController::consultaBusqueda($numResults,0,null,$paginacion);

        $dql =  'SELECT COUNT(o1.id) c,o2.id,o2.nombre 
                 FROM ProyectoPrincipalBundle:Evento o1, 
                      ProyectoPrincipalBundle:Localidad o2
                 WHERE o1.localidad = o2.id

        GROUP BY  o1.localidad order by c  desc';

        $query = $em->createQuery( $dql );
        $arreglo['localidades'] = $query->getResult();

        return $this->render('ProyectoPrincipalBundle:Evento:widget.html.twig', $arreglo);
    }

    public function busquedaAction() {
        $peticion = $this -> getRequest();
        $doctrine = $this -> getDoctrine();
        $post = $peticion -> request;
        $em = $this->getDoctrine()->getManager();

        $localidad = intval($post -> get("localidad"));
        $precioHora = intval($post -> get("precioHora"));
        $precio = intval($post -> get("precio"));
        $duracionTotal = intval($post -> get("duracionTotal"));
        $actividades = trim($post -> get("actividades"));

        $paginacion = intval($post -> get("paginacion"));
        $numResults = intval($post -> get("numResults"));
        $indice = intval($post -> get("indice"));

        if($paginacion==1)$paginacion = true;
        else $paginacion = false;


        $parametros = array('localidad'=>$localidad,'precioHora'=>$precioHora,'precio'=>$precio,
                            'duracionTotal'=>$duracionTotal,'actividades'=>$actividades);

        $arreglo = EventoController::consultaBusqueda($numResults,$indice,$parametros,$paginacion);

        $htmlElementos = $this -> renderView('ProyectoPrincipalBundle:Evento:elementos.html.twig', array('elementos'=>$arreglo['elementos']) );
        $htmlPaginacion = $this -> renderView('ProyectoPrincipalBundle:Evento:paginacion.html.twig', array('dataPaginacion'=>$arreglo['dataPaginacion']));

        $respuesta = new response(json_encode(array('htmlElementos' => $htmlElementos,'htmlPaginacion' =>$htmlPaginacion)));
        $respuesta -> headers -> set('content_type', 'aplication/json');
        return $respuesta;
    }
    public function consultaBusqueda($numResults,$indice,$parametros,$paginacion){

   
    $em = $this->getDoctrine()->getManager();
    $array = array();

    $dql =  'SELECT o1.id,o1.nombre,o1.path,o1.duracionTotal,o1.precioPorHora,o2.nombre localidad
                 FROM ProyectoPrincipalBundle:Evento o1, ProyectoPrincipalBundle:Localidad o2 ';

    $dqlTotales =  'SELECT COUNT(o1.id) FROM ProyectoPrincipalBundle:Evento o1 ';


    $modoA = "";
    $modoB = "";
    $tieneWhere = false;
    $tieneWhereTotales = false;

    if($parametros!=null){

        if($parametros['localidad']!= null && $parametros['localidad']!=0){

            if(!$tieneWhere){$dql.= ' WHERE ';$tieneWhere= true; }else $dql.= ' AND ';
            if(!$tieneWhereTotales){$dqlTotales.= ' WHERE ';$tieneWhereTotales= true; }else $dqlTotales.= ' AND ';
            
                $dql.= ' o1.localidad = :localidad';
                $dqlTotales.=' o1.localidad = :localidad';
        }
        if($parametros['precioHora']!= null && $parametros['precioHora']!=0){

            if(!$tieneWhere){$dql.= ' WHERE ';$tieneWhere= true; }else $dql.= ' AND ';
            if(!$tieneWhereTotales){$dqlTotales.= ' WHERE ';$tieneWhereTotales= true; }else $dqlTotales.= ' AND ';

            if($parametros['precioHora']>1 && $parametros['precioHora']<=1000){
                $dql.= ' o1.precioPorHora <= :precioHora';
                $dqlTotales.= ' o1.precioPorHora <= :precioHora';
            }
            else if($parametros['precioHora']>1000){
                $dql.= ' o1.precioPorHora > :precioHora';
                $dqlTotales.=' o1.precioPorHora > :precioHora';
            }
            else if($parametros['precioHora']==1){
                $dql.= ' o1.precioPorHora = :precioHora';
                $dqlTotales.=' o1.precioPorHora = :precioHora';
            }
        }
        if($parametros['precio']!= null && $parametros['precio']!=0){

            if(!$tieneWhere){$dql.= ' WHERE ';$tieneWhere= true; }else $dql.= ' AND ';
            if(!$tieneWhereTotales){$dqlTotales.= ' WHERE ';$tieneWhereTotales= true; }else $dqlTotales.= ' AND ';

            if($parametros['precio']>1 && $parametros['precio']<=10000){
                $dql.= ' o1.precio <= :precio';
                $dqlTotales.= ' o1.precio <= :precio';
            }
            else if($parametros['precio']>10000){
                $dql.= ' o1.precio > :precio';
                $dqlTotales.=' o1.precio > :precio';
            }
            else if($parametros['precio']==1){
                $dql.= ' o1.precio = :precio';
                $dqlTotales.=' o1.precio = :precio';
            }
        }
        if($parametros['duracionTotal']!= null && $parametros['duracionTotal']!=0){

            if(!$tieneWhere){$dql.= ' WHERE ';$tieneWhere= true; }else $dql.= ' AND ';
            if(!$tieneWhereTotales){$dqlTotales.= ' WHERE ';$tieneWhereTotales= true; }else $dqlTotales.= ' AND ';

            if($parametros['duracionTotal']>1 && $parametros['duracionTotal']<=300){
                $dql.= ' o1.duracionTotal <= :duracionTotal';
                $dqlTotales.= ' o1.duracionTotal <= :duracionTotal';
            }
            else if($parametros['duracionTotal']>300){
                $dql.= ' o1.duracionTotal > :duracionTotal';
                $dqlTotales.=' o1.duracionTotal > :duracionTotal';
            }
            else if($parametros['duracionTotal']==1){
                $dql.= ' o1.duracionTotal = :duracionTotal';
                $dqlTotales.=' o1.duracionTotal = :duracionTotal';
            }
        }
        if($parametros['actividades']!= null && $parametros['actividades']!='0'){
            
            if(!$tieneWhere){$dql.= ' WHERE ';$tieneWhere= true; }else $dql.= ' AND ';
            if(!$tieneWhereTotales){$dqlTotales.= ' WHERE ';$tieneWhereTotales= true; }else $dqlTotales.= ' AND ';
           
            $dql.= ' o1.'.$parametros['actividades'].' = :actividades';
            $dqlTotales.= ' o1.'.$parametros['actividades'].' = :actividades';
            
        }
    }

    if(!$tieneWhere){$dql.= ' WHERE ';$tieneWhere= true; }else $dql.= ' AND ';
    $dql.= ' o1.localidad = o2.id ORDER BY o1.id ASC';

  //  echo '</br>dql='.$dql;echo '</br>dqltotal='.$dqlTotales;exit;

        $query = $em->createQuery( $dql )
        ->setMaxResults($numResults)
        ->setFirstResult($indice*$numResults);

        if($parametros['localidad']!= null && $parametros['localidad']!=0) $query->setParameter('localidad', $parametros['localidad']);
        if($parametros['precioHora']!= null && $parametros['precioHora']!=0){
            if($parametros['precioHora']!=1)$query->setParameter('precioHora', $parametros['precioHora']);
            else $query->setParameter('precioHora',0);
        }
        if($parametros['precio']!= null && $parametros['precio']!=0){
            if($parametros['precio']!=1)$query->setParameter('precio', $parametros['precio']);
            else $query->setParameter('precio',0);
        }
        if($parametros['duracionTotal']!= null && $parametros['duracionTotal']!=0)$query->setParameter('duracionTotal', $parametros['duracionTotal']);
        if($parametros['actividades']!= null && $parametros['actividades']!='0') $query->setParameter('actividades', 1);      

        $array['elementos'] = $query->getResult();
        $array['dataPaginacion']['obtenidos'] = count( $array['elementos']);


        $query = $em->createQuery( $dqlTotales );

        if($parametros['localidad']!= null && $parametros['localidad']!=0) $query->setParameter('localidad', $parametros['localidad']);
        if($parametros['precioHora']!= null && $parametros['precioHora']!=0){
            if($parametros['precioHora']!=1)$query->setParameter('precioHora', $parametros['precioHora']);
            else $query->setParameter('precioHora',0);
        }
        if($parametros['precio']!= null && $parametros['precio']!=0){
            if($parametros['precio']!=1)$query->setParameter('precio', $parametros['precio']);
            else $query->setParameter('precio',0);
        }
        if($parametros['duracionTotal']!= null && $parametros['duracionTotal']!=0)$query->setParameter('duracionTotal', $parametros['duracionTotal']);
        if($parametros['actividades']!= null && $parametros['actividades']!='0') $query->setParameter('actividades', 1);      


        $array['dataPaginacion']['total'] = intval($query->getSingleScalarResult());
        $array['dataPaginacion']['paginacion'] = $paginacion;
        $array['dataPaginacion']['numPaginacion'] = ceil($array['dataPaginacion']['total'] / $numResults);
        $array['dataPaginacion']['numResults'] = $numResults;

        //var_dump( $array['dataPaginacion']);
        //exit;

        return $array;
    }

}
