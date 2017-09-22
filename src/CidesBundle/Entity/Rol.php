<?php

namespace CidesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rol
 *
 * @ORM\Table(name="rol")
 * @ORM\Entity
 */
class Rol
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombre_rol", type="string", length=254, nullable=false)
     */
    private $nombreRol;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="create_act", type="date", nullable=true)
     */
    private $createAct;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="update_act", type="date", nullable=true)
     */
    private $updateAct;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_rol", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRol;



    /**
     * Set nombreRol
     *
     * @param string $nombreRol
     * @return Rol
     */
    public function setNombreRol($nombreRol)
    {
        $this->nombreRol = $nombreRol;

        return $this;
    }

    /**
     * Get nombreRol
     *
     * @return string 
     */
    public function getNombreRol()
    {
        return $this->nombreRol;
    }

    /**
     * Set createAct
     *
     * @param \DateTime $createAct
     * @return Rol
     */
    public function setCreateAct($createAct)
    {
        $this->createAct = $createAct;

        return $this;
    }

    /**
     * Get createAct
     *
     * @return \DateTime 
     */
    public function getCreateAct()
    {
        return $this->createAct;
    }

    /**
     * Set updateAct
     *
     * @param \DateTime $updateAct
     * @return Rol
     */
    public function setUpdateAct($updateAct)
    {
        $this->updateAct = $updateAct;

        return $this;
    }

    /**
     * Get updateAct
     *
     * @return \DateTime 
     */
    public function getUpdateAct()
    {
        return $this->updateAct;
    }

    /**
     * Get idRol
     *
     * @return integer 
     */
    public function getIdRol()
    {
        return $this->idRol;
    }
}
