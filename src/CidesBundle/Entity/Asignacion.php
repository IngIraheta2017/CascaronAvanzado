<?php

namespace CidesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Asignacion
 *
 * @ORM\Table(name="asignacion", indexes={@ORM\Index(name="FK_Association_13", columns={"id_rol"}), @ORM\Index(name="FK_Association_19", columns={"id_proyecto"}), @ORM\Index(name="FK_Association_20", columns={"id_user"})})
 * @ORM\Entity
 */
class Asignacion
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="create_act", type="date", nullable=true)
     */
    private $createAct;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_asignacion", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAsignacion;

    /**
     * @var \CidesBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="CidesBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id_user")
     * })
     */
    private $idUser;

    /**
     * @var \CidesBundle\Entity\Proyecto
     *
     * @ORM\ManyToOne(targetEntity="CidesBundle\Entity\Proyecto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_proyecto", referencedColumnName="id_proyecto")
     * })
     */
    private $idProyecto;

    /**
     * @var \CidesBundle\Entity\Rol
     *
     * @ORM\ManyToOne(targetEntity="CidesBundle\Entity\Rol")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_rol", referencedColumnName="id_rol")
     * })
     */
    private $idRol;



    /**
     * Set createAct
     *
     * @param \DateTime $createAct
     * @return Asignacion
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
     * Get idAsignacion
     *
     * @return integer 
     */
    public function getIdAsignacion()
    {
        return $this->idAsignacion;
    }

    /**
     * Set idUser
     *
     * @param \CidesBundle\Entity\User $idUser
     * @return Asignacion
     */
    public function setIdUser(\CidesBundle\Entity\User $idUser = null)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return \CidesBundle\Entity\User 
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set idProyecto
     *
     * @param \CidesBundle\Entity\Proyecto $idProyecto
     * @return Asignacion
     */
    public function setIdProyecto(\CidesBundle\Entity\Proyecto $idProyecto = null)
    {
        $this->idProyecto = $idProyecto;

        return $this;
    }

    /**
     * Get idProyecto
     *
     * @return \CidesBundle\Entity\Proyecto 
     */
    public function getIdProyecto()
    {
        return $this->idProyecto;
    }

    /**
     * Set idRol
     *
     * @param \CidesBundle\Entity\Rol $idRol
     * @return Asignacion
     */
    public function setIdRol(\CidesBundle\Entity\Rol $idRol = null)
    {
        $this->idRol = $idRol;

        return $this;
    }

    /**
     * Get idRol
     *
     * @return \CidesBundle\Entity\Rol 
     */
    public function getIdRol()
    {
        return $this->idRol;
    }
}
