<?php

namespace MAM\RHBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


use MAM\RHBundle\Entity\Employe;
use MAM\RHBundle\Entity\Projet;
use MAM\RHBundle\Entity\Suivi;
use MAM\RHBundle\Entity\ChefProjet;
use MAM\UserBundle\Entity\User;
use MAM\RHBundle\Entity\Employenormal;


use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Model\UserInterface;


use MAM\RHBundle\Form\EmployeType;
use MAM\RHBundle\Form\ProjetType;
use MAM\RHBundle\Form\SuiviType;

class ProjetController extends Controller
{
    public function AjoutProjetAction()
    {
        $projet = new Projet();
        $form = $this->createForm(new ProjetType(), $projet);
        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $form->submit($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $chefdep=$this->getUser()->getEmploye();
                //$projet->setChefDepartement($chefdep);
                //$emp=$projet->getEmployeNormals();
                $help=$projet->getHelp();
                $projet->setHelp(null);
                $user=$help->getUser();
                $user->setRoles(array('ROLE_CHEF_PROJET'));
                //$chefprojet = new ChefProjet();
                //$user=new User();
                //$user=$help->getUser();
                //$chefprojet = $help->cast($chefprojet);
                //$this->Help($help);
                //$user->setEmploye($chefprojet);
                //$projet->setChefProjet($chefprojet);

                //var_dump($projet);

                /*if($chefprojet instanceof ChefProjet){
                    $projet->setChefProjet($chefprojet);
                    $user=$help->getUser();
                    $user->setEmploye($chefprojet);
                    $help->setMatricule('a');
                    //var_dump($help);
                    $em->persist($help);
                    $em->remove($help);
                    $em->flush();

                }*/
                //$chefprojet=$em->getRepository('MAMRHBundle:Employenormal')->updatediscrim($help,'ChefProjet');
                //var_dump($help);
                //var_dump($emp);
                /*$chefprojet = new ChefProjet();
                $chefprojet = $help->cast($chefprojet);
                if($chefprojet instanceof ChefProjet) {
                   // $help=$em->getRepository('MAMRHBundle:Departement')
                    //    ->find($projet->getChefProjet()->getId());
                    var_dump($chefprojet);
                    $em->remove($help);
                    $em->flush();
                }*/
                //$em->persist($chefprojet);
                $em->persist($user);
                $em->persist($projet);
                $em->flush();
                $query = "UPDATE employe SET dtype = 'ChefProjet' WHERE id=".$help->getId();
                $em->getConnection()->exec($query);
                $query1 = "UPDATE projet SET chefprojet_id = ".$help->getId()." WHERE id=".$projet->getId();
                $em->getConnection()->exec($query1);
                $this->get('session')->getFlashBag()->add('info', 'Projet bien ajouté');
                return $this->redirect($this->generateUrl('mamrh_AjoutProjet'));
            }
        }
        return $this->render('MAMRHBundle:Projet:AjoutProjet.html.twig',array(
            'form' => $form->createView(),));
    }


    public function AjoutSuiviAction($id)
    {
        $suivi = new Suivi();
        $form = $this->createForm(new SuiviType(), $suivi);
        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $form->submit($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $proj = $em->getRepository('MAMRHBundle:Projet')->find($id);
                $proj->addSuivi($suivi);
                $suivi->setProjet($proj);
                $chefp = $this->getUser()->getEmploye();
                $suivi->setChefprojet($chefp);
                $suivi->setDureeTache($suivi->getDateFTache()->diff($suivi->getDateDTache())->format("%a"));
                var_dump($suivi->getDureeTache());
                $em->persist($suivi);
                $em->flush();
                $this->get('session')->getFlashBag()->add('info', 'Nouvelle tache est bien ajoutée');
                return $this->redirect($this->generateUrl('mamrh_ajoutemploye'));
            }
        }
        return $this->render('MAMRHBundle:Projet:AjoutSuivi.html.twig',array(
            'form' => $form->createView(),));
    }

    public function VoirProfilAction($id)
    {
        $emp = $this->getDoctrine()->getManager()->getRepository('MAMRHBundle:Employe')->find($id);
        if($emp->getUser->getEnabled() == false) $emp->getUser->setEnabled(true);
        return $this->render('MAMRHBundle:Projet:VoirProfil.html.twig',array('profil'=>$emp));
    }

    public function ListeProjetAction()
    {
        $em = $this->getDoctrine()->getManager();
        $projets = $em->getRepository('MAMRHBundle:Projet')
            ->getprojetdep($this->getUser());
        $demandenonv = $em->getRepository('MAMRHBundle:Attestation')
            ->getnbrdemandenonV($this->getUser());

        $demandev = $em->getRepository('MAMRHBundle:Attestation')
            ->getnbrdemandeV($this->getUser());

        $nbrprojet = $em->getRepository('MAMRHBundle:Projet')
            ->getnbrprojet($this->getUser());

        $nbrstagiaire = $em->getRepository('MAMRHBundle:Stagiaire')
            ->getnbrprojet($this->getUser());

        return $this->render('MAMRHBundle:Projet:ListeProjet.html.twig',
            array('projets'=> $projets,
                'demandenonv'=>$demandenonv[0][1],
                'demandev'=>$demandev[0][1],
                'nbrprojet'=>$nbrprojet[0][1],
                'nbrstagiaire'=>$nbrstagiaire[0][1],));
    }


    public function ModifProfilAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $employe = $em->getRpository('MAMRHBundle:Employe')->find($id);
        $form = $this->createForm(new EmployeType(), $employe);
        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $form->submit($request);
            if ($form->isValid()) {
                $em->persist($employe);
                $em->flush();
                $this->get('session')->getFlashBag()->add('info', 'Profil modifié');
                return $this->render('MAMRHBundle:Projet:ModifiProfil.html.twig');
            }
        }
        return $this->redirect($this->generateUrl('mamrh_VoirProfil'));
    }


    public function ListsuiviAction($id){
        $em = $this->getDoctrine()->getManager();
        $suivis=$em->getRepository('MAMRHBundle:Suivi')
            ->getsuivis($id);
        $demandenonv = $em->getRepository('MAMRHBundle:Attestation')
            ->getnbrdemandenonV($this->getUser());

        $demandev = $em->getRepository('MAMRHBundle:Attestation')
            ->getnbrdemandeV($this->getUser());

        $nbrprojet = $em->getRepository('MAMRHBundle:Projet')
            ->getnbrprojet($this->getUser());

        $nbrstagiaire = $em->getRepository('MAMRHBundle:Stagiaire')
            ->getnbrprojet($this->getUser());

        return $this->render('MAMRHBundle:Projet:Listsuivi.html.twig',
            array('suivis'=> $suivis,
                'demandenonv'=>$demandenonv[0][1],
                'demandev'=>$demandev[0][1],
                'nbrprojet'=>$nbrprojet[0][1],
                'nbrstagiaire'=>$nbrstagiaire[0][1],));
    }

}