<!DOCTYPE html>
<html lang="en">
<head>
    <title>School</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div height="100px" class="jumbotron text-center">
    <h2 >Teachers</h2>
</div>

<div class="container">
    <a class="btn btn-info" href="{{route('students.index')}}">Students</a>
    @yield('content')
</div>

</body>
</html>

