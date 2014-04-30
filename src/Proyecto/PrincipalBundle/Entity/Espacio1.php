<?php

namespace Proyecto\PrincipalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Retiro
 *
 * @ORM\Table(name="espacio1")
 * @ORM\Entity
 */
class Espacio1
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @ORM\Column(name="propietarioEmpleado", type="boolean", nullable=true)
     */
    private $propietarioEmpleado;
    
    /**
     * @ORM\Column(name="agenteComercial", type="boolean", nullable=true)
     */
    private $agenteComercial;
    
    /**
     * @ORM\Column(name="administradorWeb", type="boolean", nullable=true)
     */
    private $administradorWeb;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user", referencedColumnName="id", nullable=false)
     * })
     */
    private $user;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaRegistro", type="datetime", nullable=false)
     */
    private $fechaRegistro;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set propietarioEmpleado
     *
     * @param boolean $propietarioEmpleado
     * @return Espacio1
     */
    public function setPropietarioEmpleado($propietarioEmpleado)
    {
        $this->propietarioEmpleado = $propietarioEmpleado;
    
        return $this;
    }

    /**
     * Get propietarioEmpleado
     *
     * @return boolean 
     */
    public function getPropietarioEmpleado()
    {
        return $this->propietarioEmpleado;
    }

    /**
     * Set agenteComercial
     *
     * @param boolean $agenteComercial
     * @return Espacio1
     */
    public function setAgenteComercial($agenteComercial)
    {
        $this->agenteComercial = $agenteComercial;
    
        return $this;
    }

    /**
     * Get agenteComercial
     *
     * @return boolean 
     */
    public function getAgenteComercial()
    {
        return $this->agenteComercial;
    }

    /**
     * Set administradorWeb
     *
     * @param boolean $administradorWeb
     * @return Espacio1
     */
    public function setAdministradorWeb($administradorWeb)
    {
        $this->administradorWeb = $administradorWeb;
    
        return $this;
    }

    /**
     * Get administradorWeb
     *
     * @return boolean 
     */
    public function getAdministradorWeb()
    {
        return $this->administradorWeb;
    }

    /**
     * Set fechaRegistro
     *
     * @param \DateTime $fechaRegistro
     * @return Espacio1
     */
    public function setFechaRegistro($fechaRegistro)
    {
        $this->fechaRegistro = $fechaRegistro;
    
        return $this;
    }

    /**
     * Get fechaRegistro
     *
     * @return \DateTime 
     */
    public function getFechaRegistro()
    {
        return $this->fechaRegistro;
    }

    /**
     * Set user
     *
     * @param \Proyecto\PrincipalBundle\Entity\User $user
     * @return Espacio1
     */
    public function setUser(\Proyecto\PrincipalBundle\Entity\User $user)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return \Proyecto\PrincipalBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}