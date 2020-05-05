<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estudiantes
 *
 * @ORM\Table(name="estudiantes")
 * @ORM\Entity
 */
class Estudiante
{
    /**
     * @var int
     *
     * @ORM\Column(name="idestudiante", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idestudiante;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=45, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="surname", type="string", length=45, nullable=false)
     */
    private $surname;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=45, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="nick", type="string", length=45, nullable=false)
     */
    private $nick;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bio", type="string", length=45, nullable=true)
     */
    private $bio;

    /**
     * @var string
     *
     * @ORM\Column(name="active", type="string", length=45, nullable=false)
     */
    private $active;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=45, nullable=false)
     */
    private $image;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="App\Entity\Grupo", mappedBy="estudianteIdestudiante")
     */
    private $grupoIdgrupo;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="estudiantes")
     */
    private $user;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->gruposIdgrupo = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
