<?php

namespace deduar\S3SandBoxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Grupo
 *
 * @ORM\Table(name="""empleado"".""tbmGrupo""")
 * @ORM\Entity(repositoryClass="deduar\S3SandBoxBundle\Repository\GrupoRepository")
 */
class Grupo
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
     * @ORM\Column(name="descripcion", type="string", length=40)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="abreviaruta", type="string", length=10)
     */
    private $abreviatura;

    /**
     * @var int
     *
     * @ORM\Column(name="idturno", type="integer")
     */
    private $idturno;


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
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Grupo
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

    public function __toString(){
        return $this->getDescripcion();
    }

    /**
     * Set abreviatura
     *
     * @param string $abreviatura
     *
     * @return Grupo
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
     * Set idturno
     *
     * @param integer $idturno
     *
     * @return Grupo
     */
    public function setIdturno($idturno)
    {
        $this->idturno = $idturno;

        return $this;
    }

    /**
     * Get idturno
     *
     * @return int
     */
    public function getIdturno()
    {
        return $this->idturno;
    }
}
