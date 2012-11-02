<?php

namespace PCT\Core\ContentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use PCT\Core\UserBundle\Entity\User;
use PCT\Core\HistoryBundle\Entity\Historia;

/**
 * PCT\Core\ContentBundle\Entity\Contenido
 *
 * @ORM\Table(name="contenido")
 * @ORM\Entity
 */
class Contenido
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
     * @var boolean $tipo
     *
     * @ORM\Column(name="tipo", type="boolean", nullable=true)
     */
    private $tipo;

    /**
     * @var date $fechaCreacion
     *
     * @ORM\Column(name="fecha_creacion", type="date", nullable=true)
     */
    private $fechaCreacion;

    /**
     * @var time $horaCreacion
     *
     * @ORM\Column(name="hora_creacion", type="time", nullable=true)
     */
    private $horaCreacion;

    /**
     * @var PCT\Core\HistoryBundle\Entity\Historia $idHistoria
     *
     * @ORM\ManyToOne(targetEntity="PCT\Core\HistoryBundle\Entity\Historia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_historia", referencedColumnName="id")
     * })
     */
    private $idHistoria;

    /**
     * @var PCT\Core\UserBundle\Entity\User $idUsuario
     *
     * @ORM\ManyToOne(targetEntity="PCT\Core\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_usuario", referencedColumnName="id")
     * })
     */
    private $idUsuario;

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
     * Set tipo
     *
     * @param boolean $tipo
     * @return Contenido
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
        return $this;
    }

    /**
     * Get tipo
     *
     * @return boolean
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set fechaCreacion
     *
     * @param date $fechaCreacion
     * @return Contenido
     */
    public function setFechaCreacion($fechaCreacion)
    {
        $this->fechaCreacion = $fechaCreacion;
        return $this;
    }

    /**
     * Get fechaCreacion
     *
     * @return date
     */
    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
    }

    /**
     * Set horaCreacion
     *
     * @param time $horaCreacion
     * @return Contenido
     */
    public function setHoraCreacion($horaCreacion)
    {
        $this->horaCreacion = $horaCreacion;
        return $this;
    }

    /**
     * Get horaCreacion
     *
     * @return time
     */
    public function getHoraCreacion()
    {
        return $this->horaCreacion;
    }

    /**
     * Set idHistoria
     *
     * @param PCT\Core\HistoryBundle\Entity\Historia $idHistoria
     * @return Contenido
     */
    public function setIdHistoria(\PCT\Core\HistoryBundle\Entity\Historia $idHistoria = null)
    {
        $this->idHistoria = $idHistoria;
        return $this;
    }

    /**
     * Get idHistoria
     *
     * @return PCT\Core\HistoryBundle\Entity\Historia
     */
    public function getIdHistoria()
    {
        return $this->idHistoria;
    }

    /**
     * Set idUsuario
     *
     * @param PCT\Core\UserBundle\Entity\User $idUsuario
     * @return Contenido
     */
    public function setIdUsuario(\PCT\Core\UserBundle\Entity\User $idUsuario = null)
    {
        $this->idUsuario = $idUsuario;
        return $this;
    }

    /**
     * Get idUsuario
     *
     * @return PCT\Core\UserBundle\Entity\User
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

}