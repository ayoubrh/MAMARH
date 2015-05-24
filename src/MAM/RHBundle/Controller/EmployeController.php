<?php

namespace MAM\RHBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\Security\Core\SecurityContext;

use MAM\UserBundle\Entity\User;

use MAM\RHBundle\Entity\Attestation;

use MAM\RHBundle\Form\AttestationType;


class EmployeController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MAMRHBundle:Default:index.html.twig', array('name' => $name));
    }

    public function demandeAction()
    {
        $demande=new Attestation();
        $form = $this->createForm(new AttestationType(), $demande);
        $em = $this->getDoctrine()->getManager();
        $demandes=$em->getRepository('MAMRHBundle:Attestation')
                    ->getdemandes($this->getUser());

        $demandenonv = $em->getRepository('MAMRHBundle:Attestation')
            ->getnbrdemandenonV($this->getUser());

        $demandev = $em->getRepository('MAMRHBundle:Attestation')
            ->getnbrdemandeV($this->getUser());

        $nbrprojet = $em->getRepository('MAMRHBundle:Projet')
            ->getnbrprojet($this->getUser());

        $nbrstagiaire = $em->getRepository('MAMRHBundle:Stagiaire')
            ->getnbrprojet($this->getUser());

        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $form->submit($request);
            if ($form->isValid()) {
                $employe = $this->getUser()->getEmploye();
                $demande->setEmploye($employe);
                $em->persist($demande);
                $em->flush();
                $this->get('session')->getFlashBag()->add('info', 'Employé bien ajouté');
                return $this->redirect($this->generateUrl('mamrh_demande'));
            }
        }
        $id = $this->getUser()->getEmploye()->getId();
        return $this->render('MAMRHBundle:Employe:Demande.html.twig',
            array('form' => $form->createView(),
                  'demandes'=> $demandes,
                'demandenonv'=>$demandenonv[0][1],
                'demandev'=>$demandev[0][1],
                'nbrprojet'=>$nbrprojet[0][1],
                'nbrstagiaire'=>$nbrstagiaire[0][1],'id'=>$id));
    }




}
