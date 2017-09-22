<?php

namespace CidesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Menuitem
 *
 * @ORM\Table(name="menuItem", indexes={@ORM\Index(name="FK_Association_16", columns={"men_id_menuItem"})})
 * @ORM\Entity
 */
class Menuitem
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombre_menu", type="string", length=254, nullable=true)
     */
    private $nombreMenu;

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
     * @var boolean
     *
     * @ORM\Column(name="is_active", type="boolean", nullable=true)
     */
    private $isActive;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_menuItem", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMenuitem;

    /**
     * @var \CidesBundle\Entity\Menuitem
     *
     * @ORM\ManyToOne(targetEntity="CidesBundle\Entity\Menuitem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="men_id_menuItem", referencedColumnName="id_menuItem")
     * })
     */
    private $menMenuitem;



    /**
     * Set nombreMenu
     *
     * @param string $nombreMenu
     * @return Menuitem
     */
    public function setNombreMenu($nombreMenu)
    {
        $this->nombreMenu = $nombreMenu;

        return $this;
    }

    /**
     * Get nombreMenu
     *
     * @return string
     */
    public function getNombreMenu()
    {
        return $this->nombreMenu;
    }

    /**
     * Set createAct
     *
     * @param \DateTime $createAct
     * @return Menuitem
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
     * @return Menuitem
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
     * Set isActive
     *
     * @param boolean $isActive
     * @return Menuitem
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Get idMenuitem
     *
     * @return integer
     */
    public function getIdMenuitem()
    {
        return $this->idMenuitem;
    }

    /**
     * Set menMenuitem
     *
     * @param \CidesBundle\Entity\Menuitem $menMenuitem
     * @return Menuitem
     */
      public function setMenMenuitem(\CidesBundle\Entity\Menuitem $menMenuitem = null)
    {
        $this->menMenuitem = $menMenuitem;

        return $this;
    }

    /**
     * Get menMenuitem
     *
     * @return \CidesBundle\Entity\Menuitem
     */
    public function getMenMenuitem()
    {
        return $this->menMenuitem;
    }
}
