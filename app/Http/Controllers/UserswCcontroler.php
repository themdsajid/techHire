<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Employee;
use DB;

class UserswCcontroler extends Controller
{
    public function loadusers()
    {
     $userId = auth()->id(); 
$userData = User::find($userId);
$employeeData = Employee::where('compy_id', $userId)->get();
return view('company.userview', ['employeeData' => $employeeData]);
}

public function viewusers($id)
{
    $userId = auth()->id();
    $userData = User::find($userId);
    $data = Employee::where('compy_id', $userId)->first();
    return view('company.viewuser',compact('data'));
}



}
