<?php

namespace deduar\S3SandBoxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypoEstadoExcepcion
 *
 * @ORM\Table(name="""gestion_tiempo"".""tbmEstadoExcepcion""")
 * @ORM\Entity(repositoryClass="deduar\S3SandBoxBundle\Repository\TypoEstadoExcepcionRepository")
 */
class TypoEstadoExcepcion
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gestion_tiempo.seq_estado_excepcion", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=10)
     */
    private $descripcion;

    /**
     * @var boolean $asignacion
     * @ORM\Column(name="activo", type="boolean", nullable=false)
     */
    private $activo;

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
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return TypoEstadoExcepcion
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
     * String representation of this object
     * @return string
     */
    public function __toString()
    {
        try {
            return $this->getDescripcion();
        } catch (Exception $e) {
            return "";
        }
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     *
     * @return TypoEstadoExcepcion
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean
     */
    public function getActivo()
    {
        return $this->activo;
    }
}
