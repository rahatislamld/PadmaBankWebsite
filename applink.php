<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class applink extends Model
{
    protected $table = 'applinks';

    protected $fillable = ['name','link','image'];
    
}
