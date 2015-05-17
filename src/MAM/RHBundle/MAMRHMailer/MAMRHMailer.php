<?php

namespace MAM\RHBundle\MAMRHMailer;

use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\DependencyInjection\ContainerInterface;

use FOS\UserBundle\Mailer\Mailer as BaseMailer;
use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;
use Symfony\Component\Routing\RouterInterface;

use MAM\UserBundle\Entity\User;


class MAMRHMailer
{
    public function confirmation(User $user, $password)
    {

        $message = \Swift_Message::newInstance()
            ->setSubject('Confirmation d\'inscription')
            ->setFrom('rhnabri.ayoub@gmail.com')
            ->setTo($user->getemail())
            ->setBody($this->container->get('templating')->render('MAMRHBundle:Mail:ConfirmationEmail.txt.twig', array(
                'user' => $user,
                'password'=> $password)));

        return $this->container->get('mailer')->send($message);
    }


   /* public function sendConfirmationEmailMessage(UserInterface $user)
    {
        $email = $user->getEmail();

        $parentEmail = $user->getParentEmail();

        if(isset($parentEmail)&&(trim($parentEmail)!='')){
            $email = $parentEmail;
        }

        $template = $this->parameters['confirmation.template'];
        $url = $this->router->generate('fos_user_registration_confirm', array('token' => $user->getConfirmationToken()), true);
        $rendered = $this->templating->render($template, array(
            'user' => $user,
            'confirmationUrl' =>  $url
        ));
        $this->sendEmailMessage($rendered, $this->parameters['from_email']['confirmation'], $email);
    }
*/

}