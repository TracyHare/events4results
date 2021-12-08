<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('ce');
    }


    public function store(Request $request)
    {

//dd($request);



        $rules = [
            'first_name'    => 'required',
            'last_name'     => 'required',
            'license'       => 'required',
            'email'         => 'required|email:rfc',
            'phone'         => 'required|min:14',
            'address'       => 'required',
            'city'          => 'required',
            'state'         => 'required',
            'zip_code'      => 'required|numeric|min:5',
            'class'         => 'required',
            'lunch'         => 'required',
            'message'       => 'nullable'
        ];

        $customMessages = [
            'email.required'    => "Required",
            'email.email'       => "This email appears invalid",
            'phone.required'    => "Required",
            'phone.min'         => "This phone number is too short.",
            'zip_code.required' => "Required",
            'zip_code.min'      => "Invalid",
            'zip_code.max'      => "Invalid",
            'class.required'    => "Please select a class option.",
            'lunch.required'    => "Please select a lunch option."
        ];

        $this->validate($request, $rules, $customMessages);

        $classes = [
            1 => 'Federal Fair Housing',
            2 => 'Smart Growth for the 21st Century',
            3 => 'Federal Fair Housing -AND- Smart Growth for the 21st Century'
        ];

        $lunches = [
            1 => 'Chopped Garden Salad',
            2 => 'Harvest Salad',
            3 => 'Skyscraper Sandwich',
            4 => 'Bottom Line Sandwich',
            5 => 'Grilled Vegetable Wrap',
            6 => 'Net Profit Sandwich',
            7 => 'No Lunch'
        ];

        $status = (Registration::query()->where('email', $request->email)->first()) ? 'Your Registration Has Been Updated.' : 'Your Registration Has Been Received.';

        $registrant = Registration::updateOrCreate(
            ['email' => $request->email],
            [
                'first_name'    => $request->first_name,
                'last_name'     => $request->last_name,
                'license'       => $request->license,
                'phone'         => $request->phone,
                'address'       => $request->address,
                'city'          => $request->city,
                'state'         => $request->state,
                'zip_code'      => $request->zip_code,
                'message'       => $request->message,
                'lunch'         => $lunches[$request->lunch],
                'class'         => $classes[$request->class]
            ]);

        Mail::to($request->email)
            
            ->queue(new \App\Mail\Registration($registrant));

        return view('ce')->with('status', $status);
    }


}
