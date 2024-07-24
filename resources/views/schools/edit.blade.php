@extends('layouts.app', ['activePage' => 'school', 'title' => 'Schools', 'navName' => 'Edit School', 'activeButton' => 'laravel'])

@section('content')

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit School</title>
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
    <h1>Edit School</h1>
    <div class="card">
        <div class="card-header">
            Update School Information
        </div>
        <div class="card-body">
            <form action="{{ route('schools.update', $school->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" value="{{ $school->name }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="schoolRegistrationNumber">School Registration Number</label>
                    <input type="text" name="schoolRegistrationNumber" id="schoolRegistrationNumber" value="{{ $school->schoolRegistrationNumber }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="district">District</label>
                    <input type="text" name="district" id="district" value="{{ $school->district }}" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Update</button>
                <a href="{{ route('schools.index') }}" class="btn btn-back">Back to List</a>
            </form>
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
