@extends('base')

@section('main')
@foreach($cars as $car)

<div>
    {{$car->year}}
    {{$car->model}}
    {{$car->type}}
    <form action="{{ route('cars.destroy', $car->id)}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Slett bil</button>
    </form>
</div>

<br/>
@endforeach


<br/>

<a style="font-size:44px;" href="{{ route('cars.create') }}">Ny bil</a>
@endsection


