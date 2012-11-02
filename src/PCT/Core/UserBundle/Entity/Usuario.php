<?php

namespace PCT\Core\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PCT\Core\UserBundle\Entity\Usuario
 *
 * @ORM\Table(name="usuario")
 * @ORM\Entity
 */
class Usuario
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
     * @var string $nick
     *
     * @ORM\Column(name="nick", type="string", length=32, nullable=true)
     */
    private $nick;

    /**
     * @var string $idFacebook
     *
     * @ORM\Column(name="id_facebook", type="string", length=64, nullable=true)
     */
    private $idFacebook;

    /**
     * @var string $idTwitter
     *
     * @ORM\Column(name="id_twitter", type="string", length=64, nullable=true)
     */
    private $idTwitter;

    /**
     * @var date $fechaAlta
     *
     * @ORM\Column(name="fecha_alta", type="date", nullable=true)
     */
    private $fechaAlta;

    /**
     * @var time $horaAlta
     *
     * @ORM\Column(name="hora_alta", type="time", nullable=true)
     */
    private $horaAlta;

    /**
     * @var date $fechaUltimaAccion
     *
     * @ORM\Column(name="fecha_ultima_accion", type="date", nullable=true)
     */
    private $fechaUltimaAccion;

    /**
     * @var time $horaUltimaAccion
     *
     * @ORM\Column(name="hora_ultima_accion", type="time", nullable=true)
     */
    private $horaUltimaAccion;

    /**
     * @var string $idioma
     *
     * @ORM\Column(name="idioma", type="string", length=5, nullable=true)
     */
    private $idioma;

    /**
     * @var string $dispositivo
     *
     * @ORM\Column(name="dispositivo", type="string", length=16, nullable=true)
     */
    private $dispositivo;

    /**
     * @var string $hashAvatar
     *
     * @ORM\Column(name="hash_avatar", type="string", length=64, nullable=true)
     */
    private $hashAvatar;

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
     * Set nick
     *
     * @param string $nick
     * @return Usuario
     */
    public function setNick($nick)
    {
        $this->nick = $nick;
        return $this;
    }

    /**
     * Get nick
     *
     * @return string 
     */
    public function getNick()
    {
        return $this->nick;
    }

    /**
     * Set idFacebook
     *
     * @param string $idFacebook
     * @return Usuario
     */
    public function setIdFacebook($idFacebook)
    {
        $this->idFacebook = $idFacebook;
        return $this;
    }

    /**
     * Get idFacebook
     *
     * @return string 
     */
    public function getIdFacebook()
    {
        return $this->idFacebook;
    }

    /**
     * Set idTwitter
     *
     * @param string $idTwitter
     * @return Usuario
     */
    public function setIdTwitter($idTwitter)
    {
        $this->idTwitter = $idTwitter;
        return $this;
    }

    /**
     * Get idTwitter
     *
     * @return string 
     */
    public function getIdTwitter()
    {
        return $this->idTwitter;
    }

    /**
     * Set fechaAlta
     *
     * @param date $fechaAlta
     * @return Usuario
     */
    public function setFechaAlta($fechaAlta)
    {
        $this->fechaAlta = $fechaAlta;
        return $this;
    }

    /**
     * Get fechaAlta
     *
     * @return date 
     */
    public function getFechaAlta()
    {
        return $this->fechaAlta;
    }

    /**
     * Set horaAlta
     *
     * @param time $horaAlta
     * @return Usuario
     */
    public function setHoraAlta($horaAlta)
    {
        $this->horaAlta = $horaAlta;
        return $this;
    }

    /**
     * Get horaAlta
     *
     * @return time 
     */
    public function getHoraAlta()
    {
        return $this->horaAlta;
    }

    /**
     * Set fechaUltimaAccion
     *
     * @param date $fechaUltimaAccion
     * @return Usuario
     */
    public function setFechaUltimaAccion($fechaUltimaAccion)
    {
        $this->fechaUltimaAccion = $fechaUltimaAccion;
        return $this;
    }

    /**
     * Get fechaUltimaAccion
     *
     * @return date 
     */
    public function getFechaUltimaAccion()
    {
        return $this->fechaUltimaAccion;
    }

    /**
     * Set horaUltimaAccion
     *
     * @param time $horaUltimaAccion
     * @return Usuario
     */
    public function setHoraUltimaAccion($horaUltimaAccion)
    {
        $this->horaUltimaAccion = $horaUltimaAccion;
        return $this;
    }

    /**
     * Get horaUltimaAccion
     *
     * @return time 
     */
    public function getHoraUltimaAccion()
    {
        return $this->horaUltimaAccion;
    }

    /**
     * Set idioma
     *
     * @param string $idioma
     * @return Usuario
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
     * Set dispositivo
     *
     * @param string $dispositivo
     * @return Usuario
     */
    public function setDispositivo($dispositivo)
    {
        $this->dispositivo = $dispositivo;
        return $this;
    }

    /**
     * Get dispositivo
     *
     * @return string 
     */
    public function getDispositivo()
    {
        return $this->dispositivo;
    }

    /**
     * Set hashAvatar
     *
     * @param string $hashAvatar
     * @return Usuario
     */
    public function setHashAvatar($hashAvatar)
    {
        $this->hashAvatar = $hashAvatar;
        return $this;
    }

    /**
     * Get hashAvatar
     *
     * @return string 
     */
    public function getHashAvatar()
    {
        return $this->hashAvatar;
    }

    /**
     * Set idZona
     *
     * @param PCT\Core\UserBundle\Entity\Zona $idZona
     * @return Usuario
     */
    public function setIdZona(\PCT\Core\UserBundle\Entity\Zona $idZona = null)
    {
        $this->idZona = $idZona;
        return $this;
    }

    /**
     * Get idZona
     *
     * @return PCT\Core\UserBundle\Entity\Zona 
     */
    public function getIdZona()
    {
        return $this->idZona;
    }
}