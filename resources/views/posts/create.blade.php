@extends('layouts.app')

@section('content')
@if(!Auth::guest())
   <h1>Create Post</h1>
   

   <form action="{{action('PostController@store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="title">Title:</label>
    <input type="text" id="title" class="form-control" name="title"><br><br>
    <label for="body">Body:</label>
    <textarea id="body" name="body" rows="4" cols="50" class="form-control"></textarea><br><br>
    <input type="file" name="cover_image"><br><br>

    <input type="submit" value="Submit" class="btn btn-primary">
  </form>

   {{-- {!! Form::open(['action'=>'PostController@store','method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
   @csrf
    <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title','',['class'=>'form-control' , 'placeholder'=>'Title'])}}
    </div>
    <div class="form-group"> 
        {{Form::label('body','Body')}}
        {{Form::textarea('body','',['class'=>'form-control' , 'placeholder'=>'Body'])}}
    </div>
    <div class="form-group">
        {{Form::file('cover_image')}}
    </div>
    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
   {!! Form::close() !!} --}}
   @else
   <h1>You are not allowed</h1>
   @endif
@endsection