<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Department {
    public $id;
    public $name;
    public $departments;
    function __construct($id, $name, $departments) {
        $this->id = $id;
        $this->name = $name;
        $this->departments = $departments;
    }
}

class ResponseType{
    public $char;
    public $divisions;

    function __construct($char, $divisions) {
        $this->char = $char;
        $this->divisions = $divisions;
    }
    function get_name() {
        return $this->name;
    }
}

class Alldivision extends Controller {

    private function printHelper($var) {
        echo $var->char;
        echo "<br>";
        foreach($var->divisions as $div){
            echo $div->name;
            echo "<br>";
        }
        echo "<br>";
       }

   public function index() {
      $divisions = [];
      foreach( range('a', 'z') as $cur_char ){
        $responses = DB::select('select * from alldivisions where name like \'' . $cur_char . '%\'');
        $departments = [];
        foreach($responses as $division){
            $div_id = $division->id;
            $depts = DB::select('select * from departments where division_id='.$div_id);
            $temp = new Department($division->id,$division->name, $depts);
            array_push($departments, $temp);
            // if($depts) echo $depts[0]->name;
        }
        // foreach ($responses->division_id as $division_id) {
        //     # code...
        //     $depts = DB::select('select * from department where division_id='.$division_id);
        //     echo $depts[0];
        // }

        $resType = new ResponseType($cur_char, $departments);
        array_push($divisions, $resType);
      }
      //dd($divisions[0]);
      return view('allldivisionn',['divisions'=>$divisions]);
   }

   
}