<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
      <div class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-16">
        {{-- Navbar --}}
        @include('recipes.navbar')
        {{-- End Navbar --}}

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">
            @foreach($recipes as $recipe)
                @include('recipes.card', ['recipe' => $recipe])
            @endforeach
        </div>
      </div>
</body>
</html>
