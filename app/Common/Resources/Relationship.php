<?php

namespace App\Common\Resources;

/**
 * Trait Relationship
 * @package App\Common\Resources
 */
trait Relationship
{
    /**
     * @var array
     */
    protected $many_to_many_relations = [];

    /**
     * @return array
     */
    public function getManyToManyRelations()
    {
        return $this->many_to_many_relations;
    }
}
