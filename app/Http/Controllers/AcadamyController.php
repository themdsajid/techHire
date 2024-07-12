<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Employee;
use App\Models\Acadamey;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\personal_information;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;
class AcadamyController extends Controller
{
    public function loadacdamy()
   {
     $userId = auth()->id();
     $userData = User::find($userId);
     $employeeData = Employee::where('compy_id', $userId)->first();
     return view('admin.educationinfo', compact('employeeData'));
   }

   public function store(Request $request)
   {
    $pdf10th = time() . '.' . $request->pdf10th->getClientOriginalExtension();
    $request->pdf10th->move(public_path('pdf10th'), $pdf10th);

$pdf12th = time() . '.' . $request->pdf12th->getClientOriginalExtension();
    $request->pdf12th->move(public_path('pdf12th'), $pdf12th);

   $highest_degree = time() . '.' . $request->highest_degree->getClientOriginalExtension();
    $request->highest_degree->move(public_path('highest_degree'), $highest_degree);

     $data = new Acadamey;
     $data->user_id                = $request->empid;
     $data->board10th              = $request->board10th;
     $data->passing10              = $request->passing10;
     $data->board12th              = $request->board12th;
     $data->passing12              = $request->passing12;
     $data->pdf10th                = $pdf10th;
     $data->pdf12th                = $pdf12th;
     $data->qualification          = $request->qualification;
     $data->specialization         = $request->specialization;
     $data->institute              = $request->institute;
     $data->board                  = $request->board;
     $data->enrolment              = $request->enrolment;
     $data->study_from             = $request->study_from;
     $data->study_to               = $request->study_to;
     $data->passingyear            = $request->passingyear;
     $data->graduated              = $request->graduated;
     $data->cattended              = $request->cattended;
     $data->highest_degree         = $highest_degree;
     $data->emp_type               = $request->emp_type;
     $data->save();
     return redirect()->route('admin.educationinfo')->with('message','Employee added Successfully');
 }



 public function viewlist()
 {



        $admin = DB::table('users')
        ->join('employees', 'users.email', '=', 'employees.email')
        ->join('acadameys', 'users.email', '=', 'acadameys.user_id')
        ->select('users.*', 'employees.*', 'acadameys.*')->get();
        // dd($admin);
    $userEmail = Auth::user()->email;
    $academiclist = DB::table('users')
        ->join('employees', 'users.email', '=', 'employees.email')
        ->join('acadameys', 'users.email', '=', 'acadameys.user_id')
        ->select('users.*', 'employees.*', 'acadameys.*')
        ->where('users.email', $userEmail)
        ->get();
    //DD($academiclist);
    return view('admin.academic_list', compact('academiclist','admin'));
 }
 public function fulldetials($id)
 {
  try
        {
        $id = Crypt::decrypt($id);
        $edit = Acadamey::findOrFail($id);
        return view('admin.view_academyinfo', compact('edit'));
    } catch (DecryptException $e)
    {
        abort(404);
    }
 }
 public function editacademy($id)
 {
  try
        {
        $id = Crypt::decrypt($id);
        $edit = Acadamey::findOrFail($id);
        return view('admin.educationinfo', compact('edit'));
    } catch (DecryptException $e)
    {
        abort(404);
    }

 }

}
