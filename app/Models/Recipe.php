<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = [
        'name',
        'ingredients',
        'preparationTime',
        'cookingTime',
        'serves',
    ];

    protected $casts = [
        'ingredients' => 'array',
    ];
}
