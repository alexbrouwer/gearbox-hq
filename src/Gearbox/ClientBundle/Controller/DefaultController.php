<?php

namespace Gearbox\ClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $debugging = $this->getParameter('kernel.debug');
        return $this->render('GearboxClientBundle:Default:index.html.twig', array(
            'environment' => $debugging ? 'development' :'production'
        ));
    }
}
