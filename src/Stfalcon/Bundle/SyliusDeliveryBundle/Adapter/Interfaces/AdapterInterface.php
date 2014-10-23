<?php

namespace Stfalcon\Bundle\SyliusDeliveryBundle\Adapter\Interfaces;


/**
 * Interface AdapterInterface
 * @package Stfalcon\Bundle\SyliusDeliveryBundle\Adapter
 */
interface AdapterInterface
{
    /**
     * @return array
     */
    public function getAvailableCities();

    /**
     * @param $city
     * @return array
     */
    public function getAvailableStreets($city);
}