<?php

namespace Proyecto\PrincipalBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Espacio2
 *
 * @ORM\Table(name="espacio2")
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity
 */
class Espacio2 {

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @ORM\Column(type="string", length=60, nullable=false)
     */
    private $nombreEspacio;

     /**
     * @ORM\Column(type="text")
     */
    public $descripcionGeneral;  

    /**
     * @ORM\Column(type="string", length=200, nullable=false)
     */
    private $enlaceVideo;

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
     * @var \Espacio1
     *
     * @ORM\ManyToOne(targetEntity="Espacio1")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="espacio1", referencedColumnName="id", nullable=false)
     * })
     */
    private $espacio1;

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
     * @var \DateTime
     *
     * @ORM\Column(name="fechaRegistro", type="datetime", nullable=false)
     */
    private $fechaRegistro;

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
     * Set nombreEspacio
     *
     * @param string $nombreEspacio
     * @return Espacio2
     */
    public function setNombreEspacio($nombreEspacio)
    {
        $this->nombreEspacio = $nombreEspacio;
    
        return $this;
    }

    /**
     * Get nombreEspacio
     *
     * @return string 
     */
    public function getNombreEspacio()
    {
        return $this->nombreEspacio;
    }

    /**
     * Set descripcionGeneral
     *
     * @param string $descripcionGeneral
     * @return Espacio2
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
     * @return Espacio2
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
     * Set fechaRegistro
     *
     * @param \DateTime $fechaRegistro
     * @return Espacio2
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
     * @return Espacio2
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
     * Set espacio1
     *
     * @param \Proyecto\PrincipalBundle\Entity\Espacio1 $espacio1
     * @return Espacio2
     */
    public function setEspacio1(\Proyecto\PrincipalBundle\Entity\Espacio1 $espacio1)
    {
        $this->espacio1 = $espacio1;
    
        return $this;
    }

    /**
     * Get espacio1
     *
     * @return \Proyecto\PrincipalBundle\Entity\Espacio1 
     */
    public function getEspacio1()
    {
        return $this->espacio1;
    }

    /**
     * Set sede1
     *
     * @param \Proyecto\PrincipalBundle\Entity\Sede1 $sede1
     * @return Espacio2
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
     * Set path
     *
     * @param string $path
     * @return Espacio2
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
        return 'uploads/espacios';
    }
}