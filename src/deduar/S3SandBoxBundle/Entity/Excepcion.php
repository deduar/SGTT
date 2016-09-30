<?php

namespace deduar\S3SandBoxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Excepcion
 *
 * @ORM\Table(name="excepcion")
 * @ORM\Table(name="""gestion_tiempo"".""tbrEmpleadoExcepcion""")
 * @ORM\Entity(repositoryClass="deduar\S3SandBoxBundle\Repository\ExcepcionRepository")
 */
class Excepcion
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gestion_tiempo.seq_empleadoexcepcion", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="idempleado", type="integer")
     */
    private $idempleado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_hora_desde", type="datetime")
     */
    private $fechaInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_hora_hasta", type="datetime")
     */
    private $fechaFin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_creacion", type="datetime")
     */
    private $fechaCreacion;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="string", length=255)
     */
    private $observacion;

    /**
     * @ORM\ManyToOne(targetEntity="TypoExcepcion")
     * @ORM\JoinColumn(name="idtipoexcepcion", referencedColumnName="id")
     */
    private $idtypoexcepcion;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=255)
     */
    private $estado;

    /**
     * @var boolean $ejecutada
     * @ORM\Column(name="ejecutada", type="boolean", nullable=false)
     */
    private $ejecutada;    

    /**
     * @var boolean $enviada
     * @ORM\Column(name="enviada", type="boolean", nullable=false)
     */
    private $enviada;    

    /**
     * @var boolean $conformada
     * @ORM\Column(name="conformada", type="boolean", nullable=false)
     */
    private $conformada;    

    /**
     * @var boolean $remunerada
     * @ORM\Column(name="remunerada", type="boolean", nullable=false)
     */
    private $remunerada;

    /**
     * @ORM\ManyToOne(targetEntity="TypoEstadoExcepcion")
     * @ORM\JoinColumn(name="idestadoexcepcion", referencedColumnName="id")
     */
    private $idtypoestadoexcepcion; 

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
     * Set idempleado
     *
     * @param integer $idempleado
     *
     * @return Excepcion
     */
    public function setIdempleado($idempleado)
    {
        $this->idempleado = $idempleado;

        return $this;
    }

    /**
     * Get idempleado
     *
     * @return integer
     */
    public function getIdempleado()
    {
        return $this->idempleado;
    }

    /**
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     *
     * @return Excepcion
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return \DateTime
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * Set fechaFin
     *
     * @param \DateTime $fechaFin
     *
     * @return Excepcion
     */
    public function setFechaFin($fechaFin)
    {
        $this->fechaFin = $fechaFin;

        return $this;
    }

    /**
     * Get fechaFin
     *
     * @return \DateTime
     */
    public function getFechaFin()
    {
        return $this->fechaFin;
    }

    /**
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     *
     * @return Excepcion
     */
    public function setFechaCreacion($fechaCreacion)
    {
        $this->fechaCreacion = $fechaCreacion;

        return $this;
    }

    /**
     * Get fechaCreacion
     *
     * @return \DateTime
     */
    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     *
     * @return Excepcion
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;

        return $this;
    }

    /**
     * Get observacion
     *
     * @return string
     */
    public function getObservacion()
    {
        return $this->observacion;
    }

    /**
     * Set estado
     *
     * @param string $estado
     *
     * @return Excepcion
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set ejecutada
     *
     * @param boolean $ejecutada
     *
     * @return Excepcion
     */
    public function setEjecutada($ejecutada)
    {
        $this->ejecutada = $ejecutada;

        return $this;
    }

    /**
     * Get ejecutada
     *
     * @return boolean
     */
    public function getEjecutada()
    {
        return $this->ejecutada;
    }

    /**
     * Set enviada
     *
     * @param boolean $enviada
     *
     * @return Excepcion
     */
    public function setEnviada($enviada)
    {
        $this->enviada = $enviada;

        return $this;
    }

    /**
     * Get enviada
     *
     * @return boolean
     */
    public function getEnviada()
    {
        return $this->enviada;
    }

    /**
     * Set conformada
     *
     * @param boolean $conformada
     *
     * @return Excepcion
     */
    public function setConformada($conformada)
    {
        $this->conformada = $conformada;

        return $this;
    }

    /**
     * Get conformada
     *
     * @return boolean
     */
    public function getConformada()
    {
        return $this->conformada;
    }

    /**
     * Set remunerada
     *
     * @param boolean $remunerada
     *
     * @return Excepcion
     */
    public function setRemunerada($remunerada)
    {
        $this->remunerada = $remunerada;

        return $this;
    }

    /**
     * Get remunerada
     *
     * @return boolean
     */
    public function getRemunerada()
    {
        return $this->remunerada;
    }

    /**
     * Set idtypoexcepcion
     *
     * @param \deduar\S3SandBoxBundle\Entity\TypoExcepcion $idtypoexcepcion
     *
     * @return Excepcion
     */
    public function setIdtypoexcepcion(\deduar\S3SandBoxBundle\Entity\TypoExcepcion $idtypoexcepcion = null)
    {
        $this->idtypoexcepcion = $idtypoexcepcion;

        return $this;
    }

    /**
     * Get idtypoexcepcion
     *
     * @return \deduar\S3SandBoxBundle\Entity\TypoExcepcion
     */
    public function getIdtypoexcepcion()
    {
        return $this->idtypoexcepcion;
    }

    /**
     * Set idtypoestadoexcepcion
     *
     * @param \deduar\S3SandBoxBundle\Entity\TypoEstadoExcepcion $idtypoestadoexcepcion
     *
     * @return Excepcion
     */
    public function setIdtypoestadoexcepcion(\deduar\S3SandBoxBundle\Entity\TypoEstadoExcepcion $idtypoestadoexcepcion = null)
    {
        $this->idtypoestadoexcepcion = $idtypoestadoexcepcion;

        return $this;
    }

    /**
     * Get idtypoestadoexcepcion
     *
     * @return \deduar\S3SandBoxBundle\Entity\TypoEstadoExcepcion
     */
    public function getIdtypoestadoexcepcion()
    {
        return $this->idtypoestadoexcepcion;
    }
}
