@extends('layouts.app')

@section('content')
   <h1>Edit Post</h1>
   <form action="{{action('PostController@update',$post->id)}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <label for="title">Title:</label>
    <input type="text" id="title" class="form-control" value="{{$post->tilte}}" name="title" placeholder="Title"><br><br>
    <label for="body">Body:</label>
    <textarea id="body" name="body" rows="4" cols="50" class="form-control">{{$post->body}}</textarea><br><br>
   <input type="file" name="cover_image" value="{{'cover_image'}}"><br><br>
    

    <input type="submit" value="Submit" class="btn btn-primary">
  </form>
   {{-- {!! Form::open(['action'=>['PostController@update',$post->id],'method'=>'POST','enctype'=>'multipart/form-data']) !!}
   @csrf 
   <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title',$post->title,['class'=>'form-control' , 'placeholder'=>'Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::textarea('body',$post->body,['class'=>'form-control' , 'placeholder'=>'Body'])}}
    </div>
    <div class="form-group">
        {{Form::file('cover_image')}}
    </div>
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
   {!! Form::close() !!}, --}}
@endsection 