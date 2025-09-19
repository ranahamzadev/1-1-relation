<!DOCTYPE html>
<html>

<head>
    <title>Cars List</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }

        th,
        td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: center;
        }

        a {
            margin: 0 5px;
            text-decoration: none;
        }

        button {
            padding: 5px 10px;
        }
    </style>
</head>

<body>
    <h2 style="text-align:center;">Cars List</h2>
    <div style="text-align:center; margin-bottom:10px;">
        <a href="{{ route('cars.create') }}">Add New Car</a>
    </div>

    <table>
        <tr>
            <th>ID</th>
            <th>Model</th>
            <th>Number</th>
            <th>Actions</th>

        </tr>
        @foreach ($cars as $car)
            <tr>
                <td>{{ $car->id }}</td>
                <td>{{ $car->model }}</td>
                <td>{{ $car->number }}</td>
                <td>
                    <a href="{{ route('cars.edit', $car->id) }}">Edit</a>
                    <form action="{{ route('cars.destroy', $car->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Delete this car?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>

</html>
