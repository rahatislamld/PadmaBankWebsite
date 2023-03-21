
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
                        
                        <table class="table">
                            <thead>
                                <tr class="table table-bordered">
                                  <th>ID</th>
                                  <th>ProfileImage</th>
                                  <th>Name</th>
                                  <th>UserName</th>
                                  <th>Designation</th>
                                  <th>Functional_Designation</th>
                                  <th>Branch</th>
                                  <th>Department</th>
                                  <th>Phone</th>
                                  <th>OficePhone</th>
                                  <th>IP_Phone</th>
                                  <th>PabxPhone</th>
                                  <th>DOB</th>
                                  <th>Gender</th>
                                  <th>Email</th>
                                  <th>Password</th>
                                  <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($employee as $employees)
                                <tr>
                                    <td>{{$employees->id}}</td>
                                    <td>
                                      <img src="{{ asset('uploads/employees/'.$employees->profile_image) }}" width="70px" height="70px" alt="Image">
                                  </td>
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
                                        <a href="{{ route('employees.edit', $employees->id)}}"   class="btn btn-primary btn-sm">Edit</a>
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