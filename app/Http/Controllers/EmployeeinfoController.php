<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Employee;
use App\Models\Employment;
use App\Models\employerAdd;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Encryption\DecryptException;

class EmployeeinfoController extends Controller
{

    public function loaddasborad()
    {
        return view('employee.index');
    }


    public function loademp()
    {
        // dd(Auth::user());
        $userId = auth()->id();
        $userData = User::find($userId);
        // $employeeData = Employee::where('compy_id', $userId)->first();
        // $employeeData = '';
        if(Auth::user()->role === 'admin' ){
            $employeeData = Employee::all();
        }
        elseif(Auth::user()->role === 'company' ){
            $employeeData = Employee::where('compy_id', $userId)->get();
        }
        elseif(Auth::user()->role === 'employee' ){
            $employeeData = Employee::where('compy_id', $userId)->first();
            // dd($employeeData);
        }

        // dd($employeeData);
        return view('admin.employmentinfo', compact('employeeData'));
    }

    public function storeemap(Request $request)
    {
        dd($request);
        // dd(Auth::user());
        $exp_letter1 = time() . '.' . $request->exp_letter1->getClientOriginalExtension();
        $request->exp_letter1->move(public_path('exp_letter1'), $exp_letter1);

        $offer_letter1 = time() . '.' . $request->offer_letter1->getClientOriginalExtension();
        $request->offer_letter1->move(public_path('offer_letter1'), $offer_letter1);

        $last_salary1 = time() . '.' . $request->last_salary1->getClientOriginalExtension();
        $request->last_salary1->move(
            public_path('last_salary1'),
            $last_salary1
        );


        $exp_letter2 = time() . '.' . $request->exp_letter2->getClientOriginalExtension();
        $request->exp_letter2->move(public_path('exp_letter2'), $exp_letter2);

        $offer_letter2 = time() . '.' . $request->offer_letter2->getClientOriginalExtension();
        $request->offer_letter2->move(public_path('offer_letter2'), $offer_letter2);

        $last_salary2 = time() . '.' . $request->last_salary2->getClientOriginalExtension();
        $request->last_salary2->move(
            public_path('last_salary2'),
            $last_salary2
        );

        $exp_letter3 = time() . '.' . $request->exp_letter3->getClientOriginalExtension();
        $request->exp_letter3->move(public_path('exp_letter3'), $exp_letter3);

        $offer_letter3 = time() . '.' . $request->offer_letter3->getClientOriginalExtension();
        $request->offer_letter3->move(public_path('offer_letter3'), $offer_letter3);

        $last_salary3 = time() . '.' . $request->last_salary3->getClientOriginalExtension();
        $request->last_salary3->move(
            public_path('last_salary3'),
            $last_salary3
        );
dd($request);
        $data = new Employment;
        $data->username              = $request->username;
        $data->emp_id                = $request->m_name;
        $data->email                = $request->emp_id;
        $data->user_id                = $request->emp_id;
        $data->company1               = $request->company1;
        $data->address1               = $request->address1;
        $data->city1                  = $request->city1;
        $data->post_code1             = $request->post_code1;
        $data->state1                 = $request->state1;
        $data->cphone1                = $request->cphone1;
        $data->designation1           = $request->designation1;
        $data->department1            = $request->department1;
        $data->ctc1                   = $request->ctc1;
        $data->empid1                 = $request->empid1;
        $data->doj1                   = $request->doj1;
        $data->doe1                   = $request->doe1;
        $data->reason1                = $request->reason1;
        $data->emp_type1              = $request->emp_type1;
        $data->exp_letter1            = $exp_letter1;
        $data->offer_letter1          = $offer_letter1;
        $data->last_salary1           = $last_salary1;
        $data->supervisor1_name1      = $request->supervisor1_name1;
        $data->supervisor1_phone1     = $request->supervisor1_phone1;
        $data->supervisor1_email1     = $request->supervisor1_email1;
        $data->supervisor2_name1      = $request->supervisor2_name1;
        $data->supervisor2_phone1     = $request->supervisor2_phone1;
        $data->supervisor2_email1     = $request->supervisor2_email1;
        $data->save();
        $data = new employerAdd;
        $data->employments_id         = $request->emp_id;
        $data->company2               = $request->company2;
        $data->address2               = $request->address2;
        $data->city2                  = $request->city2;
        $data->state2                 = $request->state2;
        $data->cphone2                = $request->cphone2;
        $data->designation2           = $request->designation2;
        $data->department2            = $request->department2;
        $data->ctc2                   = $request->ctc2;
        $data->empid2                 = $request->empid2;
        $data->doj2                   = $request->doj2;
        $data->doe2                   = $request->doe2;
        $data->reason2                = $request->department2;
        $data->emp_type2              = $request->emp_type2;
        $data->empid2                 = $request->empid2;
        $data->emp_nature2            = $request->emp_nature2;
        $data->exp_letter2            = $exp_letter2;
        $data->offer_letter2          = $offer_letter2;
        $data->last_salary2           = $last_salary2;
        $data->supervisor1_name2      = $request->supervisor1_name2;
        $data->supervisor1_phone2     = $request->supervisor1_phone2;
        $data->supervisor1_email2     = $request->supervisor1_email2;
        $data->supervisor2_name2      = $request->supervisor2_name2;
        $data->supervisor2_phone2     = $request->supervisor2_phone2;
        $data->supervisor2_email2     = $request->supervisor2_email2;
        $data->company3               = $request->company3;
        $data->address3               = $request->address3;
        $data->city3                  = $request->city3;
        $data->post_code3             = $request->post_code3;
        $data->state3                 = $request->state3;
        $data->cphone3                = $request->cphone3;
        $data->designation3           = $request->designation3;
        $data->department3            = $request->department3;
        $data->ctc3                   = $request->ctc3;
        $data->empid3                 = $request->empid3;
        $data->doj3                   = $request->doj3;
        $data->doe3                   = $request->doe3;
        $data->reason3                = $request->reason3;
        $data->emp_type3              = $request->emp_type3;
        $data->emp_nature3            = $request->emp_nature3;
        $data->exp_letter3            = $exp_letter3;
        $data->offer_letter3          = $offer_letter3;
        $data->last_salary3           = $last_salary3;
        $data->supervisor1_name3      = $request->supervisor1_name3;
        $data->supervisor1_phone3     = $request->supervisor1_phone3;
        $data->supervisor1_email3     = $request->supervisor1_email3;
        $data->supervisor2_name3      = $request->supervisor2_name3;
        $data->supervisor2_phone3     = $request->supervisor2_phone3;
        $data->supervisor2_email3     = $request->supervisor2_email3;
        $data->save();
        return redirect()->route('admin.employmentinfo')->with('message', 'Employee added Successfully');
    }

