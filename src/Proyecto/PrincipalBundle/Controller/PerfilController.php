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
use Proyecto\PrincipalBundle\Entity\Provincia;
use Proyecto\PrincipalBundle\Entity\Localidad;
use Proyecto\PrincipalBundle\Entity\Retiro;


class PerfilController extends Controller {
	public static $parametro =0;
	public function privadoAction() {
		$firstArray = UtilitiesAPI::getDefaultContent($this);
		$user = UtilitiesAPI::getActiveUser($this);
		$facturacion =  $this -> getDoctrine() -> getRepository('ProyectoPrincipalBundle:Facturacion') -> findOneByUser($user);
		$retiro =  $this -> getDoctrine() -> getRepository('ProyectoPrincipalBundle:Retiro') -> findOneByUser($user);
		$secondArray = array('user'=>$user,'facturacion'=>$facturacion,'retiro'=>$retiro);

		$array = array_merge($firstArray, $secondArray);
		return $this -> render('ProyectoPrincipalBundle:Perfil:privado.html.twig', $array);
	}
	public function publicoAction() {
		$firstArray = UtilitiesAPI::getDefaultContent($this);
		$user = UtilitiesAPI::getActiveUser($this);
		$secondArray = array('user'=>$user);

		$array = array_merge($firstArray, $secondArray);
		return $this -> render('ProyectoPrincipalBundle:Perfil:publico.html.twig', $array);
	}
	public function editarAction(Request $request) {

		$user = UtilitiesAPI::getActiveUser($this);
		$id = $user->getId();
		$url = $this -> generateUrl('proyecto_perfil_editar');

		return PerfilController::procesar($id ,$url,$request, $this);

	}
	public function crearCuentaAction(Request $request) {
		$id = null;
		$url = $this -> generateUrl('proyecto_perfil_crearcuenta');

		return PerfilController::procesar($id ,$url, $request,$this);
	}

	public static function procesar($id ,$url,Request $request,$class) {
		if($id == null )$object = new User();
		else $object = $class -> getDoctrine() -> getRepository('ProyectoPrincipalBundle:User') -> find($id);
		
		$firstArray = UtilitiesAPI::getDefaultContent($class);
		$secondArray = array();
		$marketing = array( 
						   '1' => 'Mediante un buscador',
						   '2'  => 'Por un enlace en otra Web', 
						   '3'  => 'Ha recibido publicidad', 
						   '4'  => 'Mediante carteles', 
						   '5'  => 'Por un amigo/conocido', 
						   '6'  => 'Otro' 
						   );
		


        


		$parametro =1;
		if($id != null)$parametro=$object->getProvincia()->getId();

        $form = $class->createFormBuilder($object)
            ->add('email', 'email')
            ->add('nombre', 'text')
            ->add('apellido', 'text')
            ->add('telefono', 'text')
            ->add('username', 'text')
            ->add('password', 'password')
            ->add('descripcion', 'textarea')
            ->add('pais', 'text')
            ->add('provincia', 'entity', array(
			    'class' => 'ProyectoPrincipalBundle:Provincia',
			    'property' => 'nombre',
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
            ->add('marketing', 'choice', array('choices'   => $marketing,'required'  => true))
            ->add('eventos', 'checkbox',array('required'  => false))
            -> add('file','file') 
            ->getForm();


	    if ($request->isMethod('POST')) {

        	$form->bind($request);

        	if ($form->isValid()) {


	        	$em = $class->getDoctrine()->getManager();
	        	$factory = $class -> get('security.encoder_factory');
	        	$encoder  = $factory -> getEncoder($object);
				$password = $encoder -> encodePassword($object   -> getPassword(), $object -> getSalt());
				$object -> setPassword($password);

				$object -> setNombre(strtolower($object -> getNombre()));
				$object -> setApellido(strtolower($object -> getApellido()));
				$object -> setEmail(strtolower($object -> getEmail()));
				if($id == null) {$object -> setFechaRegistro(new \DateTime());
    			$em->persist($object);}
    			$em->flush();

    			if($id == null){
    				$titulo = '¡Registro completado...!';
    				$mensaje = 'Estimado(a) '.ucfirst($object ->getNombre()) . ' '.ucfirst($object ->getApellido()) .' su registro en DONDE-QUIERO, ha sido completado con éxito, lo invitamos a iniciar sesión con su nueva cuenta.';
    				$tituloBoton = 'Iniciar sesión';
    				$direccionBoton = $class->generateUrl('proyecto_principal_acceso');
    			}
    			else{
    				$titulo = '¡Perfil actualizado...!';
    				$mensaje = 'Estimado(a) '.ucfirst($object ->getNombre()) . ' '.ucfirst($object ->getApellido()) .' su perfil ha sido actualizado con éxito.';
    				$tituloBoton = 'Perfil privado';
    				$direccionBoton = $class->generateUrl('proyecto_perfil_privado');

    			}

    			$array = array('titulo' => $titulo, 'mensaje' => $mensaje, 'tituloBoton'=>$tituloBoton, 'direccionBoton'=>$direccionBoton );

    			return $class -> render('ProyectoPrincipalBundle:Default:mensaje.html.twig', $array);
	        }
	    }

        $secondArray = array('form' => $form->createView(),'url'=>$url);
		$array = array_merge($firstArray, $secondArray);
		return $class -> render('ProyectoPrincipalBundle:Default:registro.html.twig', $array);
	}
	
	public function enviarSolicitudBajaAction() {
		$peticion = $this -> getRequest();
		$doctrine = $this -> getDoctrine();
		$post = $peticion -> request;
		$em = $this->getDoctrine()->getManager();

		$razon = trim($post -> get("razon"));
		$user = UtilitiesAPI::getActiveUser($this);

		$object = new Retiro();

		$object -> setUser($user);
		$object -> setRazon($razon);
		$object -> setFechaRegistro(new \DateTime());
    	$em->persist($object);
    	$em->flush();

		$respuesta = new response(json_encode(array('estado' => true)));
		$respuesta -> headers -> set('content_type', 'aplication/json');
		return $respuesta;
	}
	public function cancelarSolicitudBajaAction() {
		$peticion = $this -> getRequest();
		$doctrine = $this -> getDoctrine();
		$post = $peticion -> request;
		$em = $this->getDoctrine()->getManager();

		$user = UtilitiesAPI::getActiveUser($this);

		$object = $this-> getDoctrine() -> getRepository('ProyectoPrincipalBundle:Retiro') -> findOneByUser($user);
		$em = $this -> getDoctrine() -> getManager();
		$em->remove($object);
		$em->flush();

		$respuesta = new response(json_encode(array('estado' => true)));
		$respuesta -> headers -> set('content_type', 'aplication/json');
		return $respuesta;
	}
}
