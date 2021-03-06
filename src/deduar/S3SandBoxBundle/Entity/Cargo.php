<?php

namespace deduar\S3SandBoxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cargo
 *
 * @ORM\Table(name="""estructura_organizativa"".""tbmCargo""")
 * @ORM\Entity(repositoryClass="deduar\S3SandBoxBundle\Repository\CargoRepository")
 */
class Cargo
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
     * @ORM\Column(name="codigo", type="string", length=6)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=30)
     */
    private $nombre;

    /**
     * @var int
     *
     * @ORM\Column(name="idarea", type="integer")
     */
    private $idarea;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;

    /**
     * @var int
     *
     * @ORM\Column(name="vacante", type="integer")
     */
    private $vacante;

    /**
     * @var int
     *
     * @ORM\Column(name="idtiponomina", type="integer")
     */
    private $idtiponomina;


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
     * Set codigo
     *
     * @param string $codigo
     *
     * @return Cargo
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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Cargo
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
     * Set idarea
     *
     * @param integer $idarea
     *
     * @return Cargo
     */
    public function setIdarea($idarea)
    {
        $this->idarea = $idarea;

        return $this;
    }

    /**
     * Get idarea
     *
     * @return int
     */
    public function getIdarea()
    {
        return $this->idarea;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Cargo
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set vacante
     *
     * @param integer $vacante
     *
     * @return Cargo
     */
    public function setVacante($vacante)
    {
        $this->vacante = $vacante;

        return $this;
    }

    /**
     * Get vacante
     *
     * @return int
     */
    public function getVacante()
    {
        return $this->vacante;
    }

    /**
     * Set idtiponomina
     *
     * @param integer $idtiponomina
     *
     * @return Cargo
     */
    public function setIdtiponomina($idtiponomina)
    {
        $this->idtiponomina = $idtiponomina;

        return $this;
    }

    /**
     * Get idtiponomina
     *
     * @return int
     */
    public function getIdtiponomina()
    {
        return $this->idtiponomina;
    }
}
