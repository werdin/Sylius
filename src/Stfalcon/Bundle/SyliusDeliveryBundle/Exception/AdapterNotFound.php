<?php

namespace Stfalcon\Bundle\SyliusDeliveryBundle\Exception;


class AdapterNotFound extends \Exception
{
    public function __construct($alias){
        parent::__construct(sprintf('%s delivery adapter is not found', $alias));
    }
} 