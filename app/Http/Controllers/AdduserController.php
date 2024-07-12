<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Employee;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

class AdduserController extends Controller
{
    public function loaduser()
    {
        $emp = Employee::latest()->get();
        //dd($emp);
        return view('admin.employee_list', compact('emp'));
    }

    public function adduser()
    {
        return view('admin.addemployee');
    }

    public function store(Request $request)
    {
        // dd($request);
        // Validate the incoming request data
        $validate = $request->validate([
            'add_emp'     => 'required',
            'emp_email'   => 'required|email|unique:employees,email',
            'emp_phone'   => 'required|numeric',
            'address'     => 'required',
            // 'images.*'    => 'required|mimes:pdf|max:12048',
            // 'password'    => 'required|string|min:8|confirmed',
        ]);

        $imgData = [];

        // Check if new PDF files are uploaded
        if ($request->hasfile('images')) {
            foreach ($request->file('images') as $file) {
                $name = $file->getClientOriginalName();
                $file->move(public_path('/pdf/'), $name);
                $imgData[] = $name;
            }
        } else {
            // No new files uploaded, retain the old PDF files
            $imgData = explode(',', $request->oldpde);
        }

        $employeeId = 'EMP' . mt_rand(1000, 9999);

        // Save the Employee data
        $employee = new Employee;
        $employee->emp_name  = $request->add_emp;
        $employee->email     = $request->emp_email;
        $employee->phone     = $request->emp_phone;
        $employee->emp_id    = $employeeId;
        $employee->address   = $request->address;
        $employee->compy_id  = $request->compny;
        // $employee->password  = Hash::make($request->password);
        // $employee->images    = implode(",", $imgData);
        $employee->save();

        // Save the User data
        $user = new User;
        $user->name  = $request->add_emp;
        $user->email = $request->emp_email;
        $user->password = Hash::make($request->password);
        $user->role = $request->input('role', 'employee');
        $user->save();

        // Redirect with a success message
        return redirect()->route('admin.userview')->with('message', 'Employee added Successfully');
    }


   public function editloads($id)
   {
    try
        {
        $id = Crypt::decrypt($id);
        $edit = Employee::findOrFail($id);
        return view('admin.addemployee', compact('edit'));
    } catch (DecryptException $e)
    {
        abort(404);
    }
   }

    public function viewusresu($id)
    {
        try
        {
        $id = Crypt::decrypt($id);
        $vuewuser = Employee::findOrFail($id);
        return view('admin.employee_details', compact('vuewuser'));
    } catch (DecryptException $e)
    {
        abort(404);
    }

    }

   public function update(Request $request,$id)
   {
     //dd($request->all());


    $imgData = [];

    if ($request->hasfile('images'))
    {
        foreach ($request->file('images') as  $value) {
            $name = $value->getClientOriginalName();
            $value->move(public_path().'/pdf/', $name);
            $imgData[] = $name;
        }
    }
$empName = $request->add_emp;
$empEmail = $request->emp_email;
$empPhone = $request->emp_phone;
$empAddress = $request->address;
$compyId = $request->compny;
$imgData = implode(",", $imgData);

$emp = Employee::findOrFail($id);
$user = User::where('email', $emp->email)->first();
if ($user)
{
    $user->name  = $empName;
    $user->email = $empEmail;
    $user->save();
}
$emp->emp_name  = $empName;
$emp->email     = $empEmail;
$emp->phone     = $empPhone;
$emp->address   = $empAddress;
$emp->compy_id  = $compyId;
$emp->images    = $imgData;
$emp->save();
// $user = User::where('email', $empEmail)->first();
// if ($user)
// {
//     $user->name  = $empName;
//     $user->email = $empEmail;
//     $user->save();
// }
 return redirect()->route('admin.userview')->with('message','Employee Updated Successfully');
}

   public function distory($id)
   {
    $delite = Employee::findOrFail($id)->delete();
    return redirect()->route('admin.userview')->with('message','Data Delite Successfully');
   }

}
