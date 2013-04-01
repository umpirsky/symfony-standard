<?php

namespace Acme\DemoBundle\Process;

use Sylius\Bundle\FlowBundle\Process\Builder\ProcessBuilderInterface;
use Sylius\Bundle\FlowBundle\Process\Scenario\ProcessScenarioInterface;
use Symfony\Component\DependencyInjection\ContainerAware;
use Acme\DemoBundle\Process\Step;

class SyliusScenario extends ContainerAware implements ProcessScenarioInterface
{
    public function build(ProcessBuilderInterface $builder)
    {
        $builder
            ->add('i', new Step\IStep())
            ->add('love', new Step\LoveStep())
            ->add('sylius', new Step\SyliusStep())
            ->add('cheers', new Step\CheersStep())
        ;
    }
}
