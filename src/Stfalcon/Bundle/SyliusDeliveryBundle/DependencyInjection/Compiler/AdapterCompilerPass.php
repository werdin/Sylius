<?php

namespace Stfalcon\Bundle\SyliusDeliveryBundle\DependencyInjection\Compiler;


use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class AdapterCompilerPass implements CompilerPassInterface
{
    /**
     * @inheritdoc
     */
    public function process(ContainerBuilder $container)
    {
        if (!$container->hasDefinition('stfalcon_sylius.delivery.provider')) {
            return;
        }

        $definition = $container->getDefinition(
            'stfalcon_sylius.delivery.provider'
        );

        $taggedServices = $container->findTaggedServiceIds(
            'stfalcon.delivery_adapter'
        );

        foreach ($taggedServices as $id => $tagAttributes) {
            foreach ($tagAttributes as $attributes) {
                $definition->addMethodCall(
                    'addAdapter',
                    array(new Reference($id), $attributes['alias'])
                );
            }
        }
    }
}