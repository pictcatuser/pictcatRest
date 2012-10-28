<?php

namespace PCT\Core\CommentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PCT\Core\CommentBundle\Entity\Comentario
 *
 * @ORM\Table(name="comentario")
 * @ORM\Entity
 */
class Comentario
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
     * @var date $fechaEdicion
     *
     * @ORM\Column(name="fecha_edicion", type="date", nullable=true)
     */
    private $fechaEdicion;

    /**
     * @var time $horaEdicion
     *
     * @ORM\Column(name="hora_edicion", type="time", nullable=true)
     */
    private $horaEdicion;

    /**
     * @var integer $orden
     *
     * @ORM\Column(name="orden", type="integer", nullable=true)
     */
    private $orden;

    /**
     * @var text $texto
     *
     * @ORM\Column(name="texto", type="text", nullable=true)
     */
    private $texto;

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
     * @var Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
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
     * Set fechaCreacion
     *
     * @param date $fechaCreacion
     * @return Comentario
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
     * @return Comentario
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
     * Set fechaEdicion
     *
     * @param date $fechaEdicion
     * @return Comentario
     */
    public function setFechaEdicion($fechaEdicion)
    {
        $this->fechaEdicion = $fechaEdicion;
        return $this;
    }

    /**
     * Get fechaEdicion
     *
     * @return date 
     */
    public function getFechaEdicion()
    {
        return $this->fechaEdicion;
    }

    /**
     * Set horaEdicion
     *
     * @param time $horaEdicion
     * @return Comentario
     */
    public function setHoraEdicion($horaEdicion)
    {
        $this->horaEdicion = $horaEdicion;
        return $this;
    }

    /**
     * Get horaEdicion
     *
     * @return time 
     */
    public function getHoraEdicion()
    {
        return $this->horaEdicion;
    }

    /**
     * Set orden
     *
     * @param integer $orden
     * @return Comentario
     */
    public function setOrden($orden)
    {
        $this->orden = $orden;
        return $this;
    }

    /**
     * Get orden
     *
     * @return integer 
     */
    public function getOrden()
    {
        return $this->orden;
    }

    /**
     * Set texto
     *
     * @param text $texto
     * @return Comentario
     */
    public function setTexto($texto)
    {
        $this->texto = $texto;
        return $this;
    }

    /**
     * Get texto
     *
     * @return text 
     */
    public function getTexto()
    {
        return $this->texto;
    }

    /**
     * Set idContenido
     *
     * @param PCT\Core\CommentBundle\Entity\Contenido $idContenido
     * @return Comentario
     */
    public function setIdContenido(\PCT\Core\CommentBundle\Entity\Contenido $idContenido = null)
    {
        $this->idContenido = $idContenido;
        return $this;
    }

    /**
     * Get idContenido
     *
     * @return PCT\Core\CommentBundle\Entity\Contenido 
     */
    public function getIdContenido()
    {
        return $this->idContenido;
    }

    /**
     * Set idUsuario
     *
     * @param PCT\Core\CommentBundle\Entity\Usuario $idUsuario
     * @return Comentario
     */
    public function setIdUsuario(\PCT\Core\CommentBundle\Entity\Usuario $idUsuario = null)
    {
        $this->idUsuario = $idUsuario;
        return $this;
    }

    /**
     * Get idUsuario
     *
     * @return PCT\Core\CommentBundle\Entity\Usuario 
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }
}