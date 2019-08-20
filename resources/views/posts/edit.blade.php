@extends('layouts.app')

@section('content')


    

{!!Form::open(['action'=>['PostController@update',$post->id] ,'method'=>'POST']) !!}
@method('PUT')
{{csrf_field()}}
<div class="form-group">
{{Form::label('title','Title')}}
{{Form::text('title',$post->title,['class'=>'form-control'])}}
</div>
<div class="form-group">
    {{Form::label('body','Body')}}
    {{Form::textarea('title',$post->body,['class'=>'form-control'])}}
</div>
{{Form::submit('send',['class'=>'btn btn-primary'])}}
    {!!Form:: close() !!}

@endsection