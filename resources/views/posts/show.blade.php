@extends('layouts.app')

@section('content')
{{-- <pre> 
@php 

    print_r($post->title);

    @endphp
</pre>     --}}

<a href="/posts" class="btn btn-default">Go Back</a>

    <h1>{{$post->title}}</h1>                           
    <div class="row">
        <div class="col-md-12">
            <img style="width:25%" src="/storage/cover_images/{{$post->cover_image}}" alt="">
        </div>
    </div>
    <p>{{$post->body}}</p>
    <hr>
    <small>Written On {{$post->created_at}}</small>
    <hr>
    
    
    @if(!Auth::guest())
    @if(Auth::user()->id==1)
    
        
    
    <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a> 
    {!!Form::open(['action'=>['PostController@destroy', $post->id], 'method'=>'POST', 'class' =>'pull-right'])!!}
    {{Form::hidden('_method','DELETE')}}
    {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
    {!!Form::close()!!}
   
    @elseif($post->user_id==Auth::user()->id)
  
        
    
    <a href="/pkproject/public/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a> 
    {!!Form::open(['action'=>['PostController@destroy', $post->id], 'method'=>'POST', 'class' =>'pull-right'])!!}
    {{Form::hidden('_method','DELETE')}}
    {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
    {!!Form::close()!!}
    
    
    

    @endif
    @endif 
@endsection