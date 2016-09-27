<?php

namespace deduar\S3SandBoxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypoExcepcion
 *
 * @ORM\Table(name="""gestion_tiempo"".""tbmTipoExcepcion""")
 * @ORM\Entity(repositoryClass="deduar\S3SandBoxBundle\Repository\TypoExcepcionRepository")
 */
class TypoExcepcion
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gestion_tiempo.seq_tipoexcepcion", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=100)
     */
    private $descripcion;

    /**
     * @var boolean $asignacion
     * @ORM\Column(name="asignacion", type="boolean", nullable=false)
     */
    private $asignacion;

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
     * @return TypoExcepcion
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
     * Set asignacion
     *
     * @param boolean $asignacion
     *
     * @return TypoExcepcion
     */
    public function setAsignacion($asignacion)
    {
        $this->asignacion = $asignacion;

        return $this;
    }

    /**
     * Get asignacion
     *
     * @return boolean
     */
    public function getAsignacion()
    {
        return $this->asignacion;
    }
}
