<?php
namespace Stfalcon\Bundle\SyliusDeliveryBundle\Adapter;


use Stfalcon\Bundle\SyliusDeliveryBundle\Adapter\Interfaces\AdapterInterface;
use Stfalcon\Bundle\SyliusDeliveryBundle\Exception\CityNotFoundException;

/**
 * Class InTimeAdapter
 * @package Stfalcon\Bundle\SyliusDeliveryBundle\Adapter
 */
class InTimeAdapter implements AdapterInterface
{
    /**
     * @return array
     */
    public function getAvailableCities()
    {
        return array('intime_kyiv', 'intime_khmelnitsky');
    }

    /**
     * @param string $city
     * @throws CityNotFoundException
     * @return array
     */
    public function getAvailableStreets($city)
    {
        $streets = array(
            'intime_kyiv' => array('street_1', 'street_2', 'street_3'),
            'intime_khmelnitsky' => array('street_11', 'street_12', 'street_13'),
        );

        if (!isset($streets[$city])) {
            throw new CityNotFoundException($city);
        }

        return $streets[$city];

    }
}