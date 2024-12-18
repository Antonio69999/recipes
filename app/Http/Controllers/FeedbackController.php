<?php

namespace App\Http\Controllers;

use App\Repositories\FeedbackRepository as fbr;
use App\Repositories\RecipeRepository as rr;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    protected $feedbackRepository;
    protected $recipeRepository;

    // injection de dépendance
    public function __construct(fbr $feedbackRepository, rr $recipeRepository)
    {
        $this->feedbackRepository = $feedbackRepository;
        $this->recipeRepository = $recipeRepository;
    }

    public function index($recipeId)
    {
        // récuperation d'une recette par son id
        $recipe = $this->recipeRepository->find($recipeId);

        // récuperation des feedbacks par rapport à l'id de la recette
        $feedbacks = $this->feedbackRepository->getFeedbacksByRecipeId($recipeId);

        // compact — Crée un tableau à partir de variables et de leur valeur
        return view('feedback.index', compact('recipe', 'feedbacks'));
    }

    public function create($recipeId)
    {
        $recipe = $this->recipeRepository->find($recipeId);

        return view('feedback.create', compact('recipe'));
    }

    // Permet d'inserer en base de données les données du formulaire
    public function store(Request $request, $recipeId)
    {
        // permet de valider les données de la requête
        $request->validate([
            'username' => 'required|string|max:255',
            'comment' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        $this->feedbackRepository->createFeedback([
            'recipe_id' => $recipeId,
            'username' => $request->username,
            'comment' => $request->comment,
            'rating' => $request->rating,
        ]);

        return redirect()->route('feedback.index', $recipeId);
    }
}
