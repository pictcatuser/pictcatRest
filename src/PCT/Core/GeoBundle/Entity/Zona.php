<?php

namespace PCT\Core\GeoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PCT\Core\GeoBundle\Entity\Zona
 *
 * @ORM\Table(name="zona")
 * @ORM\Entity
 */
class Zona
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
     * @var string $nombre
     *
     * @ORM\Column(name="nombre", type="string", length=32, nullable=true)
     */
    private $nombre;

    /**
     * @var Pais
     *
     * @ORM\ManyToOne(targetEntity="Pais")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pais", referencedColumnName="id")
     * })
     */
    private $idPais;

    /**
     * @var Zona
     *
     * @ORM\ManyToOne(targetEntity="Zona")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_padre", referencedColumnName="id")
     * })
     */
    private $idPadre;



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
     * Set nombre
     *
     * @param string $nombre
     * @return Zona
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
     * Set idPais
     *
     * @param PCT\Core\GeoBundle\Entity\Pais $idPais
     * @return Zona
     */
    public function setIdPais(\PCT\Core\GeoBundle\Entity\Pais $idPais = null)
    {
        $this->idPais = $idPais;
        return $this;
    }

    /**
     * Get idPais
     *
     * @return PCT\Core\GeoBundle\Entity\Pais 
     */
    public function getIdPais()
    {
        return $this->idPais;
    }

    /**
     * Set idPadre
     *
     * @param PCT\Core\GeoBundle\Entity\Zona $idPadre
     * @return Zona
     */
    public function setIdPadre(\PCT\Core\GeoBundle\Entity\Zona $idPadre = null)
    {
        $this->idPadre = $idPadre;
        return $this;
    }

    /**
     * Get idPadre
     *
     * @return PCT\Core\GeoBundle\Entity\Zona 
     */
    public function getIdPadre()
    {
        return $this->idPadre;
    }
}