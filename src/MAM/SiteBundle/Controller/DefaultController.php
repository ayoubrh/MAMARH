<?php

namespace MAM\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MAMSiteBundle:Default:index.html.twig');

    }
}
