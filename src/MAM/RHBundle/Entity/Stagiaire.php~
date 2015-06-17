<?php
namespace MAM\RHBundle\Entity;

use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity(repositoryClass="StagiaireRepository")
 */
class Stagiaire
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
    private $Adresse;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $Tel;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $Etablissement;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $Niveau_scol;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $Diplome;

    /**
     * @ORM\OneToOne(targetEntity="MAM\RHBundle\Entity\CV",cascade={"persist","remove"})
     */
    private $Cv;

    /**
     * @ORM\Column(type="date", nullable=false)
     */
    private $date_deb;

    /**
     * @ORM\Column(type="date", nullable=false)
     */
    private $date_fin;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $duree;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $sujet;

    /**
     * @ORM\ManyToOne(targetEntity="Employenormal", inversedBy="stagiaire")
     * @ORM\JoinColumn(name="Employenormal_id", referencedColumnName="id")
     */
    private $employeNormal;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->date_deb = new \DateTime();
        $this->date_fin = new \DateTime();
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
     * @return Stagiaire
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
     * @return Stagiaire
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
     * @return Stagiaire
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
     * Set Adresse
     *
     * @param string $adresse
     * @return Stagiaire
     */
    public function setAdresse($adresse)
    {
        $this->Adresse = $adresse;

        return $this;
    }

    /**
     * Get Adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->Adresse;
    }

    /**
     * Set Tel
     *
     * @param string $tel
     * @return Stagiaire
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
     * Set Etablissement
     *
     * @param string $etablissement
     * @return Stagiaire
     */
    public function setEtablissement($etablissement)
    {
        $this->Etablissement = $etablissement;

        return $this;
    }

    /**
     * Get Etablissement
     *
     * @return string 
     */
    public function getEtablissement()
    {
        return $this->Etablissement;
    }

    /**
     * Set Niveau_scol
     *
     * @param string $niveauScol
     * @return Stagiaire
     */
    public function setNiveauScol($niveauScol)
    {
        $this->Niveau_scol = $niveauScol;

        return $this;
    }

    /**
     * Get Niveau_scol
     *
     * @return string 
     */
    public function getNiveauScol()
    {
        return $this->Niveau_scol;
    }

    /**
     * Set Diplome
     *
     * @param string $diplome
     * @return Stagiaire
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
     * Set date_deb
     *
     * @param \DateTime $dateDeb
     * @return Stagiaire
     */
    public function setDateDeb($dateDeb)
    {
        $this->date_deb = $dateDeb;

        return $this;
    }

    /**
     * Get date_deb
     *
     * @return \DateTime 
     */
    public function getDateDeb()
    {
        return $this->date_deb;
    }

    /**
     * Set date_fin
     *
     * @param \DateTime $dateFin
     * @return Stagiaire
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
     * Set duree
     *
     * @param integer $duree
     * @return Stagiaire
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return integer 
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set sujet
     *
     * @param string $sujet
     * @return Stagiaire
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
     * Set employeNormal
     *
     * @param \MAM\RHBundle\Entity\Employenormal $employeNormal
     * @return Stagiaire
     */
    public function setEmployeNormal(\MAM\RHBundle\Entity\Employenormal $employeNormal = null)
    {
        $this->employeNormal = $employeNormal;

        return $this;
    }

    /**
     * Get employeNormal
     *
     * @return \MAM\RHBundle\Entity\Employenormal 
     */
    public function getEmployeNormal()
    {
        return $this->employeNormal;
    }

    /**
     * Set Cv
     *
     * @param \MAM\RHBundle\Entity\CV $cv
     * @return Stagiaire
     */
    public function setCv(\MAM\RHBundle\Entity\CV $cv = null)
    {
        $this->Cv = $cv;
    
        return $this;
    }

    /**
     * Get Cv
     *
     * @return \MAM\RHBundle\Entity\CV 
     */
    public function getCv()
    {
        return $this->Cv;
    }
}
