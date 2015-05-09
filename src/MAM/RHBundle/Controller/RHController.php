<?php

namespace MAM\RHBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\Security\Core\SecurityContext;

use MAM\UserBundle\Entity\User;

use FOS\UserBundle\Mailer\TwigSwiftMailer;

use MAM\RHBundle\Entity\ResponsableRH;
use MAM\RHBundle\Entity\Employenormal;
use MAM\RHBundle\Entity\Attestation;
use MAM\RHBundle\Entity\Employe;
use MAM\RHBundle\Entity\ChefDepartement;
use MAM\RHBundle\Entity\Departement;

use MAM\RHBundle\Entity\Offre;
use MAM\RHBundle\Entity\Stagiaire;

use MAM\RHBundle\Form\EmployeType;
use MAM\RHBundle\Form\OffreType;
use MAM\RHBundle\Form\StagiaireType;


class RHController extends Controller
{
    public function AcceuilAction()
    {
        $id = $this->getUser()->getEmploye()->getId();
        return $this->render('MAMRHBundle:RH:Acceuil.html.twig',array( 'id' => $id));
    }
    public function ajoutemployeAction()
    {
        $employe = new Employenormal();
        $form = $this->createForm(new EmployeType(),$employe);
        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $form->submit($request);
            if ($form->isValid()) {
                $tokenGenerator = $this->container->get('fos_user.util.token_generator');
                $userManager = $this->container->get('fos_user.user_manager');
                $user = $userManager->createUser();

                $em = $this->getDoctrine()->getManager();
                $dep = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('MAMRHBundle:Departement')
                    ->find($employe->getDepartement()->getId());
                //if($dep instanceof Departement) var_dump($dep);

                $dep->addEmploye($employe);
                $user->setRoles(array('ROLE_EMP'));
                $employe->setMatricule(substr($tokenGenerator->generateToken(), 0, 6));
                $employe->setDateEmbauche(new \Datetime());
                $user->setEmail($employe->getEmail());
                $user->setUsername($employe->getEmail());
                $passhelp=substr($tokenGenerator->generateToken(), 0, 10);
                $user->setPlainPassword($passhelp);
                $user->setEnabled(true);
                $user->setEmploye($employe);
                $employe->setUser($user);
                //var_dump($employe);

                $em->persist($employe);
                $em->persist($user);


                if($this->confirmation($user,$passhelp)) $em->flush();
                else throw new AccessDeniedHttpException('Email non envoyer');


                $this->get('session')->getFlashBag()->add('info', 'Employé bien ajouté');
                //var_dump($user);

                return $this->redirect($this->generateUrl('mamrh_ajoutemploye'));
            }
        }
        $id = $this->getUser()->getEmploye()->getId();
        return $this->render('MAMRHBundle:RH:AjoutEmploye.html.twig',array('form' => $form->createView(),'id'=>$id));
    }

    public function ajoutoffreAction()
    {
        $id = $this->getUser()->getEmploye()->getId();
        $offre = new Offre();
        $form = $this->createForm(new OffreType(), $offre);
        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $form->submit($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($offre);
                $em->flush();
                $this->get('session')->getFlashBag()->add('info', 'Offre bien ajouté');

                return $this->render('MAMRHBundle:Default:index.html.twig',array('id'=>$id));
            }
        }
        return $this->render('MAMRHBundle:RH:AjoutOffre.html.twig',array('form' => $form->createView(),'id'=>$id));
    }
    public function getemployenormalAction()
    {
        $entities=$this->getDoctrine()
                ->getManager()
                ->getRepository('MAMRHBundle:Employenormal')
                ->getemployenormal();
        $id = $this->getUser()->getEmploye()->getId();
        return $this->render('MAMRHBundle:RH:AffichEmp.html.twig', array('entities' => $entities,'id'=>$id)
        );
    }
    public function ajoutstagiaireAction()
    {
        $id = $this->getUser()->getEmploye()->getId();
        $stagiaire = new Stagiaire();
        $form = $this->createForm(new StagiaireType(), $stagiaire);
        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $form->submit($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($stagiaire);
                $em->flush();
                $this->get('session')->getFlashBag()->add('info', 'Employé bien ajouté');
                return $this->render('MAMRHBundle:Default:index.html.twig',array('id'=>$id));
            }
        }
        return $this->render('MAMRHBundle:RH:AjoutStagiaire.html.twig',array('form' => $form->createView(),'id'=>$id));
    }

    public function getstagiaireAction()
    {
        $id = $this->getUser()->getEmploye()->getId();
        $entities=$this->getDoctrine()
            ->getManager()
            ->getRepository('MAMRHBundle:Stagiaire')
            ->getstagiaire();
        return $this->render('MAMRHBundle:RH:AfficheStagiaire.html.twig', array('entities' => $entities,'id'=>$id)
        );
    }

    private function confirmation(User $user, $password)
    {

        $message = \Swift_Message::newInstance()
            ->setSubject('Confirmation d\'inscription')
            ->setFrom('mamrh100@gmail.com')
            ->setTo($user->getemail())
            ->setBody($this->renderView('MAMRHBundle:Mail:ConfirmationEmail.txt.twig', array(
                'user' => $user,
                'password'=> $password)));

        return $this->get('mailer')->send($message);
    }


    public function demandeAction()
    {
        $id = $this->getUser()->getEmploye()->getId();
        $em = $this->getDoctrine()->getManager();
        $demandes=$em->getRepository('MAMRHBundle:Attestation')
            ->getrhdemandes();
        return $this->render('MAMRHBundle:RH:demande.html.twig',
            array('demandes'=> $demandes,'id'=>$id));
    }

    public function validdemandeAction($id){
        $em = $this->getDoctrine()->getManager();
        $dem  =  $em->getRepository('MAMRHBundle:Attestation')
            ->find($id);
        //var_dump($dem);
        $dem->setValide(true);
        //var_dump($dem);
        $em->persist($dem);
        $em->flush();
        //return $this->render('MAMRHBundle:Default:index.html.twig');
        return $this->redirect($this->generateUrl('mamrh_rh_demande'));
    }
}
