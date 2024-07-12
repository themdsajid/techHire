<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMapApiRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'emp_id' => 'required',
            'company1' => 'required',
            'address1' => 'required',
            'city1' => 'required',
            'post_code1' => 'required',
            'state1' => 'required',
            'cphone1' => 'required',
            'designation1' => 'required',
            'department1' => 'required',
            'ctc1' => 'required',
            'empid1' => 'required',
            'doj1' => 'required',
            'doe1' => 'required',
            'reason1' => 'required',
            'emp_type1' => 'required',
            //'exp_letter1' => 'required|file',
           // 'offer_letter1' => 'required|file',
            //'last_salary1' => 'required|file',
            'supervisor1_name1' => 'required',
            'supervisor1_phone1' => 'required',
            'supervisor1_email1' => 'required|email',
            'supervisor2_name1' => 'required',
            'supervisor2_phone1' => 'required',
            'supervisor2_email1' => 'required|email',
            'company2' => 'required',
            'address2' => 'required',
            'city2' => 'required',
            'state2' => 'required',
            'cphone2' => 'required',
            'designation2' => 'required',
            'department2' => 'required',
            'ctc2' => 'required',
            'empid2' => 'required',
            'doj2' => 'required',
            'doe2' => 'required',
            'reason2' => 'required',
            'emp_type2' => 'required',
            'emp_nature2' => 'required',
            // 'exp_letter2' => 'required|file',
            // 'offer_letter2' => 'required|file',
            // 'last_salary2' => 'required|file',
            'supervisor1_name2' => 'required',
            'supervisor1_phone2' => 'required',
            'supervisor1_email2' => 'required|email',
            'supervisor2_name2' => 'required',
            'supervisor2_phone2' => 'required',
            'supervisor2_email2' => 'required|email',
            'company3' => 'required',
            'address3' => 'required',
            'city3' => 'required',
            'post_code3' => 'required',
            'state3' => 'required',
            'cphone3' => 'required',
            'designation3' => 'required',
            'department3' => 'required',
            'ctc3' => 'required',
            'empid3' => 'required',
            'doj3' => 'required',
            'doe3' => 'required',
            'reason3' => 'required',
            'emp_type3' => 'required',
            'emp_nature3' => 'required',
            // 'exp_letter3' => 'required|file',
            // 'offer_letter3' => 'required|file',
            // 'last_salary3' => 'required|file',
            'supervisor1_name3' => 'required',
            'supervisor1_phone3' => 'required',
            'supervisor1_email3' => 'required|email',
            'supervisor2_name3' => 'required',
            'supervisor2_phone3' => 'required',
            'supervisor2_email3' => 'required|email',
        ];
    }
}
