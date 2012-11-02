<?php

namespace PCT\Core\CommentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use PCT\Core\UserBundle\Entity\User;

/**
 * PCT\Core\CommentBundle\Entity\VotoComentario
 *
 * @ORM\Table(name="voto_comentario")
 * @ORM\Entity
 */
class VotoComentario
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
     * @var PCT\Core\UserBundle\Entity\User $idUsuario
     *
     * @ORM\ManyToOne(targetEntity="PCT\Core\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_usuario", referencedColumnName="id")
     * })
     */
    private $idUsuario;

    /**
     * @var Comentario
     *
     * @ORM\ManyToOne(targetEntity="Comentario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_comentario", referencedColumnName="id")
     * })
     */
    private $idComentario;



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
     * @return VotoComentario
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
     * @return VotoComentario
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
     * Set idComentario
     *
     * @param PCT\Core\CommentBundle\Entity\Comentario $idComentario
     * @return VotoComentario
     */
    public function setIdComentario(\PCT\Core\CommentBundle\Entity\Comentario $idComentario = null)
    {
        $this->idComentario = $idComentario;
        return $this;
    }

    /**
     * Get idComentario
     *
     * @return PCT\Core\CommentBundle\Entity\Comentario
     */
    public function getIdComentario()
    {
        return $this->idComentario;
    }
}