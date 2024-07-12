<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompnyControler extends Controller
{
    public function compnyload()
    {
        return view('company.index');
    }
}
