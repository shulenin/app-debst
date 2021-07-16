<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$post->LastName}} {{$post->FirstName}} {{$post->SecondName}}</title>
    <style>
        body {
            font-family: "DejaVu Sans";
            font-size: 12px;
            text-align: center;
        }
    </style>
</head>
<body>
    @yield('content')
</body>
</html>
