@extends('layout')
@section('content')
<style>
  .push-top {
    margin-top: 50px;
  }
</style>
<div class="push-top">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table">
    <thead>
        <tr class="table-warning">
          <td>ID</td>
          <td>Name</td>
          <td>UserName</td>
          <td>Designation</td>
          <td>Functional_Designation</td>
          <td>Brance</td>
          <td>Department</td>
          <td>Phone</td>
          <td>OficePhone</td>
          <td>IP_Phone</td>
          <td>PabxPhone</td>
          <td>DOB</td>
          <td>Gender</td>
          <td>Email</td>
          <td>Password</td>
          <td class="text-center">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($employee as $employees)
        <tr>
            <td>{{$employees->id}}</td>
            <td>{{$employees->name}}</td>
            <td>{{$employees->user_name}}</td>
            <td>{{$employees->designation}}</td>
            <td>{{$employees->functional_designation}}</td>
            <td>{{$employees->brance}}</td>
            <td>{{$employees->department}}</td>
            <td>{{$employees->phone}}</td>
            <td>{{$employees->office_phone}}</td>
            <td>{{$employees->ip_phone}}</td>
            <td>{{$employees->pabx_phone}}</td>
            <td>{{$employees->dob}}</td>
            <td>{{$employees->gender}}</td>
            <td>{{$employees->email}}</td>
            <td>{{$employees->password}}</td>
            <td class="text-center">
                <a href="{{ route('employees.edit', $employees->id)}}" class="btn btn-primary btn-sm">Edit</a>
                <form action="{{ route('employees.destroy', $employees->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                  </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection