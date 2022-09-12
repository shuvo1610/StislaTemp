@extends('layouts.master')
@section('contant')
 <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Form Validation</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="{{route('dashboard')}}">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="{{route('employee.create')}}">Forms</a></div>
              <div class="breadcrumb-item">Form Validation</div>
            </div>
          </div>
         <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <form action="{{ route('employee.store') }}" method="POST">@csrf
                    <div class="card-header">
                      <h5>Add Employee</h5>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" required="">
                      </div>
                      <div class="form-group">
                        <label>Phone</label>
                        <input type="ph" class="form-control" name="phone" required="">
                      </div>
                      <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email">
                      </div>
                      <div class="form-group ">
                        <label>Address</label>
                        <input type="text" class="form-control" name="address">
                      </div> 

                      <div class="form-group ">
                        <label>Salary</label>
                        <input type="number" class="form-control" name="salary">
                      </div>
                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary">Submit</button>
                    </div>
                  </form>
                </div>
              </div>
          </div>
        </div>
@endsection