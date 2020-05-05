<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Administrador
 *
 * @ORM\Table(name="administrador")
 * @ORM\Entity
 */
class Administrador
{
    /**
     * @var int
     *
     * @ORM\Column(name="idAdministrador", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idadministrador;

    /**
     * @var string
     *
     * @ORM\Column(name="nameAdmin", type="string", length=45, nullable=false)
     */
    private $nameadmin;

    /**
     * @var string
     *
     * @ORM\Column(name="surnameAdmin", type="string", length=45, nullable=false)
     */
    private $surnameadmin;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=45, nullable=false)
     */
    private $codigo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=45, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="active", type="string", length=45, nullable=false)
     */
    private $active;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image", type="string", length=45, nullable=true)
     */
    private $image;



    /**
     * Get the value of idadministrador
     *
     * @return  int
     */
    public function getIdadministrador()
    {
        return $this->idadministrador;
    }

    /**
     * Set the value of idadministrador
     *
     * @param   int  $idadministrador  
     *
     * @return  self
     */
    public function setIdadministrador(int $idadministrador)
    {
        $this->idadministrador = $idadministrador;

        return $this;
    }

    /**
     * Get the value of nameadmin
     *
     * @return  string
     */
    public function getNameadmin()
    {
        return $this->nameadmin;
    }

    /**
     * Set the value of nameadmin
     *
     * @param   string  $nameadmin  
     *
     * @return  self
     */
    public function setNameadmin(string $nameadmin)
    {
        $this->nameadmin = $nameadmin;

        return $this;
    }
}
