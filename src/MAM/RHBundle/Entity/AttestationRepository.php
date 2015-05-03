<?php

namespace MAM\RHBundle\Entity;

use Doctrine\ORM\EntityRepository;
use MAM\UserBundle\Entity\User;

/**
 * AttestationRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AttestationRepository extends EntityRepository
{
    public function getdemandes(User $user){

        $demandes = $this->createQueryBuilder('d')
            // On joint sur l'attribut image
            ->leftJoin('d.employe', 'e')
            ->addSelect('e')
            // On joint sur l'attribut categories
            ->leftJoin('e.user', 'u')
            ->addSelect('u')
            ->where('u.id = :user')
            ->setParameter('user', $user->getId())
            ->getQuery()
            ->getResult();

        return $demandes;
    }

    public function getrhdemandes(){

        $demandes = $this->createQueryBuilder('d')
            ->where('d.valide = :v')
            ->setParameter('v', false)
            ->getQuery()
            ->getResult();

        return $demandes;
    }

    public function getnbrdemande(User $user){
        $nbrdemande = $this->createQueryBuilder('d')
            ->select('COUNT(DISTINCT d.id)')
            ->where('d.valide = :v')
            ->setParameter('v', false)
            ->leftJoin('d.employe', 'e')
            ->leftJoin('e.user', 'u')
            ->where('u.id = :user')
            ->setParameter('user', $user->getId())
            ->getQuery()
            ->getResult();
        return $nbrdemande;
    }
}
