@extends('layouts.app')
@section('content')  
  
<a href="/index" class ="btn btn-primary">go back </a>
@if(count($post)>0)
      <h1>{{$post->title}}</h1>
      <div>
      <h3>{{$post->body}}</h3>
      </div>
      <hr>
      <small>{{$post->created_at}}</small>
      <div class="text-left">
      <a href="/posts/{{$post->id}}/edit" class="btn btn-secondary"> Edit </a>
      </div>

      {!!Form::open(['action'=>['PostController@destroy',$post->id],'method'=>'POST', 'class'=>'text-right'])!!}
         @method('DELETE')
         {{form::submit('delete',['class'=>'btn btn-danger'])}}
      {!!Form::close()!!}
      
      @else
      <h2>no post found</h2>
   @endif
@endsection