<?php
namespace MAM\RHBundle\Entity;

use Doctrine\ORM\Mapping AS ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass="AttestationRepository")
 */
class News
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     *
     * @Assert\NotBlank(message="Ce champ est obligatoire")
     * @Assert\Length(
     *      min = "5",
     *      max = "50",
     *      minMessage = "Ce champ doit faire au moins {{ limit }} caractères",
     *      maxMessage = "Ce champ ne peut pas être plus long que {{ limit }} caractères"
     * )
     *
     *
     */
    private $Libelle;

    /**
     * @ORM\Column(type="datetime", nullable=false)
     */
    private $created_at;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $discription;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->created_at = new \DateTime();
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
     * @return News
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
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return News
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;
    
        return $this;
    }

    /**
     * Get created_at
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set discription
     *
     * @param string $discription
     * @return News
     */
    public function setDiscription($discription)
    {
        $this->discription = $discription;
    
        return $this;
    }

    /**
     * Get discription
     *
     * @return string 
     */
    public function getDiscription()
    {
        return $this->discription;
    }
}
