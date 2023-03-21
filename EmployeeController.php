<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\File;

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
        $employee = new Employee;
        $employee->name = $request->input('name');
        $employee->user_name = $request->input('user_name');
        $employee->designation = $request->input('designation');
        $employee->functional_designation = $request->input('functional_designation');
        $employee->brance = $request->input('brance');
        $employee->department = $request->input('department');
        $employee->gender= $request->input('gender');
        $employee->dob = $request->input('dob');
        $employee->phone= $request->input('phone');
        $employee->pabx_phone = $request->input('pabx_phone');
        $employee->office_phone = $request->input('office_phone');
        $employee->ip_phone = $request->input('ip_phone');
        $employee->email = $request->input('email');
        $employee->password = $request->input('password');
        
        if($request->hasfile('profile_image'))
        {
            $file = $request->file('profile_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/employees/', $filename);
            $employee->profile_image = $filename;
        }
        $employee->save();
        return redirect()->route('employees.index')->with('success','Employee has been created successfully.');
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
        $employee = Employee::findOrFail($id);
        $employee->name = $request->input('name');
        $employee->user_name = $request->input('user_name');
        $employee->designation = $request->input('designation');
        $employee->functional_designation = $request->input('functional_designation');
        $employee->brance = $request->input('brance');
        $employee->department = $request->input('department');
        $employee->gender= $request->input('gender');
        $employee->dob = $request->input('dob');
        $employee->phone= $request->input('phone');
        $employee->pabx_phone = $request->input('pabx_phone');
        $employee->office_phone = $request->input('office_phone');
        $employee->ip_phone = $request->input('ip_phone');
        $employee->email = $request->input('email');
        $employee->password = $request->input('password');

        if($request->hasfile('profile_image'))
        {
            $destination = 'uploads/employees/'.$employee->profile_image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('profile_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/students/', $filename);
            $employee->profile_image = $filename;
        }

        // dd($id);

        $employee->update();
        return redirect()->route('employees.index')->with('success','Employee has been created successfully.');
    }

    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $destination = 'uploads/employees/'.$employee->profile_image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $employee->delete();
        return redirect('/')->with('completed', 'employee has been deleted');
    }
}