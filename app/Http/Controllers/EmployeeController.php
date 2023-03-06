<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $employee = Employee::all();
        // dd($employee);
        return view('index', compact('employee'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }
    
    public function store(Request $request)
    {
        $storeData = $request->validate([
            'name' => 'required|max:255',
            'user_name' => 'required|max:255',
            'designation' => 'required|max:255',
            'functional_designation' => 'required|max:255',
            'department' => 'required|max:255',
            'brance' => 'required|max:255',
            'gender' => 'required|max:10',
            'phone' => 'required|numeric',
            'ip_phone' => 'required|numeric',
            'office_phone' => 'required|numeric',
            'pabx_phone' => 'required|numeric',
            'dob' => 'required|max:16',

            'email' => 'required|max:255',
        
            'password' => 'required|max:255',
        ]);
        $employee = Employee::create($storeData);
        return redirect('/employees')->with('completed', 'Employee has been saved!');
    }
    
    public function show($id)
    {
        
    }
    
    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        return view('edit', compact('employee'));
    }
    
    public function update(Request $request, $id)
    {
        $updateData = $request->validate([
            'name' => 'required|max:255',
            'user_name' => 'required|max:255',
            'designation' => 'required|max:255',
            'functional_designation' => 'required|max:255',
            'department' => 'required|max:255',
            'brance' => 'required|max:255',
            'gender' => 'required|max:10',
            'phone' => 'required|numeric',
            'ip_phone' => 'required|numeric',
            'office_phone' => 'required|numeric',
            'pabx_phone' => 'required|numeric',
            'dob' => 'required|max:16',

            'email' => 'required|max:255',
        
            'password' => 'required|max:255',
        ]);
        Employee::whereId($id)->update($updateData);
        return redirect('/emloyees')->with('completed', 'Employee has been updated');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();
        return redirect('/')->with('completed', 'employee has been deleted');
    }
}