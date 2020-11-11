@extends('layouts.main')

@section('content')

<div class='card'>
    <div class="card-header">
        Create Product
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
                <input type="text" name="city" placeholder="Enter City" class="form-control">
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

<div class="card">
    <div class="card-header">
        <h3>All Companies</h3>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Code</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Country</th>
                    <th>Created at</th>
                    <th>Updated at</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($companies as $company)
                <tr>
                    <td>{{$company->id}}</td>
                    <td>{{$company->name}}</td>
                    <td>{{$company->code}}</td>
                    <td>{{$company->address}}</td>
                    <td>{{$company->city}}</td>
                    <td>{{$company->country}}</td>
                    <td>{{$company->created_at}}</td>
                    <td>{{$company->updated_at}}</td>
                    <td>
                        <a href="/companies/delete?company_id={{ $company->id }}" class="btn btn-danger">Delete</a>
                        <a href="/companies/edit?company_id={{ $company->id }}" class="btn btn-success">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>



@endsection