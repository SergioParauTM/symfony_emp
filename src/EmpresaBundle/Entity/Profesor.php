<?php

namespace EmpresaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Profesor
 *
 * @ORM\Table(name="profesor")
 * @ORM\Entity(repositoryClass="EmpresaBundle\Repository\ProfesorRepository")
 */
class Profesor
{


    /**
     * @ORM\OneToMany(targetEntity="Alumnos", mappedBy="profesor")
     */
    private $alumno;


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
     * @ORM\Column(name="apellidos", type="string", length=255)
     */
    private $apellidos;

    /**
     * @var string
     *
     * @ORM\Column(name="departamento", type="string", length=255)
     */
    private $departamento;


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
     * @return Profesor
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
     * Set apellidos
     *
     * @param string $apellidos
     *
     * @return Profesor
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set departamento
     *
     * @param string $departamento
     *
     * @return Profesor
     */
    public function setDepartamento($departamento)
    {
        $this->departamento = $departamento;

        return $this;
    }

    /**
     * Get departamento
     *
     * @return string
     */
    public function getDepartamento()
    {
        return $this->departamento;
    }


}

