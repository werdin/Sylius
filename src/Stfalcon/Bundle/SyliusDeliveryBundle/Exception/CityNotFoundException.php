<?php

namespace Stfalcon\Bundle\SyliusDeliveryBundle\Exception;

/**
 * Class CityNotFoundException
 * @package Stfalcon\Bundle\SyliusDeliveryBundle\Exception
 */
class CityNotFoundException extends \Exception
{
    /**
     * @param string $city
     */
    public function __construct($city)
    {
        parent::__construct(sprintf('%s city is not available', $city));
    }
} 