<?php

namespace Proyecto\PrincipalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Evento
 *
 * @ORM\Table(name="evento")
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity
 */
class Evento
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
     * @var \Localidad
     *
     * @ORM\ManyToOne(targetEntity="Localidad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="localidad", referencedColumnName="id", nullable=false)
     * })
     */
    private $localidad;
    

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaRegistro", type="datetime", nullable=false)
     */
    private $fechaRegistro;

    /**
     * @ORM\Column(type="string", length=60, nullable=false)
     */
    private $nombre;

     /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    public $duracionTotal;

     /**
     * @ORM\Column(type="text")
     */
    public $descripcionGeneral;  

    /**
     * @ORM\Column(type="string", length=200, nullable=true)
     */
    private $enlaceVideo;

    /**
     * @var \Sede1
     *
     * @ORM\ManyToOne(targetEntity="Sede1")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sede1", referencedColumnName="id", nullable=true)
     * })
     */
    private $sede1;


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
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $otrosServicios;

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
     * @ORM\Column(name="jardineria", type="boolean", nullable=true)
     */
    private $jardineria;
    /**
     * @ORM\Column(name="aceptoCondicionesUsoPoliticaPrivacidad", type="boolean", nullable=false)
     */
    private $aceptoCondicionesUsoPoliticaPrivacidad;

    /**
     * @ORM\Column(name="precioPorHora",type="float", nullable=false)
     */
    private $precioPorHora;

    /**
     * @ORM\Column(name="precio",type="float", nullable=false)
     */
    private $precio;

    /**
     * @ORM\Column(name="destacado", type="boolean", nullable=true)
     */
    private $destacado;

     /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    public $path;
    
    /**
     * @Assert\File(maxSize="6000000")
     */
    private $file;
    private $temp;


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
     * @return Evento
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
     * @return Evento
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
     * @return Evento
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
     * @return Evento
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
     * Set nombre
     *
     * @param string $nombre
     * @return Evento
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set duracionTotal
     *
     * @param string $duracionTotal
     * @return Evento
     */
    public function setDuracionTotal($duracionTotal)
    {
        $this->duracionTotal = $duracionTotal;
    
        return $this;
    }

    /**
     * Get duracionTotal
     *
     * @return string 
     */
    public function getDuracionTotal()
    {
        return $this->duracionTotal;
    }

    /**
     * Set descripcionGeneral
     *
     * @param string $descripcionGeneral
     * @return Evento
     */
    public function setDescripcionGeneral($descripcionGeneral)
    {
        $this->descripcionGeneral = $descripcionGeneral;
    
        return $this;
    }

    /**
     * Get descripcionGeneral
     *
     * @return string 
     */
    public function getDescripcionGeneral()
    {
        return $this->descripcionGeneral;
    }

    /**
     * Set enlaceVideo
     *
     * @param string $enlaceVideo
     * @return Evento
     */
    public function setEnlaceVideo($enlaceVideo)
    {
        $this->enlaceVideo = $enlaceVideo;
    
        return $this;
    }

    /**
     * Get enlaceVideo
     *
     * @return string 
     */
    public function getEnlaceVideo()
    {
        return $this->enlaceVideo;
    }

    /**
     * Set proyectorPantallaSala
     *
     * @param boolean $proyectorPantallaSala
     * @return Evento
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
     * @return Evento
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
     * @return Evento
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
     * @return Evento
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
     * @return Evento
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
     * @return Evento
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
     * @return Evento
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
     * @return Evento
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
     * @return Evento
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
     * @return Evento
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
     * Set otrosServicios
     *
     * @param string $otrosServicios
     * @return Evento
     */
    public function setOtrosServicios($otrosServicios)
    {
        $this->otrosServicios = $otrosServicios;
    
        return $this;
    }

    /**
     * Get otrosServicios
     *
     * @return string 
     */
    public function getOtrosServicios()
    {
        return $this->otrosServicios;
    }

    /**
     * Set aceptacionReservaAutomatica
     *
     * @param boolean $aceptacionReservaAutomatica
     * @return Evento
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
     * @return Evento
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
     * @return Evento
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
     * @return Evento
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
     * @return Evento
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
     * @return Evento
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
     * Set formacionTeorica
     *
     * @param boolean $formacionTeorica
     * @return Evento
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
     * @return Evento
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
     * @return Evento
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
     * @return Evento
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
     * @return Evento
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
     * @return Evento
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
     * @return Evento
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
     * @return Evento
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
     * @return Evento
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
     * @return Evento
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
     * Set jardineria
     *
     * @param boolean $jardineria
     * @return Evento
     */
    public function setJardineria($jardineria)
    {
        $this->jardineria = $jardineria;
    
        return $this;
    }

    /**
     * Get jardineria
     *
     * @return boolean 
     */
    public function getJardineria()
    {
        return $this->jardineria;
    }

    /**
     * Set aceptoCondicionesUsoPoliticaPrivacidad
     *
     * @param boolean $aceptoCondicionesUsoPoliticaPrivacidad
     * @return Evento
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
     * @return Evento
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
     * Set precio
     *
     * @param float $precio
     * @return Evento
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;
    
        return $this;
    }

    /**
     * Get precio
     *
     * @return float 
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set path
     *
     * @param string $path
     * @return Evento
     */
    public function setPath($path)
    {
        $this->path = $path;
    
        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set user
     *
     * @param \Proyecto\PrincipalBundle\Entity\User $user
     * @return Evento
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
     * Set localidad
     *
     * @param \Proyecto\PrincipalBundle\Entity\Localidad $localidad
     * @return Evento
     */
    public function setLocalidad(\Proyecto\PrincipalBundle\Entity\Localidad $localidad)
    {
        $this->localidad = $localidad;
    
        return $this;
    }

    /**
     * Get localidad
     *
     * @return \Proyecto\PrincipalBundle\Entity\Localidad 
     */
    public function getLocalidad()
    {
        return $this->localidad;
    }

    /**
     * Set sede1
     *
     * @param \Proyecto\PrincipalBundle\Entity\Sede1 $sede1
     * @return Evento
     */
    public function setSede1(\Proyecto\PrincipalBundle\Entity\Sede1 $sede1 = null)
    {
        $this->sede1 = $sede1;
    
        return $this;
    }

    /**
     * Get sede1
     *
     * @return \Proyecto\PrincipalBundle\Entity\Sede1 
     */
    public function getSede1()
    {
        return $this->sede1;
    }

  /**
     * Sets file.
     *
     * @param UploadedFile $file
     */
    public function setFile(UploadedFile $file = null)
    {
        $this->file = $file;
        // check if we have an old image path
        if (isset($this->path)) {
            // store the old name to delete after the update
            $this->temp = $this->path;
            $this->path = null;
        } else {
            $this->path = 'initial';
        }
    }

    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload()
    {
        if (null !== $this->getFile()) {
            // do whatever you want to generate a unique name
            $filename = sha1(uniqid(mt_rand(), true));
            $this->path = $filename.'.'.$this->getFile()->guessExtension();
        }
    }

    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload()
    {
        if (null === $this->getFile()) {
            return;
        }

        // if there is an error when moving the file, an exception will
        // be automatically thrown by move(). This will properly prevent
        // the entity from being persisted to the database on error
        $this->getFile()->move($this->getUploadRootDir(), $this->path);

        // check if we have an old image
        if (isset($this->temp)) {
            // delete the old image
            unlink($this->getUploadRootDir().'/'.$this->temp);
            // clear the temp image path
            $this->temp = null;
        }
        $this->file = null;
    }

    /**
     * @ORM\PostRemove()
     */
    public function removeUpload()
    {
        if ($file = $this->getAbsolutePath()) {
            unlink($file);
        }
    }
    /**
     * Get file.
     *
     * @return UploadedFile
     */
    public function getFile() {
        return $this -> file;
    }

    public function getAbsolutePath()
    {
        return null === $this->path
            ? null
            : $this->getUploadRootDir().'/'.$this->path;
    }

    public function getWebPath()
    {
        return null === $this->path
            ? null
            : $this->getUploadDir().'/'.$this->path;
    }

    protected function getUploadRootDir()
    {
        // the absolute directory path where uploaded
        // documents should be saved
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'uploads/eventos';
    }



    /**
     * Set destacado
     *
     * @param boolean $destacado
     * @return Evento
     */
    public function setDestacado($destacado)
    {
        $this->destacado = $destacado;
    
        return $this;
    }

    /**
     * Get destacado
     *
     * @return boolean 
     */
    public function getDestacado()
    {
        return $this->destacado;
    }
}