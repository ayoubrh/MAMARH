<?php
namespace MAM\RHBundle\Entity;

use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity(repositoryClass="ResponsableRHRepository")
 */
class ResponsableRH extends Employe
{
    /**
     * @ORM\OneToMany(targetEntity="Attestation", mappedBy="responsableRH")
     */
    private $attestations2;

    /**
     * @ORM\OneToMany(targetEntity="Offre", mappedBy="responsableRH")
     */
    private $offres;

    /**
     * @ORM\OneToOne(targetEntity="Reunion", inversedBy="responsableRHs")
     * @ORM\JoinColumn(name="reunion_id", referencedColumnName="id")
     */
    private $reunion2;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->attestations2 = new \Doctrine\Common\Collections\ArrayCollection();
        $this->offres = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add attestations2
     *
     * @param \MAM\RHBundle\Entity\Attestation $attestations2
     * @return ResponsableRH
     */
    public function addAttestations2(\MAM\RHBundle\Entity\Attestation $attestations2)
    {
        $this->attestations2[] = $attestations2;

        return $this;
    }

    /**
     * Remove attestations2
     *
     * @param \MAM\RHBundle\Entity\Attestation $attestations2
     */
    public function removeAttestations2(\MAM\RHBundle\Entity\Attestation $attestations2)
    {
        $this->attestations2->removeElement($attestations2);
    }

    /**
     * Get attestations2
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAttestations2()
    {
        return $this->attestations2;
    }

    /**
     * Add offres
     *
     * @param \MAM\RHBundle\Entity\Offre $offres
     * @return ResponsableRH
     */
    public function addOffre(\MAM\RHBundle\Entity\Offre $offres)
    {
        $this->offres[] = $offres;

        return $this;
    }

    /**
     * Remove offres
     *
     * @param \MAM\RHBundle\Entity\Offre $offres
     */
    public function removeOffre(\MAM\RHBundle\Entity\Offre $offres)
    {
        $this->offres->removeElement($offres);
    }

    /**
     * Get offres
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOffres()
    {
        return $this->offres;
    }

    /**
     * Set reunion2
     *
     * @param \MAM\RHBundle\Entity\Reunion $reunion2
     * @return ResponsableRH
     */
    public function setReunion2(\MAM\RHBundle\Entity\Reunion $reunion2 = null)
    {
        $this->reunion2 = $reunion2;

        return $this;
    }

    /**
     * Get reunion2
     *
     * @return \MAM\RHBundle\Entity\Reunion 
     */
    public function getReunion2()
    {
        return $this->reunion2;
    }
}
