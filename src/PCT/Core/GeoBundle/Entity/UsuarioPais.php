<?php

namespace PCT\Core\GeoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PCT\Core\GeoBundle\Entity\UsuarioPais
 *
 * @ORM\Table(name="usuario_pais")
 * @ORM\Entity
 */
class UsuarioPais
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
     * @var Pais
     *
     * @ORM\ManyToOne(targetEntity="Pais")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pais", referencedColumnName="id")
     * })
     */
    private $idPais;



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
     * @return UsuarioPais
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
     * Set idPais
     *
     * @param PCT\Core\GeoBundle\Entity\Pais $idPais
     * @return UsuarioPais
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
}