
@extends('_template_adm.master')

@php
    $pagetitle = ucwords(lang('department', $translation));
    $link_get_data = route('admin.department.get_branches');
    if (isset($data)) {
        $pagetitle .= ' (' . ucwords(lang('edit', $translation)) . ')';
        $link = route('admin.department.do_edit', $data->id);
    } else {
        $pagetitle .= ' (' . ucwords(lang('new', $translation)) . ')';
        $link = route('admin.department.do_create');
        $data = null;
    }

@endphp

@section('title', $pagetitle)

@section('content')
    <div class="">
        <!-- message info -->
        @include('_template_adm.message')

        <div class="page-title">
            <div class="title_left">
                <h3>{{ $pagetitle }}</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>{{ ucwords(lang('form details', $translation)) }}</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        
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
                               
                                <form method="post" action="{{ route('employees.store') }}" enctype="multipart/form-data">
                                  @csrf
                                  <div class="form-row">
                                    
                                    <div class="form-group col-md-6">
                                        <label for="inputState">Name</label>
                                     <input type="text" class="form-control" placeholder="First name" name="name" aria-label="First name">
                                    </div>
                                    
                                    <div class="form-group col-md-6">
                                        <label for="inputState">userName</label>
                                      <input type="text" class="form-control" placeholder="User name" name="user_name" aria-label="Last name">
                                    </div>
                                  </div>
                                 
                                  <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputState">Branch</label>
                                        <input type="text" class="form-control" placeholder="Brance" name="brance"  aria-label="First name">
                                       
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputState">Department</label>
                                        <input type="text" class="form-control" placeholder="Department" name="department" aria-label="Last name">
                                        
                                    </div>
                                </div>
                                  <div class="form-row">
                                    
                                    <div class="form-group col-md-6">
                                        <label for="inputState">Designation</label>
                                      <input type="text" class="form-control" placeholder="Designation" name="designation" aria-label="First name">
                                    </div>
                                    
                                    <div class="form-group col-md-6">
                                        <label for="inputState">Functional Designation</label>
                                      <input type="text" class="form-control" placeholder="FunctionalDesignation" name="functional_designation" aria-label="Last name">
                                    </div>
                                  </div>
                                  <div class="form-row">
                                    <div class="form-group col-md-6" col-md-6>
                                        <label for="inputState">Gender</label>
                                      <input type="text" class="form-control" placeholder="Gender" name="gender" aria-label="First name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputState">DOB</label>
                                      <input type="date" class="form-control" placeholder="DOB" name="dob" aria-label="Last name">
                                    </div>
                                  </div>
                                  <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputState">Mobile</label>
                                      <input type="tel" class="form-control" placeholder="Phone" name="phone"aria-label="First name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputState">Office phone</label>
                                      <input type="tel" class="form-control" placeholder="Officephone" name="office_phone"  aria-label="Last name">
                                    </div>
                                  </div>
                                  <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputState">IP Phone</label>
                                      <input type="tel" class="form-control" placeholder="Ip phone" name="ip_phone" aria-label="First name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputState">PABX Phone</label>
                                      <input type="tel" class="form-control" placeholder="Pabx Phone" name="pabx_phone"aria-label="Last name">
                                    </div>
                                  </div>
                                  <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputState">Email</label>
                                      <input type="email" class="form-control" placeholder="Email" name="email"  aria-label="First name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputState">Password</label>
                                      <input type="text" class="form-control" placeholder="Password" name="password" aria-label="Last name">
                                    </div>
                                  </div>
                                  <div class="form-row">
                                    
                                    <div class="form-group col-md-6">
                                        <label for="inputState">Profile Image</label>
                                      <input type="file" name="profile_image"  class="form-control">
                                     
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputState">Joining Date</label>
                                      <input type="date" name="joining_date"  class="form-control">
                                     
                                    </div>
                                  </div>
                                    <br>
                                    <button type="submit" class="btn btn-danger">Create User</button>
                                  </form>
                                
                            </div>
                          </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <!-- Switchery -->
    @include('_form_element.switchery.css')
    <!-- Select2 -->
    @include('_form_element.select2.css')
@endsection

@section('script')
    <!-- Switchery -->
    @include('_form_element.switchery.script')
    <!-- Select2 -->
    @include('_form_element.select2.script')


@endsection