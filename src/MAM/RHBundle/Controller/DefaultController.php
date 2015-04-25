<?php

namespace MAM\RHBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	
        return $this->render('MAMRHBundle:Default:index.html.twig');
    }
}
