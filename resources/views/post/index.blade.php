@extends('layouts.app')
@section('content')
<h1>{{$page}}</h1>



@foreach($posts as $post)
<div class="card mx-auto" style="width: 18rem;">
  <img src="{{asset('upload/'.$post->image)}}" alt="image">
  <div class="card-body">
    <h5 class="card-title">{{$post->title}}</h5>
    <p class="card-text">{{Str::limit($post->description, 100)}}</p>
    <a href="{{route('showpost',['id'=>$post->id])}}" class="btn btn-primary">Show Details</a>
  </div>
  
</div>
@endforeach

  <div class="col-2 mt-3 mx-auto ">
    {{$posts->links()}}
  </div>
  



@endsection