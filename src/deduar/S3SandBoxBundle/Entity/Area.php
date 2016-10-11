<?php

namespace deduar\S3SandBoxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Area
 *
 * @ORM\Table(name="""estructura_organizativa"".""tbmArea""")
 * @ORM\Entity(repositoryClass="deduar\S3SandBoxBundle\Repository\AreaRepository")
 */
class Area
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100)
     */
    private $nombre;

    /**
     * @var int
     *
     * @ORM\Column(name="idareapadre", type="integer")
     */
    private $idareapadre;

    /**
     * @var int
     *
     * @ORM\Column(name="idcompania", type="integer")
     */
    private $idcompania;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=10)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="unidad", type="string", length=10)
     */
    private $unidad;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Area
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    public function __toString(){
        return $this->getNombre();
    }

    /**
     * Set idareapadre
     *
     * @param integer $idareapadre
     *
     * @return Area
     */
    public function setIdareapadre($idareapadre)
    {
        $this->idareapadre = $idareapadre;

        return $this;
    }

    /**
     * Get idareapadre
     *
     * @return int
     */
    public function getIdareapadre()
    {
        return $this->idareapadre;
    }

    /**
     * Set idcompania
     *
     * @param integer $idcompania
     *
     * @return Area
     */
    public function setIdcompania($idcompania)
    {
        $this->idcompania = $idcompania;

        return $this;
    }

    /**
     * Get idcompania
     *
     * @return int
     */
    public function getIdcompania()
    {
        return $this->idcompania;
    }

    /**
     * Set codigo
     *
     * @param string $codigo
     *
     * @return Area
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set unidad
     *
     * @param string $unidad
     *
     * @return Area
     */
    public function setUnidad($unidad)
    {
        $this->unidad = $unidad;

        return $this;
    }

    /**
     * Get unidad
     *
     * @return string
     */
    public function getUnidad()
    {
        return $this->unidad;
    }
}
