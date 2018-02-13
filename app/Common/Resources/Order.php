<?php

namespace App\Common\Resources;

/**
 * Trait Order
 * @package App\Common\Resources
 */
trait Order
{
    /**
     * @var array
     */
    protected $order = [];

    /**
     * @return array
     */
    public function getOrder()
    {
        return $this->order;
    }
}
