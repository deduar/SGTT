<?php

namespace deduar\S3SandBoxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Empleado
 *
 * @ORM\Table(name="empleado")
 * @ORM\Entity(repositoryClass="deduar\S3SandBoxBundle\Repository\EmpleadoRepository")
 */
class Empleado
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
     * @ORM\Column(name="login", type="string", length=30)
     */
    private $login;

    /**
     * @var int
     *
     * @ORM\Column(name="ficha", type="integer")
     */
    private $ficha;

    /**
     * @ORM\ManyToOne(targetEntity="Persona")
     * @ORM\JoinColumn(name="idpersona", referencedColumnName="id")
     */
    private $idpersona;

    /**
     * @ORM\ManyToOne(targetEntity="Empleado")
     * @ORM\JoinColumn(name="idsupervisor", referencedColumnName="id")
     */
    private $idsupervisor;

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
     * Set login
     *
     * @param string $login
     *
     * @return Empleado
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    public function __toString() {
        return $this->login;
    }

    /**
     * Set ficha
     *
     * @param integer $ficha
     *
     * @return Empleado
     */
    public function setFicha($ficha)
    {
        $this->ficha = $ficha;

        return $this;
    }

    /**
     * Get ficha
     *
     * @return int
     */
    public function getFicha()
    {
        return $this->ficha;
    }

    /**
     * Set idpersona
     *
     * @param \deduar\S3SandBoxBundle\Entity\Persona $idpersona
     *
     * @return Empleado
     */
    public function setIdpersona(\deduar\S3SandBoxBundle\Entity\Persona $idpersona = null)
    {
        $this->idpersona = $idpersona;

        return $this;
    }

    /**
     * Get idpersona
     *
     * @return \deduar\S3SandBoxBundle\Entity\Persona
     */
    public function getIdpersona()
    {
        return $this->idpersona;
    }

    /**
     * Set idsupervisor
     *
     * @param \deduar\S3SandBoxBundle\Entity\Empleado $idsupervisor
     *
     * @return Empleado
     */
    public function setIdsupervisor(\deduar\S3SandBoxBundle\Entity\Empleado $idsupervisor = null)
    {
        $this->idsupervisor = $idsupervisor;

        return $this;
    }

    /**
     * Get idsupervisor
     *
     * @return \deduar\S3SandBoxBundle\Entity\Empleado
     */
    public function getIdsupervisor()
    {
        return $this->idsupervisor;
    }
}
