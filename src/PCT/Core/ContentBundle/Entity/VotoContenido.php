<?php

namespace PCT\Core\ContentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PCT\Core\ContentBundle\Entity\VotoContenido
 *
 * @ORM\Table(name="voto_contenido")
 * @ORM\Entity
 */
class VotoContenido
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
     * @var boolean $valor
     *
     * @ORM\Column(name="valor", type="boolean", nullable=true)
     */
    private $valor;

    /**
     * @var date $fecha
     *
     * @ORM\Column(name="fecha", type="date", nullable=true)
     */
    private $fecha;

    /**
     * @var time $hora
     *
     * @ORM\Column(name="hora", type="time", nullable=true)
     */
    private $hora;

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
     * Set valor
     *
     * @param boolean $valor
     * @return VotoContenido
     */
    public function setValor($valor)
    {
        $this->valor = $valor;
        return $this;
    }

    /**
     * Get valor
     *
     * @return boolean 
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set fecha
     *
     * @param date $fecha
     * @return VotoContenido
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
        return $this;
    }

    /**
     * Get fecha
     *
     * @return date 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set hora
     *
     * @param time $hora
     * @return VotoContenido
     */
    public function setHora($hora)
    {
        $this->hora = $hora;
        return $this;
    }

    /**
     * Get hora
     *
     * @return time 
     */
    public function getHora()
    {
        return $this->hora;
    }

    /**
     * Set idUsuario
     *
     * @param PCT\Core\ContentBundle\Entity\Usuario $idUsuario
     * @return VotoContenido
     */
    public function setIdUsuario(\PCT\Core\ContentBundle\Entity\Usuario $idUsuario = null)
    {
        $this->idUsuario = $idUsuario;
        return $this;
    }

    /**
     * Get idUsuario
     *
     * @return PCT\Core\ContentBundle\Entity\Usuario 
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * Set idContenido
     *
     * @param PCT\Core\ContentBundle\Entity\Contenido $idContenido
     * @return VotoContenido
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