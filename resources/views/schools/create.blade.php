@extends('layouts.app', ['activePage' => 'user', 'title' => 'Schools', 'navName' => 'Notifications', 'activeButton' => 'laravel'])

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create School</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin: 10px 0 5px;
        }
        input {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .button {
            padding: 10px 15px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Add New School</h1>
        <form action="{{ route('schools.store') }}" method="POST">
            @csrf
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>
            
            <label for="schoolRegistrationNumber">School Registration Number</label>
            <input type="text" id="schoolRegistrationNumber" name="schoolRegistrationNumber" required>
            
            <label for="district">District</label>
            <input type="text" id="district" name="district" required>
            
            <button type="submit" class="button">Save</button>
        </form>
    </div>
</body>
</html>



@endsection