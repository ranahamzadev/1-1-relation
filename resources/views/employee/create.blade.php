<!DOCTYPE html>
<html>

<head>
    <title>Add New Employee</title>
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
    <h2 style="text-align:center;">Add New Employee</h2>

    @if ($errors->any())
        <div style="color:red; text-align:center;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('employees.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Name" value="{{ old('name') }}" required>
        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
        <button type="submit">Add Employee</button>
    </form>

    <a href="{{ route('employees.index') }}">Back to Employee List</a>
</body>

</html>
