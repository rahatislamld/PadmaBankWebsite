<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Sub_branch {
    public $id;
    public $name;
    public $sub_branches;
    function __construct($id, $name, $sub_branches) {
        $this->id = $id;
        $this->name = $name;
        $this->sub_branches = $sub_branches;
    }
}

class ResponseType{
    public $char;
    public $branches;

    function __construct($char, $branches) {
        $this->char = $char;
        $this->branches = $branches;
    }
    function get_name() {
        return $this->name;
    }
}

class AllBranch extends Controller {

    private function printHelper($var) {
        echo $var->char;
        echo "<br>";
        foreach($var->branches as $br){
            echo $br->name;
            echo "<br>";
        }
        echo "<br>";
       }

   public function index() {
      $branches = [];
      foreach( range('a', 'z') as $cur_char ){
        $responses = DB::select('select * from allbranches where name like \'' . $cur_char . '%\'');
        $sub_branches = [];
        foreach($responses as $branch){
            $br_id = $branch->id;
            $sub_br = DB::select('select * from sub_branches where branch_id='.$br_id);
            $temp = new Sub_branch($branch->id,$branch->name, $sub_br);
            array_push($sub_branches, $temp);
            // if($depts) echo $depts[0]->name;
        }
        // foreach ($responses->brision_id as $brision_id) {
        //     # code...
        //     $depts = DB::select('select * from department where brision_id='.$brision_id);
        //     echo $depts[0];
        // }

        $resType = new ResponseType($cur_char, $sub_branches);
        array_push($branches, $resType);
      }
      //dd($branches[0]);
      return view('alllbranches',['branches'=>$branches]);
   }

   
}