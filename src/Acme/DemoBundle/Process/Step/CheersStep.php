<?php

namespace Acme\DemoBundle\Process\Step;

use Sylius\Bundle\FlowBundle\Process\Context\ProcessContextInterface;
use Sylius\Bundle\FlowBundle\Process\Step\ControllerStep;

class CheersStep extends ControllerStep
{
    public function displayAction(ProcessContextInterface $context)
    {
        return $this->render('AcmeDemoBundle:Process/Step:cheers.html.twig');
    }

    public function forwardAction(ProcessContextInterface $context)
    {
        return $this->complete();
    }
}
