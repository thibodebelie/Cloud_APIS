<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen">
    <!-- Header Section -->
    <header class="text-white">
        <div class="container mx-auto">
            @include('Components.header')
        </div>
    </header>
    <!-- Main Content -->
    <main class="flex items-center justify-center py-10">
        <div class="container mx-auto px-4">
            <div class="max-w-xl mx-auto bg-white p-8 rounded-lg shadow-lg">
                <h1 class="text-2xl font-bold mb-6 text-gray-800">Create User Profile</h1>
                <form>
                    <!-- Name -->
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                        <input id="name" name="name" type="text" required
                            class="w-full mt-2 px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-indigo-400">
                    </div>
                    <!-- Email -->
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input id="email" name="email" type="email"
                            class="w-full mt-2 px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-indigo-400">
                    </div>
                    <!-- Phone -->
                    <div class="mb-4">
                        <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                        <input id="phone" name="phone" type="tel"
                            class="w-full mt-2 px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-indigo-400">
                    </div>
                    <!-- Birthdate -->
                    <div class="mb-4">
                        <label for="birthdate" class="block text-sm font-medium text-gray-700">Birthdate</label>
                        <input id="birthdate" name="birthdate" type="date"
                            class="w-full mt-2 px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-indigo-400">
                    </div>
                    <!-- Address -->
                    <h2 class="text-lg font-semibold mb-4 text-gray-800">Address</h2>
                    <!-- Street -->
                    <div class="mb-4">
                        <label for="street" class="block text-sm font-medium text-gray-700">Street</label>
                        <input id="street" name="street" type="text"
                            class="w-full mt-2 px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-indigo-400">
                    </div>
                    <!-- City -->
                    <div class="mb-4">
                        <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                        <input id="city" name="city" type="text"
                            class="w-full mt-2 px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-indigo-400">
                    </div>
                    <!-- Region -->
                    <div class="mb-4">
                        <label for="region" class="block text-sm font-medium text-gray-700">Region</label>
                        <input id="region" name="region" type="text"
                            class="w-full mt-2 px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-indigo-400">
                    </div>
                    <!-- Zip Code -->
                    <div class="mb-4">
                        <label for="zipcode" class="block text-sm font-medium text-gray-700">Zip Code</label>
                        <input id="zipcode" name="zipcode" type="text"
                            class="w-full mt-2 px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-indigo-400">
                    </div>
                    <!-- Country -->
                    <div class="mb-4">
                        <label for="country" class="block text-sm font-medium text-gray-700">Country</label>
                        <input id="country" name="country" type="text"
                            class="w-full mt-2 px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:border-indigo-400">
                    </div>
                    <!-- Submit Button -->
                    <div>
                        <button type="submit"
                            class="w-full bg-indigo-600 text-white py-3 px-4 rounded-lg shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:ring-offset-2">
                            Create Profile
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>
