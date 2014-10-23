<?php

namespace Stfalcon\Bundle\SyliusDeliveryBundle\Provider;

use Stfalcon\Bundle\SyliusDeliveryBundle\Adapter\Interfaces\AdapterInterface;
use Stfalcon\Bundle\SyliusDeliveryBundle\Exception\AdapterNotFound;

/**
 * Class DeliveryProvider
 * @package Stfalcon\Bundle\SyliusDeliveryBundle\Provider
 */
class DeliveryProvider
{
    /**
     * @var array
     */
    private $adapters;


    public function __construct()
    {
        $this->adapters = array();
    }

    /**
     * @param AdapterInterface $adapter
     * @param $alias
     */
    public function addAdapter(AdapterInterface $adapter, $alias)
    {
        $this->adapters[$alias] = $adapter;
    }

    /**
     * @param $alias
     * @return AdapterInterface
     * @throws AdapterNotFound
     */
    public function getAdapter($alias)
    {
        if (!array_key_exists($alias, $this->adapters)) {
            throw new AdapterNotFound($alias);
        }

        return $this->adapters[$alias];
    }

    /**
     * @return array
     */
    public function getAvailableAdaptersAlias()
    {
        return array_keys($this->adapters);
    }
} 