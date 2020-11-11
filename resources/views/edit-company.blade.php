@extends('layouts.main')

@section('content')

<div class="card">
    <div class="card-header">
        <h3>Edit Company</h3>
    </div>

    <form action="/companies/update">

        <div class="card-body">
            <input style="visibility: hidden;" type="number" name="id" placeholder="id" value="{{ $companies->id }}" class="form-control">

            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" placeholder="Enter Name" value="{{ $companies->name }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Code</label>
                <input type="number" name="code" placeholder="Enter code" value="{{ $companies->code }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Address</label>
                <input type="text" name="address" placeholder="Enter address" value="{{ $companies->address }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="">city</label>
                <input type="text" name="city" placeholder="Enter city" value="{{ $companies->city }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Country</label>
                <input type="text" name="country" placeholder="Enter country" value="{{ $companies->country }}" class="form-control">
            </div>

        </div>




        <div class="card-footer">
            <button class="btn btn-success">Save Edits!</button>
        </div>

    </form>





</div>

@endsection