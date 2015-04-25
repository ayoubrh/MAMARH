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
        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $form->submit($request);
            if ($form->isValid()) {
                $employe = $this->getUser()->getEmploye();
                $demande->addEmploye($employe);
                $em->persist($demande);
                $em->flush();
                $this->get('session')->getFlashBag()->add('info', 'Employé bien ajouté');
                return $this->redirect($this->generateUrl('mamrh_demande'));
            }
        }
        return $this->render('MAMRHBundle:Employe:Demande.html.twig',
            array('form' => $form->createView(),
                  'demandes'=> $demandes));
    }



}
