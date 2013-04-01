<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WelcomeController extends Controller
{
    public function indexAction()
    {
        return $this->redirect($this->generateUrl('sylius_flow_start', array('scenarioAlias' => 'sylius_flow')));
    }
}
