<?php

namespace deduar\S3SandBoxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ciudad
 *
 * @ORM\Table(name="""common"".""tbmCiudad""")
 * @ORM\Entity(repositoryClass="deduar\S3SandBoxBundle\Repository\CiudadRepository")
 */
class Ciudad
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
     * @ORM\Column(name="nombre", type="string", length=40)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="abreviatura", type="string", length=3)
     */
    private $abreviatura;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_postal", type="string", length=4)
     */
    private $codigopostal;

    /**
     * @var int
     *
     * @ORM\Column(name="idestado", type="integer")
     */
    private $idestado;


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
     * @return Ciudad
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

    public function __toString() {
        return $this->getNombre();
    }

    /**
     * Set abreviatura
     *
     * @param string $abreviatura
     *
     * @return Ciudad
     */
    public function setAbreviatura($abreviatura)
    {
        $this->abreviatura = $abreviatura;

        return $this;
    }

    /**
     * Get abreviatura
     *
     * @return string
     */
    public function getAbreviatura()
    {
        return $this->abreviatura;
    }

    /**
     * Set codigopostal
     *
     * @param string $codigopostal
     *
     * @return Ciudad
     */
    public function setCodigopostal($codigopostal)
    {
        $this->codigopostal = $codigopostal;

        return $this;
    }

    /**
     * Get codigopostal
     *
     * @return string
     */
    public function getCodigopostal()
    {
        return $this->codigopostal;
    }

    /**
     * Set idestado
     *
     * @param integer $idestado
     *
     * @return Ciudad
     */
    public function setIdestado($idestado)
    {
        $this->idestado = $idestado;

        return $this;
    }

    /**
     * Get idestado
     *
     * @return int
     */
    public function getIdestado()
    {
        return $this->idestado;
    }
}
