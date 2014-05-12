<?php

namespace Proyecto\PrincipalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Confirmacion
 *
 * @ORM\Table(name="confirmacion")
 * @ORM\Entity
 */
class Confirmacion
{
	/**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
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
     * @ORM\Column(type="text")
     */
    public $informacionAdicional;

    /**
     * @ORM\Column(name="horas",type="integer", nullable=true)
     */
    private $horas;

    /**
     * @ORM\Column(name="precioTotal",type="float", nullable=false)
     */
    private $precioTotal;

    /**
     * @ORM\Column(name="pagado",type="boolean", nullable=false)
     */
    private $pagado;

    /**
     * @ORM\Column(name="cancelado",type="boolean", nullable=false)
     */
    private $cancelado;

    /**
     * @var \Espacio
     *
     * @ORM\ManyToOne(targetEntity="Espacio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="espacio", referencedColumnName="id", nullable=true)
     * })
     */
    private $espacio;

    /**
     * @var \Sede
     *
     * @ORM\ManyToOne(targetEntity="Sede")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sede", referencedColumnName="id", nullable=true)
     * })
     */
    private $sede;

     /**
     * @var \Servicio
     *
     * @ORM\ManyToOne(targetEntity="Servicio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="servicio", referencedColumnName="id", nullable=true)
     * })
     */
    private $servicio;

    /**
     * @var \Evento
     *
     * @ORM\ManyToOne(targetEntity="Evento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="evento", referencedColumnName="id", nullable=true)
     * })
     */
    private $evento;


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
     * Set informacionAdicional
     *
     * @param string $informacionAdicional
     * @return Confirmacion
     */
    public function setInformacionAdicional($informacionAdicional)
    {
        $this->informacionAdicional = $informacionAdicional;
    
        return $this;
    }

    /**
     * Get informacionAdicional
     *
     * @return string 
     */
    public function getInformacionAdicional()
    {
        return $this->informacionAdicional;
    }

    /**
     * Set horas
     *
     * @param integer $horas
     * @return Confirmacion
     */
    public function setHoras($horas)
    {
        $this->horas = $horas;
    
        return $this;
    }

    /**
     * Get horas
     *
     * @return integer 
     */
    public function getHoras()
    {
        return $this->horas;
    }

    /**
     * Set precioTotal
     *
     * @param float $precioTotal
     * @return Confirmacion
     */
    public function setPrecioTotal($precioTotal)
    {
        $this->precioTotal = $precioTotal;
    
        return $this;
    }

    /**
     * Get precioTotal
     *
     * @return float 
     */
    public function getPrecioTotal()
    {
        return $this->precioTotal;
    }

    /**
     * Set pagado
     *
     * @param boolean $pagado
     * @return Confirmacion
     */
    public function setPagado($pagado)
    {
        $this->pagado = $pagado;
    
        return $this;
    }

    /**
     * Get pagado
     *
     * @return boolean 
     */
    public function getPagado()
    {
        return $this->pagado;
    }

    /**
     * Set cancelado
     *
     * @param boolean $cancelado
     * @return Confirmacion
     */
    public function setCancelado($cancelado)
    {
        $this->cancelado = $cancelado;
    
        return $this;
    }

    /**
     * Get cancelado
     *
     * @return boolean 
     */
    public function getCancelado()
    {
        return $this->cancelado;
    }

    /**
     * Set user
     *
     * @param \Proyecto\PrincipalBundle\Entity\User $user
     * @return Confirmacion
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

    /**
     * Set espacio
     *
     * @param \Proyecto\PrincipalBundle\Entity\Espacio $espacio
     * @return Confirmacion
     */
    public function setEspacio(\Proyecto\PrincipalBundle\Entity\Espacio $espacio = null)
    {
        $this->espacio = $espacio;
    
        return $this;
    }

    /**
     * Get espacio
     *
     * @return \Proyecto\PrincipalBundle\Entity\Espacio 
     */
    public function getEspacio()
    {
        return $this->espacio;
    }

    /**
     * Set sede
     *
     * @param \Proyecto\PrincipalBundle\Entity\Sede $sede
     * @return Confirmacion
     */
    public function setSede(\Proyecto\PrincipalBundle\Entity\Sede $sede = null)
    {
        $this->sede = $sede;
    
        return $this;
    }

    /**
     * Get sede
     *
     * @return \Proyecto\PrincipalBundle\Entity\Sede 
     */
    public function getSede()
    {
        return $this->sede;
    }

    /**
     * Set servicio
     *
     * @param \Proyecto\PrincipalBundle\Entity\Servicio $servicio
     * @return Confirmacion
     */
    public function setServicio(\Proyecto\PrincipalBundle\Entity\Servicio $servicio = null)
    {
        $this->servicio = $servicio;
    
        return $this;
    }

    /**
     * Get servicio
     *
     * @return \Proyecto\PrincipalBundle\Entity\Servicio 
     */
    public function getServicio()
    {
        return $this->servicio;
    }

    /**
     * Set evento
     *
     * @param \Proyecto\PrincipalBundle\Entity\Evento $evento
     * @return Confirmacion
     */
    public function setEvento(\Proyecto\PrincipalBundle\Entity\Evento $evento = null)
    {
        $this->evento = $evento;
    
        return $this;
    }

    /**
     * Get evento
     *
     * @return \Proyecto\PrincipalBundle\Entity\Evento 
     */
    public function getEvento()
    {
        return $this->evento;
    }
}