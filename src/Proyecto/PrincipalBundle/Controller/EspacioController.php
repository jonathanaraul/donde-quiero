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
		return $class -> render('ProyectoPrincipalBundle:Espacio:registrarEditarGeneral.html.twig', $array);
	}

}
