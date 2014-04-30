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
use Proyecto\PrincipalBundle\Entity\Autores;
use Proyecto\PrincipalBundle\Entity\Proyecto;

class DefaultController extends Controller {

	public function indexAction() {
		$firstArray = UtilitiesAPI::getDefaultContent('Panel de Control', 'Bienvenido seleccione su categoría', $this);
		$secondArray = array();

		$array = array_merge($firstArray, $secondArray);
		return $this -> render('ProyectoPrincipalBundle:Principal2:index.html.twig', $array);
	}
	
}
