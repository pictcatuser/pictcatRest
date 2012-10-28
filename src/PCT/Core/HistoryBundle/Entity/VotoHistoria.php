<?php

namespace PCT\Core\HistoryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use PCT\Core\UserBundle\Entity\User;

/**
 * PCT\Core\HistoryBundle\Entity\VotoHistoria
 *
 * @ORM\Table(name="voto_historia")
 * @ORM\Entity
 */
class VotoHistoria
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
     * @var PCT\Core\UserBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="PCT\Core\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_usuario", referencedColumnName="id")
     * })
     */
    private $idUsuario;

    /**
     * @var Historia
     *
     * @ORM\ManyToOne(targetEntity="Historia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_historia", referencedColumnName="id")
     * })
     */
    private $idHistoria;



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
     * @return VotoHistoria
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
     * Set idUsuario
     *
     * @param PCT\Core\UserBundle\Entity\User $idUsuario
     * @return VotoHistoria
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
     * Set idHistoria
     *
     * @param PCT\Core\HistoryBundle\Entity\Historia $idHistoria
     * @return VotoHistoria
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
}