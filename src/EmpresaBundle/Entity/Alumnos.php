<?php

namespace EmpresaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Alumnos
 *
 * @ORM\Table(name="alumnos")
 * @ORM\Entity(repositoryClass="EmpresaBundle\Repository\AlumnosRepository")
 */
class Alumnos
{


    /**
     * @ORM\ManyToOne(targetEntity="Empresa", inversedBy="alumno")
     * @ORM\JoinColumn(name="Empresa_id", referencedColumnName="id")
     */
    private $empresa;


    public  function getEmpresa(){
        return $this->empresa;
}

    /**
     * @ORM\ManyToOne(targetEntity="Profesor", inversedBy="alumno")
     * @ORM\JoinColumn(name="Profesor_id", referencedColumnName="id")
     */
    private $profesor;


    public  function getProfesor(){
        return $this->profesor;
    }




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
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido1", type="string", length=255)
     */
    private $apellido1;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido2", type="string", length=255)
     */
    private $apellido2;

    /**
     * @var string
     *
     * @ORM\Column(name="ciclo", type="string", length=255)
     */
    private $ciclo;


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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Alumnos
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

    /**
     * Set apellido1
     *
     * @param string $apellido1
     *
     * @return Alumnos
     */
    public function setApellido1($apellido1)
    {
        $this->apellido1 = $apellido1;

        return $this;
    }

    /**
     * Get apellido1
     *
     * @return string
     */
    public function getApellido1()
    {
        return $this->apellido1;
    }

    /**
     * Set apellido2
     *
     * @param string $apellido2
     *
     * @return Alumnos
     */
    public function setApellido2($apellido2)
    {
        $this->apellido2 = $apellido2;

        return $this;
    }

    /**
     * Get apellido2
     *
     * @return string
     */
    public function getApellido2()
    {
        return $this->apellido2;
    }

    /**
     * Set ciclo
     *
     * @param string $ciclo
     *
     * @return Alumnos
     */
    public function setCiclo($ciclo)
    {
        $this->ciclo = $ciclo;

        return $this;
    }

    /**
     * Get ciclo
     *
     * @return string
     */
    public function getCiclo()
    {
        return $this->ciclo;
    }



}

