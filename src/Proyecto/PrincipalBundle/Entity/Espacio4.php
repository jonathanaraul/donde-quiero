<?php

namespace Proyecto\PrincipalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Retiro
 *
 * @ORM\Table(name="espacio4")
 * @ORM\Entity
 */
class Espacio4
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @ORM\Column(name="proyectorPantallaSala", type="boolean", nullable=true)
     */
    private $proyectorPantallaSala;
    /**
     * @ORM\Column(name="microfonoAltavoces", type="boolean", nullable=true)
     */
    private $microfonoAltavoces;
    /**
     * @ORM\Column(name="videocamara", type="boolean", nullable=true)
     */
    private $videocamara;
    /**
     * @ORM\Column(name="wifi", type="boolean", nullable=true)
     */
    private $wifi;
    /**
     * @ORM\Column(name="internetCable", type="boolean", nullable=true)
     */
    private $internetCable;
    /**
     * @ORM\Column(name="maquinaBebidas", type="boolean", nullable=true)
     */
    private $maquinaBebidas;
    /**
     * @ORM\Column(name="pizarra", type="boolean", nullable=true)
     */
    private $pizarra;
    /**
     * @ORM\Column(name="conserjeria", type="boolean", nullable=true)
     */
    private $conserjeria;
    /**
     * @ORM\Column(name="aireAcondicionado", type="boolean", nullable=true)
     */
    private $aireAcondicionado;
    /**
     * @ORM\Column(name="calefaccion", type="boolean", nullable=true)
     */
    private $calefaccion;


    /**
     * @ORM\Column(type="string", length=100, nullable=false)
     */
    private $otros;

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
     * @var \Espacio3
     *
     * @ORM\ManyToOne(targetEntity="Espacio3")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="espacio3", referencedColumnName="id", nullable=false)
     * })
     */
    private $espacio3;


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
     * Set proyectorPantallaSala
     *
     * @param boolean $proyectorPantallaSala
     * @return Espacio4
     */
    public function setProyectorPantallaSala($proyectorPantallaSala)
    {
        $this->proyectorPantallaSala = $proyectorPantallaSala;
    
        return $this;
    }

    /**
     * Get proyectorPantallaSala
     *
     * @return boolean 
     */
    public function getProyectorPantallaSala()
    {
        return $this->proyectorPantallaSala;
    }

    /**
     * Set microfonoAltavoces
     *
     * @param boolean $microfonoAltavoces
     * @return Espacio4
     */
    public function setMicrofonoAltavoces($microfonoAltavoces)
    {
        $this->microfonoAltavoces = $microfonoAltavoces;
    
        return $this;
    }

    /**
     * Get microfonoAltavoces
     *
     * @return boolean 
     */
    public function getMicrofonoAltavoces()
    {
        return $this->microfonoAltavoces;
    }

    /**
     * Set videocamara
     *
     * @param boolean $videocamara
     * @return Espacio4
     */
    public function setVideocamara($videocamara)
    {
        $this->videocamara = $videocamara;
    
        return $this;
    }

    /**
     * Get videocamara
     *
     * @return boolean 
     */
    public function getVideocamara()
    {
        return $this->videocamara;
    }

    /**
     * Set wifi
     *
     * @param boolean $wifi
     * @return Espacio4
     */
    public function setWifi($wifi)
    {
        $this->wifi = $wifi;
    
        return $this;
    }

    /**
     * Get wifi
     *
     * @return boolean 
     */
    public function getWifi()
    {
        return $this->wifi;
    }

    /**
     * Set internetCable
     *
     * @param boolean $internetCable
     * @return Espacio4
     */
    public function setInternetCable($internetCable)
    {
        $this->internetCable = $internetCable;
    
        return $this;
    }

    /**
     * Get internetCable
     *
     * @return boolean 
     */
    public function getInternetCable()
    {
        return $this->internetCable;
    }

    /**
     * Set maquinaBebidas
     *
     * @param boolean $maquinaBebidas
     * @return Espacio4
     */
    public function setMaquinaBebidas($maquinaBebidas)
    {
        $this->maquinaBebidas = $maquinaBebidas;
    
        return $this;
    }

    /**
     * Get maquinaBebidas
     *
     * @return boolean 
     */
    public function getMaquinaBebidas()
    {
        return $this->maquinaBebidas;
    }

    /**
     * Set pizarra
     *
     * @param boolean $pizarra
     * @return Espacio4
     */
    public function setPizarra($pizarra)
    {
        $this->pizarra = $pizarra;
    
        return $this;
    }

    /**
     * Get pizarra
     *
     * @return boolean 
     */
    public function getPizarra()
    {
        return $this->pizarra;
    }

    /**
     * Set conserjeria
     *
     * @param boolean $conserjeria
     * @return Espacio4
     */
    public function setConserjeria($conserjeria)
    {
        $this->conserjeria = $conserjeria;
    
        return $this;
    }

    /**
     * Get conserjeria
     *
     * @return boolean 
     */
    public function getConserjeria()
    {
        return $this->conserjeria;
    }

    /**
     * Set aireAcondicionado
     *
     * @param boolean $aireAcondicionado
     * @return Espacio4
     */
    public function setAireAcondicionado($aireAcondicionado)
    {
        $this->aireAcondicionado = $aireAcondicionado;
    
        return $this;
    }

    /**
     * Get aireAcondicionado
     *
     * @return boolean 
     */
    public function getAireAcondicionado()
    {
        return $this->aireAcondicionado;
    }

    /**
     * Set calefaccion
     *
     * @param boolean $calefaccion
     * @return Espacio4
     */
    public function setCalefaccion($calefaccion)
    {
        $this->calefaccion = $calefaccion;
    
        return $this;
    }

    /**
     * Get calefaccion
     *
     * @return boolean 
     */
    public function getCalefaccion()
    {
        return $this->calefaccion;
    }

    /**
     * Set otros
     *
     * @param string $otros
     * @return Espacio4
     */
    public function setOtros($otros)
    {
        $this->otros = $otros;
    
        return $this;
    }

    /**
     * Get otros
     *
     * @return string 
     */
    public function getOtros()
    {
        return $this->otros;
    }

    /**
     * Set fechaRegistro
     *
     * @param \DateTime $fechaRegistro
     * @return Espacio4
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
     * @return Espacio4
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
     * Set espacio3
     *
     * @param \Proyecto\PrincipalBundle\Entity\Espacio3 $espacio3
     * @return Espacio4
     */
    public function setEspacio3(\Proyecto\PrincipalBundle\Entity\Espacio3 $espacio3)
    {
        $this->espacio3 = $espacio3;
    
        return $this;
    }

    /**
     * Get espacio3
     *
     * @return \Proyecto\PrincipalBundle\Entity\Espacio3 
     */
    public function getEspacio3()
    {
        return $this->espacio3;
    }
}