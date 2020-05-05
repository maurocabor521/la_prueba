<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Grupos
 *
 * @ORM\Table(name="grupos", indexes={@ORM\Index(name="fk_grupo_docentes1_idx", columns={"docentes_iddocente"}), @ORM\Index(name="fk_grupos_cursos1_idx", columns={"cursos_idcurso"})})
 * @ORM\Entity
 */
class Grupo
{
    /**
     * @var int
     *
     * @ORM\Column(name="idgrupo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idgrupo;

    /**
     * @var string
     *
     * @ORM\Column(name="namegrupo", type="string", length=45, nullable=false)
     */
    private $namegrupo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var string
     *
     * @ORM\Column(name="active", type="string", length=45, nullable=false)
     */
    private $active;

    /**
     * @var \Docentes
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Docente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="docentes_iddocente", referencedColumnName="iddocente")
     * })
     */
    private $docenteIddocente;

    /**
     * @var \Cursos
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Curso")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cursos_idcurso", referencedColumnName="idcurso")
     * })
     */
    private $cursoIdcurso;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="App\Entity\Estudiante", inversedBy="grupoIdgrupo")
     * @ORM\JoinTable(name="grupos_has_estudiantes",
     *   joinColumns={
     *     @ORM\JoinColumn(name="grupos_idgrupo", referencedColumnName="idgrupo")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="estudiantes_idestudiante", referencedColumnName="idestudiante")
     *   }
     * )
     */
    private $estudianteIdestudiante;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->estudiantesIdestudiante = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
