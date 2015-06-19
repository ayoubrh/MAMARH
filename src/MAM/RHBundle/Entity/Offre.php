<?php
namespace MAM\RHBundle\Entity;

use Doctrine\ORM\Mapping AS ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass="OffreRepository")
 */
class Offre
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
    private $libelle;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $descriptif;

    /**
     * @var string
     *
     * @ORM\Column(name="typeoffre", type="string", length=255)
     */
    private $typeoffre;

    /**
     * @ORM\ManyToOne(targetEntity="ResponsableRH", inversedBy="offres")
     * @ORM\JoinColumn(name="responsableRH_id", referencedColumnName="id", nullable=false)
     */
    private $responsableRH;

    /**
     * @ORM\ManyToMany(targetEntity="Candidat", mappedBy="offre")
     */
    private $candidats;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->candidats = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set libelle
     *
     * @param string $libelle
     * @return Offre
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    
        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set descriptif
     *
     * @param string $descriptif
     * @return Offre
     */
    public function setDescriptif($descriptif)
    {
        $this->descriptif = $descriptif;
    
        return $this;
    }

    /**
     * Get descriptif
     *
     * @return string 
     */
    public function getDescriptif()
    {
        return $this->descriptif;
    }

    /**
     * Set typeoffre
     *
     * @param string $typeoffre
     * @return Offre
     */
    public function setTypeoffre($typeoffre)
    {
        $this->typeoffre = $typeoffre;
    
        return $this;
    }

    /**
     * Get typeoffre
     *
     * @return string 
     */
    public function getTypeoffre()
    {
        return $this->typeoffre;
    }

    /**
     * Set responsableRH
     *
     * @param \MAM\RHBundle\Entity\ResponsableRH $responsableRH
     * @return Offre
     */
    public function setResponsableRH(\MAM\RHBundle\Entity\ResponsableRH $responsableRH)
    {
        $this->responsableRH = $responsableRH;
    
        return $this;
    }

    /**
     * Get responsableRH
     *
     * @return \MAM\RHBundle\Entity\ResponsableRH 
     */
    public function getResponsableRH()
    {
        return $this->responsableRH;
    }

    /**
     * Add candidats
     *
     * @param \MAM\RHBundle\Entity\Candidat $candidats
     * @return Offre
     */
    public function addCandidat(\MAM\RHBundle\Entity\Candidat $candidats)
    {
        $this->candidats[] = $candidats;
    
        return $this;
    }

    /**
     * Remove candidats
     *
     * @param \MAM\RHBundle\Entity\Candidat $candidats
     */
    public function removeCandidat(\MAM\RHBundle\Entity\Candidat $candidats)
    {
        $this->candidats->removeElement($candidats);
    }

    /**
     * Get candidats
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCandidats()
    {
        return $this->candidats;
    }
}
