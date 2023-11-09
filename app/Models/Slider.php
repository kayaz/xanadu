<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'file',
        'file_alt',
        'link',
        'link_button',
        'link_target',
        'opacity',
        'active',
        'sort'
    ];
}
