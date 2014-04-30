<?php

namespace Proxies\__CG__\Proyecto\PrincipalBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Espacio2 extends \Proyecto\PrincipalBundle\Entity\Espacio2 implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setNombreEspacio($nombreEspacio)
    {
        $this->__load();
        return parent::setNombreEspacio($nombreEspacio);
    }

    public function getNombreEspacio()
    {
        $this->__load();
        return parent::getNombreEspacio();
    }

    public function setDescripcionGeneral($descripcionGeneral)
    {
        $this->__load();
        return parent::setDescripcionGeneral($descripcionGeneral);
    }

    public function getDescripcionGeneral()
    {
        $this->__load();
        return parent::getDescripcionGeneral();
    }

    public function setEnlaceVideo($enlaceVideo)
    {
        $this->__load();
        return parent::setEnlaceVideo($enlaceVideo);
    }

    public function getEnlaceVideo()
    {
        $this->__load();
        return parent::getEnlaceVideo();
    }

    public function setFechaRegistro($fechaRegistro)
    {
        $this->__load();
        return parent::setFechaRegistro($fechaRegistro);
    }

    public function getFechaRegistro()
    {
        $this->__load();
        return parent::getFechaRegistro();
    }

    public function setUser(\Proyecto\PrincipalBundle\Entity\User $user)
    {
        $this->__load();
        return parent::setUser($user);
    }

    public function getUser()
    {
        $this->__load();
        return parent::getUser();
    }

    public function setEspacio1(\Proyecto\PrincipalBundle\Entity\Espacio1 $espacio1)
    {
        $this->__load();
        return parent::setEspacio1($espacio1);
    }

    public function getEspacio1()
    {
        $this->__load();
        return parent::getEspacio1();
    }

    public function setSede1(\Proyecto\PrincipalBundle\Entity\Sede1 $sede1 = NULL)
    {
        $this->__load();
        return parent::setSede1($sede1);
    }

    public function getSede1()
    {
        $this->__load();
        return parent::getSede1();
    }

    public function setPath($path)
    {
        $this->__load();
        return parent::setPath($path);
    }

    public function getPath()
    {
        $this->__load();
        return parent::getPath();
    }

    public function setFile(\Symfony\Component\HttpFoundation\File\UploadedFile $file = NULL)
    {
        $this->__load();
        return parent::setFile($file);
    }

    public function preUpload()
    {
        $this->__load();
        return parent::preUpload();
    }

    public function upload()
    {
        $this->__load();
        return parent::upload();
    }

    public function removeUpload()
    {
        $this->__load();
        return parent::removeUpload();
    }

    public function getFile()
    {
        $this->__load();
        return parent::getFile();
    }

    public function getAbsolutePath()
    {
        $this->__load();
        return parent::getAbsolutePath();
    }

    public function getWebPath()
    {
        $this->__load();
        return parent::getWebPath();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'nombreEspacio', 'descripcionGeneral', 'enlaceVideo', 'fechaRegistro', 'path', 'user', 'espacio1', 'sede1');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}