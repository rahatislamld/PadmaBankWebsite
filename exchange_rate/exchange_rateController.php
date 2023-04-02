<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Yajra\Datatables\Datatables;
use App\Models\exchange_rate;


class exchange_rateController extends Controller
{

    public function index()
    {
        
        $links = exchange_rate::all();
        // dd($applink);
        return view('index1', compact('links'));
    }
    
    public function create()
    {
      
        return view('create1');
    }

    public function store(Request $request)
    {
        $exchange_rate = new exchange_rate;
        $exchange_rate->currency = $request->input('currency');
        $exchange_rate->tt_buy = $request->input('tt_buy');
        $exchange_rate->tt_sell = $request->input('tt_sell');

        // dd($applink);
       
       
        $exchange_rate->save();

        // SAVE THE DATA
      

        return redirect()->route('exchange_rates')->with('success','Exchange_rates has been created successfully.');
    }

    public function show($id)
    {

    }
    public function edit($id)
    {
        $exchange_rate = exchange_rate::findOrFail($id);
        return view('edit', compact('exchange_rate'));
    }

    public function update(Request $request)
    {
        $exchange_rate = new exchange_rate;
        $exchange_rate->currency = $request->input('currency');
        $exchange_rate->tt_buy = $request->input('tt_buy');
        $exchange_rate->tt_sell = $request->input('tt_sell');

        // dd($applink);
       
       
        $exchange_rate->save();

        // SAVE THE DATA
      

        return redirect()->route('exchange_rates')->with('success','Exchange_rates has been Updated successfully.');
    }

    
    public function destroy($id)
    {
        $exchange_rate = exchange_rate::findOrFail($id);
       
        $exchange_rate->delete();
        return redirect()->route('exchange_rates')->with('success','exchange_rates has been created successfully.');
    }
 
}
