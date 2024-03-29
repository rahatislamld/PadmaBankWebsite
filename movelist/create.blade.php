{{-- <html>  
<head>  
 <script src="js/jquery.js" type="text/javascript"></script>  
 <script type="text/javascript">  
  $().ready(function() {  
   $('#add').click(function() {  
    return !$('#select1 option:selected').remove().appendTo('#select2');  
   });  
   $('#remove').click(function() {  
    return !$('#select2 option:selected').remove().appendTo('#select1');  
   });  
  });  
 </script>  

 <style type="text/css">  
  a {  
   display: block;  
   border: 1px solid #aaa;  
   text-decoration: none;  
   background-color: #fafafa;  
   color: #123456;  
   margin: 2px;  
   clear:both;  
  }  
  div {  
   float:left;  
   text-align: center;  
   margin: 10px;  
  }  
  select {  
   width: 100px;  
   height: 80px;  
  }  
 </style>  

</head>  

<body>  
 <div>  
  <select multiple id="select1">  
   <option value="1">Option 1</option>  
   <option value="2">Option 2</option>  
   <option value="3">Option 3</option>  
   <option value="4">Option 4</option>  
  </select>  
  <a href="#" id="add">add &gt;&gt;</a>  
 </div>  
 <div>  
  <select multiple id="select2"></select>  
  <a href="#" id="remove">&lt;&lt; remove</a>  
 </div>  
</body>  
</html>  --}}

@extends('_template_adm.master')

@php
    $pagetitle = ucwords(lang('CHO', $translation));
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

                        <div class="OneOfTwo" style="width:60%">
                            <div style="float:left;">
                            <strong>Select 1.</strong><br />
                            <select id="available" size="5" multiple="multiple" style="width: 270px;" class="select2">
                            <option>item1</option>
                            <option>item2</option>
                            <option>item3</option>
                            <option>item4</option>
                            <option>item5</option>
                            </select>
                            </div>
                            <div style="float:left;height:50px;padding-top:30px;">
                            <input type="button" class="testButton" value="<" onclick="swapElement('selected','available')" /><br />
                            <input type="button" class="testButton" value=">" onclick="swapElement('available','selected')" style="padding-left:12px;" />
                            </div>
                            <div style="float:left;">
                            <strong>Select 2.</strong><br />
                            <select id="selected" size="5" multiple="multiple" style="width: 170px;">
                            </select>
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

    <script>
        // Initialize Select2
        $('.select2').select2();
    </script>

<script>
    function swapElement(fromList,toList){
        var selectOptions = document.getElementById(fromList);
        for (var i = 0; i < selectOptions.length; i++) {
            var opt = selectOptions[i];
            if (opt.selected) {
                document.getElementById(fromList).removeChild(opt);
                document.getElementById(toList).appendChild(opt);
                i--;
            }
        }
    }
    </script> 
    {{-- <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script> --}}

   
@endsection
