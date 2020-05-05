<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Institucion
 *
 * @ORM\Table(name="institucion", indexes={@ORM\Index(name="fk_Institucion_Administrador1_idx", columns={"Administrador_idAdministrador"})})
 * @ORM\Entity
 */
class Institucion
{
    /**
     * @var int
     *
     * @ORM\Column(name="idInstitucion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idinstitucion;

    /**
     * @var string
     *
     * @ORM\Column(name="nameInstitucion", type="string", length=45, nullable=false)
     */
    private $nameinstitucion;

    /**
     * @var \Administrador
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="App\Entity\Administrador")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Administrador_idAdministrador", referencedColumnName="idAdministrador")
     * })
     */
    private $administradorIdadministrador;


}
