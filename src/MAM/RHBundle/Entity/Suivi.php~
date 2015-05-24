<?php
namespace MAM\RHBundle\Entity;

use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity(repositoryClass="SuiviRepository")
 */
class Suivi
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;



    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tache;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Descriptif;


    /**
     * @ORM\Column(type="datetime", nullable=false)
     */
    private $date_D_tache;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $date_F_tache;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $duree_tache;

    /**
     * @ORM\ManyToOne(targetEntity="Projet", inversedBy="suivis")
     * @ORM\JoinColumn(name="projet_id", referencedColumnName="id")
     */
    private $projet;

    /**
     * @ORM\ManyToOne(targetEntity="ChefProjet", inversedBy="suivis")
     *
     * @ORM\JoinColumn(name="Employenormal_id", referencedColumnName="id")
     *
     */
    private $chefprojet;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->date_D_tache = new \DateTime();
        $this->date_F_tache = new \DateTime();
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
     * Set tache
     *
     * @param string $tache
     * @return Suivi
     */
    public function setTache($tache)
    {
        $this->tache = $tache;
    
        return $this;
    }

    /**
     * Get tache
     *
     * @return string 
     */
    public function getTache()
    {
        return $this->tache;
    }

    /**
     * Set Descriptif
     *
     * @param string $descriptif
     * @return Suivi
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
     * Set date_D_tache
     *
     * @param \DateTime $dateDTache
     * @return Suivi
     */
    public function setDateDTache($dateDTache)
    {
        $this->date_D_tache = $dateDTache;
    
        return $this;
    }

    /**
     * Get date_D_tache
     *
     * @return \DateTime 
     */
    public function getDateDTache()
    {
        return $this->date_D_tache;
    }

    /**
     * Set date_F_tache
     *
     * @param \DateTime $dateFTache
     * @return Suivi
     */
    public function setDateFTache($dateFTache)
    {
        $this->date_F_tache = $dateFTache;
    
        return $this;
    }

    /**
     * Get date_F_tache
     *
     * @return \DateTime 
     */
    public function getDateFTache()
    {
        return $this->date_F_tache;
    }

    /**
     * Set duree_tache
     *
     * @param integer $dureeTache
     * @return Suivi
     */
    public function setDureeTache($dureeTache)
    {
        $this->duree_tache = $dureeTache;
    
        return $this;
    }

    /**
     * Get duree_tache
     *
     * @return integer 
     */
    public function getDureeTache()
    {
        return $this->duree_tache;
    }

    /**
     * Set projet
     *
     * @param \MAM\RHBundle\Entity\Projet $projet
     * @return Suivi
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

    /**
     * Set chefprojet
     *
     * @param \MAM\RHBundle\Entity\ChefProjet $chefprojet
     * @return Suivi
     */
    public function setChefprojet(\MAM\RHBundle\Entity\ChefProjet $chefprojet = null)
    {
        $this->chefprojet = $chefprojet;
    
        return $this;
    }

    /**
     * Get chefprojet
     *
     * @return \MAM\RHBundle\Entity\ChefProjet 
     */
    public function getChefprojet()
    {
        return $this->chefprojet;
    }
}
