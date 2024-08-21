@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-md-6 mx-auto mt-3">
        <form class="needs-validation" novalidate>
            <div class="form-row">
              <div class="col-md-4 mb-3">
                <label for="validationCustom01">First name</label>
                <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Mark" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-4 mb-3">
                <label for="validationCustom01">Description</label>
                <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Enter the Post Description"></textarea>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
            </div>
            <button class="btn btn-primary" type="submit">Save</button>
          </form>
          
          
    </div>
</div>
@endsection