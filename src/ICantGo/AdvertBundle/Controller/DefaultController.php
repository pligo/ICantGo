<?php

namespace ICantGo\AdvertBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ICantGoAdvertBundle:Default:index.html.twig', array('name' => $name));
    }
}
