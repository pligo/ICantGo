<?php

namespace ICantGo\StageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ICantGoStageBundle:Default:index.html.twig', array('name' => $name));
    }
}
