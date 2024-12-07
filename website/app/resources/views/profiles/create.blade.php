<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    @include('Components.header')

    <div class="container mx-auto px-4 py-8">
        <div class="max-w-2xl mx-auto bg-white shadow-md rounded-lg p-6">
            <h1 class="text-2xl font-bold text-center mb-6 text-gray-700">Create Profile</h1>

            <form method="POST" action="{{ route('profiles.store') }}">
                @csrf

                <!-- Name Field -->
                <div class="mb-4">
                    <label for="Name" class="block text-gray-700 font-semibold mb-2">Name:</label>
                    <input type="text" name="Name" id="Name" 
                           class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300" 
                           placeholder="Enter your name" required>
                </div>

                <!-- Email Field -->
                <div class="mb-4">
                    <label for="Email" class="block text-gray-700 font-semibold mb-2">Email:</label>
                    <input type="email" name="Email" id="Email" 
                           class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300" 
                           placeholder="Enter your email" required>
                </div>

                <!-- Phone Field -->
                <div class="mb-4">
                    <label for="Phone" class="block text-gray-700 font-semibold mb-2">Phone:</label>
                    <input type="text" name="Phone" id="Phone" 
                           class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300" 
                           placeholder="Enter your phone number" required>
                </div>

                <!-- Address Field -->
                <div class="mb-4">
                    <label for="Address" class="block text-gray-700 font-semibold mb-2">Address:</label>
                    <input type="text" name="Address" id="Address" 
                           class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300" 
                           placeholder="Enter your address" required>
                </div>

                <!-- Birthdate Field -->
                <div class="mb-4">
                    <label for="Birthdate" class="block text-gray-700 font-semibold mb-2">Birthdate:</label>
                    <input type="date" name="Birthdate" id="Birthdate" 
                           class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300" 
                           required>
                </div>

                <!-- ID Field -->
                <div class="mb-4">
                    <label for="Id" class="block text-gray-700 font-semibold mb-2">ID:</label>
                    <input type="number" name="Id" id="Id" 
                           class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300" 
                           placeholder="Enter a unique ID" required>
                </div>

                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit" 
                            class="w-full bg-blue-500 text-white font-semibold px-4 py-2 rounded-lg hover:bg-blue-600 transition-colors">
                        Create Profile
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
