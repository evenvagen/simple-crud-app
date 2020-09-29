@extends('base')

@section('main')
@foreach($cars as $car)

<div>
    {{$car->year}}
    {{$car->model}}
    {{$car->type}}
</div>

<br/>
@endforeach

<br/>

<a style="font-size:44px;" href="{{ route('cars.create') }}">Ny bil</a>
@endsection


