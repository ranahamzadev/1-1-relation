<!DOCTYPE html>
<html>

<head>
    <title>Add New Car</title>
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
    <h2 style="text-align:center;">Add New Car</h2>

    @if ($errors->any())
        <div style="color:red; text-align:center;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('cars.store') }}" method="POST">
        @csrf
        <input type="text" name="model" placeholder="Car Model" value="{{ old('model') }}">
        <input type="text" name="number" placeholder="Car Number" value="{{ old('number') }}">
        <button type="submit">Add Car</button>
    </form>

    <a href="{{ route('cars.index') }}">Back to Cars List</a>
</body>

</html>
