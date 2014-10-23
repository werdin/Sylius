<?php

namespace Stfalcon\Bundle\SyliusDeliveryBundle;

use Stfalcon\Bundle\SyliusDeliveryBundle\DependencyInjection\Compiler\AdapterCompilerPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class StfalconSyliusDeliveryBundle extends Bundle
{
    /**
     * @inheritdoc
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        $container->addCompilerPass(new AdapterCompilerPass());
    }
}
