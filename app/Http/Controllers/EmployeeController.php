<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Carbon\Carbon;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class EmployeeController extends Controller
{
    public function EmployeeCreate(Request $request){
        $validate = $request->validate([
            'employee_name' => 'required',
            'designation_id' => 'required',
            'date_of_birth' => 'required',
        ]);

        Employee::insert([
'employee_name' => $request->employee_name,
'designation_id' => $request->designation_id,
'date_of_birth' => $request->date_of_birth,
'age' => Carbon::parse($request->date_of_birth)->age,

        ]);

        return redirect()->back()->with('success', 'employee data inserted successfully');
    }


    public function DataView(){
        $data = Employee::all();
        return view('employee_data', compact('data'));
    }

    public function Edit($id){
        $editdata = Employee::findOrFail($id);
        return view('edit_employee', compact('editdata'));
    }

    public function Update(Request $request, $id){
        Employee::findOrFail($id)->update([
            'employee_name' => $request->employee_name,
'designation_id' => $request->designation_id,
'date_of_birth' => $request->date_of_birth,
'age' => Carbon::parse($request->date_of_birth)->age,
        ]);

        return redirect()->route('employee.details')->with('success', 'employee data updated successfully');
      
    }

    public function Delete($id){
        Employee::findOrFail($id)->delete();

        return redirect()->back()->with('success', 'employee data deleted successfully');

    }

    public function Search(Request $request){
        $data = $request->search;
        $employee = Employee::where('employee_name', 'LIKE', "%$data%")->get();
        return view('employee_data', compact('employee'));
    }

}
