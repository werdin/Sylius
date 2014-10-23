<?php

namespace Stfalcon\Bundle\SyliusDeliveryBundle\Adapter;

use Stfalcon\Bundle\SyliusDeliveryBundle\Adapter\Interfaces\AdapterInterface;
use Stfalcon\Bundle\SyliusDeliveryBundle\Exception\CityNotFoundException;

class DeliveryAdapter implements AdapterInterface
{
    /**
     * @return array
     */
    public function getAvailableCities()
    {
        return array('delivery_kyiv', 'delivery_khmelnitsky');
    }

    /**
     * @param $city
     * @throws CityNotFoundException
     * @return array
     */
    public function getAvailableStreets($city)
    {
        $streets = array(
            'intime_kyiv' => array('street_21', 'street_22', 'street_23'),
            'intime_khmelnitsky' => array('street_41', 'street_42', 'street_43'),
        );

        if (!isset($streets[$city])) {
            throw new CityNotFoundException($city);
        }

        return $streets[$city];
    }
}