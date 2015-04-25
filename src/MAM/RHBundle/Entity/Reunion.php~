<?php
namespace MAM\RHBundle\Entity;

use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity(repositoryClass="ReunionRepository")
 */
class Reunion
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime", nullable=false)
     */
    private $date_debut;

    /**
     * @ORM\Column(type="datetime", nullable=false)
     */
    private $date_fin;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $sujet;

    /**
     * @ORM\OneToOne(targetEntity="ChefDepartement", mappedBy="reunion")
     */
    private $chefDepartement;

    /**
     * @ORM\OneToOne(targetEntity="ChefProjet", mappedBy="reunion1")
     *
     */
    private $chefprojet;

    /**
     * @ORM\OneToOne(targetEntity="ResponsableRH", mappedBy="reunion2")
     */
    private $responsableRH;



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
     * Set date_debut
     *
     * @param \DateTime $dateDebut
     * @return Reunion
     */
    public function setDateDebut($dateDebut)
    {
        $this->date_debut = $dateDebut;
    
        return $this;
    }

    /**
     * Get date_debut
     *
     * @return \DateTime 
     */
    public function getDateDebut()
    {
        return $this->date_debut;
    }

    /**
     * Set date_fin
     *
     * @param \DateTime $dateFin
     * @return Reunion
     */
    public function setDateFin($dateFin)
    {
        $this->date_fin = $dateFin;
    
        return $this;
    }

    /**
     * Get date_fin
     *
     * @return \DateTime 
     */
    public function getDateFin()
    {
        return $this->date_fin;
    }

    /**
     * Set sujet
     *
     * @param string $sujet
     * @return Reunion
     */
    public function setSujet($sujet)
    {
        $this->sujet = $sujet;
    
        return $this;
    }

    /**
     * Get sujet
     *
     * @return string 
     */
    public function getSujet()
    {
        return $this->sujet;
    }

    /**
     * Set chefDepartement
     *
     * @param \MAM\RHBundle\Entity\ChefDepartement $chefDepartement
     * @return Reunion
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

     * Add employeNormals
     *
     * @param \MAM\RHBundle\Entity\Employenormal $employeNormals
     * @return Reunion
     */
    public function addEmployeNormal(\MAM\RHBundle\Entity\Employenormal $employeNormals)
    {
        $this->employeNormals[] = $employeNormals;
    }

    public function setChefprojet(\MAM\RHBundle\Entity\ChefProjet $chefprojet = null)
    {
        $this->chefprojet = $chefprojet;

    
        return $this;
    }

    /**
<<<<<<< HEAD
     * Remove employeNormals
     *
     * @param \MAM\RHBundle\Entity\Employenormal $employeNormals
     */
    public function removeEmployeNormal(\MAM\RHBundle\Entity\Employenormal $employeNormals)
    {
        $this->employeNormals->removeElement($employeNormals);
    }

    /**
     * Get employeNormals
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEmployeNormals()
    {
        return $this->employeNormals;
    }

    /**
     * Add responsableRHs
     *
     * @param \MAM\RHBundle\Entity\ResponsableRH $responsableRHs
     * @return Reunion
     */
    public function addResponsableRH(\MAM\RHBundle\Entity\ResponsableRH $responsableRHs)
    {
        $this->responsableRHs[] = $responsableRHs;
    }
    public function getChefprojet()
    {
        return $this->chefprojet;
    }

    /**
     * Set responsableRH
     *
     * @param \MAM\RHBundle\Entity\ResponsableRH $responsableRH
     * @return Reunion
     */
    public function setResponsableRH(\MAM\RHBundle\Entity\ResponsableRH $responsableRH = null)
    {
        $this->responsableRH = $responsableRH;

    
        return $this;
    }

    /**

     * Remove responsableRHs
     *
     * @param \MAM\RHBundle\Entity\ResponsableRH $responsableRHs
     */
    public function removeResponsableRH(\MAM\RHBundle\Entity\ResponsableRH $responsableRHs)
    {
        $this->responsableRHs->removeElement($responsableRHs);
    }

    /**
     * Get responsableRHs

     *
     * @return \MAM\RHBundle\Entity\ResponsableRH 
     */

    public function getResponsableRH()
    {
        return $this->responsableRH;

    }
}
