<?php

namespace MAM\RHBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Testcandidat
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MAM\RHBundle\Entity\TestcandidatRepository")
 */
class Testcandidat
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="CIN", type="string", length=255)
     */
    private $cIN;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="Specialite", type="string", length=255)
     */
    private $specialite;

    /**
     * @var string
     *
     * @ORM\Column(name="Diplome", type="string", length=255)
     */
    private $diplome;

    /**
     * @var string
     *
     * @ORM\Column(name="Tel", type="string", length=255)
     */
    private $tel;

    /**
     * @ORM\OneToOne(targetEntity="MAM\RHBundle\Entity\CV",cascade={"persist","remove"})
     */
    private $cv;
    /**
     * @ORM\ManyToMany(targetEntity="Testoffre", mappedBy="testcandidats")
     */
    private $Testoffres;


   
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Testoffres = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set cIN
     *
     * @param string $cIN
     * @return Testcandidat
     */
    public function setCIN($cIN)
    {
        $this->cIN = $cIN;
    
        return $this;
    }

    /**
     * Get cIN
     *
     * @return string 
     */
    public function getCIN()
    {
        return $this->cIN;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Testcandidat
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Testcandidat
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    
        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Testcandidat
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
     * Set specialite
     *
     * @param string $specialite
     * @return Testcandidat
     */
    public function setSpecialite($specialite)
    {
        $this->specialite = $specialite;
    
        return $this;
    }

    /**
     * Get specialite
     *
     * @return string 
     */
    public function getSpecialite()
    {
        return $this->specialite;
    }

    /**
     * Set diplome
     *
     * @param string $diplome
     * @return Testcandidat
     */
    public function setDiplome($diplome)
    {
        $this->diplome = $diplome;
    
        return $this;
    }

    /**
     * Get diplome
     *
     * @return string 
     */
    public function getDiplome()
    {
        return $this->diplome;
    }

    /**
     * Set tel
     *
     * @param string $tel
     * @return Testcandidat
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    
        return $this;
    }

    /**
     * Get tel
     *
     * @return string 
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set cv
     *
     * @param \MAM\RHBundle\Entity\CV $cv
     * @return Testcandidat
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
     * Add Testoffres
     *
     * @param \MAM\RHBundle\Entity\Testoffre $testoffres
     * @return Testcandidat
     */
    public function addTestoffre(\MAM\RHBundle\Entity\Testoffre $testoffres)
    {
        $this->Testoffres[] = $testoffres;
    
        return $this;
    }

    /**
     * Remove Testoffres
     *
     * @param \MAM\RHBundle\Entity\Testoffre $testoffres
     */
    public function removeTestoffre(\MAM\RHBundle\Entity\Testoffre $testoffres)
    {
        $this->Testoffres->removeElement($testoffres);
    }

    /**
     * Get Testoffres
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTestoffres()
    {
        return $this->Testoffres;
    }
}
