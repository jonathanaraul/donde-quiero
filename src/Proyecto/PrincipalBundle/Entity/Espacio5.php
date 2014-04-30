<?php

namespace Proyecto\PrincipalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Retiro
 *
 * @ORM\Table(name="espacio5")
 * @ORM\Entity
 */
class Espacio5
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @ORM\Column(name="aceptacionReservaAutomatica", type="boolean", nullable=true)
     */
    private $aceptacionReservaAutomatica;
    /**
     * @ORM\Column(name="tiempoMaximoAceptacionReservaAutomatica24h", type="boolean", nullable=true)
     */
    private $tiempoMaximoAceptacionReservaAutomatica24h;
    /**
     * @ORM\Column(name="tiempoMaximoAceptacionReservaAutomatica48", type="boolean", nullable=true)
     */
    private $tiempoMaximoAceptacionReservaAutomatica48;
    /**
     * @ORM\Column(name="datosFacturacionPagoDelUsuario", type="boolean", nullable=true)
     */
    private $datosFacturacionPagoDelUsuario;
    /**
     * @ORM\Column(name="anadirDatosFacturacionPago", type="boolean", nullable=true)
     */
    private $anadirDatosFacturacionPago;
    /**
     * @ORM\Column(name="todas", type="boolean", nullable=true)
     */
    private $todas;
    /**
     * @ORM\Column(name="similaresCentroRealiza", type="boolean", nullable=true)
     */
    private $similaresCentroRealiza;
    /**
     * @ORM\Column(name="formacionTeorica", type="boolean", nullable=true)
     */
    private $formacionTeorica;
    /**
     * @ORM\Column(name="formacionInformatica", type="boolean", nullable=true)
     */
    private $formacionInformatica;
    /**
     * @ORM\Column(name="formacionTaller", type="boolean", nullable=true)
     */
    private $formacionTaller;
    /**
     * @ORM\Column(name="exposicion", type="boolean", nullable=true)
     */
    private $exposicion;
    /**
     * @ORM\Column(name="ventaFeria", type="boolean", nullable=true)
     */
    private $ventaFeria;
    /**
     * @ORM\Column(name="deporte", type="boolean", nullable=true)
     */
    private $deporte;
    /**
     * @ORM\Column(name="espectaculo", type="boolean", nullable=true)
     */
    private $espectaculo;
    /**
     * @ORM\Column(name="reunionAsamblea", type="boolean", nullable=true)
     */
    private $reunionAsamblea;
    /**
     * @ORM\Column(name="boda", type="boolean", nullable=true)
     */
    private $boda;
    /**
     * @ORM\Column(name="fiesta", type="boolean", nullable=true)
     */
    private $fiesta;
    /**
     * @ORM\Column(name="jardin", type="boolean", nullable=true)
     */
    private $jardin;
    /**
     * @ORM\Column(name="aceptoCondicionesUsoPoliticaPrivacidad", type="boolean", nullable=false)
     */
    private $aceptoCondicionesUsoPoliticaPrivacidad;

    /**
     * @ORM\Column(name="precioPorHora",type="float", nullable=false)
     */
    private $precioPorHora;

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
     * @var \Espacio4
     *
     * @ORM\ManyToOne(targetEntity="Espacio4")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="espacio4", referencedColumnName="id", nullable=false)
     * })
     */
    private $espacio4;


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
     * Set aceptacionReservaAutomatica
     *
     * @param boolean $aceptacionReservaAutomatica
     * @return Espacio5
     */
    public function setAceptacionReservaAutomatica($aceptacionReservaAutomatica)
    {
        $this->aceptacionReservaAutomatica = $aceptacionReservaAutomatica;
    
        return $this;
    }

    /**
     * Get aceptacionReservaAutomatica
     *
     * @return boolean 
     */
    public function getAceptacionReservaAutomatica()
    {
        return $this->aceptacionReservaAutomatica;
    }

    /**
     * Set tiempoMaximoAceptacionReservaAutomatica24h
     *
     * @param boolean $tiempoMaximoAceptacionReservaAutomatica24h
     * @return Espacio5
     */
    public function setTiempoMaximoAceptacionReservaAutomatica24h($tiempoMaximoAceptacionReservaAutomatica24h)
    {
        $this->tiempoMaximoAceptacionReservaAutomatica24h = $tiempoMaximoAceptacionReservaAutomatica24h;
    
        return $this;
    }

    /**
     * Get tiempoMaximoAceptacionReservaAutomatica24h
     *
     * @return boolean 
     */
    public function getTiempoMaximoAceptacionReservaAutomatica24h()
    {
        return $this->tiempoMaximoAceptacionReservaAutomatica24h;
    }

    /**
     * Set tiempoMaximoAceptacionReservaAutomatica48
     *
     * @param boolean $tiempoMaximoAceptacionReservaAutomatica48
     * @return Espacio5
     */
    public function setTiempoMaximoAceptacionReservaAutomatica48($tiempoMaximoAceptacionReservaAutomatica48)
    {
        $this->tiempoMaximoAceptacionReservaAutomatica48 = $tiempoMaximoAceptacionReservaAutomatica48;
    
        return $this;
    }

    /**
     * Get tiempoMaximoAceptacionReservaAutomatica48
     *
     * @return boolean 
     */
    public function getTiempoMaximoAceptacionReservaAutomatica48()
    {
        return $this->tiempoMaximoAceptacionReservaAutomatica48;
    }

    /**
     * Set datosFacturacionPagoDelUsuario
     *
     * @param boolean $datosFacturacionPagoDelUsuario
     * @return Espacio5
     */
    public function setDatosFacturacionPagoDelUsuario($datosFacturacionPagoDelUsuario)
    {
        $this->datosFacturacionPagoDelUsuario = $datosFacturacionPagoDelUsuario;
    
        return $this;
    }

    /**
     * Get datosFacturacionPagoDelUsuario
     *
     * @return boolean 
     */
    public function getDatosFacturacionPagoDelUsuario()
    {
        return $this->datosFacturacionPagoDelUsuario;
    }

    /**
     * Set anadirDatosFacturacionPago
     *
     * @param boolean $anadirDatosFacturacionPago
     * @return Espacio5
     */
    public function setAnadirDatosFacturacionPago($anadirDatosFacturacionPago)
    {
        $this->anadirDatosFacturacionPago = $anadirDatosFacturacionPago;
    
        return $this;
    }

    /**
     * Get anadirDatosFacturacionPago
     *
     * @return boolean 
     */
    public function getAnadirDatosFacturacionPago()
    {
        return $this->anadirDatosFacturacionPago;
    }

    /**
     * Set todas
     *
     * @param boolean $todas
     * @return Espacio5
     */
    public function setTodas($todas)
    {
        $this->todas = $todas;
    
        return $this;
    }

    /**
     * Get todas
     *
     * @return boolean 
     */
    public function getTodas()
    {
        return $this->todas;
    }

    /**
     * Set similaresCentroRealiza
     *
     * @param boolean $similaresCentroRealiza
     * @return Espacio5
     */
    public function setSimilaresCentroRealiza($similaresCentroRealiza)
    {
        $this->similaresCentroRealiza = $similaresCentroRealiza;
    
        return $this;
    }

    /**
     * Get similaresCentroRealiza
     *
     * @return boolean 
     */
    public function getSimilaresCentroRealiza()
    {
        return $this->similaresCentroRealiza;
    }

    /**
     * Set formacionTeorica
     *
     * @param boolean $formacionTeorica
     * @return Espacio5
     */
    public function setFormacionTeorica($formacionTeorica)
    {
        $this->formacionTeorica = $formacionTeorica;
    
        return $this;
    }

    /**
     * Get formacionTeorica
     *
     * @return boolean 
     */
    public function getFormacionTeorica()
    {
        return $this->formacionTeorica;
    }

    /**
     * Set formacionInformatica
     *
     * @param boolean $formacionInformatica
     * @return Espacio5
     */
    public function setFormacionInformatica($formacionInformatica)
    {
        $this->formacionInformatica = $formacionInformatica;
    
        return $this;
    }

    /**
     * Get formacionInformatica
     *
     * @return boolean 
     */
    public function getFormacionInformatica()
    {
        return $this->formacionInformatica;
    }

    /**
     * Set formacionTaller
     *
     * @param boolean $formacionTaller
     * @return Espacio5
     */
    public function setFormacionTaller($formacionTaller)
    {
        $this->formacionTaller = $formacionTaller;
    
        return $this;
    }

    /**
     * Get formacionTaller
     *
     * @return boolean 
     */
    public function getFormacionTaller()
    {
        return $this->formacionTaller;
    }

    /**
     * Set exposicion
     *
     * @param boolean $exposicion
     * @return Espacio5
     */
    public function setExposicion($exposicion)
    {
        $this->exposicion = $exposicion;
    
        return $this;
    }

    /**
     * Get exposicion
     *
     * @return boolean 
     */
    public function getExposicion()
    {
        return $this->exposicion;
    }

    /**
     * Set ventaFeria
     *
     * @param boolean $ventaFeria
     * @return Espacio5
     */
    public function setVentaFeria($ventaFeria)
    {
        $this->ventaFeria = $ventaFeria;
    
        return $this;
    }

    /**
     * Get ventaFeria
     *
     * @return boolean 
     */
    public function getVentaFeria()
    {
        return $this->ventaFeria;
    }

    /**
     * Set deporte
     *
     * @param boolean $deporte
     * @return Espacio5
     */
    public function setDeporte($deporte)
    {
        $this->deporte = $deporte;
    
        return $this;
    }

    /**
     * Get deporte
     *
     * @return boolean 
     */
    public function getDeporte()
    {
        return $this->deporte;
    }

    /**
     * Set espectaculo
     *
     * @param boolean $espectaculo
     * @return Espacio5
     */
    public function setEspectaculo($espectaculo)
    {
        $this->espectaculo = $espectaculo;
    
        return $this;
    }

    /**
     * Get espectaculo
     *
     * @return boolean 
     */
    public function getEspectaculo()
    {
        return $this->espectaculo;
    }

    /**
     * Set reunionAsamblea
     *
     * @param boolean $reunionAsamblea
     * @return Espacio5
     */
    public function setReunionAsamblea($reunionAsamblea)
    {
        $this->reunionAsamblea = $reunionAsamblea;
    
        return $this;
    }

    /**
     * Get reunionAsamblea
     *
     * @return boolean 
     */
    public function getReunionAsamblea()
    {
        return $this->reunionAsamblea;
    }

    /**
     * Set boda
     *
     * @param boolean $boda
     * @return Espacio5
     */
    public function setBoda($boda)
    {
        $this->boda = $boda;
    
        return $this;
    }

    /**
     * Get boda
     *
     * @return boolean 
     */
    public function getBoda()
    {
        return $this->boda;
    }

    /**
     * Set fiesta
     *
     * @param boolean $fiesta
     * @return Espacio5
     */
    public function setFiesta($fiesta)
    {
        $this->fiesta = $fiesta;
    
        return $this;
    }

    /**
     * Get fiesta
     *
     * @return boolean 
     */
    public function getFiesta()
    {
        return $this->fiesta;
    }

    /**
     * Set jardin
     *
     * @param boolean $jardin
     * @return Espacio5
     */
    public function setJardin($jardin)
    {
        $this->jardin = $jardin;
    
        return $this;
    }

    /**
     * Get jardin
     *
     * @return boolean 
     */
    public function getJardin()
    {
        return $this->jardin;
    }

    /**
     * Set aceptoCondicionesUsoPoliticaPrivacidad
     *
     * @param boolean $aceptoCondicionesUsoPoliticaPrivacidad
     * @return Espacio5
     */
    public function setAceptoCondicionesUsoPoliticaPrivacidad($aceptoCondicionesUsoPoliticaPrivacidad)
    {
        $this->aceptoCondicionesUsoPoliticaPrivacidad = $aceptoCondicionesUsoPoliticaPrivacidad;
    
        return $this;
    }

    /**
     * Get aceptoCondicionesUsoPoliticaPrivacidad
     *
     * @return boolean 
     */
    public function getAceptoCondicionesUsoPoliticaPrivacidad()
    {
        return $this->aceptoCondicionesUsoPoliticaPrivacidad;
    }

    /**
     * Set precioPorHora
     *
     * @param float $precioPorHora
     * @return Espacio5
     */
    public function setPrecioPorHora($precioPorHora)
    {
        $this->precioPorHora = $precioPorHora;
    
        return $this;
    }

    /**
     * Get precioPorHora
     *
     * @return float 
     */
    public function getPrecioPorHora()
    {
        return $this->precioPorHora;
    }

    /**
     * Set fechaRegistro
     *
     * @param \DateTime $fechaRegistro
     * @return Espacio5
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
     * @return Espacio5
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
     * Set espacio4
     *
     * @param \Proyecto\PrincipalBundle\Entity\Espacio4 $espacio4
     * @return Espacio5
     */
    public function setEspacio4(\Proyecto\PrincipalBundle\Entity\Espacio4 $espacio4)
    {
        $this->espacio4 = $espacio4;
    
        return $this;
    }

    /**
     * Get espacio4
     *
     * @return \Proyecto\PrincipalBundle\Entity\Espacio4 
     */
    public function getEspacio4()
    {
        return $this->espacio4;
    }
}