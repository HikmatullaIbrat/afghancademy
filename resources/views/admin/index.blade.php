@extends('layouts.app')
@section('content')
<h1>Admin</h1>


    <div class="col-md-6">
        <a href="{{route('admin.create')}}" class="btn btn-primary mb-2">Creat Post</a>
        
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">title</th>
                <th scope="col">Description</th>
                <th scope="col">image</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($posts as $post)
              <tr>
            
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->description}}</td>
                <td><img src="{{asset('upload/'.$post->image)}}" alt="image"></td>
                <td>
                  <a href="{{route('admin.edit',['admin'=>$post->id])}}"><i class="fa fa-edit"></i></a>
                  |
                  <a href="{{route('delete',['id'=>$post->id])}}"><i class="fa fa-trash"></i></a>
                </td>
              </tr>
              @endforeach
              
            </tbody>
          </table>
    </div>

@endsection