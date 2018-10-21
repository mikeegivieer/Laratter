<!-- extiende del archivo app.blade.php dentro de la carpeta layouts -->
@extends('layouts.app')

<!-- la sección que se definió en yield('content') -->
@section('content')
<div class="title m-b-md">
        Laratter, by <a href="">Platzi</a>
</div>

    @if(isset($teacher))
     <p>Profesor: {{ $teacher}} </p>
    @else
     <p>Profesor a definir</p>
    @endif

<div class="links">
     @foreach ($links as $link=> $text)                
    <a href="{{ $link }}">{{$text}}</a>
     @endforeach
</div>
@endsection