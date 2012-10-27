<?php

namespace PCT\Core\GeoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PCT\Core\GeoBundle\Entity\UsuarioZona
 *
 * @ORM\Table(name="usuario_zona")
 * @ORM\Entity
 */
class UsuarioZona
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
     * @var Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_usuario", referencedColumnName="id")
     * })
     */
    private $idUsuario;

    /**
     * @var Zona
     *
     * @ORM\ManyToOne(targetEntity="Zona")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_zona", referencedColumnName="id")
     * })
     */
    private $idZona;



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
     * Set idUsuario
     *
     * @param PCT\Core\GeoBundle\Entity\Usuario $idUsuario
     * @return UsuarioZona
     */
    public function setIdUsuario(\PCT\Core\GeoBundle\Entity\Usuario $idUsuario = null)
    {
        $this->idUsuario = $idUsuario;
        return $this;
    }

    /**
     * Get idUsuario
     *
     * @return PCT\Core\GeoBundle\Entity\Usuario 
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * Set idZona
     *
     * @param PCT\Core\GeoBundle\Entity\Zona $idZona
     * @return UsuarioZona
     */
    public function setIdZona(\PCT\Core\GeoBundle\Entity\Zona $idZona = null)
    {
        $this->idZona = $idZona;
        return $this;
    }

    /**
     * Get idZona
     *
     * @return PCT\Core\GeoBundle\Entity\Zona 
     */
    public function getIdZona()
    {
        return $this->idZona;
    }
}