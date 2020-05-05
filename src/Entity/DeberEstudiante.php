<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DeberEstudiante
 *
 * @ORM\Table(name="deber_estudiante", indexes={@ORM\Index(name="fk_docentes_has_estudiantes_estudiantes1_idx", columns={"estudiantes_idestudiante"}), @ORM\Index(name="fk_Deber_estudiante_ejercicios1_idx", columns={"ejercicios_idejercicio"}), @ORM\Index(name="fk_docentes_has_estudiantes_docentes1_idx", columns={"docentes_iddocente"})})
 * @ORM\Entity
 */
class DeberEstudiante
{
    /**
     * @var int
     *
     * @ORM\Column(name="iddeberest", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddeberest;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="finished_at", type="datetime", nullable=true)
     */
    private $finishedAt;

    /**
     * @var float|null
     *
     * @ORM\Column(name="calificacion", type="float", precision=10, scale=0, nullable=true)
     */
    private $calificacion;

    /**
     * @var \Ejercicio
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Ejercicio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ejercicios_idejercicio", referencedColumnName="idejercicio")
     * })
     */
    private $ejercicioIdejercicio;

    /**
     * @var \Docente
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Docente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="docentes_iddocente", referencedColumnName="iddocente")
     * })
     */
    private $docenteIddocente;

    /**
     * @var \Estudiante
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Estudiante")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="estudiantes_idestudiante", referencedColumnName="idestudiante")
     * })
     */
    private $estudianteIdestudiante;


}
