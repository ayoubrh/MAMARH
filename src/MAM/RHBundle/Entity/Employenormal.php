<?php
namespace MAM\RHBundle\Entity;

use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity(repositoryClass="EmployenormalRepository")
 */
class Employenormal extends Employe
{
    /**
     * @ORM\OneToMany(targetEntity="Stagiaire", mappedBy="employeNormal")
     */
    private $stagiaire;

    /**
     * @ORM\ManyToOne(targetEntity="Projet", inversedBy="employeNormals")
     * @ORM\JoinColumn(name="projet_id", referencedColumnName="id")
     */
    private $projet;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->stagiaire = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add stagiaire
     *
     * @param \MAM\RHBundle\Entity\Stagiaire $stagiaire
     * @return Employenormal
     */
    public function addStagiaire(\MAM\RHBundle\Entity\Stagiaire $stagiaire)
    {
        $this->stagiaire[] = $stagiaire;

        return $this;
    }

    /**
     * Remove stagiaire
     *
     * @param \MAM\RHBundle\Entity\Stagiaire $stagiaire
     */
    public function removeStagiaire(\MAM\RHBundle\Entity\Stagiaire $stagiaire)
    {
        $this->stagiaire->removeElement($stagiaire);
    }

    /**
     * Get stagiaire
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getStagiaire()
    {
        return $this->stagiaire;
    }

    /**
     * Set projet
     *
     * @param \MAM\RHBundle\Entity\Projet $projet
     * @return Employenormal
     */
    public function setProjet(\MAM\RHBundle\Entity\Projet $projet = null)
    {
        $this->projet = $projet;

        return $this;
    }

    /**
     * Get projet
     *
     * @return \MAM\RHBundle\Entity\Projet 
     */
    public function getProjet()
    {
        return $this->projet;
    }


}
