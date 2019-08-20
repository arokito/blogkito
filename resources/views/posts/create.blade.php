@extends('layouts.app')

@section('content')


         {!!Form::open(['action'=>'PostController@store', 'method'=>'POST']) !!}
         {{ csrf_field() }}
         <div class="form-group">
           {{Form::label('title','Title')}}
           {{Form::text('title','',['class'=>'form-control','placeolder'=>'Title'])}}
        </div>
        <div class="form-group">
                {{Form::label('body','Body')}}
                {{Form::textarea('body','',['class'=>'form-control','placeolder'=>'Body'])}}
             </div>
             {{Form::submit('submit',['class'=>'btn btn-primary'])}}
         {!!Form::close() !!}
@endsection