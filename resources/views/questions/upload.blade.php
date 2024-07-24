@extends('layouts.app', ['activePage' => 'user', 'title' => 'Upload', 'navName' => 'Notifications', 'activeButton' => 'laravel'])

@section('content')

<!DOCTYPE html>
<html>
<head>
    <title>Upload Questions</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <style>
        .container {
            margin: 40px;
        }
        .button {
            margin-bottom: 10px;
        }
        .btn-view {
            color: #fff;
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-edit {
            color: #fff;
            background-color: #28a745;
            border-color: #28a745;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            Upload Questions and Answer File
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('questions.import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="file">Upload Questions and Answer File</label>
                    <input type="file" name="file" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Upload</button>
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
