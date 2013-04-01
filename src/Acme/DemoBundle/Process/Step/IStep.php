<?php

namespace Acme\DemoBundle\Process\Step;

use Sylius\Bundle\FlowBundle\Process\Context\ProcessContextInterface;
use Sylius\Bundle\FlowBundle\Process\Step\ControllerStep;

class IStep extends ControllerStep
{
    public function displayAction(ProcessContextInterface $context)
    {
        return $this->render('AcmeDemoBundle:Process/Step:i.html.twig');
    }

    public function forwardAction(ProcessContextInterface $context)
    {
         return $this->complete();
    }
}
