<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $table = 'feedbacks';

    protected $fillable = [
        'recipe_id',
        'username',
        'comment',
        'rating',
    ];

    // relation avec le modele recipes
    public function recipe()
    {
        return $this->belongsTo(Recipe::class);
    }
}
