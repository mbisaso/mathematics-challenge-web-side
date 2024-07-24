@extends('layouts.app', ['activePage' => 'school', 'title' => 'School Details', 'navName' => 'School Details', 'activeButton' => 'laravel'])

@section('content')

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>School Details</title>
<!-- Include Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<style>
    .container {
        margin: 40px;
    }
    .button {
        margin-bottom: 10px;
    }
    .btn-back {
        color: #fff;
        background-color: #6c757d;
        border-color: #6c757d;
    }
</style>
</head>
<body>
<div class="container">
    <h1>School Details</h1>
    <div class="card">
        <div class="card-header">
            School Information
        </div>
        <div class="card-body">
            <h5 class="card-title">ID: {{ $school->id }}</h5>
            <h5 class="card-title">Name: {{ $school->name }}</h5>
            <p class="card-text">Registration Number: {{ $school->schoolRegistrationNumber }}</p>
            <p class="card-text">District: {{ $school->district }}</p>
            <a href="{{ route('schools.index') }}" class="btn btn-back">Back to List</a>
        </div>
    </div>
</div>
<!-- Include Bootstrap JS (Optional) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>

@endsection
