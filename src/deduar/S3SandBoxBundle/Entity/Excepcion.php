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
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="idempleado", type="integer")
     */
    private $solicitante;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_hora_desde", type="datetime")
     */
    private $fechaSolicitud;

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
    private $motivo;

    /**
     * @ORM\ManyToOne(targetEntity="TypoExcepcion")
     * @ORM\JoinColumn(name="id", referencedColumnName="id")
     */
    private $idtypoexcepcion;

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
     * Set solicitante
     *
     * @param integer $solicitante
     *
     * @return Excepcion
     */
    public function setSolicitante($solicitante)
    {
        $this->solicitante = $solicitante;

        return $this;
    }

    /**
     * Get solicitante
     *
     * @return int
     */
    public function getSolicitante()
    {
        return $this->solicitante;
    }

    /**
     * Set fechaSolicitud
     *
     * @param \DateTime $fechaSolicitud
     *
     * @return Excepcion
     */
    public function setFechaSolicitud($fechaSolicitud)
    {
        $this->fechaSolicitud = $fechaSolicitud;

        return $this;
    }

    /**
     * Get fechaSolicitud
     *
     * @return \DateTime
     */
    public function getFechaSolicitud()
    {
        return $this->fechaSolicitud;
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
     * Set motivo
     *
     * @param string $motivo
     *
     * @return Excepcion
     */
    public function setMotivo($motivo)
    {
        $this->motivo = $motivo;

        return $this;
    }

    /**
     * Get motivo
     *
     * @return string
     */
    public function getMotivo()
    {
        return $this->motivo;
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

}
