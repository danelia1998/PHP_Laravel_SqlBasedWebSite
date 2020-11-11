@extends('layouts.main')


@section('content')


<div class='card'>
  <div class="card-header">
    Create Company!
  </div>
  <form action="/companies/store" method="post">
    @csrf
    <div class="card-body">
      <div class="form-group">
        <label for="">Name</label>
        <input type="text" name="name" placeholder="Enter Name" class="form-control">
      </div>

      <div class="form-group">
        <label for="">Code</label>
        <input type="number" name="code" placeholder="Enter Code" class="form-control">
      </div>

      <div class="form-group">
        <label for="">Address</label>
        <input type="text" name="address" placeholder="Enter Address" class="form-control">
      </div>

      <div class="form-group">
        <label for="">City</label>
        <input type="text" name="city" placeholder="Enter License City" class="form-control">
      </div>

      <div class="form-group">
        <label for="">Country</label>
        <input type="text" name="country" placeholder="Enter Country" class="form-control">
      </div>

    </div>
    <div class="card-footer">
      <button class="btn btn-success">
        Save
      </button>
      <button type="reset" class="btn btn-danger">
        Cancel
      </button>
    </div>
  </form>

</div>

@endsection