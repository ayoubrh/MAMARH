<?php
namespace MAM\RHBundle\Entity;

use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity(repositoryClass="ChefDepartementRepository")
 */
class ChefDepartement extends Employe
{
    /**
     * @ORM\OneToOne(targetEntity="Departement", inversedBy="chefDepartement")
     * @ORM\JoinColumn(name="departement_id", referencedColumnName="id", nullable=false, unique=false)
     */
    private $departement2;

    /**
     * @ORM\OneToMany(targetEntity="Projet", mappedBy="chefDepartement")
     */
    private $projets;

    /**
     * @ORM\OneToOne(targetEntity="Reunion", inversedBy="chefDepartements")
     * @ORM\JoinColumn(name="reunion_id", referencedColumnName="id")
     */
    private $reunion;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->projets = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set departement2
     *
     * @param \MAM\RHBundle\Entity\Departement $departement2
     * @return ChefDepartement
     */
    public function setDepartement2(\MAM\RHBundle\Entity\Departement $departement2)
    {
        $this->departement2 = $departement2;

        return $this;
    }

    /**
     * Get departement2
     *
     * @return \MAM\RHBundle\Entity\Departement 
     */
    public function getDepartement2()
    {
        return $this->departement2;
    }

    /**
     * Add projets
     *
     * @param \MAM\RHBundle\Entity\Projet $projets
     * @return ChefDepartement
     */
    public function addProjet(\MAM\RHBundle\Entity\Projet $projets)
    {
        $this->projets[] = $projets;

        return $this;
    }

    /**
     * Remove projets
     *
     * @param \MAM\RHBundle\Entity\Projet $projets
     */
    public function removeProjet(\MAM\RHBundle\Entity\Projet $projets)
    {
        $this->projets->removeElement($projets);
    }

    /**
     * Get projets
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProjets()
    {
        return $this->projets;
    }

    /**
     * Set reunion
     *
     * @param \MAM\RHBundle\Entity\Reunion $reunion
     * @return ChefDepartement
     */
    public function setReunion(\MAM\RHBundle\Entity\Reunion $reunion = null)
    {
        $this->reunion = $reunion;

        return $this;
    }

    /**
     * Get reunion
     *
     * @return \MAM\RHBundle\Entity\Reunion 
     */
    public function getReunion()
    {
        return $this->reunion;
    }
}
