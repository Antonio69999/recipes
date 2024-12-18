<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('recipes')->insert([
            [
                "name" => "Spaghetti Bolognese",
                "ingredients" => json_encode(["Spaghetti", "Minced meat", "Tomatoes", "Onion", "Garlic"]),
                "preparationTime" => "15 minutes",
                "cookingTime" => "30 minutes",
                "serves" => 4
            ],
            [
                "name" => "Roast Chicken",
                "ingredients" => json_encode(["Chicken", "Potatoes", "Garlic", "Rosemary"]),
                "preparationTime" => "20 minutes",
                "cookingTime" => "1 hour 30 minutes",
                "serves" => 4
            ],
            [
                "name" => "Pancakes",
                "ingredients" => json_encode(["Flour", "Eggs", "Milk", "Sugar", "Butter"]),
                "preparationTime" => "10 minutes",
                "cookingTime" => "30 minutes",
                "serves" => 4
            ],
            [
                "name" => "Caesar Salad",
                "ingredients" => json_encode(["Lettuce", "Chicken", "Croutons", "Parmesan", "Caesar Dressing"]),
                "preparationTime" => "15 minutes",
                "cookingTime" => "0 minute",
                "serves" => 2
            ],
            [
                "name" => "Beef Stew",
                "ingredients" => json_encode(["Beef", "Carrots", "Potatoes", "Onion", "Garlic", "Beef broth"]),
                "preparationTime" => "20 minutes",
                "cookingTime" => "2 hours",
                "serves" => 4
            ],
            [
                "name" => "Vegetable Soup",
                "ingredients" => json_encode(["Carrots", "Celery", "Onion", "Garlic", "Tomatoes", "Vegetable broth"]),
                "preparationTime" => "15 minutes",
                "cookingTime" => "30 minutes",
                "serves" => 4
            ],
            [
                "name" => "Chicken Curry",
                "ingredients" => json_encode(["Chicken", "Onion", "Garlic", "Curry powder", "Coconut milk"]),
                "preparationTime" => "15 minutes",
                "cookingTime" => "30 minutes",
                "serves" => 4
            ],
            [
                "name" => "Vegetable Stir Fry",
                "ingredients" => json_encode(["Broccoli", "Carrots", "Bell peppers", "Garlic", "Soy sauce"]),
                "preparationTime" => "15 minutes",
                "cookingTime" => "15 minutes",
                "serves" => 4
            ],
            [
                "name" => "Fish Tacos",
                "ingredients" => json_encode(["Fish fillets", "Tortillas", "Cabbage", "Avocado", "Lime"]),
                "preparationTime" => "20 minutes",
                "cookingTime" => "10 minutes",
                "serves" => 4
            ],
            [
                "name" => "Cheese Pizza",
                "ingredients" => json_encode(["Pizza dough", "Tomato sauce", "Mozzarella cheese", "Basil"]),
                "preparationTime" => "15 minutes",
                "cookingTime" => "15 minutes",
                "serves" => 4
            ],
            [
                "name" => "Chocolate Cake",
                "ingredients" => json_encode(["Flour", "Sugar", "Cocoa powder", "Eggs", "Butter", "Chocolate"]),
                "preparationTime" => "20 minutes",
                "cookingTime" => "30 minutes",
                "serves" => 8
            ],
            [
                "name" => "Apple Pie",
                "ingredients" => json_encode(["Apples", "Sugar", "Cinnamon", "Pie crust"]),
                "preparationTime" => "20 minutes",
                "cookingTime" => "45 minutes",
                "serves" => 8
            ],
            [
                "name" => "Lasagna",
                "ingredients" => json_encode(["Lasagna noodles", "Ground beef", "Tomato sauce", "Ricotta cheese", "Mozzarella cheese"]),
                "preparationTime" => "30 minutes",
                "cookingTime" => "45 minutes",
                "serves" => 8
            ],
            [
                "name" => "Grilled Cheese Sandwich",
                "ingredients" => json_encode(["Bread", "Cheese", "Butter"]),
                "preparationTime" => "5 minutes",
                "cookingTime" => "10 minutes",
                "serves" => 1
            ],
            [
                "name" => "Tomato Soup",
                "ingredients" => json_encode(["Tomatoes", "Onion", "Garlic", "Vegetable broth", "Cream"]),
                "preparationTime" => "10 minutes",
                "cookingTime" => "30 minutes",
                "serves" => 4
            ],
            [
                "name" => "Chicken Alfredo",
                "ingredients" => json_encode(["Fettuccine", "Chicken", "Garlic", "Cream", "Parmesan cheese"]),
                "preparationTime" => "15 minutes",
                "cookingTime" => "20 minutes",
                "serves" => 4
            ],
            [
                "name" => "Beef Tacos",
                "ingredients" => json_encode(["Ground beef", "Tortillas", "Lettuce", "Tomatoes", "Cheese"]),
                "preparationTime" => "15 minutes",
                "cookingTime" => "15 minutes",
                "serves" => 4
            ],
            [
                "name" => "Chicken Noodle Soup",
                "ingredients" => json_encode(["Chicken", "Carrots", "Celery", "Onion", "Garlic", "Noodles", "Chicken broth"]),
                "preparationTime" => "15 minutes",
                "cookingTime" => "30 minutes",
                "serves" => 4
            ],
            [
                "name" => "Beef Burgers",
                "ingredients" => json_encode(["Ground beef", "Buns", "Lettuce", "Tomatoes", "Onion", "Cheese"]),
                "preparationTime" => "15 minutes",
                "cookingTime" => "15 minutes",
                "serves" => 4
            ],
            [
                "name" => "Vegetable Pasta",
                "ingredients" => json_encode(["Pasta", "Broccoli", "Bell peppers", "Garlic", "Olive oil"]),
                "preparationTime" => "15 minutes",
                "cookingTime" => "15 minutes",
                "serves" => 4
            ]
        ]);
    }
}
