<?php

namespace deduar\S3SandBoxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Persona
 *
 * @ORM\Table(name="""common"".""tbmPersona""")
 * @ORM\Entity(repositoryClass="deduar\S3SandBoxBundle\Repository\PersonaRepository")
 */
class Persona
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
     * @ORM\Column(name="primer_nombre", type="string", length=30)
     */
    private $pNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="segundo_nombre", type="string", length=30)
     */
    private $sNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="primer_apellido", type="string", length=30)
     */
    private $pApellido;

    /**
     * @var string
     *
     * @ORM\Column(name="segundo_apellido", type="string", length=30)
     */
    private $sApellido;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_documento", type="string", length=1)
     */
    private $tDocumento;

    /**
     * @var int
     *
     * @ORM\Column(name="nro_documento", type="string", length=10)
     */
    private $ci;

    /**
     * @var int
     *
     * @ORM\Column(name="rif", type="string", length=14)
     */
    private $rif;

    /**
     * @var string
     *
     * @ORM\Column(name="sexo", type="string", length=1)
     */
    private $sexo;

    /**
     * @ORM\ManyToOne(targetEntity="Estadocivil")
     * @ORM\JoinColumn(name="idestadocivil", referencedColumnName="id")
     */
    private $idestadocivil;

    /**
     * @var string
     *
     * @ORM\Column(name="nacionalidad", type="string", length=1)
     */
    private $nacionalidad;

    /**
     * @ORM\ManyToOne(targetEntity="Ciudad")
     * @ORM\JoinColumn(name="idciudad_nac", referencedColumnName="id")
     */
    private $idciudadNac;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_nacimiento", type="datetime")
     */
    private $fechanacimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion_1", type="string", length=255)
     */
    private $direccion1;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion_2", type="string", length=255)
     */
    private $direccion2;

    /**
     * @ORM\ManyToOne(targetEntity="Ciudad")
     * @ORM\JoinColumn(name="idciudad_hab", referencedColumnName="id")
     */
    private $idciudadHab;

    /**
     * @ORM\ManyToOne(targetEntity="Tipovivienda")
     * @ORM\JoinColumn(name="idtipovivienda", referencedColumnName="id")
     */
    private $idtipovivienda;

    /**
     * @var string
     *
     * @ORM\Column(name="tlf_habitacion", type="string", length=20)
     */
    private $tlfHabitacion;

    /**
     * @var string
     *
     * @ORM\Column(name="tlf_movil", type="string", length=20)
     */
    private $tlfMovil;

    /**
     * @var string
     *
     * @ORM\Column(name="tlf_emergencia", type="string", length=20)
     */
    private $tlfEmergencia;

    /**
     * @var string
     *
     * @ORM\Column(name="persona_contacto", type="string", length=100)
     */
    private $personaContacto;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=200)
     */
    private $email;

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
     * Set pNombre
     *
     * @param string $pNombre
     *
     * @return Persona
     */
    public function setPNombre($pNombre)
    {
        $this->pNombre = $pNombre;

        return $this;
    }

    /**
     * Get pNombre
     *
     * @return string
     */
    public function getPNombre()
    {
        return $this->pNombre;
    }

    public function __toString() {
        $personaNombreApellido = $this->pNombre . $this->pApellido;
        return $personaNombreApellido;
    }

    /**
     * Set sNombre
     *
     * @param string $sNombre
     *
     * @return Persona
     */
    public function setSNombre($sNombre)
    {
        $this->sNombre = $sNombre;

        return $this;
    }

    /**
     * Get sNombre
     *
     * @return string
     */
    public function getSNombre()
    {
        return $this->sNombre;
    }

    /**
     * Set pApellido
     *
     * @param string $pApellido
     *
     * @return Persona
     */
    public function setPApellido($pApellido)
    {
        $this->pApellido = $pApellido;

        return $this;
    }

    /**
     * Get pApellido
     *
     * @return string
     */
    public function getPApellido()
    {
        return $this->pApellido;
    }

    /**
     * Set sApellido
     *
     * @param string $sApellido
     *
     * @return Persona
     */
    public function setSApellido($sApellido)
    {
        $this->sApellido = $sApellido;

        return $this;
    }

    /**
     * Get sApellido
     *
     * @return string
     */
    public function getSApellido()
    {
        return $this->sApellido;
    }

    /**
     * Set tDocumento
     *
     * @param string $tDocumento
     *
     * @return Persona
     */
    public function setTDocumento($tDocumento)
    {
        $this->tDocumento = $tDocumento;

        return $this;
    }

    /**
     * Get tDocumento
     *
     * @return string
     */
    public function getTDocumento()
    {
        return $this->tDocumento;
    }

    /**
     * Set ci
     *
     * @param string $ci
     *
     * @return Persona
     */
    public function setCi($ci)
    {
        $this->ci = $ci;

        return $this;
    }

    /**
     * Get ci
     *
     * @return string
     */
    public function getCi()
    {
        return $this->ci;
    }

    /**
     * Set rif
     *
     * @param string $rif
     *
     * @return Persona
     */
    public function setRif($rif)
    {
        $this->rif = $rif;

        return $this;
    }

    /**
     * Get rif
     *
     * @return string
     */
    public function getRif()
    {
        return $this->rif;
    }

    /**
     * Set sexo
     *
     * @param string $sexo
     *
     * @return Persona
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Get sexo
     *
     * @return string
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set idestadocivil
     *
     * @param integer $idestadocivil
     *
     * @return Persona
     */
    public function setIdestadocivil($idestadocivil)
    {
        $this->idestadocivil = $idestadocivil;

        return $this;
    }

    /**
     * Get idestadocivil
     *
     * @return integer
     */
    public function getIdestadocivil()
    {
        return $this->idestadocivil;
    }

    /**
     * Set nacionalidad
     *
     * @param string $nacionalidad
     *
     * @return Persona
     */
    public function setNacionalidad($nacionalidad)
    {
        $this->nacionalidad = $nacionalidad;

        return $this;
    }

    /**
     * Get nacionalidad
     *
     * @return string
     */
    public function getNacionalidad()
    {
        return $this->nacionalidad;
    }

    /**
     * Set idciudadNac
     *
     * @param integer $idciudadNac
     *
     * @return Persona
     */
    public function setIdciudadNac($idciudadNac)
    {
        $this->idciudadNac = $idciudadNac;

        return $this;
    }

    /**
     * Get idciudadNac
     *
     * @return integer
     */
    public function getIdciudadNac()
    {
        return $this->idciudadNac;
    }

    /**
     * Set fechanacimiento
     *
     * @param \DateTime $fechanacimiento
     *
     * @return Persona
     */
    public function setFechanacimiento($fechanacimiento)
    {
        $this->fechanacimiento = $fechanacimiento;

        return $this;
    }

    /**
     * Get fechanacimiento
     *
     * @return \DateTime
     */
    public function getFechanacimiento()
    {
        return $this->fechanacimiento;
    }

    /**
     * Set direccion1
     *
     * @param string $direccion1
     *
     * @return Persona
     */
    public function setDireccion1($direccion1)
    {
        $this->direccion1 = $direccion1;

        return $this;
    }

    /**
     * Get direccion1
     *
     * @return string
     */
    public function getDireccion1()
    {
        return $this->direccion1;
    }

    /**
     * Set direccion2
     *
     * @param string $direccion2
     *
     * @return Persona
     */
    public function setDireccion2($direccion2)
    {
        $this->direccion2 = $direccion2;

        return $this;
    }

    /**
     * Get direccion2
     *
     * @return string
     */
    public function getDireccion2()
    {
        return $this->direccion2;
    }

    /**
     * Set idciudadHab
     *
     * @param integer $idciudadHab
     *
     * @return Persona
     */
    public function setIdciudadHab($idciudadHab)
    {
        $this->idciudadHab = $idciudadHab;

        return $this;
    }

    /**
     * Get idciudadHab
     *
     * @return integer
     */
    public function getIdciudadHab()
    {
        return $this->idciudadHab;
    }

    /**
     * Set idtipovivienda
     *
     * @param integer $idtipovivienda
     *
     * @return Persona
     */
    public function setIdtipovivienda($idtipovivienda)
    {
        $this->idtipovivienda = $idtipovivienda;

        return $this;
    }

    /**
     * Get idtipovivienda
     *
     * @return integer
     */
    public function getIdtipovivienda()
    {
        return $this->idtipovivienda;
    }

    /**
     * Set tlfHabitacion
     *
     * @param string $tlfHabitacion
     *
     * @return Persona
     */
    public function setTlfHabitacion($tlfHabitacion)
    {
        $this->tlfHabitacion = $tlfHabitacion;

        return $this;
    }

    /**
     * Get tlfHabitacion
     *
     * @return string
     */
    public function getTlfHabitacion()
    {
        return $this->tlfHabitacion;
    }

    /**
     * Set tlfMovil
     *
     * @param string $tlfMovil
     *
     * @return Persona
     */
    public function setTlfMovil($tlfMovil)
    {
        $this->tlfMovil = $tlfMovil;

        return $this;
    }

    /**
     * Get tlfMovil
     *
     * @return string
     */
    public function getTlfMovil()
    {
        return $this->tlfMovil;
    }

    /**
     * Set tlfEmergencia
     *
     * @param string $tlfEmergencia
     *
     * @return Persona
     */
    public function setTlfEmergencia($tlfEmergencia)
    {
        $this->tlfEmergencia = $tlfEmergencia;

        return $this;
    }

    /**
     * Get tlfEmergencia
     *
     * @return string
     */
    public function getTlfEmergencia()
    {
        return $this->tlfEmergencia;
    }

    /**
     * Set personaContacto
     *
     * @param string $personaContacto
     *
     * @return Persona
     */
    public function setPersonaContacto($personaContacto)
    {
        $this->personaContacto = $personaContacto;

        return $this;
    }

    /**
     * Get personaContacto
     *
     * @return string
     */
    public function getPersonaContacto()
    {
        return $this->personaContacto;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Persona
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
}
