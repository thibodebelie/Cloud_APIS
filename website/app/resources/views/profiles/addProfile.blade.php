<!DOCTYPE html>
<html>
<head>
    <title>Create Profile</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> -->

</head>
<body>
  @include('Components.header')
    <form id="profileForm">
        <label for="address">Address:</label>
        <input type="text" id="address" name="address"><br>

        <label for="birthdate">Birthdate:</label>
        <input type="date" id="birthdate" name="birthdate"><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br>

        <label for="id">ID:</label>
        <input type="number" id="id" name="id"><br>

        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br>

        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone"><br>

        <button type="button" onclick="submitForm()">Submit</button>
    </form>

    <script>
        function submitForm() {
            const form = document.getElementById('profileForm');
            const formData = new FormData(form);

            fetch('/create-profile', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    'Accept': 'application/json',
                },
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                console.log(data);
                alert('Profile created successfully!');
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred. Please try again.');
            });
        }
    </script>
</body>
</html>