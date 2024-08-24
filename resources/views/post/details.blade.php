@extends('layouts.app')
@section('content')


<div class="card mx-auto" style="width: 18rem;">
  {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
  <img class="card-img-top" src="{{asset('upload/'.$post_details->image)}}" alt="image">
  <div class="card-body">
    <h5 class="card-title">{{$post_details->title}}</h5>
    <p class="card-text">{{$post_details->description}}</p>
  </div>
  
</div>



@endsection