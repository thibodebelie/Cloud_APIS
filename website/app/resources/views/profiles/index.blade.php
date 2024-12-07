<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profiles</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800">
    @include('Components.header')

    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6 text-center text-blue-600">Profiles</h1>
        
        <ul class="space-y-6">
            @foreach ($profiles as $profile)
                <li class="bg-white shadow-md rounded-lg p-6">
                    <h2 class="text-xl font-semibold text-gray-900">{{ $profile->Name }}</h2>
                    <p class="text-gray-700"><span class="font-medium">Email:</span> {{ $profile->Email }}</p>
                    <p class="text-gray-700"><span class="font-medium">Address:</span> {{ $profile->Address }}</p>
                    <p class="text-gray-700"><span class="font-medium">Phone:</span> {{ $profile->Phone }}</p>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
