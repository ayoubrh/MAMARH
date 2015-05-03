<?php
namespace MAM\RHBundle\Entity;

use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity(repositoryClass="ProjetRepository")
 */
class Projet
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $Libelle;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Descriptif;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Duree_estime;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $Date_deb;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $Date_fin;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Nbr_empl;

    /**
     * @ORM\OneToMany(targetEntity="Suivi", mappedBy="projet")
     */
    private $suivis;

    /**
     * @ORM\OneToMany(targetEntity="Employenormal", mappedBy="projet")
     */
    private $employeNormals;

    /**
     * @ORM\OneToOne(targetEntity="Employenormal")
     */
    private $help;

    /**
     * @ORM\ManyToOne(targetEntity="ChefDepartement", inversedBy="projets")
     * @ORM\JoinColumn(name="chefdepartement_id", referencedColumnName="id")
     */
    private $chefDepartement;

    /**
     * @ORM\ManyToOne(targetEntity="ChefProjet", inversedBy="projet",cascade={"persist"})
     * @ORM\JoinColumn(name="chefprojet_id", referencedColumnName="id", nullable=true)
     */
    private $chefProjet;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Date_deb = new \DateTime();
        $this->Date_fin = new \DateTime();
        $this->suivis = new \Doctrine\Common\Collections\ArrayCollection();
        $this->employeNormals = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Projet
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
     * Set Descriptif
     *
     * @param string $descriptif
     * @return Projet
     */
    public function setDescriptif($descriptif)
    {
        $this->Descriptif = $descriptif;
    
        return $this;
    }

    /**
     * Get Descriptif
     *
     * @return string 
     */
    public function getDescriptif()
    {
        return $this->Descriptif;
    }

    /**
     * Set Duree_estime
     *
     * @param integer $dureeEstime
     * @return Projet
     */
    public function setDureeEstime($dureeEstime)
    {
        $this->Duree_estime = $dureeEstime;
    
        return $this;
    }

    /**
     * Get Duree_estime
     *
     * @return integer 
     */
    public function getDureeEstime()
    {
        return $this->Duree_estime;
    }

    /**
     * Set Date_deb
     *
     * @param \DateTime $dateDeb
     * @return Projet
     */
    public function setDateDeb($dateDeb)
    {
        $this->Date_deb = $dateDeb;
    
        return $this;
    }

    /**
     * Get Date_deb
     *
     * @return \DateTime 
     */
    public function getDateDeb()
    {
        return $this->Date_deb;
    }

    /**
     * Set Date_fin
     *
     * @param \DateTime $dateFin
     * @return Projet
     */
    public function setDateFin($dateFin)
    {
        $this->Date_fin = $dateFin;
    
        return $this;
    }

    /**
     * Get Date_fin
     *
     * @return \DateTime 
     */
    public function getDateFin()
    {
        return $this->Date_fin;
    }

    /**
     * Set Nbr_empl
     *
     * @param integer $nbrEmpl
     * @return Projet
     */
    public function setNbrEmpl($nbrEmpl)
    {
        $this->Nbr_empl = $nbrEmpl;
    
        return $this;
    }

    /**
     * Get Nbr_empl
     *
     * @return integer 
     */
    public function getNbrEmpl()
    {
        return $this->Nbr_empl;
    }

    /**
     * Add suivis
     *
     * @param \MAM\RHBundle\Entity\Suivi $suivis
     * @return Projet
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
     * Add employeNormals
     *
     * @param \MAM\RHBundle\Entity\Employenormal $employeNormals
     * @return Projet
     */
    public function addEmployeNormal(\MAM\RHBundle\Entity\Employenormal $employeNormals)
    {
        $this->employeNormals[] = $employeNormals;
    
        return $this;
    }

    /**
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
     * Set help
     *
     * @param \MAM\RHBundle\Entity\Employenormal $help
     * @return Projet
     */
    public function setHelp(\MAM\RHBundle\Entity\Employenormal $help = null)
    {
        $this->help = $help;
    
        return $this;
    }

    /**
     * Get help
     *
     * @return \MAM\RHBundle\Entity\Employenormal 
     */
    public function getHelp()
    {
        return $this->help;
    }

    /**
     * Set chefDepartement
     *
     * @param \MAM\RHBundle\Entity\ChefDepartement $chefDepartement
     * @return Projet
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
     * Set chefProjet
     *
     * @param \MAM\RHBundle\Entity\ChefProjet $chefProjet
     * @return Projet
     */
    public function setChefProjet(\MAM\RHBundle\Entity\ChefProjet $chefProjet = null)
    {
        $this->chefProjet = $chefProjet;
    
        return $this;
    }

    /**
     * Get chefProjet
     *
     * @return \MAM\RHBundle\Entity\ChefProjet 
     */
    public function getChefProjet()
    {
        return $this->chefProjet;
    }
}
