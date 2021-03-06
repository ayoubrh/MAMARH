<?php
namespace MAM\RHBundle\Entity;

use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity(repositoryClass="ChefProjetRepository")
 */
class ChefProjet extends Employe
{
    /**
     * @ORM\OneToMany(targetEntity="Projet", mappedBy="chefProjet")
     */
    private $projet;

    /**
     * @ORM\OneToMany(targetEntity="Suivi", mappedBy="chefProjet")
     */
    private $suivis;

    /**
     * @ORM\OneToOne(targetEntity="Reunion", inversedBy="chefProjets")
     * @ORM\JoinColumn(name="reunion_id", referencedColumnName="id")
     */
    private $reunion1;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->projet = new \Doctrine\Common\Collections\ArrayCollection();
        $this->suivis = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add projet
     *
     * @param \MAM\RHBundle\Entity\Projet $projet
     * @return ChefProjet
     */
    public function addProjet(\MAM\RHBundle\Entity\Projet $projet)
    {
        $this->projet[] = $projet;
    
        return $this;
    }

    /**
     * Remove projet
     *
     * @param \MAM\RHBundle\Entity\Projet $projet
     */
    public function removeProjet(\MAM\RHBundle\Entity\Projet $projet)
    {
        $this->projet->removeElement($projet);
    }

    /**
     * Get projet
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProjet()
    {
        return $this->projet;
    }

    /**
     * Add suivis
     *
     * @param \MAM\RHBundle\Entity\Suivi $suivis
     * @return ChefProjet
     */
    public function addSuivi(\MAM\RHBundle\Entity\Suivi $suivis)
    {
        $this->suivis[] = $suivis;
    
        return $this;
    }

    /**
     * Remove suivis
     *
     * @param \MAM\RHBundle\Entity\Suivi $suivis
     */
    public function removeSuivi(\MAM\RHBundle\Entity\Suivi $suivis)
    {
        $this->suivis->removeElement($suivis);
    }

    /**
     * Get suivis
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSuivis()
    {
        return $this->suivis;
    }

    /**
     * Set reunion1
     *
     * @param \MAM\RHBundle\Entity\Reunion $reunion1
     * @return ChefProjet
     */
    public function setReunion1(\MAM\RHBundle\Entity\Reunion $reunion1 = null)
    {
        $this->reunion1 = $reunion1;
    
        return $this;
    }

    /**
     * Get reunion1
     *
     * @return \MAM\RHBundle\Entity\Reunion 
     */
    public function getReunion1()
    {
        return $this->reunion1;
    }
}
