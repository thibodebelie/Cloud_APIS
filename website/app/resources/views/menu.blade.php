<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
@include('Components.header')
<body class="bg-gray-100 text-gray-900">
    <div class="container mx-auto p-4">
        <h1 class="text-4xl font-bold mb-4">Restaurant Menu</h1>
        
        @if(isset($data['menu']))
            @foreach ($data['menu'] as $category => $items)
                <h2 class="text-2xl font-semibold mt-6 mb-2 capitalize">{{ $category }}</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    @foreach ($items as $item)
                        <div class="bg-white p-4 rounded-lg shadow-md">
                            <h3 class="text-xl font-bold">{{ $item['name'] }}</h3>
                            <p class="text-gray-700">{{ $item['description'] }}</p>
                            <p class="text-gray-900 font-semibold mt-2">€{{ number_format($item['price'], 2) }}</p>
                        </div>
                    @endforeach
                </div>
            @endforeach
        @else
            <p>No menu data available.</p>
        @endif
    </div>
</body>
</html>