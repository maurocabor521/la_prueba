<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Docentes
 *
 * @ORM\Table(name="docentes")
 * @ORM\Entity
 */
class Docente
{
    /**
     * @var int
     *
     * @ORM\Column(name="iddocente", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddocente;

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
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="docentes")
     */
    private $user;


}
