<?php

namespace App\Http\Controllers;

use App\Common\Controller\ResourceController;
use App\Domains\Manufacturer\Repository\Manufacturer as Repository;

class ManufacturerController extends ResourceController
{
    public function __construct(Repository $repository)
    {
        parent::__construct($repository);

        $this->domain = "admin.manufacturer";
        $this->offset = 5;
    }
}
