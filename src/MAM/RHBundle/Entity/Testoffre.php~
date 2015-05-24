<?php

namespace MAM\RHBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Testoffre
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MAM\RHBundle\Entity\TestoffreRepository")
 */
class Testoffre
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
     * @ORM\Column(name="libelle", type="text")
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptif", type="text")
     */
    private $descriptif;

    /**
     * @var string
     *
     * @ORM\Column(name="typeoffre", type="string", length=255)
     */
    private $typeoffre;

    /**
     * @var integer
     *
     * @ORM\Column(name="responsbleRH_id", type="integer")
     */
    private $responsbleRHId;
     
    /**
     * @ORM\ManyToMany(targetEntity="Testcandidat", inversedBy="testoffres")
     * @ORM\JoinTable(
     *     name="Testpostuler",
     *     joinColumns={@ORM\JoinColumn(name="offre_id", referencedColumnName="id", nullable=false)},
     *     inverseJoinColumns={@ORM\JoinColumn(name="candidat_id", referencedColumnName="id", nullable=false)}
     * )
     */
    private $testcandidats;

    /**
     * Get id
     *
     * @return integer 
     */
   
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->testcandidats = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Testoffre
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
     * @return Testoffre
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
     * @return Testoffre
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
     * Set responsbleRHId
     *
     * @param integer $responsbleRHId
     * @return Testoffre
     */
    public function setResponsbleRHId($responsbleRHId)
    {
        $this->responsbleRHId = $responsbleRHId;
    
        return $this;
    }

    /**
     * Get responsbleRHId
     *
     * @return integer 
     */
    public function getResponsbleRHId()
    {
        return $this->responsbleRHId;
    }

    /**
     * Add testcandidats
     *
     * @param \MAM\RHBundle\Entity\Testcandidat $testcandidats
     * @return Testoffre
     */
    public function addTestcandidat(\MAM\RHBundle\Entity\Testcandidat $testcandidats)
    {
        $this->testcandidats[] = $testcandidats;
    
        return $this;
    }

    /**
     * Remove testcandidats
     *
     * @param \MAM\RHBundle\Entity\Testcandidat $testcandidats
     */
    public function removeTestcandidat(\MAM\RHBundle\Entity\Testcandidat $testcandidats)
    {
        $this->testcandidats->removeElement($testcandidats);
    }

    /**
     * Get testcandidats
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTestcandidats()
    {
        return $this->testcandidats;
    }
}
