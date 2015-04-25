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
                $projet->setChefDepartement($chefdep);
                //$emp=$projet->getEmployeNormals();
                $help=$projet->getHelp();
                $user=$help->getUser();
                $user->setRoles(array('ROLE_CHEF_PROJET'));
                $chefprojet = new ChefProjet();
                $user=new User();
                $user=$help->getUser();
                $chefprojet = $help->cast($chefprojet);
                $this->Help($help);
                $user->setEmploye($chefprojet);
                $projet->setChefProjet($chefprojet);
                //$query = "UPDATE employe SET dtype = 'ChefProjet' WHERE id=".$help->getId();
                //$em->getConnection()->exec($query);
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
                $em->persist($chefprojet);
                $em->persist($user);
                $em->persist($projet);
                $em->flush();
                $this->get('session')->getFlashBag()->add('info', 'Projet bien ajouté');
                return $this->render('MAMRHBundle:Default:index.html.twig');
            }
        }
        return $this->render('MAMRHBundle:Projet:AjoutProjet.html.twig',array(
            'form' => $form->createView(),));
    }

    public function Help(Employenormal $emp){
        $em = $this->getDoctrine()->getManager();
        $user=$emp->getUser();
        $em->remove($user);
        $em->remove($emp);
        $em->flush();

    }

    public function AjoutSuiviAction()
    {
        $suivi = new Suivi();
        $form = $this->createForm(new SuiviType(), $suivi);
        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $form->submit($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($suivi);
                $em->flush();
                $this->get('session')->getFlashBag()->add('info', 'Nouvelle tache est bien ajoutée');
                return $this->render('MAMRHBundle:Projet:AjoutSuivi.html.twig');
            }
        }
        return $this->render('MAMRHBundle:Projet:AjoutSuivi.html.twig',array(
            'form' => $form->createView(),));
    }

    public function VoirProfilAction()
    {

        return $this->render('MAMRHBundle:Projet:VoirProfil.html.twig');
    }

    public function ListeProjetAction()
    {

        return $this->render('MAMRHBundle:Projet:ListeProjet.html.twig');
    }


    public function ModifiProfilAction()
    {
        $employe = new Employe();
        $form = $this->createForm(new EmployeType(), $employe);
        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $form->submit($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($employe);
                $em->flush();
                $this->get('session')->getFlashBag()->add('info', 'Profil modifié');
                return $this->render('MAMRHBundle:Projet:ModifiProfil.html.twig');
            }
        }
        return $this->render('MAMRHBundle:Projet:ModifiProfil.html.twig');
    }

}