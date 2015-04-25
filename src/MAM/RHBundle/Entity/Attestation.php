<?php
namespace MAM\RHBundle\Entity;

use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity(repositoryClass="AttestationRepository")
 */
class Attestation
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
     * @ORM\Column(type="datetime", nullable=false)
     */
    private $Date_DEM;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $priorite;

    /**
     * @ORM\Column(type="boolean", nullable=true, options={"default" = false})
     */
    private $valide;

    /**
     * @ORM\ManyToOne(targetEntity="ResponsableRH", inversedBy="attestations2")
     * @ORM\JoinColumn(name="responsableRH_id", referencedColumnName="id", nullable=true)
     */
    private $responsableRH;

    /**
     * @ORM\ManyToMany(targetEntity="Employe", inversedBy="attestations")
     * @ORM\JoinTable(
     *     name="Attestation_Employe",
     *     joinColumns={@ORM\JoinColumn(name="attestation_id", referencedColumnName="id", nullable=true)},
     *     inverseJoinColumns={@ORM\JoinColumn(name="employe_id", referencedColumnName="id", nullable=true)}
     * )
     */
    private $employes;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Date_DEM = new \DateTime();
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
     * @return Attestation
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
     * Set Date_DEM
     *
     * @param \DateTime $dateDEM
     * @return Attestation
     */
    public function setDateDEM($dateDEM)
    {
        $this->Date_DEM = $dateDEM;
    
        return $this;
    }

    /**
     * Get Date_DEM
     *
     * @return \DateTime 
     */
    public function getDateDEM()
    {
        return $this->Date_DEM;
    }

    /**
     * Set priorite
     *
     * @param string $priorite
     * @return Attestation
     */
    public function setPriorite($priorite)
    {
        $this->priorite = $priorite;
    
        return $this;
    }

    /**
     * Get priorite
     *
     * @return string 
     */
    public function getPriorite()
    {
        return $this->priorite;
    }

    /**
     * Set valide
     *
     * @param boolean $valide
     * @return Attestation
     */
    public function setValide($valide)
    {
        $this->valide = $valide;
    
        return $this;
    }

    /**
     * Get valide
     *
     * @return boolean 
     */
    public function getValide()
    {
        return $this->valide;
    }


    /**
     * Set responsableRH
     *
     * @param \MAM\RHBundle\Entity\ResponsableRH $responsableRH
     * @return Attestation
     */
    public function setResponsableRH(\MAM\RHBundle\Entity\ResponsableRH $responsableRH = null)
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
     * Add employes
     *
     * @param \MAM\RHBundle\Entity\Employe $employes
     * @return Attestation
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
