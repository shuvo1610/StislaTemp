<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function home()
    {
       return view('dashboard');
    }



    public function create()
    {
    	return view('employee.create');
    }

    public function store(Request $request)
    {
    	$employee = Employee::create($request->all());
    	return redirect()->route('employee.index');
    }

    public function show()
    {
    	$data =[
            'key'=>Employee::all()

                ];

        return view('employee.index',$data);
    }

    public function edit($id)
    {
        $data=[

        'employee'=>Employee::find($id)

    ];
        return view('employee.update',$data);
    }

    public function update(Request $request,$id)
    {
        $employee = Employee::find($id);
        $employee->name = $request->name;
        $employee->phone = $request->phone;
        $employee->email = $request->email;
        $employee->address = $request->address;
        $employee->salary = $request->salary;
       $employee->save();

       return redirect()->route('employee.index');
       }


    public function destroy($id)
    {
        $employee = Employee::destroy($id);
        employee::where('id',$id)->delete();
        return back();
    }

   public function profile($id)
    {
        $data=[
            'employees'=>Employee::find($id)
        ];
        return view('employee.profile',$data);
    }
}
