<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise Dashboard</title>
    <link rel="stylesheet" href="../assets/css/styles.css" />
</head>
<body>
    <h1>Exercise Dashboard</h1>
    <a href="{{ route('exercises.create') }}" class="btn">Add Exercise</a>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Duration</th>
                <th>Calories</th>
                <th>Actions</th>
            </tr>
        </thead>
        <script>
    function confirmDelete(id) {
        if (confirm('Are you sure you want to delete this item?')) {
            document.getElementById('delete-form-' + id).submit();
        }
    }
</script>

@foreach($exercises as $exercise)
    <tr>
        <td>{{ $exercise->name }}</td>
        <td>{{ $exercise->duration }}</td>
        <td>{{ $exercise->calories }}</td>
        <td>
            <a href="{{ route('exercises.edit', $exercise->id) }}" class="btn">Edit</a>
            <button onclick="confirmDelete({{ $exercise->id }})" class="btn">Delete</button>
            <form id="delete-form-{{ $exercise->id }}" action="{{ route('exercises.destroy', $exercise->id) }}" method="POST" style="display: none;">
                @csrf
                @method('DELETE')
            </form>
        </td>
    </tr>
@endforeach
        </tbody>
    </table>
</body>
</html>
