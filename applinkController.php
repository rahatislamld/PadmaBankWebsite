<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Yajra\Datatables\Datatables;
use App\Models\applink;


class applinkController extends Controller
{

    public function index()
    {
        
        $links = applink::all();
        // dd($applink);
        return view('index', compact('links'));
    }
    
    public function create()
    {
      
        return view('create');
    }

    public function store(Request $request)
    {
        $applink = new Applink;
        $applink->name = $request->input('name');
        $applink->link = $request->input('link');

        // dd($applink);
       
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/applinks/', $filename);
            $applink->image = $filename;
        }
        $applink->save();

        // SAVE THE DATA
      

        return redirect()->route('applinks')->with('success','Applinks has been created successfully.');
    }

    public function show($id)
    {

    }
    
    public function destroy($id)
    {
        $applink = applink::findOrFail($id);
        $destination = 'uploads/applinks/'.$applink->image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $applink->delete();
        return redirect()->route('applinks')->with('success','Applinks has been created successfully.');
    }
 
}
