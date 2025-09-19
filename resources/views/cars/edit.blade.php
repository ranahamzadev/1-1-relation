<!DOCTYPE html>
<html>

<head>
    <title>Edit Car</title>
    <style>
        form {
            width: 300px;
            margin: 50px auto;
            display: flex;
            flex-direction: column;
        }

        input {
            padding: 8px;
            margin-bottom: 10px;
        }

        button {
            padding: 8px;
        }

        a {
            margin-top: 10px;
            text-align: center;
            display: block;
        }
    </style>
</head>

<body>
    <h2 style="text-align:center;">Edit Car</h2>

    @if ($errors->any())
        <div style="color:red; text-align:center;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('cars.update', $car->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="model" placeholder="Car Model" value="{{ old('model', $car->model) }}" required>
        <input type="text" name="number" placeholder="Car Number" value="{{ old('number', $car->number) }}" required>
        <button type="submit">Update Car</button>
    </form>

    <a href="{{ route('cars.index') }}">Back to Cars List</a>
</body>

</html>
