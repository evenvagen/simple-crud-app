@extends('base')

@section('main')
@foreach($cars as $car)

    <form action="{{ route('cars.destroy', $car->id)}}" method="post">
        {{$car->year}}
        {{$car->model}}
        {{$car->type}}
        @csrf
        @method('DELETE')
        <button>x</button>
    </form>

<br/>
@endforeach

@if(session()->get('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}
      </div>
    @endif

<br/>

<a style="font-size:44px;" href="{{ route('cars.create') }}">Ny bil</a>
@endsection


