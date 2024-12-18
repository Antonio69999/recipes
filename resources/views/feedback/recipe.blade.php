<body class="bg-gray-100">
    <div class="container mx-auto p-6">
        <div class="bg-white p-6 rounded-lg shadow-lg relative">
            <a href="{{ url('/') }}" class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-700 absolute top-0 right-0 mt-4 mr-4">Go Home</a>

            <h1 class="text-2xl font-bold mb-4">{{ $recipe->name }}</h1>
            <img class="max-w-sm mx-auto my-4 rounded-lg shadow"
            src="https://images.pexels.com/photos/61180/pexels-photo-61180.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=1&amp;w=500"
            alt="{{ $recipe->name }}" class="mb-4 rounded-lg shadow-md">

            <h2 class="text-xl font-semibold mb-2">Ingredients</h2>
            <ul class="list-disc list-inside mb-4">
                @foreach ($recipe->ingredients as $ingredient)
                    <li class="mb-2">{{ $ingredient }}</li>
                @endforeach
            </ul>

            <h2 class="text-xl font-semibold mb-2">Instructions</h2>
            <ol class="list-decimal list-inside mb-6">
                <li class="mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                <li class="mb-2">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                <li class="mb-2">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li class="mb-2">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</li>
                <li class="mb-2">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
            </ol>

            <h2 class="text-xl font-semibold mb-2">Feedbacks</h2>
            @foreach ($feedbacks as $feedback)
                <div class="mb-4">
                    <h3 class="font-bold">{{ $feedback->username }}</h3>
                    <p>{{ $feedback->comment }}</p>
                    <p>Rating: {{ $feedback->rating }}/5</p>
                </div>
            @endforeach

            <div class="text-center">
                <form action="{{ route('feedback.store', $recipe->id) }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="username" class="block text-gray-700 text-sm font-bold mb-2">Username:</label>
                        <input type="text" id="username" name="username" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    </div>
                    <div class="mb-4">
                        <label for="comment" class="block text-gray-700 text-sm font-bold mb-2">Comment:</label>
                        <textarea id="comment" name="comment" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="rating" class="block text-gray-700 text-sm font-bold mb-2">Rating (out of 5):</label>
                        <input type="number" id="rating" name="rating" min="1" max="5" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    </div>
                    <button type="submit" class="bg-black text-white px-4 py-2 rounded-lg hover:bg-gray-800">Submit Feedback</button>
                </form>
            </div>
        </div>
    </div>
</body>
