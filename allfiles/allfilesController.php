<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Admin\system\FilesController;

use Illuminate\Http\Request;
use App\Models\filetype;
use App\Models\files;

class allfilesController extends Controller
{
    
    public function index()
    {

        
        $filetypes = filetype::all();
        $data = (new FilesController)->categorize($filetypes);

        return view('general_user.allfiles', compact('data', 'filetypes'));
    
    }
}
