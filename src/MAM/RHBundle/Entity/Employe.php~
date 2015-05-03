<?php
namespace MAM\RHBundle\Entity;

use Doctrine\ORM\Mapping AS ORM;

use MAM\UserBundle\Entity\User;

/**
 * @ORM\Entity(repositoryClass="EmployeRepository")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorMap(
 *     {
 *     "ChefDepartement"="ChefDepartement",
 *     "ChefProjet"="ChefProjet",
 *     "ResponsableRH"="ResponsableRH",
 *     "Employenormal"="Employenormal"
 * }
 * )
 */
class Employe
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
    private $matricule;

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
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Adresse;

    /**
     * @ORM\Column(type="string", unique=true, length=255, nullable=false)
     */
    private $email;

    /**
     * @ORM\Column(type="string", unique=true, length=255, nullable=false)
     */
    private $Tel;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Num_comptbanq;

    /**
     * @ORM\Column(type="string", unique=true, length=255, nullable=false)
     */
    private $Cnss;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Cimr;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $Type_contrat;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $Diplome;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $Formation;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $Fonction;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $Specialite;

    /**
     * @ORM\Column(type="datetime", nullable=false)
     */
    private $Date_embauche;

    /**
     * @ORM\Column(type="decimal", nullable=false)
     */
    private $Salaire;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $Date_bye;

    /**
     * @ORM\Column(type="boolean", nullable=true, options={"default" = false})
     */
    private $Bye;

    /**
     * @ORM\OneToOne(targetEntity="MAM\RHBundle\Entity\Image",cascade={"persist","remove"})
     */
    private $image;

    /**
     * @ORM\OneToOne(targetEntity="MAM\RHBundle\Entity\CV",cascade={"persist","remove"})
     */
    private $cv;

    /**
     * @ORM\ManyToOne(targetEntity="Departement", inversedBy="employes")
     * @ORM\JoinColumn(name="departement_id", referencedColumnName="id", nullable=false)
     */
    private $departement;

    /**
     * @ORM\OneToOne(targetEntity="MAM\UserBundle\Entity\User", inversedBy="employe",cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=true, onDelete="SET NULL")
     */
    private $user;

    /**
     * @ORM\OneToMany(targetEntity="Attestation", mappedBy="employe")
     */
    private $attestations;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Date_embauche = new \DateTime();
    }

    public function __toString() {
        return $this->Nom;
    }

    public function cast($to)
    {
        if ($to instanceof Employe) {
            $to->id = $this->id;
            $to->matricule = $this->matricule;
            $to->CIN = $this->CIN;
            $to->Nom = $this->Nom;
            $to->Prenom = $this->Prenom;
            $to->Adresse = $this->Adresse;
            $to->email = $this->email;
            $to->Tel = $this->Tel;
            $to->Num_comptbanq = $this->Num_comptbanq;
            $to->Cnss = $this->Cnss;
            $to->Cimr = $this->Cimr;
            $to->Type_contrat = $this->Type_contrat;
            $to->Diplome = $this->Diplome;
            $to->Formation = $this->Formation;
            $to->Fonction = $this->Fonction;
            $to->Specialite = $this->Specialite;
            $to->Date_embauche = $this->Date_embauche;
            $to->Salaire = $this->Salaire;
            $to->Date_bye = $this->Date_bye;
            $to->Bye = $this->Bye;
            $to->image = $this->image;
            $to->cv = $this->cv;
            $to->departement = $this->departement;
        }
        else throw(new Exception('cant cast ' . get_class($this) . ' to ' . get_class($to)));
        return $to;
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
     * Set matricule
     *
     * @param string $matricule
     * @return Employe
     */
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;
    
        return $this;
    }

    /**
     * Get matricule
     *
     * @return string 
     */
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set CIN
     *
     * @param string $cIN
     * @return Employe
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
     * @return Employe
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
     * @return Employe
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
     * @return Employe
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
     * Set email
     *
     * @param string $email
     * @return Employe
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set Tel
     *
     * @param string $tel
     * @return Employe
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
     * Set Num_comptbanq
     *
     * @param string $numComptbanq
     * @return Employe
     */
    public function setNumComptbanq($numComptbanq)
    {
        $this->Num_comptbanq = $numComptbanq;
    
        return $this;
    }

    /**
     * Get Num_comptbanq
     *
     * @return string 
     */
    public function getNumComptbanq()
    {
        return $this->Num_comptbanq;
    }

    /**
     * Set Cnss
     *
     * @param string $cnss
     * @return Employe
     */
    public function setCnss($cnss)
    {
        $this->Cnss = $cnss;
    
        return $this;
    }

    /**
     * Get Cnss
     *
     * @return string 
     */
    public function getCnss()
    {
        return $this->Cnss;
    }

    /**
     * Set Cimr
     *
     * @param string $cimr
     * @return Employe
     */
    public function setCimr($cimr)
    {
        $this->Cimr = $cimr;
    
        return $this;
    }

    /**
     * Get Cimr
     *
     * @return string 
     */
    public function getCimr()
    {
        return $this->Cimr;
    }

    /**
     * Set Type_contrat
     *
     * @param string $typeContrat
     * @return Employe
     */
    public function setTypeContrat($typeContrat)
    {
        $this->Type_contrat = $typeContrat;
    
        return $this;
    }

    /**
     * Get Type_contrat
     *
     * @return string 
     */
    public function getTypeContrat()
    {
        return $this->Type_contrat;
    }

    /**
     * Set Diplome
     *
     * @param string $diplome
     * @return Employe
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
     * Set Formation
     *
     * @param string $formation
     * @return Employe
     */
    public function setFormation($formation)
    {
        $this->Formation = $formation;
    
        return $this;
    }

    /**
     * Get Formation
     *
     * @return string 
     */
    public function getFormation()
    {
        return $this->Formation;
    }

    /**
     * Set Fonction
     *
     * @param string $fonction
     * @return Employe
     */
    public function setFonction($fonction)
    {
        $this->Fonction = $fonction;
    
        return $this;
    }

    /**
     * Get Fonction
     *
     * @return string 
     */
    public function getFonction()
    {
        return $this->Fonction;
    }

    /**
     * Set Specialite
     *
     * @param string $specialite
     * @return Employe
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
     * Set Date_embauche
     *
     * @param \DateTime $dateEmbauche
     * @return Employe
     */
    public function setDateEmbauche($dateEmbauche)
    {
        $this->Date_embauche = $dateEmbauche;
    
        return $this;
    }

    /**
     * Get Date_embauche
     *
     * @return \DateTime 
     */
    public function getDateEmbauche()
    {
        return $this->Date_embauche;
    }

    /**
     * Set Salaire
     *
     * @param string $salaire
     * @return Employe
     */
    public function setSalaire($salaire)
    {
        $this->Salaire = $salaire;
    
        return $this;
    }

    /**
     * Get Salaire
     *
     * @return string 
     */
    public function getSalaire()
    {
        return $this->Salaire;
    }

    /**
     * Set Date_bye
     *
     * @param \DateTime $dateBye
     * @return Employe
     */
    public function setDateBye($dateBye)
    {
        $this->Date_bye = $dateBye;
    
        return $this;
    }

    /**
     * Get Date_bye
     *
     * @return \DateTime 
     */
    public function getDateBye()
    {
        return $this->Date_bye;
    }

    /**
     * Set Bye
     *
     * @param boolean $bye
     * @return Employe
     */
    public function setBye($bye)
    {
        $this->Bye = $bye;
    
        return $this;
    }

    /**
     * Get Bye
     *
     * @return boolean 
     */
    public function getBye()
    {
        return $this->Bye;
    }

    /**
     * Set image
     *
     * @param \MAM\RHBundle\Entity\Image $image
     * @return Employe
     */
    public function setImage(\MAM\RHBundle\Entity\Image $image = null)
    {
        $this->image = $image;
    
        return $this;
    }

    /**
     * Get image
     *
     * @return \MAM\RHBundle\Entity\Image 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set cv
     *
     * @param \MAM\RHBundle\Entity\CV $cv
     * @return Employe
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
     * Set departement
     *
     * @param \MAM\RHBundle\Entity\Departement $departement
     * @return Employe
     */
    public function setDepartement(\MAM\RHBundle\Entity\Departement $departement)
    {
        $this->departement = $departement;
    
        return $this;
    }

    /**
     * Get departement
     *
     * @return \MAM\RHBundle\Entity\Departement 
     */
    public function getDepartement()
    {
        return $this->departement;
    }

    /**
     * Set user
     *
     * @param \MAM\UserBundle\Entity\User $user
     * @return Employe
     */
    public function setUser(\MAM\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return \MAM\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Add attestations
     *
     * @param \MAM\RHBundle\Entity\Attestation $attestations
     * @return Employe
     */
    public function addAttestation(\MAM\RHBundle\Entity\Attestation $attestations)
    {
        $this->attestations[] = $attestations;
    
        return $this;
    }

    /**
     * Remove attestations
     *
     * @param \MAM\RHBundle\Entity\Attestation $attestations
     */
    public function removeAttestation(\MAM\RHBundle\Entity\Attestation $attestations)
    {
        $this->attestations->removeElement($attestations);
    }

    /**
     * Get attestations
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAttestations()
    {
        return $this->attestations;
    }
}
