<?php

namespace PCT\Core\ContentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PCT\Core\ContentBundle\Entity\Fotografia
 *
 * @ORM\Table(name="fotografia")
 * @ORM\Entity
 */
class Fotografia
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $hashBaja
     *
     * @ORM\Column(name="hash_baja", type="string", length=64, nullable=true)
     */
    private $hashBaja;

    /**
     * @var string $hashAlta
     *
     * @ORM\Column(name="hash_alta", type="string", length=64, nullable=true)
     */
    private $hashAlta;

    /**
     * @var Contenido
     *
     * @ORM\ManyToOne(targetEntity="Contenido")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_contenido", referencedColumnName="id")
     * })
     */
    private $idContenido;



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
     * Set hashBaja
     *
     * @param string $hashBaja
     * @return Fotografia
     */
    public function setHashBaja($hashBaja)
    {
        $this->hashBaja = $hashBaja;
        return $this;
    }

    /**
     * Get hashBaja
     *
     * @return string 
     */
    public function getHashBaja()
    {
        return $this->hashBaja;
    }

    /**
     * Set hashAlta
     *
     * @param string $hashAlta
     * @return Fotografia
     */
    public function setHashAlta($hashAlta)
    {
        $this->hashAlta = $hashAlta;
        return $this;
    }

    /**
     * Get hashAlta
     *
     * @return string 
     */
    public function getHashAlta()
    {
        return $this->hashAlta;
    }

    /**
     * Set idContenido
     *
     * @param PCT\Core\ContentBundle\Entity\Contenido $idContenido
     * @return Fotografia
     */
    public function setIdContenido(\PCT\Core\ContentBundle\Entity\Contenido $idContenido = null)
    {
        $this->idContenido = $idContenido;
        return $this;
    }

    /**
     * Get idContenido
     *
     * @return PCT\Core\ContentBundle\Entity\Contenido 
     */
    public function getIdContenido()
    {
        return $this->idContenido;
    }
}