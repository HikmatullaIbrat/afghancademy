@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-md-6 mx-auto mt-3">
        <form class="needs-validation" action="{{route('admin.store')}}" method="post" novalidate enctype="multipart/form-data">
          @csrf
            <div class="form-row">
              <div class="col-md-4 mb-3">
                <label for="validationCustom01">Title</label>
                <input type="text" name="title" class="form-control" id="validationCustom01" placeholder="Enter Post tile" value="Mark" required>
                @error('title')
                      <p class="text-danger">{{$message}}</p>
                @enderror
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-4 mb-3">
                <label for="validationCustom01">Image</label>
                <input type="file" name="image" src="" alt="" class="form-contrl" required>
                @error('image')
                      <p class="text-danger">{{$message}}</p>
                @enderror
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-4 mb-3">
                <label for="validationCustom01">Description</label>
                <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Enter the Post Description"></textarea>
                @error('description')
                <p class="text-danger">{{$message}}</p>
                @enderror
              </div>
            </div>
            <button class="btn btn-primary" type="submit">Save</button>
          </form>
          
          
    </div>
</div>
@endsection