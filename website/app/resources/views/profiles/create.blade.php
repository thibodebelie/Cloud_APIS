
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Create New Profile</h1>
        <form action="{{ route('profiles.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="Name">Name</label>
                <input type="text" name="Name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="Email">Email</label>
                <input type="email" name="Email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="Phone">Phone</label>
                <input type="text" name="Phone" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="Address">Address</label>
                <input type="text" name="Address" class="form-control">
            </div>
            <div class="form-group">
                <label for="Birthdate">Birthdate</label>
                <input type="date" name="Birthdate" class="form-control">
            </div>
            <div class="form-group">
                <label for="Id">ID</label>
                <input type="number" name="Id" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Create Profile</button>
        </form>
    </div>    

</body>
</html>