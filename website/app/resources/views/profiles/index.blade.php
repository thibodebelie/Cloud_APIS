<!DOCTYPE html>
<html>
<head>
    <title>Profiles</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    @include('Components.header')
    <h1>Profiles</h1>
    <ul>
        @foreach ($profiles as $profile)
            <li class="mb-4">
                <strong>{{ $profile->Name }}</strong> - {{ $profile->Email }}
                <br>Address: {{ $profile->Address }}
                <br>Phone: {{ $profile->Phone }}
            </li>
        @endforeach
    </ul>
</body>
</html>