    public function loademployement()
    {
        $admin = DB::table('users')
            ->join('employees', 'users.email', '=', 'employees.email')
            ->join('employments', 'users.email', '=', 'employments.user_id')
            ->join('employer_adds', 'employments.user_id', '=', 'employer_adds.employments_id')
            ->select('users.*', 'employees.*', 'employments.*', 'employer_adds.*')
            ->get();
        // dd($admin);
        //dd($results);
        $userEmail = Auth::user()->email;
        $results = DB::table('users')
            ->join('employees', 'users.email', '=', 'employees.email')
            ->join('employments', 'users.email', '=', 'employments.user_id')
            ->join('employer_adds', 'employments.user_id', '=', 'employer_adds.employments_id')
            ->where('users.email', '=', $userEmail)
            ->select('users.*', 'employees.*', 'employments.*', 'employer_adds.*')
            ->get();
        //dd($results);
        return view('admin.emplyement_view', compact('results', 'admin'));
    }

    public function viewemplyer($user_id)
    {
        try {
            $user_id = Crypt::decrypt($user_id);
            $employmentData = DB::table('employments')->join('employer_adds', 'employments.user_id', '=', 'employer_adds.employments_id')->where('employments.user_id', $user_id)->select('employments.*', 'employer_adds.*')->first();
            return view('admin.view_employer', compact('employmentData'));
        } catch (DecryptException $e) {
            abort(404);
        }
    }


