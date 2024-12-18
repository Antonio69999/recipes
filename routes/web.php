<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\FeedbackController;

Route::get('/', [RecipeController::class, 'showRandomRecipes']);
Route::get('/recipes/{id}', [RecipeController::class, 'showRecipe']);
Route::get('/recipes', [RecipeController::class, 'showAllRecipes'])->name('recipes');

Route::get('recipes/{recipeId}/feedback', [FeedbackController::class, 'index'])->name('feedback.index');
Route::get('recipes/{recipeId}/feedback/create', [FeedbackController::class, 'create'])->name('feedback.create');
Route::post('recipes/{recipeId}/feedback', [FeedbackController::class, 'store'])->name('feedback.store');
