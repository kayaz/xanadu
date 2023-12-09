<?php namespace App\Repositories;

use App\Models\Pricelist;

class PricelistRepository extends BaseRepository
{
    protected $model;

    public function __construct(Pricelist $model)
    {
        parent::__construct($model);
    }
}
