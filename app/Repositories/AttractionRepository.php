<?php

namespace App\Repositories;

use App\Models\Attraction;

class AttractionRepository extends BaseRepository
{
    protected $model;

    public function __construct(Attraction $model)
    {
        parent::__construct($model);
    }
}
