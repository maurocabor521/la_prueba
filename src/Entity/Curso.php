<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cursos
 *
 * @ORM\Table(name="cursos", indexes={@ORM\Index(name="fk_cursos_Institucion1_idx", columns={"Institucion_idInstitucion"})})
 * @ORM\Entity
 */
class Curso
{
    /**
     * @var int
     *
     * @ORM\Column(name="idcurso", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcurso;

    /**
     * @var string
     *
     * @ORM\Column(name="namecurso", type="string", length=45, nullable=false)
     */
    private $namecurso;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="active", type="string", length=45, nullable=true)
     */
    private $active;

    /**
     * @var \Institucion
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Institucion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Institucion_idInstitucion", referencedColumnName="idInstitucion")
     * })
     */
    private $institucionIdinstitucion;


}
