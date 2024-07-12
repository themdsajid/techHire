<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMapApiRequest;
use App\Models\employerAdd;
use App\Models\Employment;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function storemap(StoreMapApiRequest $request)
    {
        // $exp_letter1 = time() . '.' . $request->exp_letter1->getClientOriginalExtension();
        // $request->exp_letter1->move(public_path('exp_letter1'), $exp_letter1);

        // $offer_letter1 = time() . '.' . $request->offer_letter1->getClientOriginalExtension();
        // $request->offer_letter1->move(public_path('offer_letter1'), $offer_letter1);

        // $last_salary1 = time() . '.' . $request->last_salary1->getClientOriginalExtension();
        // $request->last_salary1->move(
        //     public_path('last_salary1'),
        //     $last_salary1
        // );


        // $exp_letter2 = time() . '.' . $request->exp_letter2->getClientOriginalExtension();
        // $request->exp_letter2->move(public_path('exp_letter2'), $exp_letter2);

        // $offer_letter2 = time() . '.' . $request->offer_letter2->getClientOriginalExtension();
        // $request->offer_letter2->move(public_path('offer_letter2'), $offer_letter2);

        // $last_salary2 = time() . '.' . $request->last_salary2->getClientOriginalExtension();
        // $request->last_salary2->move(
        //     public_path('last_salary2'),
        //     $last_salary2
        // );

        // $exp_letter3 = time() . '.' . $request->exp_letter3->getClientOriginalExtension();
        // $request->exp_letter3->move(public_path('exp_letter3'), $exp_letter3);

        // $offer_letter3 = time() . '.' . $request->offer_letter3->getClientOriginalExtension();
        // $request->offer_letter3->move(public_path('offer_letter3'), $offer_letter3);

        // $last_salary3 = time() . '.' . $request->last_salary3->getClientOriginalExtension();
        // $request->last_salary3->move(
        //     public_path('last_salary3'),
        //     $last_salary3
        // );

        $data = new Employment();
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
        // $data->exp_letter1            = $exp_letter1;
        // $data->offer_letter1          = $offer_letter1;
        // $data->last_salary1           = $last_salary1;
        $data->exp_letter1            = 'abc';
        $data->offer_letter1          =  'abc';
        $data->last_salary1           = 'abc';
        $data->supervisor1_name1      = $request->supervisor1_name1;
        $data->supervisor1_phone1     = $request->supervisor1_phone1;
        $data->supervisor1_email1     = $request->supervisor1_email1;
        $data->supervisor2_name1      = $request->supervisor2_name1;
        $data->supervisor2_phone1     = $request->supervisor2_phone1;
        $data->supervisor2_email1     = $request->supervisor2_email1;
        $data->save();
        $data = new employerAdd();
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
        // $data->exp_letter2            = $exp_letter2;
        // $data->offer_letter2          = $offer_letter2;
        // $data->last_salary2           = $last_salary2;
        $data->exp_letter2            = 'abc';
        $data->offer_letter2          = 'abc';
        $data->last_salary2           = 'abc';
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
        // $data->exp_letter3            = $exp_letter3;
        // $data->offer_letter3          = $offer_letter3;
        // $data->last_salary3           = $last_salary3;
        $data->exp_letter3            = 'abc';
        $data->offer_letter3          = 'abc';
        $data->last_salary3           = 'abc';
        $data->supervisor1_name3      = $request->supervisor1_name3;
        $data->supervisor1_phone3     = $request->supervisor1_phone3;
        $data->supervisor1_email3     = $request->supervisor1_email3;
        $data->supervisor2_name3      = $request->supervisor2_name3;
        $data->supervisor2_phone3     = $request->supervisor2_phone3;
        $data->supervisor2_email3     = $request->supervisor2_email3;
        $data->save();

        return response()->json([
            'data' => [
                'message' => 'Submitted Successfully',
            ]
        ], Response::HTTP_CREATED);
    }
}
