@extends('layouts.master')
@section('contant')
<div class="main-content" style="min-height: 482px;">
<section class="section">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Employee Information</h3>
          </div>
            <div class="card-body">
              <table class="table table-stripe">
                <thead>
                  <tr>
                    <td>#</td>
                    <td>Name</td>
                    <td>Phone</td>
                    <td>Email</td>
                    <td>Address</td>
                    <td>Salary</td>
                    <td>Action</td>
                  </tr>
                </thead>
                 @foreach($key as $employee)
                      <tr>
                         <td>{{ $employee->id }}</td>
                        <td>{{ $employee->name }}</td>
                        <td>{{ $employee->phone }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->address }}</td>
                        <td>{{ $employee->salary }}</td>
                        <td>
                          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Action
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="{{route('employee.edit',['id'=>$employee->id])}}">Edit</a>
              <a class="dropdown-item" href="{{route('employee.delete',['id'=>$employee->id])}}">Delete</a>
              <a class="dropdown-item" href="{{route('employee.profile',['id'=>$employee->id])}}">View</a>
            </div>
          </div>
            </td>
                      </tr>
                      @endforeach
             </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>

@endsection
