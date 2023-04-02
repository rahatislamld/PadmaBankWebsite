@extends('_template_adm.master')

@php
    $pagetitle = ucwords(lang('Exchange_rate', $translation));
    $link_get_data = route('admin.department.get_branches');
    $link_get_data_dept = route('admin.unit.get_depts');
    $link_get_data_unit = route('admin.unit.get_units');
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

                        <form class="form-horizontal form-label-left"   action="{{ route('exchange_rates.store') }}"  method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group vinput_main_branch">
                                <label  class="control-label col-md-3 col-sm-3 col-xs-12">
                                    Currency
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" class="form-control" 
                                name="currency" aria-label="First name">
                                </div>
                            </div>
                            <div class="form-group vinput_main_branch">
                                <label  class="control-label col-md-3 col-sm-3 col-xs-12">
                                    TT(Buy)
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="number"  step="0.01" class="form-control" 
                                name="tt_buy" >
                                </div>
                            </div>
                            <div class="form-group vinput_main_branch">
                                <label  class="control-label col-md-3 col-sm-3 col-xs-12">
                                    TT(Sell)
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="number"  step="0.01" class="form-control" 
                                name="tt_sell" aria-label="First name">
                                </div>
                            </div>
                            <div class="control-label col-md-3 col-sm-3 col-xs-12">
                            <button  type="submit" class="btn btn-danger">Submit</button>
                            </div>


                            {{-- <center>
                            <div>
                            Name :<input type="text" class="form-control" placeholder="First name"
                                name="name" aria-label="First name">
                                <div>
                                </center> --}}
                        </form>
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

    <script>
        // Initialize Select2
        $('.select2').select2();
    </script>


    {{-- <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script> --}}

    <script>
        jQuery(document).ready(function() {
            jQuery('#divisions').change(function() {
                let div_id = jQuery(this).val();
                // alert(div_id);

                jQuery.ajax({
                    url: '{{ $link_get_data }}',
                    type: 'post',
                    data: 'div_id=' + div_id + '&_token={{ csrf_token() }}',
                    success: function(result) {
                        jQuery('#branches').html(result)
                    }
                });
            });

            jQuery('#branches').change(function() {
                let sid = jQuery(this).val();
                jQuery.ajax({
                    url: '{{ $link_get_data_dept }}',
                    type: 'post',
                    data: 'sid=' + sid + '&_token={{ csrf_token() }}',
                    success: function(result) {
                        jQuery('#depts').html(result)
                    }
                });
            });

            jQuery('#depts').change(function() {
                let sid = jQuery(this).val();
                jQuery.ajax({
                    url: '{{ $link_get_data_unit }}',
                    type: 'post',
                    data: 'sid=' + sid + '&_token={{ csrf_token() }}',
                    success: function(result) {
                        jQuery('#units').html(result)
                    }
                });
            });

        });
    </script>
@endsection
