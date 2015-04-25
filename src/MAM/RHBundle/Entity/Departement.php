<?php
namespace MAM\RHBundle\Entity;

use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity(repositoryClass="DepartementRepository")
 */
class Departement
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", unique=true, length=255, nullable=false)
     */
    private $Libelle;

    /**
     * @ORM\OneToOne(targetEntity="ChefDepartement", mappedBy="departement2")
     */
    private $chefDepartement;

    /**
     * @ORM\OneToMany(targetEntity="Employe", mappedBy="departement")
     */
    private $employes;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->employes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Libelle
     *
     * @param string $libelle
     * @return Departement
     */
    public function setLibelle($libelle)
    {
        $this->Libelle = $libelle;

        return $this;
    }

    /**
     * Get Libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->Libelle;
    }


    /**
     * Set chefDepartement
     *
     * @param \MAM\RHBundle\Entity\ChefDepartement $chefDepartement
     * @return Departement
     */
    public function setChefDepartement(\MAM\RHBundle\Entity\ChefDepartement $chefDepartement = null)
    {
        $this->chefDepartement = $chefDepartement;

        return $this;
    }

    /**
     * Get chefDepartement
     *
     * @return \MAM\RHBundle\Entity\ChefDepartement
     */
    public function getChefDepartement()
    {
        return $this->chefDepartement;
    }

    /**
     * Add employes
     *
     * @param \MAM\RHBundle\Entity\Employe $employes
     * @return Departement
     */
    public function addEmploye(\MAM\RHBundle\Entity\Employe $employes)
    {
        $this->employes[] = $employes;

        return $this;
    }

    /**
     * Remove employes
     *
     * @param \MAM\RHBundle\Entity\Employe $employes
     */
    public function removeEmploye(\MAM\RHBundle\Entity\Employe $employes)
    {
        $this->employes->removeElement($employes);
    }

    /**
     * Get employes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEmployes()
    {
        return $this->employes;
    }
}
