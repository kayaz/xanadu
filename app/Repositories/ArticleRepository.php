<?php namespace App\Repositories;

use App\Models\Article;

class ArticleRepository extends BaseRepository
{
    protected $model;

    public function __construct(Article $model)
    {
        parent::__construct($model);
    }
}