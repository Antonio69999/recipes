<?php

namespace App\Repositories;

use App\Models\Feedback;

class FeedbackRepository
{
    // on recupere les feedbacks par rapport à l'id de la recette
    public function getFeedbacksByRecipeId(int $recipeId)
    {
        return Feedback::where('recipe_id', $recipeId)->get();
    }

    // on crée un feedback
    public function createFeedback(array $data)
    {
        return Feedback::create($data);
    }
}
