<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['name','user_name','designation','brance','department','functional_designation','gender','phone','pabx_phone','dob' ,'email', 'office_phone','ip_phone' ,'password'];
}
