<?php

namespace MAM\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MAM\UserBundle\Entity\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToOne(targetEntity="MAM\RHBundle\Entity\Employe", mappedBy="user", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=true, onDelete="SET NULL")
     */
    private $employe;

    public function __construct()
    {
        parent::__construct();
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
     * Set employe
     *
     * @param \MAM\RHBundle\Entity\Employe $employe
     * @return User
     */
    public function setEmploye(\MAM\RHBundle\Entity\Employe $employe = null)
    {
        $this->employe = $employe;
    
        return $this;
    }

    /**
     * Get employe
     *
     * @return \MAM\RHBundle\Entity\Employe 
     */
    public function getEmploye()
    {
        return $this->employe;
    }
}
