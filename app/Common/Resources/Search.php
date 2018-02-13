<?php

namespace App\Common\Resources;

/**
 * Trait Searchble
 * @package App\Common\Resources
 */
trait Search
{
    /**
     * @var array
     */
    protected $searchble = [];

    /**
     * @return array
     */
    public function getSearchble()
    {
        return $this->searchble;
    }
}
