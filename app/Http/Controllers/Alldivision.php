<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

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
        $response = DB::select('select * from alldivisions where name like \'' . $cur_char . '%\'');
        $resType = new ResponseType($cur_char, $response);
        array_push($divisions, $resType);
        
      }
      
      return view('allldivisionn',['divisions'=>$divisions]);
   }

   
}

