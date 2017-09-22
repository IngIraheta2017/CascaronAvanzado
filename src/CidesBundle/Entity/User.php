<?php

namespace CidesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user", indexes={@ORM\Index(name="FK_Association_21", columns={"id_equipo"})})
 * @ORM\Entity
 */
class User
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombre_completo", type="string", length=254, nullable=false)
     */
    private $nombreCompleto;

    /**
     * @var string
     *
     * @ORM\Column(name="cargo_institucional", type="string", length=254, nullable=false)
     */
    private $cargoInstitucional;

    /**
     * @var string
     *
     * @ORM\Column(name="user_name", type="string", length=32, nullable=false)
     */
    private $userName;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=254, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=254, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="facultad_pertenece", type="string", length=254, nullable=false)
     */
    private $facultadPertenece;

    /**
     * @var string
     *
     * @ORM\Column(name="idioma", type="string", length=254, nullable=true)
     */
    private $idioma;

    /**
     * @var string
     *
     * @ORM\Column(name="preparacion_academica", type="string", length=254, nullable=true)
     */
    private $preparacionAcademica;

    /**
     * @var string
     *
     * @ORM\Column(name="capacitacion", type="string", length=254, nullable=true)
     */
    private $capacitacion;

    /**
     * @var string
     *
     * @ORM\Column(name="publicacion", type="text", nullable=true)
     */
    private $publicacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="is_agree", type="smallint", nullable=false)
     */
    private $isAgree;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="create_act", type="date", nullable=false)
     */
    private $createAct;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="update_act", type="date", nullable=false)
     */
    private $updateAct;

    /**
     * @var string
     *
     * @ORM\Column(name="ponencia", type="string", length=254, nullable=true)
     */
    private $ponencia;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_user", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUser;

    /**
     * @var \CidesBundle\Entity\Equipo
     *
     * @ORM\ManyToOne(targetEntity="CidesBundle\Entity\Equipo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_equipo", referencedColumnName="id_equipo")
     * })
     */
    private $idEquipo;



    /**
     * Set nombreCompleto
     *
     * @param string $nombreCompleto
     * @return User
     */
    public function setNombreCompleto($nombreCompleto)
    {
        $this->nombreCompleto = $nombreCompleto;

        return $this;
    }

    /**
     * Get nombreCompleto
     *
     * @return string 
     */
    public function getNombreCompleto()
    {
        return $this->nombreCompleto;
    }

    /**
     * Set cargoInstitucional
     *
     * @param string $cargoInstitucional
     * @return User
     */
    public function setCargoInstitucional($cargoInstitucional)
    {
        $this->cargoInstitucional = $cargoInstitucional;

        return $this;
    }

    /**
     * Get cargoInstitucional
     *
     * @return string 
     */
    public function getCargoInstitucional()
    {
        return $this->cargoInstitucional;
    }

    /**
     * Set userName
     *
     * @param string $userName
     * @return User
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * Get userName
     *
     * @return string 
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set facultadPertenece
     *
     * @param string $facultadPertenece
     * @return User
     */
    public function setFacultadPertenece($facultadPertenece)
    {
        $this->facultadPertenece = $facultadPertenece;

        return $this;
    }

    /**
     * Get facultadPertenece
     *
     * @return string 
     */
    public function getFacultadPertenece()
    {
        return $this->facultadPertenece;
    }

    /**
     * Set idioma
     *
     * @param string $idioma
     * @return User
     */
    public function setIdioma($idioma)
    {
        $this->idioma = $idioma;

        return $this;
    }

    /**
     * Get idioma
     *
     * @return string 
     */
    public function getIdioma()
    {
        return $this->idioma;
    }

    /**
     * Set preparacionAcademica
     *
     * @param string $preparacionAcademica
     * @return User
     */
    public function setPreparacionAcademica($preparacionAcademica)
    {
        $this->preparacionAcademica = $preparacionAcademica;

        return $this;
    }

    /**
     * Get preparacionAcademica
     *
     * @return string 
     */
    public function getPreparacionAcademica()
    {
        return $this->preparacionAcademica;
    }

    /**
     * Set capacitacion
     *
     * @param string $capacitacion
     * @return User
     */
    public function setCapacitacion($capacitacion)
    {
        $this->capacitacion = $capacitacion;

        return $this;
    }

    /**
     * Get capacitacion
     *
     * @return string 
     */
    public function getCapacitacion()
    {
        return $this->capacitacion;
    }

    /**
     * Set publicacion
     *
     * @param string $publicacion
     * @return User
     */
    public function setPublicacion($publicacion)
    {
        $this->publicacion = $publicacion;

        return $this;
    }

    /**
     * Get publicacion
     *
     * @return string 
     */
    public function getPublicacion()
    {
        return $this->publicacion;
    }

    /**
     * Set isAgree
     *
     * @param integer $isAgree
     * @return User
     */
    public function setIsAgree($isAgree)
    {
        $this->isAgree = $isAgree;

        return $this;
    }

    /**
     * Get isAgree
     *
     * @return integer 
     */
    public function getIsAgree()
    {
        return $this->isAgree;
    }

    /**
     * Set createAct
     *
     * @param \DateTime $createAct
     * @return User
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
     * @return User
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
     * Set ponencia
     *
     * @param string $ponencia
     * @return User
     */
    public function setPonencia($ponencia)
    {
        $this->ponencia = $ponencia;

        return $this;
    }

    /**
     * Get ponencia
     *
     * @return string 
     */
    public function getPonencia()
    {
        return $this->ponencia;
    }

    /**
     * Get idUser
     *
     * @return integer 
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set idEquipo
     *
     * @param \CidesBundle\Entity\Equipo $idEquipo
     * @return User
     */
    public function setIdEquipo(\CidesBundle\Entity\Equipo $idEquipo = null)
    {
        $this->idEquipo = $idEquipo;

        return $this;
    }

    /**
     * Get idEquipo
     *
     * @return \CidesBundle\Entity\Equipo 
     */
    public function getIdEquipo()
    {
        return $this->idEquipo;
    }
}
