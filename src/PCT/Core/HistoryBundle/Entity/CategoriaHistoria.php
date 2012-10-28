<?php

namespace PCT\Core\HistoryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PCT\Core\HistoryBundle\Entity\CategoriaHistoria
 *
 * @ORM\Table(name="categoria_historia")
 * @ORM\Entity
 */
class CategoriaHistoria
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
     * @var Historia
     *
     * @ORM\ManyToOne(targetEntity="Historia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_historia", referencedColumnName="id")
     * })
     */
    private $idHistoria;

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
     * Set idHistoria
     *
     * @param PCT\Core\HistoryBundle\Entity\Historia $idHistoria
     * @return CategoriaHistoria
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
     * Set idCategoria
     *
     * @param PCT\Core\HistoryBundle\Entity\Categoria $idCategoria
     * @return CategoriaHistoria
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