    public function editemploter($user_id)
    {
        try {
            $user_id = Crypt::decrypt($user_id);
            $edit = DB::table('employments')->join('employer_adds', 'employments.user_id', '=', 'employer_adds.employments_id')->where('employments.user_id', $user_id)->select('employments.*', 'employer_adds.*')->first();
            $userId = auth()->id();
            $userData = User::find($userId);
            $employeeData = Employee::where('compy_id', $userId)->first();
            //   dd($edit);
            return view('admin.employmentinfo', compact('edit', 'employeeData'));
        } catch (DecryptException $e) {
            abort(404);
        }
    }

    public function updateEmployee(Request $request, $user_id)
    {
        // Find the Employment and employerAdd models
        $emp = Employment::where('user_id', $user_id)->firstOrFail();
        $data = employerAdd::where('employments_id', $user_id)->firstOrFail();

        // Define file variables and set to existing values
        $exp_letter1 = $emp->exp_letter1;
        $offer_letter1 = $emp->offer_letter1;
        $last_salary1 = $emp->last_salary1;
        $exp_letter2 = $data->exp_letter2;
        $offer_letter2 = $data->offer_letter2;
        $last_salary2 = $data->last_salary2;
        $exp_letter3 = $data->exp_letter3;
        $offer_letter3 = $data->offer_letter3;
        $last_salary3 = $data->last_salary3;

        // Check and process exp_letter1
        if ($request->hasFile('exp_letter1')) {
            $exp_letter1 = time() . '.' . $request->exp_letter1->getClientOriginalExtension();
            $request->exp_letter1->move(public_path('exp_letter1'), $exp_letter1);
        }

        // Check and process offer_letter1
        if ($request->hasFile('offer_letter1')) {
            $offer_letter1 = time() . '.' . $request->offer_letter1->getClientOriginalExtension();
            $request->offer_letter1->move(public_path('offer_letter1'), $offer_letter1);
        }

        // Check and process last_salary1
        if ($request->hasFile('last_salary1')) {
            $last_salary1 = time() . '.' . $request->last_salary1->getClientOriginalExtension();
            $request->last_salary1->move(public_path('last_salary1'), $last_salary1);
        }

        // Check and process exp_letter2
        if ($request->hasFile('exp_letter2')) {
            $exp_letter2 = time() . '.' . $request->exp_letter2->getClientOriginalExtension();
            $request->exp_letter2->move(public_path('exp_letter2'), $exp_letter2);
        }

        // Check and process offer_letter2
        if ($request->hasFile('offer_letter2')) {
            $offer_letter2 = time() . '.' . $request->offer_letter2->getClientOriginalExtension();
            $request->offer_letter2->move(public_path('offer_letter2'), $offer_letter2);
        }

        // Check and process last_salary2
        if ($request->hasFile('last_salary2')) {
            $last_salary2 = time() . '.' . $request->last_salary2->getClientOriginalExtension();
            $request->last_salary2->move(public_path('last_salary2'), $last_salary2);
        }

        // Check and process exp_letter3
        if ($request->hasFile('exp_letter3')) {
            $exp_letter3 = time() . '.' . $request->exp_letter3->getClientOriginalExtension();
            $request->exp_letter3->move(public_path('exp_letter3'), $exp_letter3);
        }

        // Check and process offer_letter3
        if ($request->hasFile('offer_letter3')) {
            $offer_letter3 = time() . '.' . $request->offer_letter3->getClientOriginalExtension();
            $request->offer_letter3->move(public_path('offer_letter3'), $offer_letter3);
        }

        // Check and process last_salary3
        if ($request->hasFile('last_salary3')) {
            $last_salary3 = time() . '.' . $request->last_salary3->getClientOriginalExtension();
            $request->last_salary3->move(public_path('last_salary3'), $last_salary3);
        }

        // Update the Employment model
        $emp->user_id                = $request->emp_id;
        $emp->company1               = $request->company1;
        $emp->address1               = $request->address1;
        $emp->city1                  = $request->city1;
        $emp->post_code1             = $request->post_code1;
        $emp->state1                 = $request->state1;
        $emp->cphone1                = $request->cphone1;
        $emp->designation1           = $request->designation1;
        $emp->department1            = $request->department1;
        $emp->ctc1                   = $request->ctc1;
        $emp->empid1                 = $request->empid1;
        $emp->doj1                   = $request->doj1;
        $emp->doe1                   = $request->doe1;
        $emp->reason1                = $request->reason1;
        $emp->emp_type1              = $request->emp_type1;
        $emp->exp_letter1            = $exp_letter1;
        $emp->offer_letter1          = $offer_letter1;
        $emp->last_salary1           = $last_salary1;
        $emp->supervisor1_name1      = $request->supervisor1_name1;
        $emp->supervisor1_phone1     = $request->supervisor1_phone1;
        $emp->supervisor1_email1     = $request->supervisor1_email1;
        $emp->supervisor2_name1      = $request->supervisor2_name1;
        $emp->supervisor2_phone1     = $request->supervisor2_phone1;
        $emp->supervisor2_email1     = $request->supervisor2_email1;
        $emp->save();

        // Update the employerAdd model
        $data->employments_id         = $request->emp_id;
        $data->company2               = $request->company2;
        $data->address2               = $request->address2;
        $data->city2                  = $request->city2;
        $data->state2                 = $request->state2;
        $data->cphone2                = $request->cphone2;
        $data->designation2           = $request->designation2;
        $data->department2            = $request->department2;
        $data->ctc2                   = $request->ctc2;
        $data->empid2                 = $request->empid2;
        $data->doj2                   = $request->doj2;
        $data->doe2                   = $request->doe2;
        $data->reason2                = $request->department2;
        $data->emp_type2              = $request->emp_type2;
        $data->empid2                 = $request->empid2;
        $data->emp_nature2            = $request->emp_nature2;
        $data->exp_letter2            = $exp_letter2;
        $data->offer_letter2          = $offer_letter2;
        $data->last_salary2           = $last_salary2;
        $data->supervisor1_name2      = $request->supervisor1_name2;
        $data->supervisor1_phone2     = $request->supervisor1_phone2;
        $data->supervisor1_email2     = $request->supervisor1_email2;
        $data->supervisor2_name2      = $request->supervisor2_name2;
        $data->supervisor2_phone2     = $request->supervisor2_phone2;
        $data->supervisor2_email2     = $request->supervisor2_email2;
        $data->company3               = $request->company3;
        $data->address3               = $request->address3;
        $data->city3                  = $request->city3;
        $data->post_code3             = $request->post_code3;
        $data->state3                 = $request->state3;
        $data->cphone3                = $request->cphone3;
        $data->designation3           = $request->designation3;
        $data->department3            = $request->department3;
        $data->ctc3                   = $request->ctc3;
        $data->empid3                 = $request->empid3;
        $data->doj3                   = $request->doj3;
        $data->doe3                   = $request->doe3;
        $data->reason3                = $request->reason3;
        $data->emp_type3              = $request->emp_type3;
        $data->emp_nature3            = $request->emp_nature3;
        $data->exp_letter3            = $exp_letter3;
        $data->offer_letter3          = $offer_letter3;
        $data->last_salary3           = $last_salary3;
        $data->supervisor1_name3      = $request->supervisor1_name3;
        $data->supervisor1_phone3     = $request->supervisor1_phone3;
        $data->supervisor1_email3     = $request->supervisor1_email3;
        $data->supervisor2_name3      = $request->supervisor2_name3;
        $data->supervisor2_phone3     = $request->supervisor2_phone3;
        $data->supervisor2_email3     = $request->supervisor2_email3;
        $data->save();

        return redirect()->route('view.details')->with('success', 'Employee data updated successfully');


    }


    public function employeeProfile()
    {
        $user = User::findOrFail(Auth::user()->id);
        $emp = Employee::where('email', $user->email)->first();
        // dd($user, $emp);
        return view('my-profile',['user' => $user, 'emp' => $emp]);
    }


}
