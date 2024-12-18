<?php

namespace App\Http\Controllers;

use App\Repositories\RecipeRepository as RP;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    protected $recipeRepository;

    public function __construct(RP $recipeRepository)
    {
        $this->recipeRepository = $recipeRepository;
    }

    // Permet d'afficher 3 recettes aléatoires sur la page index.blade.php  
    public function showRandomRecipes()
    {
        $recipes = $this->recipeRepository->getRandomRecipes();
        return view('recipes.index', compact('recipes'));
    }

    // Permet d'afficher toutes les recettes sur la page show.blade.php
    public function showAllRecipes()
    {
        $recipes = $this->recipeRepository->getAllRecipes();
        return view('recipes.show', compact('recipes'));
    }
}
