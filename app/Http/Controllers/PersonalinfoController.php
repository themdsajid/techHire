<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Employee;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\personal_information;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

class PersonalinfoController extends Controller
{
    public function loadpernalinfo()
    {
        $userId = auth()->id();
        $userData = User::find($userId);
        $employeeData = Employee::where('compy_id', $userId)->first();
        $employee = Employee::where('compy_id', $userId)->get();
        //dd($employeeData);
        return view('admin.personalinfo', compact('employeeData', 'employee'));
    }

    // public function savepenal(Request $request)
    // {

    //     $file_name = time() . '.' . $request->aadhar->getClientOriginalExtension();
    //     $request->aadhar->move(public_path('aadhar'), $file_name);

    //     $pan_name = time() . '.' . $request->pancerd->getClientOriginalExtension();
    //     $request->pancerd->move(public_path('pancard'), $pan_name);

    //     $pan_attech = time() . '.' . $request->attach_aggrment->getClientOriginalExtension();
    //     $request->attach_aggrment->move(public_path('attech'), $pan_attech);

    //     $data = new personal_information;
    //     $data->username               = $request->username;
    //     $data->m_name                 = $request->m_name;
    //     $data->l_name                 = $request->l_name;
    //     $data->contery                = $request->contery;
    //     $data->gender                 = $request->gender;
    //     $data->unmarried              = $request->unmarried;
    //     $data->phone                  = $request->phone;
    //     $data->email                  = $request->email;
    //     $data->dob                    = $request->dob;
    //     $data->f_name                 = $request->f_name;
    //     $data->identification         = $request->identification;
    //     $data->identification_type    = $request->identification_type;
    //     $data->aadhar                 = $file_name;
    //     $data->pancerd                = $pan_name;
    //     $data->hose_no                = $request->hose_no;
    //     $data->building               = $request->building;
    //     $data->lane                   = $request->lane;
    //     $data->sector                 = $request->sector;
    //     $data->district               = $request->district;
    //     $data->city                   = $request->city;
    //     $data->postal                 = $request->postal;
    //     $data->state                  = $request->state;
    //     $data->period_stay            = $request->period_stay;
    //     $data->land_mark              = $request->land_mark;
    //     $data->contact                = $request->contact;
    //     $data->contact2                = $request->callnuber;
    //     $data->attach_aggrment        = $pan_attech;
    //     $data->save();
    //     return redirect()->route('admin.personalinfo')->with('message', 'Employee added Successfully');
    // }

    public function savepenal(Request $request)
    {
        $data = new personal_information;
        $data->username = $request->username;
        $data->m_name = $request->m_name;
        $data->l_name = $request->l_name;
        $data->contery = $request->contery;
        $data->gender = $request->gender;
        $data->unmarried = $request->unmarried;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->dob = $request->dob;
        $data->f_name = $request->f_name;
        $data->identification = $request->identification;
        $data->identification_type = $request->identification_type;
        $data->hose_no = $request->hose_no;
        $data->building = $request->building;
        $data->lane = $request->lane;
        $data->sector = $request->sector;
        $data->district = $request->district;
        $data->city = $request->city;
        $data->postal = $request->postal;
        $data->state = $request->state;
        $data->period_stay = $request->period_stay;
        $data->land_mark = $request->land_mark;
        $data->contact = $request->contact;
        $data->contact2 = $request->callnuber;

        if ($request->hasFile('aadhar')) {
            $file_name = time() . '.' . $request->aadhar->getClientOriginalExtension();
            $request->aadhar->move(public_path('aadhar'), $file_name);
            $data->aadhar = $file_name;
        } else {
            $data->aadhar = '';  // Or NULL if you allowed NULL values in the database
        }

        if ($request->hasFile('pancerd')) {
            $pan_name = time() . '.' . $request->pancerd->getClientOriginalExtension();
            $request->pancerd->move(public_path('pancard'), $pan_name);
            $data->pancerd = $pan_name;
        } else {
            $data->pancerd = '';  // Or NULL if you allowed NULL values in the database
        }

        if ($request->hasFile('attach_aggrment')) {
            $pan_attech = time() . '.' . $request->attach_aggrment->getClientOriginalExtension();
            $request->attach_aggrment->move(public_path('attech'), $pan_attech);
            $data->attach_aggrment = $pan_attech;
        } else {
            $data->attach_aggrment = '';  // Or NULL if you allowed NULL values in the database
        }

        $data->save();
        return redirect()->route('admin.personalinfo')->with('message', 'Employee added Successfully');
    }



