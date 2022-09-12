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
            <h3 class="card-title">Employee profile</h3>
          </div>
            <div class="card-body">
              <table class="table table-stripe">
                <thead>
                  <tr>
                  
                    <td>Name</td><br>
                    <td>Phone</td><br>
                    <td>Email</td><br>
                    <td>Address</td><br>
                    <td>Salary</td><br>
                  </tr>
                </thead>
                     <tr>
                        <td>{{ $employees->name }}</td>
                        <td>{{ $employees->phone }}</td>
                        <td>{{ $employees->email }}</td>
                        <td>{{ $employees->address }}</td>
                        <td>{{ $employees->salary }}</td>
                      </tr>
             
             </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>

@endsection