<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Exercise</title>
    <link rel="stylesheet" href="../assets/css/styles.css" />
</head>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<body>
    <h1>Add Exercise</h1>
    <form action="{{ route('exercises.store') }}" method="POST">
    <!-- <form action="{{ route('exercises.store') }}" method="POST"> -->
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <label for="duration">Duration:</label>
        <input type="text" id="duration" name="duration" required>
        <label for="calories">Calories:</label>
        <input type="text" id="calories" name="calories" required>
        <button type="submit" class="btn">Add Exercise</button>
    </form>
</body>
</html>
