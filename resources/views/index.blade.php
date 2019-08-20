 @extends('layouts.app')
 @section('content')

<h1>Posts</h1>
@if(count($post)>0)
    <ul class="list-group">
   @foreach($post as $posts)
    <li class="list-group-item"><h4> <a href="/posts/{{$posts->id}}">{{$posts->title}}</a></h4></li>
    </ul>   
         

       
          
      
     

   @endforeach
  @else 
  <h2> no post found</h2>

@endif


@endsection