<?php

namespace deduar\S3SandBoxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Empleado
 *
 * @ORM\Table(name="""empleado"".""tbmEmpleado""")
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
     * @ORM\ManyToOne(targetEntity="Persona")
     * @ORM\JoinColumn(name="idpersona", referencedColumnName="id")
     */
    private $idpersona;

    /**
     * @var int
     *
     * @ORM\Column(name="ficha", type="integer")
     */
    private $ficha;

    /**
     * @var string
     *
     * @ORM\Column(name="sindicalizado", type="string", length=1)
     */
    private $sindicalizado;

    /**
     * @ORM\ManyToOne(targetEntity="Categoria")
     * @ORM\JoinColumn(name="idcategoria", referencedColumnName="id")
     */
    private $idcategoria;

    /**
     * @ORM\ManyToOne(targetEntity="Cargo")
     * @ORM\JoinColumn(name="idcargo", referencedColumnName="id")
     */
    private $idcargo;

    /**
     * @ORM\ManyToOne(targetEntity="Empleado")
     * @ORM\JoinColumn(name="idempleadojefe", referencedColumnName="id")
     */
    private $idsupervisor;

    /**
     * @ORM\ManyToOne(targetEntity="Area")
     * @ORM\JoinColumn(name="idareaubicacion", referencedColumnName="id")
     */
    private $idareaubicacion;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=30)
     */
    private $login;

    /**
     * @ORM\ManyToOne(targetEntity="Grupo")
     * @ORM\JoinColumn(name="idgrupo", referencedColumnName="id")
     */
    private $idgrupo;

    /**
     * @var string
     *
     * @ORM\Column(name="foto", type="string", length=255)
     */
    private $foto;

    /**
     * @ORM\ManyToOne(targetEntity="Estado")
     * @ORM\JoinColumn(name="idestadoempleado", referencedColumnName="id")
     */
    private $idestadoempleado;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=15)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="abreviado", type="string", length=15)
     */
    private $abreviado;

    /**
     * @ORM\ManyToOne(targetEntity="Tiponomina")
     * @ORM\JoinColumn(name="idtiponomina", referencedColumnName="id")
     */
    private $idtiponomina;

    /**
     * @var int
     *
     * @ORM\Column(name="personajefe", type="integer")
     */
    private $personajefe;



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
     * @return integer
     */
    public function getFicha()
    {
        return $this->ficha;
    }

    /**
     * Set sindicalizado
     *
     * @param string $sindicalizado
     *
     * @return Empleado
     */
    public function setSindicalizado($sindicalizado)
    {
        $this->sindicalizado = $sindicalizado;

        return $this;
    }

    /**
     * Get sindicalizado
     *
     * @return string
     */
    public function getSindicalizado()
    {
        return $this->sindicalizado;
    }

    /**
     * Set idcategoria
     *
     * @param integer $idcategoria
     *
     * @return Empleado
     */
    public function setIdcategoria($idcategoria)
    {
        $this->idcategoria = $idcategoria;

        return $this;
    }

    /**
     * Get idcategoria
     *
     * @return integer
     */
    public function getIdcategoria()
    {
        return $this->idcategoria;
    }

    /**
     * Set idcargo
     *
     * @param integer $idcargo
     *
     * @return Empleado
     */
    public function setIdcargo($idcargo)
    {
        $this->idcargo = $idcargo;

        return $this;
    }

    /**
     * Get idcargo
     *
     * @return integer
     */
    public function getIdcargo()
    {
        return $this->idcargo;
    }

    /**
     * Set idareaubicacion
     *
     * @param integer $idareaubicacion
     *
     * @return Empleado
     */
    public function setIdareaubicacion($idareaubicacion)
    {
        $this->idareaubicacion = $idareaubicacion;

        return $this;
    }

    /**
     * Get idareaubicacion
     *
     * @return integer
     */
    public function getIdareaubicacion()
    {
        return $this->idareaubicacion;
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
        return $this->getLogin();
    }

    /**
     * Set idgrupo
     *
     * @param integer $idgrupo
     *
     * @return Empleado
     */
    public function setIdgrupo($idgrupo)
    {
        $this->idgrupo = $idgrupo;

        return $this;
    }

    /**
     * Get idgrupo
     *
     * @return integer
     */
    public function getIdgrupo()
    {
        return $this->idgrupo;
    }

    /**
     * Set foto
     *
     * @param string $foto
     *
     * @return Empleado
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Get foto
     *
     * @return string
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Set idestadoempleado
     *
     * @param integer $idestadoempleado
     *
     * @return Empleado
     */
    public function setIdestadoempleado($idestadoempleado)
    {
        $this->idestadoempleado = $idestadoempleado;

        return $this;
    }

    /**
     * Get idestadoempleado
     *
     * @return integer
     */
    public function getIdestadoempleado()
    {
        return $this->idestadoempleado;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Empleado
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set abreviado
     *
     * @param string $abreviado
     *
     * @return Empleado
     */
    public function setAbreviado($abreviado)
    {
        $this->abreviado = $abreviado;

        return $this;
    }

    /**
     * Get abreviado
     *
     * @return string
     */
    public function getAbreviado()
    {
        return $this->abreviado;
    }

    /**
     * Set idtiponomina
     *
     * @param integer $idtiponomina
     *
     * @return Empleado
     */
    public function setIdtiponomina($idtiponomina)
    {
        $this->idtiponomina = $idtiponomina;

        return $this;
    }

    /**
     * Get idtiponomina
     *
     * @return integer
     */
    public function getIdtiponomina()
    {
        return $this->idtiponomina;
    }

    /**
     * Set personajefe
     *
     * @param integer $personajefe
     *
     * @return Empleado
     */
    public function setPersonajefe($personajefe)
    {
        $this->personajefe = $personajefe;

        return $this;
    }

    /**
     * Get personajefe
     *
     * @return integer
     */
    public function getPersonajefe()
    {
        return $this->personajefe;
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
