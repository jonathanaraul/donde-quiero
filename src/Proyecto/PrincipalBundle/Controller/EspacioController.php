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
use Proyecto\PrincipalBundle\Entity\Espacio;
use Proyecto\PrincipalBundle\Entity\Reserva;
use Proyecto\PrincipalBundle\Entity\Confirmacion;
use Proyecto\PrincipalBundle\Entity\ConfirmacionElemento;

class EspacioController extends Controller {


	public function espacioAction($id) {
		$firstArray = UtilitiesAPI::getDefaultContent($this);

        $object = $this -> getDoctrine() -> getRepository('ProyectoPrincipalBundle:Espacio') -> find($id);
		$secondArray = array('object'=>$object);

		$array = array_merge($firstArray, $secondArray);
		return $this -> render('ProyectoPrincipalBundle:Espacio:espacio.html.twig', $array);
	}
	public function espaciosAction() {
		$firstArray = UtilitiesAPI::getDefaultContent($this);
		$secondArray = array();

		$array = array_merge($firstArray, $secondArray);
		return $this -> render('ProyectoPrincipalBundle:Espacio:espacios.html.twig', $array);
	}

	public function registrarAction(Request $request) {
		$id = null;
		$url = $this -> generateUrl('proyecto_principal_espacio_registrar');

		return EspacioController::registrarEditar($id ,$url, $request,$this);
	}
	public function editarAction(Request $request) {

		$user = UtilitiesAPI::getActiveUser($this);
		$id = $user->getId();
		$url = $this -> generateUrl('proyecto_principal_espacio_editar');

		return EspacioController::registrarEditar($id ,$url,$request, $this);

	}

