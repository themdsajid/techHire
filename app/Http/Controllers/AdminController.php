<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

class AdminController extends Controller
{
    public function adminload()
    {
        return view('admin.index');
    }

    public function loadcopny()
    {
        $data = User::where('role','company')->get();
        //dd($data);
        return view('admin.companylist',compact('data'));
    }

    public function addcompny()
    {
        return view('admin.addcompany');
    }

    public function store(Request $request)
    {
      $validate = $request->validate([

        'c_name'    => 'required',
        'email'     =>  'required',
        'c_phone'   =>  'required',
        'address'   =>  'required',
        'password' => 'required|string|min:8|confirmed',
      ]);

      $data = new User();
      $data->name      = $request->c_name;
      $data->email     = $request->email;
      $data->phone     = $request->c_phone;
      $data->address   = $request->address;
      $data->password = Hash::make($request->password);
      $data->save();

      return redirect()->route('admin.add_company')->with('message', 'Company added Successfully');

    }

    public function loadedit($id)
    {
        //dd('hii');
        try 
        {
        $id = Crypt::decrypt($id);
        $edit = User::findOrFail($id);
        return view('admin.addcompany', compact('edit'));
    } catch (DecryptException $e) 
    {
        abort(404);
    }
    }



   

    public function viewcompny($id)
    {
        try 
        {
        $id = Crypt::decrypt($id);
        $cview = User::findOrFail($id);
        return view('admin.viewcompny', compact('cview'));
    } catch (DecryptException $e) 
    {
        abort(404);
    }
        
    }





    public function editcompny(Request $request,$id)
    {
        //dd('test');
        $validate = $request->validate([
        'c_name'    => 'required',
        'email'     =>  'required',
        'c_phone'   =>  'required',
        'address'   =>  'required',
        'password' => 'required|string|min:8|confirmed',
      ]);

        $user = User::findOrFail($id);
        $user->name = $request->c_name;
        $user->email = $request->email;
        $user->phone = $request->c_phone;
        $user->address = $request->address;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('admin.add_company')->with('message','Company updated Successfully');
    }

    public function destroyc($id)
    {
         $delite = User::findOrFail($id)->delete();
        return redirect()->route('admin.add_company')->with('message','Data added Successfully');
    }



}
