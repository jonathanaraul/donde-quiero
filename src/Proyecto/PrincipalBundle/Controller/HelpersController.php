<?php

namespace Proyecto\PrincipalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

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


class HelpersController extends Controller
{

    public function listaNavegacionAction($menu,$user)
    {
        return $this->render('ProyectoPrincipalBundle:Helpers:listaNavegacion.html.twig', array('menu' => $menu,'user'=>$user));
    }
    public function statsAction()
    {
		$secondArray = array();
		
		$secondArray['estudios'] = $this -> getDoctrine() -> getRepository('ProyectoPrincipalBundle:Proyecto') -> findAll(  );
		$secondArray['estudios'] = count($secondArray['estudios']);
		
		$secondArray['usuarios'] = $this -> getDoctrine() -> getRepository('ProyectoPrincipalBundle:User') -> findAll(  );
		$secondArray['usuarios'] = count($secondArray['usuarios']);

        return $this->render('ProyectoPrincipalBundle:Helpers:estadisticas.html.twig', $secondArray);
    }
    public static function eliminaHuerfanos($class){

        $em = $class->getDoctrine()->getManager();
        $user = UtilitiesAPI::getActiveUser($class);
        $object = $class-> getDoctrine() -> getRepository('ProyectoPrincipalBundle:Retiro') -> findOneByUser($user);
        $em = $class -> getDoctrine() -> getManager();
        $em->remove($object);
        $em->flush();

    }

    public static function getEspacios($class){

        $em = $class->getDoctrine()->getManager();

        $dql =  'SELECT o1.id,o1.nombreEspacio,o1.path, o1.superficie,o1.precioPorHora,o2.nombre
                 FROM ProyectoPrincipalBundle:Espacio o1, ProyectoPrincipalBundle:Localidad o2
                 WHERE o1.localidad = o2.id
                 ORDER BY o1.id ASC';

        $query = $em->createQuery( $dql )->setMaxResults(8);

        $arreglo = $query->getResult();


        return  $arreglo;
    }
    public static function getProvincias($class){

        $em = $class->getDoctrine()->getManager();

        $dql =  'SELECT o1.id,o1.nombre
                 FROM ProyectoPrincipalBundle:Provincia o1
          
                 ORDER BY o1.nombre ASC';

        $query = $em->createQuery( $dql );

        $arreglo = $query->getResult();


        return  $arreglo;
    }
}
