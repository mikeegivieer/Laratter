<!-- extiende del archivo app.blade.php dentro de la carpeta layouts -->
@extends('layouts.app')

<!-- la sección que se definió en yield('content') -->
@section('content')
<div class="jumbotron text-center">
    <h1>Laratter</h1>
    <nav>
        <ul class="nav nav-pills">
            <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
        </ul>
    </nav>
</div>

<div class="row">
    <form action="/messages/create" method="post" enctype="multipart/form-data">
    <div class="form-group">
        {{csrf_field()}}
        <input type="text" name="message" class="form-control
        @if($errors->has('message')) is-invalid @endif" placeholder="Qué estás pensando?">   
  {{-- Esto es para la ultima version de bootsrap --}}
     @if ($errors->has('message'))       
     @foreach ($errors->get('message') as $error)
         <p class="text-danger">{{ $error }}</p>                
     @endforeach
 @endif
   <input type="file" class="form-control-file" name="image">

    
    </div>
    </form>
</div>


<div class="row">
    {{-- forelse hace algo en caso de que no haya contenido en el array --}}
    @forelse ($messages as $message)
           <div class="col-6">
            @include('messages.message')
           </div>        
    @empty
        <p>No hay mensajes destacados</p>
    @endforelse
    
    @if (count($messages))
      <div class="mt-5 mx-auto">
        {{$messages->links('pagination::bootstrap-4')}}
      </div>
    @endif


</div>
@endsection