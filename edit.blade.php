
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
      <form method="post" action="{{ route('employees.update') }}">
        @csrf
        <div class="row">
            
            <div class="col">
             <input type="text" class="form-control" placeholder="First name" name="name" value="{{ $employee->name }}"aria-label="First name">
            </div>
            
            <div class="col">
              <input type="text" class="form-control" placeholder="User name" name="user_name" value="{{ $employee->user_name }}"aria-label="Last name">
            </div>
          </div>
          <div class="row">
        
            <div class="col">
              <input type="text" class="form-control" placeholder="Brance" name="brance" value="{{ $employee->brance }}" aria-label="First name">
            </div>
            
            <div class="col">
              <input type="text" class="form-control" placeholder="Department" name="department" value="{{ $employee->department }}"aria-label="Last name">
            </div>
          </div>
          <div class="row">
            
            <div class="col">
              <input type="text" class="form-control" placeholder="Designation" name="designation" value="{{ $employee->designation }}"aria-label="First name">
            </div>
            
            <div class="col">
              <input type="text" class="form-control" placeholder="FunctionalDesignation" name="functional_designation" value="{{ $employee->functional_designation }}"aria-label="Last name">
            </div>
          </div>
          <div class="row">
            <div class="col">
              <input type="text" class="form-control" placeholder="Gender" name="gender" value="{{ $employee->gender }}"aria-label="First name">
            </div>
            <div class="col">
              <input type="date" class="form-control" placeholder="DOB" name="dob" value="{{ $employee->dob }}"aria-label="Last name">
            </div>
          </div>
          <div class="row">
            <div class="col">
              <input type="tel" class="form-control" placeholder="Phone" name="phone"value="{{ $employee->phone }}"aria-label="First name">
            </div>
            <div class="col">
              <input type="tel" class="form-control" placeholder="Officephone" name="office_phone" value="{{ $employee->office_phone }}" aria-label="Last name">
            </div>
          </div>
          <div class="row">
            <div class="col">
              <input type="tel" class="form-control" placeholder="Ip phone" name="ip_phone" value="{{ $employee->ip_phone }}"aria-label="First name">
            </div>
            <div class="col">
              <input type="tel" class="form-control" placeholder="Pabx Phone" name="pabx_phone" value="{{ $employee->pabx_phone }}"aria-label="Last name">
            </div>
          </div>
          <div class="row">
            <div class="col">
              <input type="email" class="form-control" placeholder="Email" name="email"  value="{{ $employee->email }}" aria-label="First name">
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Password" name="password" value="{{ $employee->passsword }}"aria-label="Last name">
            </div>
          </div>
          <br>
          <button type="submit" class="btn btn-danger">Update User</button>
      </form>
  </div>
</div>
@endsection