    public function loadparnalinfo()
    {

        $comny = Auth::user()->email;

        $comny = DB::table('users')
            ->join('employees', 'users.id', '=', 'employees.compy_id')
            ->join('personal_informations', 'users.email', '=', 'personal_informations.email')
            ->select('users.*', 'employees.*', 'personal_informations.*')
            ->where('users.email', $comny)->distinct()
            ->get();
        $admin = DB::table('users')
            ->join('employees', 'users.email', '=', 'employees.email')
            ->join('personal_informations', 'users.email', '=', 'personal_informations.email')
            ->select('users.*', 'employees.*', 'personal_informations.*')
            ->get();


        $userEmail = Auth::user()->email;
        $data = DB::table('users')->join('employees', 'users.email', '=', 'employees.email')->join('personal_informations', 'users.email', '=', 'personal_informations.email')->select('users.*', 'employees.*', 'personal_informations.*')->where('users.email', $userEmail)->get();
        return view('admin.personalinfo_view', compact('data', 'admin', 'comny'));
    }

    public function viewparnaldela($id)
    {
        try {
            $id = Crypt::decrypt($id);
            $vuewuser = personal_information::findOrFail($id);
            return view('admin.view_parsnalinfo', compact('vuewuser'));
        } catch (DecryptException $e) {
            abort(404);
        }
    }

    public function parnalinfiedit($id)
    {
        try {
            $id = Crypt::decrypt($id);
            $edit = personal_information::findOrFail($id);
            $userId = auth()->id();
            $userData = User::find($userId);
            $employeeData = Employee::where('compy_id', $userId)->first();
            return view('admin.personalinfo', compact('edit', 'employeeData'));
        } catch (DecryptException $e) {
            abort(404);
        }
    }

    public function updateinfo(Request $request, $id)
    {
        $file_name = time() . '.' . $request->aadhar->getClientOriginalExtension();
        $request->aadhar->move(public_path('aadhar'), $file_name);

        $pan_name = time() . '.' . $request->pancerd->getClientOriginalExtension();
        $request->pancerd->move(public_path('pancard'), $pan_name);

        $pan_attech = time() . '.' . $request->attach_aggrment->getClientOriginalExtension();
        $request->attach_aggrment->move(public_path('attech'), $pan_attech);
        $emp = personal_information::findOrFail($id);
        $emp->username               = $request->username;
        $emp->m_name                 = $request->m_name;
        $emp->l_name                 = $request->l_name;
        $emp->contery                = $request->contery;
        $emp->gender                 = $request->gender;
        $emp->unmarried              = $request->unmarried;
        $emp->phone                  = $request->phone;
        $emp->email                  = $request->email;
        $emp->dob                    = $request->dob;
        $emp->f_name                 = $request->f_name;
        $emp->identification         = $request->identification;
        $emp->identification_type    = $request->identification_type;
        $emp->aadhar                 = $file_name;
        $emp->pancerd                = $pan_name;
        $emp->hose_no                = $request->hose_no;
        $emp->building               = $request->building;
        $emp->lane                   = $request->lane;
        $emp->sector                 = $request->sector;
        $emp->district               = $request->district;
        $emp->city                   = $request->city;
        $emp->postal                 = $request->postal;
        $emp->state                  = $request->state;
        $emp->period_stay            = $request->period_stay;
        $emp->land_mark              = $request->land_mark;
        $emp->contact                = $request->contact;
        $emp->contact2                = $request->callnuber;
        $emp->attach_aggrment        = $pan_attech;
        $emp->save();
        return redirect()->route('view.personalinfo_view')->with('message', 'Employee update Successfully');
    }

    public function deliteinfo($id)
    {
        $delite = personal_information::findOrFail($id)->delete();
        return redirect()->route('view.personalinfo_view')->with('message', 'Data Delite Successfully');
    }
}