	public static function registrarEditar($id ,$url,Request $request,$class) {
		if($id == null )$object = new Espacio();
		else $object = $class -> getDoctrine() -> getRepository('ProyectoPrincipalBundle:Espacio') -> find($id);
		
		$firstArray = UtilitiesAPI::getDefaultContent($class);
		$secondArray = array();
		$user = UtilitiesAPI::getActiveUser($class);
		$provincias = HelpersController::getProvincias($class);
		$idProvincia = $user->getProvincia()->getId();

		$parametro = $user->getProvincia()->getId();
		$object->setLocalidad($user->getLocalidad());

        $form = $class->createFormBuilder($object)
            ->add('jardineria', 'checkbox',array('required'  => false))
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
			->add('file','file') 
            ->add('enlaceVideo', 'text')

            ->add('superficie')
            ->add('anchoMinimoLibre')
            ->add('largoMinimoLibre')
            ->add('alturaMinimaLibre')
            ->add('modoAula', 'checkbox',array('required'  => false))
            ->add('modoAulaCapacidad')
            ->add('modoBanquete', 'checkbox',array('required'  => false))
            ->add('modoBanqueteCapacidad')
            ->add('modoCocktail', 'checkbox',array('required'  => false))
            ->add('modoCocktailCapacidad')
            ->add('modoEscenario', 'checkbox',array('required'  => false))
            ->add('modoEscenarioCapacidad')
            ->add('modoExposicion', 'checkbox',array('required'  => false))
            ->add('modoExposicionCapacidad')
            
            ->add('pilaresSueltos', 'checkbox',array('required'  => false))
            ->add('entradaAseosMovilidadReducida', 'checkbox',array('required'  => false))
            ->add('ventanasExterior', 'checkbox',array('required'  => false))
            ->add('ventanasPatioInterior', 'checkbox',array('required'  => false))
            ->add('posibilidadOscurecerSala', 'checkbox',array('required'  => false))
            ->add('otrasCaracteristicas', 'text')

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

        	->add('precioPorHora','number',array('required'  => true))
            ->add('aceptacionReservaAutomatica', 'checkbox',array('required'  => false))
            ->add('tiempoMaximoAceptacionReservaAutomatica24h', 'checkbox',array('required'  => false))
            ->add('tiempoMaximoAceptacionReservaAutomatica48', 'checkbox',array('required'  => false))
            ->add('datosFacturacionPagoDelUsuario', 'checkbox',array('required'  => false))
            ->add('anadirDatosFacturacionPago', 'checkbox',array('required'  => false))
            ->add('todas', 'checkbox',array('required'  => false))
            ->add('similaresCentroRealiza', 'checkbox',array('required'  => false))
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

            ->add('aceptoCondicionesUsoPoliticaPrivacidad', 'checkbox',array('required'  => false))


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
				if($object->getOtrasCaracteristicas()=='Otros...') $object->setOtrasCaracteristicas(null);
				if($object->getOtrosServicios()=='Otros...') $object->setOtrosServicios(null);


				$object -> setUser($user);	
    			
    			$em->persist($object);
				$em->flush();

				return $class->redirect($class->generateUrl('proyecto_principal_homepage'));

    		}
	
	    }

        $secondArray = array('form' => $form->createView(),'url'=>$url,'idProvincia'=>$idProvincia,'provincias'=>$provincias);
		$array = array_merge($firstArray, $secondArray);
		return $class -> render('ProyectoPrincipalBundle:Espacio:registrarEditar.html.twig', $array);
	}
    public function destacadosAction($numResults)
    {
        $arreglo = array();
       

        $em = $this->getDoctrine()->getManager();

        $dql =  'SELECT o1.id,o1.nombre,o1.path, o1.superficie,o1.precioPorHora,o2.nombre localidad
                 FROM ProyectoPrincipalBundle:Espacio o1, ProyectoPrincipalBundle:Localidad o2 WHERE o1.localidad = o2.id ORDER BY o1.id ASC';

        $query = $em->createQuery( $dql )
                ->setMaxResults($numResults)
               ->setFirstResult(10);

        $arreglo['destacados'] = $query->getResult();

        return $this->render('ProyectoPrincipalBundle:Espacio:destacados.html.twig', $arreglo);
    }
    public function widgetAction($numResults,$paginacion)
    {
		$arreglo = array();
       

        $em = $this->getDoctrine()->getManager();

        if($paginacion==1)$paginacion = true;
        else $paginacion = false;
        $arreglo = EspacioController::consultaBusqueda($numResults,0,null,$paginacion);

        $dql =  'SELECT COUNT(o1.id) c,o2.id,o2.nombre 
                 FROM ProyectoPrincipalBundle:Espacio o1, 
                      ProyectoPrincipalBundle:Localidad o2
                 WHERE o1.localidad = o2.id

        GROUP BY  o1.localidad order by c  desc';

        $query = $em->createQuery( $dql );
        $arreglo['localidades'] = $query->getResult();

        return $this->render('ProyectoPrincipalBundle:Espacio:widget.html.twig', $arreglo);
    }

    public function busquedaAction() {
        $peticion = $this -> getRequest();
        $doctrine = $this -> getDoctrine();
        $post = $peticion -> request;
        $em = $this->getDoctrine()->getManager();

        $precioHora = intval($post -> get("precio"));
        $actividades = trim($post -> get("actividades"));
        $superficie = intval($post -> get("superficie"));
        $modo = trim($post -> get("modo"));
        $localidad = intval($post -> get("localidad"));
        $paginacion = intval($post -> get("paginacion"));
        
        $numResults = intval($post -> get("numResults"));
        $indice = intval($post -> get("indice"));

        if($paginacion==1)$paginacion = true;
        else $paginacion = false;


        $parametros = array('precioHora'=>$precioHora,'actividades'=>$actividades,'superficie'=>$superficie,'modo'=>$modo,'localidad'=>$localidad);
        //echo 'el indice es'.$indice;
        //exit;
        $arreglo = EspacioController::consultaBusqueda($numResults,$indice,$parametros,$paginacion);

        $htmlElementos = $this -> renderView('ProyectoPrincipalBundle:Espacio:elementos.html.twig', array('elementos'=>$arreglo['elementos']) );
        $htmlPaginacion = $this -> renderView('ProyectoPrincipalBundle:Espacio:paginacion.html.twig', array('dataPaginacion'=>$arreglo['dataPaginacion']));


        $respuesta = new response(json_encode(array('htmlElementos' => $htmlElementos,'htmlPaginacion' =>$htmlPaginacion)));
        $respuesta -> headers -> set('content_type', 'aplication/json');
        return $respuesta;
    }
    public function consultaBusqueda($numResults,$indice,$parametros,$paginacion){

   
    $em = $this->getDoctrine()->getManager();
    $array = array();

    $dql =  'SELECT o1.id,o1.nombre,o1.path, o1.superficie,o1.precioPorHora,o2.nombre localidad
                 FROM ProyectoPrincipalBundle:Espacio o1, ProyectoPrincipalBundle:Localidad o2 ';

    $dqlTotales =  'SELECT COUNT(o1.id) FROM ProyectoPrincipalBundle:Espacio o1 ';


    $modoA = "";
    $modoB = "";
    $tieneWhere = false;
    $tieneWhereTotales = false;

    if($parametros!=null){


        
        if($parametros['actividades']!= null && $parametros['actividades']!='0'){
            
            if(!$tieneWhere){$dql.= ' WHERE ';$tieneWhere= true; }else $dql.= ' AND ';
            if(!$tieneWhereTotales){$dqlTotales.= ' WHERE ';$tieneWhereTotales= true; }else $dqlTotales.= ' AND ';
           
            $dql.= ' o1.'.$parametros['actividades'].' = :actividades';
            $dqlTotales.= ' o1.'.$parametros['actividades'].' = :actividades';
            
        }
        if($parametros['precioHora']!= null && $parametros['precioHora']!=0){

            if(!$tieneWhere){$dql.= ' WHERE ';$tieneWhere= true; }else $dql.= ' AND ';
            if(!$tieneWhereTotales){$dqlTotales.= ' WHERE ';$tieneWhereTotales= true; }else $dqlTotales.= ' AND ';

            if($parametros['precioHora']>1 && $parametros['precioHora']<=10000){
                $dql.= ' o1.precioPorHora <= :precioHora';
                $dqlTotales.= ' o1.precioPorHora <= :precioHora';
            }
            else if($parametros['precioHora']>10000){
                $dql.= ' o1.precioPorHora > :precioHora';
                $dqlTotales.=' o1.precioPorHora > :precioHora';
            }

        }
        if($parametros['superficie']!= null && $parametros['superficie']!=0){

            if(!$tieneWhere){$dql.= ' WHERE ';$tieneWhere= true; }else $dql.= ' AND ';
            if(!$tieneWhereTotales){$dqlTotales.= ' WHERE ';$tieneWhereTotales= true; }else $dqlTotales.= ' AND ';

            if($parametros['superficie']>2000){
                $dql.= ' o1.superficie > :superficie';
                $dqlTotales.=' o1.superficie > :superficie';
            }
            else{
                $dql.= ' o1.superficie <= :superficie';
                $dqlTotales.= ' o1.superficie <= :superficie';
            }

        }
        if($parametros['modo']!= null && $parametros['modo']!='0-0'){

            if(!$tieneWhere){$dql.= ' WHERE ';$tieneWhere= true; }else $dql.= ' AND ';
            if(!$tieneWhereTotales){$dqlTotales.= ' WHERE ';$tieneWhereTotales= true; }else $dqlTotales.= ' AND ';

            $modoA = explode('-', $parametros['modo']);
            $modoB = intval($modoA[1]);
            $modoA = $modoA[0];

            $dql.= ' o1.'.$modoA.' >= :modoA ';
            $dqlTotales.= ' o1.'.$modoA.' >= :modoA ';
            
            if($modoB != 0){

            if(!$tieneWhere){$dql.= ' WHERE ';$tieneWhere= true; }else $dql.= ' AND ';
            if(!$tieneWhereTotales){$dqlTotales.= ' WHERE ';$tieneWhereTotales= true; }else $dqlTotales.= ' AND ';


                if( $modoB==101){
                    $dql.= ' o1.'.$modoA.'Capacidad >= :modoB';
                    $dqlTotales.= ' o1.'.$modoA.'Capacidad >= :modoB';
                }
                else{
                    $dql.= ' o1.'.$modoA.'Capacidad <= :modoB';
                    $dqlTotales.= ' o1.'.$modoA.'Capacidad <= :modoB';
                }
            }
        }
        if($parametros['localidad']!= null && $parametros['localidad']!=0){

            if(!$tieneWhere){$dql.= ' WHERE ';$tieneWhere= true; }else $dql.= ' AND ';
            if(!$tieneWhereTotales){$dqlTotales.= ' WHERE ';$tieneWhereTotales= true; }else $dqlTotales.= ' AND ';

            
                $dql.= ' o1.localidad = :localidad';
                $dqlTotales.=' o1.localidad = :localidad';
            


        }

         
    }

    if(!$tieneWhere){$dql.= ' WHERE ';$tieneWhere= true; }else $dql.= ' AND ';
    $dql.= ' o1.localidad = o2.id ORDER BY o1.id ASC';

  //  echo '</br>dql='.$dql;echo '</br>dqltotal='.$dqlTotales;exit;

        $query = $em->createQuery( $dql )
        ->setMaxResults($numResults)
        ->setFirstResult($indice*$numResults);


        if($parametros['actividades']!= null && $parametros['actividades']!='0') $query->setParameter('actividades', 1);
        if($parametros['precioHora']!= null && $parametros['precioHora']!=0)  $query->setParameter('precioHora', $parametros['precioHora']);
        if($parametros['superficie']!= null && $parametros['superficie']!=0)  $query->setParameter('superficie', $parametros['superficie']);
        if($parametros['modo']!= null && $parametros['modo']!='0-0'){
           $query->setParameter('modoA', 1);
           if($modoB != 0)$query->setParameter('modoB', $modoB);
        }
        if($parametros['localidad']!= null && $parametros['localidad']!=0) $query->setParameter('localidad', $parametros['localidad']);


        $array['elementos'] = $query->getResult();
        $array['dataPaginacion']['obtenidos'] = count( $array['elementos']);


        $query = $em->createQuery( $dqlTotales );

        if($parametros['actividades']!= null && $parametros['actividades']!='0') $query->setParameter('actividades', 1);
        if($parametros['precioHora']!= null && $parametros['precioHora']!=0)  $query->setParameter('precioHora', $parametros['precioHora']);
        if($parametros['superficie']!= null && $parametros['superficie']!=0)  $query->setParameter('superficie', $parametros['superficie']);
        if($parametros['modo']!= null && $parametros['modo']!='0-0'){
           $query->setParameter('modoA', 1);
           if($modoB != 0)$query->setParameter('modoB', $modoB);
        }
        if($parametros['localidad']!= null && $parametros['localidad']!=0) $query->setParameter('localidad', $parametros['localidad']);

        $array['dataPaginacion']['total'] = intval($query->getSingleScalarResult());


        $array['dataPaginacion']['paginacion'] = $paginacion;
        $array['dataPaginacion']['numPaginacion'] = ceil($array['dataPaginacion']['total'] / $numResults);
        $array['dataPaginacion']['numResults'] = $numResults;

        //var_dump( $array['dataPaginacion']);
        //exit;

        return $array;
    }
    public function reservaAction($id) {
        $firstArray = UtilitiesAPI::getDefaultContent($this);

        $object = $this -> getDoctrine() -> getRepository('ProyectoPrincipalBundle:Espacio') -> find($id);
        $reservas = $this -> getDoctrine() -> getRepository('ProyectoPrincipalBundle:Reserva') -> findByEspacio($object);

        $user = UtilitiesAPI::getActiveUser($this);
        $idUser = $user->getId();
        $em = $this->getDoctrine()->getManager();

        $dql =  'SELECT COUNT(o1.id)
                 FROM ProyectoPrincipalBundle:Reserva o1, 
                      ProyectoPrincipalBundle:Espacio o2
                 WHERE o1.espacio = o2.id AND
                       o1.user = :idUser AND
                       o2.id = :id AND
                       o1.cancelado = :cancelado AND
                       o1.pagado = :pagado
                       ';

        $query = $em->createQuery( $dql );
        $query->setParameter('idUser', $idUser);
        $query->setParameter('id', $id);
        $query->setParameter('cancelado', false);
        $query->setParameter('pagado', false);
        $numeroReservacion = intval($query->getSingleScalarResult()) + 1;

        $secondArray = array('object'=>$object,'usuario'=>UtilitiesAPI::getActiveUser($this),'numeroReservacion'=>$numeroReservacion,'reservas'=>$reservas);

        $array = array_merge($firstArray, $secondArray);
        
        return $this -> render('ProyectoPrincipalBundle:Espacio:reserva.html.twig', $array);
    }
    public function procesarReservaAction() {
        $peticion = $this -> getRequest();
        $doctrine = $this -> getDoctrine();
        $post = $peticion -> request;
        $em = $this->getDoctrine()->getManager();

        $arreglo = $this->get('request')->request->all();


        $respuesta = EspacioController::procesarReserva($arreglo,$this);

        $respuesta = new response(json_encode(array('respuesta' => $respuesta)));
        $respuesta -> headers -> set('content_type', 'aplication/json');
        return $respuesta;
    }
    public function borrarReservasAction() {
        $peticion = $this -> getRequest();
        $doctrine = $this -> getDoctrine();
        $post = $peticion -> request;
        $em = $this->getDoctrine()->getManager();

        $idTipo = intval($post -> get("idTipo"));
        $tipo = ucfirst( trim($post -> get("tipo")));
        $user = UtilitiesAPI::getActiveUser($this);
        $idUser = $user->getId();


        $dql =  'SELECT o1
                 FROM ProyectoPrincipalBundle:Reserva o1, 
                      ProyectoPrincipalBundle:'.$tipo.' o2
                 WHERE o1.'.strtolower ( $tipo ).' = o2.id AND
                       o1.user = :idUser AND
                       o2.id = :idTipo';

        $query = $em->createQuery( $dql );
        $query->setParameter('idUser', $idUser);
        $query->setParameter('idTipo', $idTipo);
        $reservas = $query->getResult();

        for ($i=0; $i < count($reservas) ; $i++) { 
            $em->remove($reservas[$i]);
            $em->flush();
        }

        $respuesta = new response(json_encode(array('respuesta' => true)));
        $respuesta -> headers -> set('content_type', 'aplication/json');
        return $respuesta;
    }
    public function procesarReserva( $arreglo,$class){

        //var_dump($arreglo);
        //exit;

        $object = $class -> getDoctrine() -> getRepository('ProyectoPrincipalBundle:Reserva') -> findOneByNumeroReservacion($arreglo['numeroReservacion']);

        if ($object == null) {
            $object = new Reserva();
        } 
        
        $object -> setTitulo($arreglo['titulo']);
        $object -> setNumeroReservacion($arreglo['numeroReservacion']);
        $object -> setUser(UtilitiesAPI::getActiveUser($class));
        $object -> setPagado(false);
        $object -> setCancelado(false);

        $todoDia = false;
        if($arreglo['todoDia']=='true')$todoDia = true;
        $object -> setTodoDia($todoDia);
      
        $fechaInicio = new \DateTime();
        $fechaInicio->setDate ( intval($arreglo['anioInicio']) , (intval($arreglo['mesInicio'])+1) , intval($arreglo['diaInicio']) );
        $fechaInicio->setTime ( intval($arreglo['horaInicio']) , intval($arreglo['minInicio'] ));
        $object -> setFechaInicio($fechaInicio);
        
        $fechaFin = new \DateTime();
        $fechaFin->setDate ( intval($arreglo['anioFin']) , (intval($arreglo['mesFin'])+1) , intval($arreglo['diaFin']) );
        $fechaFin->setTime ( intval($arreglo['horaFin']) , intval($arreglo['minFin'] ));
        $object -> setFechaFin($fechaFin);

        $auxiliar = null;

        if($arreglo['tipo']=='espacio'){
            $auxiliar = $class -> getDoctrine() -> getRepository('ProyectoPrincipalBundle:Espacio') -> find($arreglo['idTipo']);
            $object -> setEspacio( $auxiliar );
        }
        else if($arreglo['tipo']=='servicio'){
            $auxiliar = $class -> getDoctrine() -> getRepository('ProyectoPrincipalBundle:Servicio') -> find($arreglo['idTipo']);
            $object -> setServicio( $auxiliar );
        }
        else if($arreglo['tipo']=='sede'){
            $auxiliar = $class -> getDoctrine() -> getRepository('ProyectoPrincipalBundle:Sede') -> find($arreglo['idTipo']);
            $object -> setSede( $auxiliar );
        }
        else if($arreglo['tipo']=='evento'){
            $auxiliar = $class -> getDoctrine() -> getRepository('ProyectoPrincipalBundle:Evento') -> find($arreglo['idTipo']);
            $object -> setEvento( $auxiliar );
        }

        $em = $class -> getDoctrine() -> getManager();
        $em -> persist($object);
        $em -> flush();
        
        return true;

    }
    public function confirmacionAction($id){

        $em = $this->getDoctrine()->getManager();

        $firstArray = UtilitiesAPI::getDefaultContent($this);
        $object = $this -> getDoctrine() -> getRepository('ProyectoPrincipalBundle:Espacio') -> find($id);

        $user = UtilitiesAPI::getActiveUser($this);
        $idUser = $user->getId();

        $dql =  'SELECT o1.id,o1.fechaInicio, o1.fechaFin, o2.precioPorHora
                 FROM ProyectoPrincipalBundle:Reserva o1, 
                      ProyectoPrincipalBundle:Espacio o2
                 WHERE o1.espacio = o2.id AND
                       o1.user = :idUser AND
                       o2.id = :id AND
                       o1.cancelado = :cancelado AND
                       o1.pagado = :pagado
                       ';

        $query = $em->createQuery( $dql );
        $query->setParameter('idUser', $idUser);
        $query->setParameter('id', $id);
        $query->setParameter('cancelado', false);
        $query->setParameter('pagado', false);
        $reservas = $query->getResult();

        //var_dump($reservas);
        //exit;


        $data = array();
        $total = array('horas'=>0,'precio'=>0);

        for ($i=0; $i < count($reservas) ; $i++) { 
            # code...
            $data[$i]['id']= $reservas[$i]['id'];
            $data[$i]['fecha']= $reservas[$i]['fechaInicio']->format('d/m/Y');
            $data[$i]['horaComienzo']= $reservas[$i]['fechaInicio']->format('H:i');
            $data[$i]['horaFinalización']= $reservas[$i]['fechaFin']->format('H:i');
            $data[$i]['horas'] = intval($reservas[$i]['fechaFin']->format('H')) - intval($reservas[$i]['fechaInicio']->format('H'));

            if(intval($reservas[$i]['fechaInicio']->format('i'))!=0 || intval($reservas[$i]['fechaFin']->format('i'))!=0  ){
               $data[$i]['horas'] = $data[$i]['horas'] +1;
            }

            if($data[$i]['horas']==0)$data[$i]['horas']=24;

            $total['horas'] += $data[$i]['horas'];

            $data[$i]['precio'] = $data[$i]['horas'] * $reservas[$i]['precioPorHora'];

            $total['precio'] += $data[$i]['precio'];

        }

        $secondArray = array('object'=>$object,'reservas'=>$reservas,'data'=>$data,'total'=>$total);

        $array = array_merge($firstArray, $secondArray);

        //var_dump($array);
        //exit;
        
        return $this -> render('ProyectoPrincipalBundle:Espacio:confirmacion.html.twig', $array);
    }

    public function confirmacionGuardarAction() {
        $peticion = $this -> getRequest();
        $doctrine = $this -> getDoctrine();
        $post = $peticion -> request;
        $em = $this -> getDoctrine() -> getManager();

        $arreglo = $this->get('request')->request->all();
            //    var_dump($arreglo);exit;

        $object = new Confirmacion();

        $object -> setInformacionAdicional($arreglo['informacionAdicional']);
        $object -> setHoras($arreglo['horas']);
        $object -> setPrecioTotal($arreglo['precioTotal']);
        $object -> setUser(UtilitiesAPI::getActiveUser($this));
        $object -> setPagado(false);
        $object -> setCancelado(false);


        if($arreglo['tipo']=='espacio'){
            $auxiliar = $this -> getDoctrine() -> getRepository('ProyectoPrincipalBundle:Espacio') -> find($arreglo['idTipo']);
            $object -> setEspacio( $auxiliar );
        }
        else if($arreglo['tipo']=='servicio'){
            $auxiliar = $this -> getDoctrine() -> getRepository('ProyectoPrincipalBundle:Servicio') -> find($arreglo['idTipo']);
            $object -> setServicio( $auxiliar );
        }
        else if($arreglo['tipo']=='sede'){
            $auxiliar = $this -> getDoctrine() -> getRepository('ProyectoPrincipalBundle:Sede') -> find($arreglo['idTipo']);
            $object -> setSede( $auxiliar );
        }
        else if($arreglo['tipo']=='evento'){
            $auxiliar = $this -> getDoctrine() -> getRepository('ProyectoPrincipalBundle:Evento') -> find($arreglo['idTipo']);
            $object -> setEvento( $auxiliar );
        }


        $em -> persist($object);
        $em -> flush();


        $cantidadReservas = intval($arreglo['cantidadReservas']);


        for ($i=0; $i < $cantidadReservas ; $i++) { 
        
            $auxiliar = intval($arreglo['reserva_'.($i+1)]);
            $reserva = $this -> getDoctrine() -> getRepository('ProyectoPrincipalBundle:Reserva') -> find($auxiliar);
            $element = new ConfirmacionElemento();
            $element -> setConfirmacion( $object );
            $element -> setReserva( $reserva );
            $em -> persist($element);
            $em -> flush();
        }


        $respuesta = new response(json_encode(array('respuesta' => true)));
        $respuesta -> headers -> set('content_type', 'aplication/json');
        return $respuesta;
    }
}
