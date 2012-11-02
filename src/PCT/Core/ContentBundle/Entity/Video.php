<?php

namespace PCT\Core\ContentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PCT\Core\ContentBundle\Entity\Video
 *
 * @ORM\Table(name="video")
 * @ORM\Entity
 */
class Video
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
     * @var boolean $api
     *
     * @ORM\Column(name="api", type="boolean", nullable=true)
     */
    private $api;

    /**
     * @var string $referenciaExterna
     *
     * @ORM\Column(name="referencia_externa", type="string", length=128, nullable=true)
     */
    private $referenciaExterna;

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
     * Set api
     *
     * @param boolean $api
     * @return Video
     */
    public function setApi($api)
    {
        $this->api = $api;
        return $this;
    }

    /**
     * Get api
     *
     * @return boolean 
     */
    public function getApi()
    {
        return $this->api;
    }

    /**
     * Set referenciaExterna
     *
     * @param string $referenciaExterna
     * @return Video
     */
    public function setReferenciaExterna($referenciaExterna)
    {
        $this->referenciaExterna = $referenciaExterna;
        return $this;
    }

    /**
     * Get referenciaExterna
     *
     * @return string 
     */
    public function getReferenciaExterna()
    {
        return $this->referenciaExterna;
    }

    /**
     * Set idContenido
     *
     * @param PCT\Core\ContentBundle\Entity\Contenido $idContenido
     * @return Video
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