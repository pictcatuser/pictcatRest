<?php

namespace PCT\Core\HistoryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use PCT\Core\GeoBundle\Entity\Zona;
use PCT\Core\UserBundle\Entity\User;

/**
 * PCT\Core\HistoryBundle\Entity\Historia
 *
 * @ORM\Table(name="historia")
 * @ORM\Entity
 */
class Historia
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
     * @var string $titulo
     *
     * @ORM\Column(name="titulo", type="string", length=128, nullable=true)
     */
    private $titulo;

    /**
     * @var text $descripcion
     *
     * @ORM\Column(name="descripcion", type="text", nullable=true)
     */
    private $descripcion;

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
     * @var boolean $estado
     *
     * @ORM\Column(name="estado", type="boolean", nullable=true)
     */
    private $estado;

    /**
     * @var decimal $latitud
     *
     * @ORM\Column(name="latitud", type="decimal", nullable=true)
     */
    private $latitud;

    /**
     * @var decimal $longitud
     *
     * @ORM\Column(name="longitud", type="decimal", nullable=true)
     */
    private $longitud;

    /**
     * @var boolean $radio
     *
     * @ORM\Column(name="radio", type="boolean", nullable=true)
     */
    private $radio;

    /**
     * @var string $idioma
     *
     * @ORM\Column(name="idioma", type="string", length=5, nullable=true)
     */
    private $idioma;

    /**
     * @var Usuario
     *
     * @ORM\ManyToOne(targetEntity="PCT\Core\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_usuario", referencedColumnName="id")
     * })
     */
    private $idUsuario;

    /**
     * @var Zona
     *
     * @ORM\ManyToOne(targetEntity="PCT\Core\GeoBundle\Entity\Zona")
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
     * Set titulo
     *
     * @param string $titulo
     * @return Historia
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
        return $this;
    }

    /**
     * Get titulo
     *
     * @return string
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set descripcion
     *
     * @param text $descripcion
     * @return Historia
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
        return $this;
    }

    /**
     * Get descripcion
     *
     * @return text
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set fechaCreacion
     *
     * @param date $fechaCreacion
     * @return Historia
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
     * @return Historia
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
     * Set estado
     *
     * @param boolean $estado
     * @return Historia
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
        return $this;
    }

    /**
     * Get estado
     *
     * @return boolean
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set latitud
     *
     * @param decimal $latitud
     * @return Historia
     */
    public function setLatitud($latitud)
    {
        $this->latitud = $latitud;
        return $this;
    }

    /**
     * Get latitud
     *
     * @return decimal
     */
    public function getLatitud()
    {
        return $this->latitud;
    }

    /**
     * Set longitud
     *
     * @param decimal $longitud
     * @return Historia
     */
    public function setLongitud($longitud)
    {
        $this->longitud = $longitud;
        return $this;
    }

    /**
     * Get longitud
     *
     * @return decimal
     */
    public function getLongitud()
    {
        return $this->longitud;
    }

    /**
     * Set radio
     *
     * @param boolean $radio
     * @return Historia
     */
    public function setRadio($radio)
    {
        $this->radio = $radio;
        return $this;
    }

    /**
     * Get radio
     *
     * @return boolean
     */
    public function getRadio()
    {
        return $this->radio;
    }

    /**
     * Set idioma
     *
     * @param string $idioma
     * @return Historia
     */
    public function setIdioma($idioma)
    {
        $this->idioma = $idioma;
        return $this;
    }

    /**
     * Get idioma
     *
     * @return string
     */
    public function getIdioma()
    {
        return $this->idioma;
    }

    /**
     * Set idUsuario
     *
     * @param PCT\Core\UserBundle\Entity\User $idUsuario
     * @return Historia
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

    /**
     * Set idZona
     *
     * @param PCT\Core\GeoBundle\Entity\Zona $idZona
     * @return Historia
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