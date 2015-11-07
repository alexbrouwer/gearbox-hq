<?php

namespace Gearbox\MediaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('GearboxMediaBundle:Default:index.html.twig', array('name' => $name));
    }
}
