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

use Proyecto\PrincipalBundle\Entity\Espacio1;
use Proyecto\PrincipalBundle\Entity\Espacio2;
use Proyecto\PrincipalBundle\Entity\Espacio3;
use Proyecto\PrincipalBundle\Entity\Espacio4;
use Proyecto\PrincipalBundle\Entity\Espacio5;

class EspacioController extends Controller {


	public function espacioAction() {
		$firstArray = UtilitiesAPI::getDefaultContent($this);
		$secondArray = array();

		$array = array_merge($firstArray, $secondArray);
		return $this -> render('ProyectoPrincipalBundle:Default:espacio.html.twig', $array);
	}
	public function espaciosAction() {
		$firstArray = UtilitiesAPI::getDefaultContent($this);
		$secondArray = array();

		$array = array_merge($firstArray, $secondArray);
		return $this -> render('ProyectoPrincipalBundle:Default:espacios.html.twig', $array);
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
		if($id == null )$object = new Espacio1();
		else $object = $class -> getDoctrine() -> getRepository('ProyectoPrincipalBundle:Espacio1') -> find($id);
		
		$firstArray = UtilitiesAPI::getDefaultContent($class);
		$secondArray = array();

        $form = $class->createFormBuilder($object)
            ->add('propietarioEmpleado', 'checkbox',array('required'  => false))
            ->add('agenteComercial', 'checkbox',array('required'  => false))
            ->add('administradorWeb', 'checkbox',array('required'  => false))

            ->getForm();


	    if ($request->isMethod('POST')) {

        	$form->bind($request);

        	if ($form->isValid()) {


	        	$em = $class->getDoctrine()->getManager();
	        	$user = UtilitiesAPI::getActiveUser($class);

				if($id == null) {
					$object -> setFechaRegistro(new \DateTime());
				}
				
				$object -> setUser($user);	
    			
    			$em->persist($object);
				$em->flush();

					

				return $class->redirect($class->generateUrl('proyecto_principal_espacio_registrar2'));

    		}
	
	    }

        $secondArray = array('form' => $form->createView(),'url'=>$url);
		$array = array_merge($firstArray, $secondArray);
		return $class -> render('ProyectoPrincipalBundle:Espacio:registrarEditar.html.twig', $array);
	}
	
