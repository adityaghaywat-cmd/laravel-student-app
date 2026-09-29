<!DOCTYPE html>
<html>
<head>
    <title>Student Management</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            margin: 0;
            padding: 40px;
        }

        .container {
            max-width: 900px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
        }

        h1 {
            text-align: center;
        }

        form {
            display: grid;
            gap: 10px;
            margin-bottom: 30px;
        }

        input {
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            padding: 12px;
            background: #222;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background: #eee;
        }

        .error {
            color: red;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Student Management System</h1>

    @if ($errors->any())
        <div class="error">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form action="/students" method="POST">

        @csrf

        <input
            type="text"
            name="name"
            placeholder="Student Name"
            required
        >

        <input
            type="email"
            name="email"
            placeholder="Student Email"
            required
        >

        <input
            type="text"
            name="course"
            placeholder="Course"
            required
        >

        <button type="submit">
            Add Student
        </button>

    </form>

    <h2>Students List</h2>

    <table>

        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Course</th>
        </tr>

        @foreach ($students as $student)

        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->course }}</td>
        </tr>

        @endforeach

    </table>

</div>

</body>
</html>
