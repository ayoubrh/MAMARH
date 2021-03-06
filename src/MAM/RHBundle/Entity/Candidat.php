<?php
namespace MAM\RHBundle\Entity;

use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity(repositoryClass="CandidatRepository")
 */
class Candidat
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
    private $CIN;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $Nom;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $Prenom;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $Email;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $Specialite;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $Diplome;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $Tel;

    
    /**
     * @ORM\OneToOne(targetEntity="MAM\RHBundle\Entity\CV",cascade={"persist","remove"})
     */
    private $cv;



    /**
     * @ORM\ManyToOne(targetEntity="Offre", inversedBy="Candidats")
     * @ORM\JoinColumn(name="offre_id", referencedColumnName="id", nullable=false)
     */
    private $offre;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->offres = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set CIN
     *
     * @param string $cIN
     * @return Candidat
     */
    public function setCIN($cIN)
    {
        $this->CIN = $cIN;
    
        return $this;
    }

    /**
     * Get CIN
     *
     * @return string 
     */
    public function getCIN()
    {
        return $this->CIN;
    }

    /**
     * Set Nom
     *
     * @param string $nom
     * @return Candidat
     */
    public function setNom($nom)
    {
        $this->Nom = $nom;
    
        return $this;
    }

    /**
     * Get Nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->Nom;
    }

    /**
     * Set Prenom
     *
     * @param string $prenom
     * @return Candidat
     */
    public function setPrenom($prenom)
    {
        $this->Prenom = $prenom;
    
        return $this;
    }

    /**
     * Get Prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->Prenom;
    }

    /**
     * Set Email
     *
     * @param string $email
     * @return Candidat
     */
    public function setEmail($email)
    {
        $this->Email = $email;
    
        return $this;
    }

    /**
     * Get Email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * Set Specialite
     *
     * @param string $specialite
     * @return Candidat
     */
    public function setSpecialite($specialite)
    {
        $this->Specialite = $specialite;
    
        return $this;
    }

    /**
     * Get Specialite
     *
     * @return string 
     */
    public function getSpecialite()
    {
        return $this->Specialite;
    }

    /**
     * Set Diplome
     *
     * @param string $diplome
     * @return Candidat
     */
    public function setDiplome($diplome)
    {
        $this->Diplome = $diplome;
    
        return $this;
    }

    /**
     * Get Diplome
     *
     * @return string 
     */
    public function getDiplome()
    {
        return $this->Diplome;
    }

    /**
     * Set Tel
     *
     * @param string $tel
     * @return Candidat
     */
    public function setTel($tel)
    {
        $this->Tel = $tel;
    
        return $this;
    }

    /**
     * Get Tel
     *
     * @return string 
     */
    public function getTel()
    {
        return $this->Tel;
    }

    /**
     * Set cv
     *
     * @param \MAM\RHBundle\Entity\CV $cv
     * @return Candidat
     */
    public function setCv(\MAM\RHBundle\Entity\CV $cv = null)
    {
        $this->cv = $cv;
    
        return $this;
    }

    /**
     * Get cv
     *
     * @return \MAM\RHBundle\Entity\CV 
     */
    public function getCv()
    {
        return $this->cv;
    }

    /**
     * Set offre
     *
     * @param \MAM\RHBundle\Entity\Offre $offre
     * @return Candidat
     */
    public function setOffre(\MAM\RHBundle\Entity\Offre $offre)
    {
        $this->offre = $offre;
    
        return $this;
    }

    /**
     * Get offre
     *
     * @return \MAM\RHBundle\Entity\Offre 
     */
    public function getOffre()
    {
        return $this->offre;
    }
}
