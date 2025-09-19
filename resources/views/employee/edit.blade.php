<!DOCTYPE html>
<html>

<head>
    <title>Edit Employee</title>
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
    <h2 style="text-align:center;">Edit Employee</h2>

    @if ($errors->any())
        <div style="color:red; text-align:center;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('employees.update', $employee->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name" placeholder="Name" value="{{ old('name', $employee->name) }}">
        <input type="email" name="email" placeholder="Email" value="{{ old('email', $employee->email) }}">
        <select name="employee_id">
            <option value="">-- Select Employee --</option>
            @foreach ($employees as $employee)
                <option value="{{ $employee->id }}" {{ old('employee_id') == $employee->id ? 'selected' : '' }}>
                    {{ $employee->name }}
                </option>
            @endforeach
        </select>
        <button type="submit">Update Employee</button>
    </form>

    <a href="{{ route('employees.index') }}">Back to Employee List</a>
</body>

</html>