	public function registrar2Action(Request $request) {
		$id = null;
		$url = $this -> generateUrl('proyecto_principal_espacio_registrar2');

		return EspacioController::registrarEditar2($id ,$url, $request,$this);
	}
	public function editar2Action(Request $request) {

		$user = UtilitiesAPI::getActiveUser($this);
		$id = $user->getId();
		$url = $this -> generateUrl('proyecto_principal_espacio_editar');

		return EspacioController::registrarEditar2($id ,$url,$request, $this);

	}
	public static function registrarEditar2($id ,$url,Request $request,$class) {
		if($id == null )$object = new Espacio2();
		else $object = $class -> getDoctrine() -> getRepository('ProyectoPrincipalBundle:Espacio1') -> find($id);
		
		$firstArray = UtilitiesAPI::getDefaultContent($class);
		$secondArray = array();

        $form = $class->createFormBuilder($object)
            ->add('nombreEspacio', 'text')
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

            ->getForm();


	    if ($request->isMethod('POST')) {

        	$form->bind($request);

        	if ($form->isValid()) {



	        	$em = $class->getDoctrine()->getManager();
	        	$user = UtilitiesAPI::getActiveUser($class);
	        	$espacio1 = $class-> getDoctrine() -> getRepository('ProyectoPrincipalBundle:Espacio1') -> findOneByUser($user);

				if($id == null) {
					$object -> setFechaRegistro(new \DateTime());
				}
				
				$object -> setUser($user);
				$object -> setEspacio1($espacio1);		
    			
    			$em->persist($object);
				$em->flush();

					

				return $class->redirect($class->generateUrl('proyecto_principal_espacio_registrar3'));

    		}
	
	    }

        $secondArray = array('form' => $form->createView(),'url'=>$url);
		$array = array_merge($firstArray, $secondArray);
		return $class -> render('ProyectoPrincipalBundle:Espacio:registrarEditar2.html.twig', $array);
	}
	public function registrar3Action(Request $request) {
		$id = null;
		$url = $this -> generateUrl('proyecto_principal_espacio_registrar3');
		return EspacioController::registrarEditar3($id ,$url, $request,$this);
	}
	public static function registrarEditar3($id ,$url,Request $request,$class) {
		if($id == null )$object = new Espacio3();
		else $object = $class -> getDoctrine() -> getRepository('ProyectoPrincipalBundle:Espacio2') -> find($id);
		
		$firstArray = UtilitiesAPI::getDefaultContent($class);
		$secondArray = array();


        $form = $class->createFormBuilder($object)
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
            ->add('jardin', 'checkbox',array('required'  => false))
            ->add('pilaresSueltos', 'checkbox',array('required'  => false))
            ->add('entradaAseosMovilidadReducida', 'checkbox',array('required'  => false))
            ->add('ventanasExterior', 'checkbox',array('required'  => false))
            ->add('ventanasPatioInterior', 'checkbox',array('required'  => false))
            ->add('posibilidadOscurecerSala', 'checkbox',array('required'  => false))
            ->add('otros', 'text')

            ->getForm();


	    if ($request->isMethod('POST')) {

        	$form->bind($request);

        	if ($form->isValid()) {

	        	$em = $class->getDoctrine()->getManager();
	        	$user = UtilitiesAPI::getActiveUser($class);
	        	$espacio2 = $class-> getDoctrine() -> getRepository('ProyectoPrincipalBundle:Espacio2') -> findOneByUser($user);

				if($id == null) {
					$object -> setFechaRegistro(new \DateTime());
				}
				
				$object -> setUser($user);
				$object -> setEspacio2($espacio2);		
    			
    			$em->persist($object);
				$em->flush();

					

				return $class->redirect($class->generateUrl('proyecto_principal_espacio_registrar4'));

    		}
	
	    }

        $secondArray = array('form' => $form->createView(),'url'=>$url);
		$array = array_merge($firstArray, $secondArray);
		return $class -> render('ProyectoPrincipalBundle:Espacio:registrarEditar3.html.twig', $array);
	}
	public function registrar4Action(Request $request) {
		$id = null;
		$url = $this -> generateUrl('proyecto_principal_espacio_registrar4');

		return EspacioController::registrarEditar4($id ,$url, $request,$this);
	}
	public static function registrarEditar4($id ,$url,Request $request,$class) {
		if($id == null )$object = new Espacio4();
		else $object = $class -> getDoctrine() -> getRepository('ProyectoPrincipalBundle:Espacio3') -> find($id);
		
		$firstArray = UtilitiesAPI::getDefaultContent($class);
		$secondArray = array();


        $form = $class->createFormBuilder($object)

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
            ->add('otros', 'text')

            ->getForm();


	    if ($request->isMethod('POST')) {

        	$form->bind($request);

        	if ($form->isValid()) {

	        	$em = $class->getDoctrine()->getManager();
	        	$user = UtilitiesAPI::getActiveUser($class);
	        	$espacio3 = $class-> getDoctrine() -> getRepository('ProyectoPrincipalBundle:Espacio3') -> findOneByUser($user);

				if($id == null) {
					$object -> setFechaRegistro(new \DateTime());
				}
				
				$object -> setUser($user);
				$object -> setEspacio3($espacio3);		
    			
    			$em->persist($object);
				$em->flush();

					

				return $class->redirect($class->generateUrl('proyecto_principal_espacio_registrar5'));

    		}
	
	    }

        $secondArray = array('form' => $form->createView(),'url'=>$url);
		$array = array_merge($firstArray, $secondArray);
		return $class -> render('ProyectoPrincipalBundle:Espacio:registrarEditar4.html.twig', $array);
	}
	public function registrar5Action(Request $request) {
		$id = null;
		$url = $this -> generateUrl('proyecto_principal_espacio_registrar5');

		return EspacioController::registrarEditar5($id ,$url, $request,$this);
	}
	public static function registrarEditar5($id ,$url,Request $request,$class) {
		if($id == null )$object = new Espacio5();
		else $object = $class -> getDoctrine() -> getRepository('ProyectoPrincipalBundle:Espacio4') -> find($id);
		
		$firstArray = UtilitiesAPI::getDefaultContent($class);
		$secondArray = array();


        $form = $class->createFormBuilder($object)
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
            ->add('jardin', 'checkbox',array('required'  => false))
            ->add('aceptoCondicionesUsoPoliticaPrivacidad', 'checkbox',array('required'  => false))
            

            ->getForm();


	    if ($request->isMethod('POST')) {

        	$form->bind($request);

        	if ($form->isValid()) {

	        	$em = $class->getDoctrine()->getManager();
	        	$user = UtilitiesAPI::getActiveUser($class);
	        	$espacio4 = $class-> getDoctrine() -> getRepository('ProyectoPrincipalBundle:Espacio4') -> findOneByUser($user);

				if($id == null) {
					$object -> setFechaRegistro(new \DateTime());
				}
				
				$object -> setUser($user);
				$object -> setEspacio4($espacio4);		
    			
    			$em->persist($object);
				$em->flush();

					

				return $class->redirect($class->generateUrl('proyecto_principal_homepage'));

    		}
	
	    }

        $secondArray = array('form' => $form->createView(),'url'=>$url);
		$array = array_merge($firstArray, $secondArray);
		return $class -> render('ProyectoPrincipalBundle:Espacio:registrarEditar5.html.twig', $array);
	}
}
