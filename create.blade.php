
@extends('layout')
@section('content')
<style>
    .container {
      max-width: 450px;
    }
    .push-top {
      margin-top: 50px;
    }
</style>
<div class="card push-top">
  <div class="card-header">
    Add Employee
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('employees.store') }}">
        @csrf
        <div class="row">
            
            <div class="col">
             <input type="text" class="form-control" placeholder="First name" name="name"aria-label="First name">
            </div>
            
            <div class="col">
              <input type="text" class="form-control" placeholder="User name" name="user_name" aria-label="Last name">
            </div>
          </div>
          <div class="row">
        
            <div class="col">
              <input type="text" class="form-control" placeholder="Brance" name="brance" aria-label="First name">
            </div>
            
            <div class="col">
              <input type="text" class="form-control" placeholder="Department" name="department"aria-label="Last name">
            </div>
          </div>
          <div class="row">
            
            <div class="col">
              <input type="text" class="form-control" placeholder="Designation" name="designation" aria-label="First name">
            </div>
            
            <div class="col">
              <input type="text" class="form-control" placeholder="FunctionalDesignation" name="functional_designation"aria-label="Last name">
            </div>
          </div>
          <div class="row">
            <div class="col">
              <input type="text" class="form-control" placeholder="Gender" name="gender" aria-label="First name">
            </div>
            <div class="col">
              <input type="date" class="form-control" placeholder="DOB" name="dob" aria-label="Last name">
            </div>
          </div>
          <div class="row">
            <div class="col">
              <input type="tel" class="form-control" placeholder="Phone" name="phone"aria-label="First name">
            </div>
            <div class="col">
              <input type="tel" class="form-control" placeholder="Officephone" name="office_phone" aria-label="Last name">
            </div>
          </div>
          <div class="row">
            <div class="col">
              <input type="tel" class="form-control" placeholder="Ip phone" name="ip_phone"aria-label="First name">
            </div>
            <div class="col">
              <input type="tel" class="form-control" placeholder="Pabx Phone" name="pabx_phone"aria-label="Last name">
            </div>
          </div>
          <div class="row">
            <div class="col">
              <input type="email" class="form-control" placeholder="Email" name="email" aria-label="First name">
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Password" name="password"aria-label="Last name">
            </div>
          </div>
          <br>
          <button type="submit" class="btn btn-danger">Create User</button>
      </form>
  </div>
</div>
@endsection