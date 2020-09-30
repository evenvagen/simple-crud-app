<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/grid.css') }}" rel="stylesheet" type="text/css">
    <title>Main-page</title>


    <style>
        h1{
            color:green;
        }
    </style>
</head>
<body>


<h1>Make profiles here!

    -> <a href="{{ route('contacts.create')}}">Profile Maker</a>

    <br/>

    Make cars here!

-> <a href="{{ route('cars.create') }}">Car Maker</a>

</h1>


</body>
</html>
