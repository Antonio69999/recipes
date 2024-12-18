<?php

namespace App\Repositories;

use App\Models\Recipe;

class RecipeRepository
{
    // Recupère 3 recettes aléatoires
    public function getRandomRecipes(int $count = 3): array
    {
        return Recipe::inRandomOrder()->take($count)->get()->toArray();
    }

    // Recupère toutes les recettes de la table recipe
    public function getAllRecipes(): array
    {
        return Recipe::all()->toArray();
    }

    // Recupère une recette par rapport à son id
    public function find(int $id): ?Recipe
    {
        return Recipe::find($id);
    }
}
