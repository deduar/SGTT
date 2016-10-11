<?php

namespace deduar\S3SandBoxBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estadocivil
 *
 * @ORM\Table(name="""common"".""tbmEstadoCivil""")
 * @ORM\Entity(repositoryClass="deduar\S3SandBoxBundle\Repository\EstadocivilRepository")
 */
class Estadocivil
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
     * @ORM\Column(name="descripcion", type="string", length=45)
     */
    private $descripcion;


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
     * @return Estadocivil
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

    public function __toString() {
        return $this->getDescripcion();
    }
}
