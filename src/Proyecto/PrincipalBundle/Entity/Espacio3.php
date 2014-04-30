<?php

namespace Proyecto\PrincipalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Retiro
 *
 * @ORM\Table(name="espacio3")
 * @ORM\Entity
 */
class Espacio3
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="superficie",type="integer", nullable=true)
     */
    private $superficie;

    /**
     * @ORM\Column(name="anchoMinimoLibre",type="integer", nullable=true)
     */
    private $anchoMinimoLibre;

    /**
     * @ORM\Column(name="largoMinimoLibre",type="integer", nullable=true)
     */
    private $largoMinimoLibre;

    /**
     * @ORM\Column(name="alturaMinimaLibre",type="integer", nullable=true)
     */
    private $alturaMinimaLibre;

    /**
     * @ORM\Column(name="modoAula", type="boolean", nullable=true)
     */
    private $modoAula;

    /**
     * @ORM\Column(name="modoAulaCapacidad",type="integer", nullable=true)
     */
    private $modoAulaCapacidad;

    /**
     * @ORM\Column(name="modoBanquete", type="boolean", nullable=true)
     */
    private $modoBanquete;

    /**
     * @ORM\Column(name="modoBanqueteCapacidad",type="integer", nullable=true)
     */
    private $modoBanqueteCapacidad;

    /**
     * @ORM\Column(name="modoCocktail", type="boolean", nullable=true)
     */
    private $modoCocktail;

    /**
     * @ORM\Column(name="modoCocktailCapacidad",type="integer", nullable=true)
     */
    private $modoCocktailCapacidad;


    /**
     * @ORM\Column(name="modoEscenario",type="boolean", nullable=true)
     */
    private $modoEscenario;

    /**
     * @ORM\Column(name="modoEscenarioCapacidad", type="integer", nullable=true)
     */
    private $modoEscenarioCapacidad;

    /**
     * @ORM\Column(name="modoExposicion",type="boolean", nullable=true)
     */
    private $modoExposicion;

    /**
     * @ORM\Column(name="modoExposicionCapacidad",type="integer", nullable=true)
     */
    private $modoExposicionCapacidad;

    /**
     * @ORM\Column(name="jardin",type="integer", nullable=true)
     */
    private $jardin;

    /**
     * @ORM\Column(name="pilaresSueltos",type="integer", nullable=true)
     */
    private $pilaresSueltos;

    /**
     * @ORM\Column(name="entradaAseosMovilidadReducida",type="integer", nullable=true)
     */
    private $entradaAseosMovilidadReducida;

    /**
     * @ORM\Column(name="ventanasExterior",type="integer", nullable=true)
     */
    private $ventanasExterior;

    /**
     * @ORM\Column(name="ventanasPatioInterior",type="integer", nullable=true)
     */
    private $ventanasPatioInterior;

    /**
     * @ORM\Column(name="posibilidadOscurecerSala",type="integer", nullable=true)
     */
    private $posibilidadOscurecerSala;

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
     * @var \Espacio2
     *
     * @ORM\ManyToOne(targetEntity="Espacio2")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="espacio2", referencedColumnName="id", nullable=false)
     * })
     */
    private $espacio2;

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
     * Set superficie
     *
     * @param integer $superficie
     * @return Espacio3
     */
    public function setSuperficie($superficie)
    {
        $this->superficie = $superficie;
    
        return $this;
    }

    /**
     * Get superficie
     *
     * @return integer 
     */
    public function getSuperficie()
    {
        return $this->superficie;
    }

    /**
     * Set anchoMinimoLibre
     *
     * @param integer $anchoMinimoLibre
     * @return Espacio3
     */
    public function setAnchoMinimoLibre($anchoMinimoLibre)
    {
        $this->anchoMinimoLibre = $anchoMinimoLibre;
    
        return $this;
    }

    /**
     * Get anchoMinimoLibre
     *
     * @return integer 
     */
    public function getAnchoMinimoLibre()
    {
        return $this->anchoMinimoLibre;
    }

    /**
     * Set largoMinimoLibre
     *
     * @param integer $largoMinimoLibre
     * @return Espacio3
     */
    public function setLargoMinimoLibre($largoMinimoLibre)
    {
        $this->largoMinimoLibre = $largoMinimoLibre;
    
        return $this;
    }

    /**
     * Get largoMinimoLibre
     *
     * @return integer 
     */
    public function getLargoMinimoLibre()
    {
        return $this->largoMinimoLibre;
    }

    /**
     * Set alturaMinimaLibre
     *
     * @param integer $alturaMinimaLibre
     * @return Espacio3
     */
    public function setAlturaMinimaLibre($alturaMinimaLibre)
    {
        $this->alturaMinimaLibre = $alturaMinimaLibre;
    
        return $this;
    }

    /**
     * Get alturaMinimaLibre
     *
     * @return integer 
     */
    public function getAlturaMinimaLibre()
    {
        return $this->alturaMinimaLibre;
    }

    /**
     * Set modoAula
     *
     * @param boolean $modoAula
     * @return Espacio3
     */
    public function setModoAula($modoAula)
    {
        $this->modoAula = $modoAula;
    
        return $this;
    }

    /**
     * Get modoAula
     *
     * @return boolean 
     */
    public function getModoAula()
    {
        return $this->modoAula;
    }

    /**
     * Set modoAulaCapacidad
     *
     * @param integer $modoAulaCapacidad
     * @return Espacio3
     */
    public function setModoAulaCapacidad($modoAulaCapacidad)
    {
        $this->modoAulaCapacidad = $modoAulaCapacidad;
    
        return $this;
    }

    /**
     * Get modoAulaCapacidad
     *
     * @return integer 
     */
    public function getModoAulaCapacidad()
    {
        return $this->modoAulaCapacidad;
    }

    /**
     * Set modoBanquete
     *
     * @param boolean $modoBanquete
     * @return Espacio3
     */
    public function setModoBanquete($modoBanquete)
    {
        $this->modoBanquete = $modoBanquete;
    
        return $this;
    }

    /**
     * Get modoBanquete
     *
     * @return boolean 
     */
    public function getModoBanquete()
    {
        return $this->modoBanquete;
    }

    /**
     * Set modoBanqueteCapacidad
     *
     * @param integer $modoBanqueteCapacidad
     * @return Espacio3
     */
    public function setModoBanqueteCapacidad($modoBanqueteCapacidad)
    {
        $this->modoBanqueteCapacidad = $modoBanqueteCapacidad;
    
        return $this;
    }

    /**
     * Get modoBanqueteCapacidad
     *
     * @return integer 
     */
    public function getModoBanqueteCapacidad()
    {
        return $this->modoBanqueteCapacidad;
    }

    /**
     * Set modoCocktail
     *
     * @param boolean $modoCocktail
     * @return Espacio3
     */
    public function setModoCocktail($modoCocktail)
    {
        $this->modoCocktail = $modoCocktail;
    
        return $this;
    }

    /**
     * Get modoCocktail
     *
     * @return boolean 
     */
    public function getModoCocktail()
    {
        return $this->modoCocktail;
    }

    /**
     * Set modoCocktailCapacidad
     *
     * @param integer $modoCocktailCapacidad
     * @return Espacio3
     */
    public function setModoCocktailCapacidad($modoCocktailCapacidad)
    {
        $this->modoCocktailCapacidad = $modoCocktailCapacidad;
    
        return $this;
    }

    /**
     * Get modoCocktailCapacidad
     *
     * @return integer 
     */
    public function getModoCocktailCapacidad()
    {
        return $this->modoCocktailCapacidad;
    }


    /**
     * Set modoEscenario
     *
     * @param integer $modoEscenario
     * @return Espacio3
     */
    public function setModoEscenario($modoEscenario)
    {
        $this->modoEscenario = $modoEscenario;
    
        return $this;
    }

    /**
     * Get modoEscenario
     *
     * @return integer 
     */
    public function getModoEscenario()
    {
        return $this->modoEscenario;
    }

    /**
     * Set modoEscenarioCapacidad
     *
     * @param boolean $modoEscenarioCapacidad
     * @return Espacio3
     */
    public function setModoEscenarioCapacidad($modoEscenarioCapacidad)
    {
        $this->modoEscenarioCapacidad = $modoEscenarioCapacidad;
    
        return $this;
    }

    /**
     * Get modoEscenarioCapacidad
     *
     * @return boolean 
     */
    public function getModoEscenarioCapacidad()
    {
        return $this->modoEscenarioCapacidad;
    }

    /**
     * Set modoExposicion
     *
     * @param integer $modoExposicion
     * @return Espacio3
     */
    public function setModoExposicion($modoExposicion)
    {
        $this->modoExposicion = $modoExposicion;
    
        return $this;
    }

    /**
     * Get modoExposicion
     *
     * @return integer 
     */
    public function getModoExposicion()
    {
        return $this->modoExposicion;
    }

    /**
     * Set modoExposicionCapacidad
     *
     * @param integer $modoExposicionCapacidad
     * @return Espacio3
     */
    public function setModoExposicionCapacidad($modoExposicionCapacidad)
    {
        $this->modoExposicionCapacidad = $modoExposicionCapacidad;
    
        return $this;
    }

    /**
     * Get modoExposicionCapacidad
     *
     * @return integer 
     */
    public function getModoExposicionCapacidad()
    {
        return $this->modoExposicionCapacidad;
    }

    /**
     * Set jardin
     *
     * @param integer $jardin
     * @return Espacio3
     */
    public function setJardin($jardin)
    {
        $this->jardin = $jardin;
    
        return $this;
    }

    /**
     * Get jardin
     *
     * @return integer 
     */
    public function getJardin()
    {
        return $this->jardin;
    }

    /**
     * Set pilaresSueltos
     *
     * @param integer $pilaresSueltos
     * @return Espacio3
     */
    public function setPilaresSueltos($pilaresSueltos)
    {
        $this->pilaresSueltos = $pilaresSueltos;
    
        return $this;
    }

    /**
     * Get pilaresSueltos
     *
     * @return integer 
     */
    public function getPilaresSueltos()
    {
        return $this->pilaresSueltos;
    }

    /**
     * Set entradaAseosMovilidadReducida
     *
     * @param integer $entradaAseosMovilidadReducida
     * @return Espacio3
     */
    public function setEntradaAseosMovilidadReducida($entradaAseosMovilidadReducida)
    {
        $this->entradaAseosMovilidadReducida = $entradaAseosMovilidadReducida;
    
        return $this;
    }

    /**
     * Get entradaAseosMovilidadReducida
     *
     * @return integer 
     */
    public function getEntradaAseosMovilidadReducida()
    {
        return $this->entradaAseosMovilidadReducida;
    }

    /**
     * Set ventanasExterior
     *
     * @param integer $ventanasExterior
     * @return Espacio3
     */
    public function setVentanasExterior($ventanasExterior)
    {
        $this->ventanasExterior = $ventanasExterior;
    
        return $this;
    }

    /**
     * Get ventanasExterior
     *
     * @return integer 
     */
    public function getVentanasExterior()
    {
        return $this->ventanasExterior;
    }

    /**
     * Set ventanasPatioInterior
     *
     * @param integer $ventanasPatioInterior
     * @return Espacio3
     */
    public function setVentanasPatioInterior($ventanasPatioInterior)
    {
        $this->ventanasPatioInterior = $ventanasPatioInterior;
    
        return $this;
    }

    /**
     * Get ventanasPatioInterior
     *
     * @return integer 
     */
    public function getVentanasPatioInterior()
    {
        return $this->ventanasPatioInterior;
    }

    /**
     * Set posibilidadOscurecerSala
     *
     * @param integer $posibilidadOscurecerSala
     * @return Espacio3
     */
    public function setPosibilidadOscurecerSala($posibilidadOscurecerSala)
    {
        $this->posibilidadOscurecerSala = $posibilidadOscurecerSala;
    
        return $this;
    }

    /**
     * Get posibilidadOscurecerSala
     *
     * @return integer 
     */
    public function getPosibilidadOscurecerSala()
    {
        return $this->posibilidadOscurecerSala;
    }

    /**
     * Set otros
     *
     * @param string $otros
     * @return Espacio3
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
     * @return Espacio3
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
     * @return Espacio3
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
     * Set espacio2
     *
     * @param \Proyecto\PrincipalBundle\Entity\Espacio2 $espacio2
     * @return Espacio3
     */
    public function setEspacio2(\Proyecto\PrincipalBundle\Entity\Espacio2 $espacio2)
    {
        $this->espacio2 = $espacio2;
    
        return $this;
    }

    /**
     * Get espacio2
     *
     * @return \Proyecto\PrincipalBundle\Entity\Espacio2 
     */
    public function getEspacio2()
    {
        return $this->espacio2;
    }
}