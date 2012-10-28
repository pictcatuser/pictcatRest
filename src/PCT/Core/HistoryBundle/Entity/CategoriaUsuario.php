<?php

namespace PCT\Core\HistoryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use PCT\Core\UserBundle\Entity\User;

/**
 * PCT\Core\HistoryBundle\Entity\CategoriaUsuario
 *
 * @ORM\Table(name="categoria_usuario")
 * @ORM\Entity
 */
class CategoriaUsuario
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
     * @var Categoria
     *
     * @ORM\ManyToOne(targetEntity="Categoria")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_categoria", referencedColumnName="id")
     * })
     */
    private $idCategoria;



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
     * @return CategoriaUsuario
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
     * @return CategoriaUsuario
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
     * Set idCategoria
     *
     * @param PCT\Core\HistoryBundle\Entity\Categoria $idCategoria
     * @return CategoriaUsuario
     */
    public function setIdCategoria(\PCT\Core\HistoryBundle\Entity\Categoria $idCategoria = null)
    {
        $this->idCategoria = $idCategoria;
        return $this;
    }

    /**
     * Get idCategoria
     *
     * @return PCT\Core\HistoryBundle\Entity\Categoria
     */
    public function getIdCategoria()
    {
        return $this->idCategoria;
    }
}