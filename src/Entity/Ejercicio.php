<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ejercicios
 *
 * @ORM\Table(name="ejercicios", indexes={@ORM\Index(name="fk_ejercicios_docentes1_idx", columns={"docentes_iddocente"})})
 * @ORM\Entity
 */
class Ejercicio
{
    /**
     * @var int
     *
     * @ORM\Column(name="idejercicio", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idejercicio;

    /**
     * @var string
     *
     * @ORM\Column(name="nameejercicio", type="string", length=45, nullable=false)
     */
    private $nameejercicio;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=45, nullable=false)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="created_at", type="string", length=45, nullable=false)
     */
    private $createdAt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="active", type="string", length=45, nullable=true)
     */
    private $active;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image1", type="string", length=45, nullable=true)
     */
    private $image1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image2", type="string", length=45, nullable=true)
     */
    private $image2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image3", type="string", length=45, nullable=true)
     */
    private $image3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image4", type="string", length=45, nullable=true)
     */
    private $image4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="letra1", type="string", length=45, nullable=true)
     */
    private $letra1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="letra2", type="string", length=45, nullable=true)
     */
    private $letra2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="letra3", type="string", length=45, nullable=true)
     */
    private $letra3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="letra4", type="string", length=45, nullable=true)
     */
    private $letra4;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cantvalida", type="integer", nullable=true)
     */
    private $cantvalida;

    /**
     * @var string|null
     *
     * @ORM\Column(name="oracion", type="string", length=45, nullable=true)
     */
    private $oracion;

    /**
     * @var \Docente
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Docente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="docentes_iddocente", referencedColumnName="iddocente")
     * })
     */
    private $docenteIddocente;


}
