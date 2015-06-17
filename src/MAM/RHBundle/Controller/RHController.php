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

        $em = $this->getDoctrine()->getManager();

        $demandenonv = $em->getRepository('MAMRHBundle:Attestation')
            ->getnbrdemandenonV($this->getUser());

        $demandev = $em->getRepository('MAMRHBundle:Attestation')
            ->getnbrdemandeV($this->getUser());

        $nbrprojet = $em->getRepository('MAMRHBundle:Projet')
            ->getnbrprojet($this->getUser());

        $nbrstagiaire = $em->getRepository('MAMRHBundle:Stagiaire')
            ->getnbrprojet($this->getUser());

        return $this->render('MAMRHBundle:RH:Acceuil.html.twig',array(
            'demandenonv'=>$demandenonv[0][1],
            'demandev'=>$demandev[0][1],
            'nbrprojet'=>$nbrprojet[0][1],
            'nbrstagiaire'=>$nbrstagiaire[0][1],'id' => $id));
    }
    public function ajoutemployeAction()
    {
        $employe = new Employenormal();
        $form = $this->createForm(new EmployeType(),$employe);
        $request = $this->get('request');

        $em = $this->getDoctrine()->getManager();

        $demandenonv = $em->getRepository('MAMRHBundle:Attestation')
            ->getnbrdemandenonV($this->getUser());

        $demandev = $em->getRepository('MAMRHBundle:Attestation')
            ->getnbrdemandeV($this->getUser());

        $nbrprojet = $em->getRepository('MAMRHBundle:Projet')
            ->getnbrprojet($this->getUser());

        $nbrstagiaire = $em->getRepository('MAMRHBundle:Stagiaire')
            ->getnbrprojet($this->getUser());

        if ($request->getMethod() == 'POST') {
            $form->submit($request);
            if ($form->isValid()) {
                $tokenGenerator = $this->container->get('fos_user.util.token_generator');
                $userManager = $this->container->get('fos_user.user_manager');
                $user = $userManager->createUser();

                $dep = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('MAMRHBundle:Departement')
                    ->find($employe->getDepartement()->getId());
                //if($dep instanceof Departement) var_dump($dep);

                $dep->addEmploye($employe);
                $user->setRoles(array('ROLE_EMP'));
                $employe->setMatricule(substr($tokenGenerator->generateToken(), 0, 6));
                $employe->setDateEmbauche(new \Datetime());
                $employe->setBye(false);
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
        return $this->render('MAMRHBundle:RH:AjoutEmploye.html.twig',array('form' => $form->createView(),
            'demandenonv'=>$demandenonv[0][1],
            'demandev'=>$demandev[0][1],
            'nbrprojet'=>$nbrprojet[0][1],
            'nbrstagiaire'=>$nbrstagiaire[0][1],'id'=>$id));
    }

    public function ajoutoffreAction()
    {
        $id = $this->getUser()->getEmploye()->getId();
        $offre = new Offre();
        $form = $this->createForm(new OffreType(), $offre);
        $request = $this->get('request');

        $em = $this->getDoctrine()->getManager();

        $demandenonv = $em->getRepository('MAMRHBundle:Attestation')
            ->getnbrdemandenonV($this->getUser());

        $demandev = $em->getRepository('MAMRHBundle:Attestation')
            ->getnbrdemandeV($this->getUser());

        $nbrprojet = $em->getRepository('MAMRHBundle:Projet')
            ->getnbrprojet($this->getUser());

        $nbrstagiaire = $em->getRepository('MAMRHBundle:Stagiaire')
            ->getnbrprojet($this->getUser());

        if ($request->getMethod() == 'POST') {
            $form->submit($request);
            if ($form->isValid()) {

                $em->persist($offre);
                $em->flush();
                $this->get('session')->getFlashBag()->add('info', 'Offre bien ajouté');

                return $this->render('MAMRHBundle:Default:index.html.twig',array('id'=>$id));
            }
        }
        return $this->render('MAMRHBundle:RH:AjoutOffre.html.twig',array('form' => $form->createView(),
            'demandenonv'=>$demandenonv[0][1],
            'demandev'=>$demandev[0][1],
            'nbrprojet'=>$nbrprojet[0][1],
            'nbrstagiaire'=>$nbrstagiaire[0][1],'id'=>$id));
    }
    public function getemployenormalAction()
    {
        $em = $this->getDoctrine()->getManager();
        $entities=$this->getDoctrine()
                ->getManager()
                ->getRepository('MAMRHBundle:Employe')
                ->getemployenormal();
        $i = 0;
        //var_dump($entities);
        $e = array();
        foreach($entities as $en){
            //$query = "SELECT dtype FROM employe WHERE id=".$e->getId();
            //$dtype[$i] = $em->getConnection()->exec($query);

            $connection = $em->getConnection();
            $statement = $connection->prepare("SELECT dtype FROM employe WHERE id = :id");
            $statement->bindValue('id', $en->getId());
            $statement->execute();
            $dtype[$i] = $statement->fetchAll();

            //array_push($e,$dtype[$i],$en);

            $i++;
        }
        //var_dump($e);
        //var_dump($dtype[0][0]['dtype']);

        $id = $this->getUser()->getEmploye()->getId();

        $demandenonv = $em->getRepository('MAMRHBundle:Attestation')
            ->getnbrdemandenonV($this->getUser());

        $demandev = $em->getRepository('MAMRHBundle:Attestation')
            ->getnbrdemandeV($this->getUser());

        $nbrprojet = $em->getRepository('MAMRHBundle:Projet')
            ->getnbrprojet($this->getUser());

        $nbrstagiaire = $em->getRepository('MAMRHBundle:Stagiaire')
            ->getnbrprojet($this->getUser());

        return $this->render('MAMRHBundle:RH:AffichEmp.html.twig', array('entities' => $entities, 'dtype' => $dtype,
                'demandenonv'=>$demandenonv[0][1],
                'demandev'=>$demandev[0][1],
                'nbrprojet'=>$nbrprojet[0][1],
                'nbrstagiaire'=>$nbrstagiaire[0][1],'id'=>$id)
        );
    }



    public function archiveemployeAction()
    {
        $em = $this->getDoctrine()->getManager();
        $entities=$this->getDoctrine()
            ->getManager()
            ->getRepository('MAMRHBundle:Employe')
            ->getarchiveemploye();
        //var_dump($entities);
        $i = 0;
        $dtype[] = array();
        //var_dump($entities);
        $e = array();
        foreach($entities as $en){
            //$query = "SELECT dtype FROM employe WHERE id=".$e->getId();
            //$dtype[$i] = $em->getConnection()->exec($query);

            $connection = $em->getConnection();
            $statement = $connection->prepare("SELECT dtype FROM employe WHERE id = :id");
            $statement->bindValue('id', $en->getId());
            $statement->execute();
            $dtype[$i] = $statement->fetchAll();

            //array_push($e,$dtype[$i],$en);

            $i++;
        }
        //var_dump($e);
        //var_dump($dtype[0][0]['dtype']);

        $id = $this->getUser()->getEmploye()->getId();

        $demandenonv = $em->getRepository('MAMRHBundle:Attestation')
            ->getnbrdemandenonV($this->getUser());

        $demandev = $em->getRepository('MAMRHBundle:Attestation')
            ->getnbrdemandeV($this->getUser());

        $nbrprojet = $em->getRepository('MAMRHBundle:Projet')
            ->getnbrprojet($this->getUser());

        $nbrstagiaire = $em->getRepository('MAMRHBundle:Stagiaire')
            ->getnbrprojet($this->getUser());

        return $this->render('MAMRHBundle:RH:ArchiveEmp.html.twig', array('entities' => $entities, 'dtype' => $dtype,
                'demandenonv'=>$demandenonv[0][1],
                'demandev'=>$demandev[0][1],
                'nbrprojet'=>$nbrprojet[0][1],
                'nbrstagiaire'=>$nbrstagiaire[0][1],'id'=>$id)
        );
    }


    public function ajoutstagiaireAction()
    {
        $id = $this->getUser()->getEmploye()->getId();
        $stagiaire = new Stagiaire();
        $form = $this->createForm(new StagiaireType(), $stagiaire);
        $request = $this->get('request');

        $em = $this->getDoctrine()->getManager();

        $demandenonv = $em->getRepository('MAMRHBundle:Attestation')
            ->getnbrdemandenonV($this->getUser());

        $demandev = $em->getRepository('MAMRHBundle:Attestation')
            ->getnbrdemandeV($this->getUser());

        $nbrprojet = $em->getRepository('MAMRHBundle:Projet')
            ->getnbrprojet($this->getUser());

        $nbrstagiaire = $em->getRepository('MAMRHBundle:Stagiaire')
            ->getnbrprojet($this->getUser());

        if ($request->getMethod() == 'POST') {
            $form->submit($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($stagiaire);
                $em->flush();
                $this->get('session')->getFlashBag()->add('info', 'Employé bien ajouté');
                return $this->render('MAMRHBundle:RH:Acceuil.html.twig',array(
                    'demandenonv'=>$demandenonv[0][1],
                    'demandev'=>$demandev[0][1],
                    'nbrprojet'=>$nbrprojet[0][1],
                    'nbrstagiaire'=>$nbrstagiaire[0][1],'id'=>$id));
            }
        }
        return $this->render('MAMRHBundle:RH:AjoutStagiaire.html.twig',array('form' => $form->createView(),
            'demandenonv'=>$demandenonv[0][1],
            'demandev'=>$demandev[0][1],
            'nbrprojet'=>$nbrprojet[0][1],
            'nbrstagiaire'=>$nbrstagiaire[0][1],'id'=>$id));
    }


    public function editstagiaireAction($ids)
    {
        $id = $this->getUser()->getEmploye()->getId();
        $stagiaire = $em = $this->getDoctrine()->getManager()->getRepository('MAMRHBundle:Stagiaire')
                        ->getstagiaireid($ids);
        $form = $this->createForm(new StagiaireType(), $stagiaire);
        $request = $this->get('request');

        $em = $this->getDoctrine()->getManager();

        $demandenonv = $em->getRepository('MAMRHBundle:Attestation')
            ->getnbrdemandenonV($this->getUser());

        $demandev = $em->getRepository('MAMRHBundle:Attestation')
            ->getnbrdemandeV($this->getUser());

        $nbrprojet = $em->getRepository('MAMRHBundle:Projet')
            ->getnbrprojet($this->getUser());

        $nbrstagiaire = $em->getRepository('MAMRHBundle:Stagiaire')
            ->getnbrprojet($this->getUser());

        if ($request->getMethod() == 'POST') {
            $form->submit($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($stagiaire);
                $em->flush();
                $this->get('session')->getFlashBag()->add('info', 'Employé bien ajouté');
                return $this->render('MAMRHBundle:RH:Acceuil.html.twig',array(
                    'demandenonv'=>$demandenonv[0][1],
                    'demandev'=>$demandev[0][1],
                    'nbrprojet'=>$nbrprojet[0][1],
                    'nbrstagiaire'=>$nbrstagiaire[0][1],'id'=>$id));
            }
        }
        return $this->render('MAMRHBundle:RH:AjoutStagiaire.html.twig',array('form' => $form->createView(),
            'demandenonv'=>$demandenonv[0][1],
            'demandev'=>$demandev[0][1],
            'nbrprojet'=>$nbrprojet[0][1],
            'nbrstagiaire'=>$nbrstagiaire[0][1],'id'=>$id));
    }

    public function getstagiaireAction()
    {
        $id = $this->getUser()->getEmploye()->getId();
        $entities=$this->getDoctrine()
            ->getManager()
            ->getRepository('MAMRHBundle:Stagiaire')
            ->getstagiaire();
        //var_dump($entities);

        $em = $this->getDoctrine()->getManager();

        $demandenonv = $em->getRepository('MAMRHBundle:Attestation')
            ->getnbrdemandenonV($this->getUser());

        $demandev = $em->getRepository('MAMRHBundle:Attestation')
            ->getnbrdemandeV($this->getUser());

        $nbrprojet = $em->getRepository('MAMRHBundle:Projet')
            ->getnbrprojet($this->getUser());

        $nbrstagiaire = $em->getRepository('MAMRHBundle:Stagiaire')
            ->getnbrprojet($this->getUser());

        return $this->render('MAMRHBundle:RH:AfficheStagiaire.html.twig', array('entities' => $entities,
                'demandenonv'=>$demandenonv[0][1],
                'demandev'=>$demandev[0][1],
                'nbrprojet'=>$nbrprojet[0][1],
                'nbrstagiaire'=>$nbrstagiaire[0][1],'id'=>$id)
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

        $demandenonv = $em->getRepository('MAMRHBundle:Attestation')
            ->getnbrdemandenonV($this->getUser());

        $demandev = $em->getRepository('MAMRHBundle:Attestation')
            ->getnbrdemandeV($this->getUser());

        $nbrprojet = $em->getRepository('MAMRHBundle:Projet')
            ->getnbrprojet($this->getUser());

        $nbrstagiaire = $em->getRepository('MAMRHBundle:Stagiaire')
            ->getnbrprojet($this->getUser());

        return $this->render('MAMRHBundle:RH:demande.html.twig',
            array('demandes'=> $demandes,
                'demandenonv'=>$demandenonv[0][1],
                'demandev'=>$demandev[0][1],
                'nbrprojet'=>$nbrprojet[0][1],
                'nbrstagiaire'=>$nbrstagiaire[0][1],'id'=>$id));
    }

    public function demandevalideAction()
    {
        $id = $this->getUser()->getEmploye()->getId();
        $em = $this->getDoctrine()->getManager();
        $demandes=$em->getRepository('MAMRHBundle:Attestation')
            ->getdemandevalide($this->getUser());

        $demandenonv = $em->getRepository('MAMRHBundle:Attestation')
            ->getnbrdemandenonV($this->getUser());

        $demandev = $em->getRepository('MAMRHBundle:Attestation')
            ->getnbrdemandeV($this->getUser());

        $nbrprojet = $em->getRepository('MAMRHBundle:Projet')
            ->getnbrprojet($this->getUser());

        $nbrstagiaire = $em->getRepository('MAMRHBundle:Stagiaire')
            ->getnbrprojet($this->getUser());

        return $this->render('MAMRHBundle:RH:demandevalide.html.twig',
            array('demandes'=> $demandes,
                'demandenonv'=>$demandenonv[0][1],
                'demandev'=>$demandev[0][1],
                'nbrprojet'=>$nbrprojet[0][1],
                'nbrstagiaire'=>$nbrstagiaire[0][1],'id'=>$id));
    }

    public function demandenonvalideAction()
    {
        $id = $this->getUser()->getEmploye()->getId();
        $em = $this->getDoctrine()->getManager();
        $demandes=$em->getRepository('MAMRHBundle:Attestation')
            ->getdemandenonvalide($this->getUser());

        $demandenonv = $em->getRepository('MAMRHBundle:Attestation')
            ->getnbrdemandenonV($this->getUser());

        $demandev = $em->getRepository('MAMRHBundle:Attestation')
            ->getnbrdemandeV($this->getUser());

        $nbrprojet = $em->getRepository('MAMRHBundle:Projet')
            ->getnbrprojet($this->getUser());

        $nbrstagiaire = $em->getRepository('MAMRHBundle:Stagiaire')
            ->getnbrprojet($this->getUser());

        return $this->render('MAMRHBundle:RH:demandenonvalide.html.twig',
            array('demandes'=> $demandes,
                'demandenonv'=>$demandenonv[0][1],
                'demandev'=>$demandev[0][1],
                'nbrprojet'=>$nbrprojet[0][1],
                'nbrstagiaire'=>$nbrstagiaire[0][1],'id'=>$id));
    }

    public function validdemandeAction($id){
        $em = $this->getDoctrine()->getManager();

        $dem  =  $em->getRepository('MAMRHBundle:Attestation')
            ->find($id);
        //var_dump($dem);
        $dem->setValide(true);
        $dem->setResponsableRH($this->getUser());
        //var_dump($dem);
        $em->persist($dem);
        $em->flush();
        //return $this->render('MAMRHBundle:Default:index.html.twig');
        return $this->redirect($this->generateUrl('mamrh_rh_demande'));
    }

    public function dimisionenmployeAction($id){
        $em = $this->getDoctrine()->getManager();

        $employe = $em->getRepository('MAMRHBundle:Employe')->find($id);
        //var_dump($employe);

        $employe->setBye(true);
        //var_dump($employe);
        $em->persist($employe);
        $em->flush();

        return $this->redirect($this->generateUrl('mamrh_affichemp'));
    }
}
