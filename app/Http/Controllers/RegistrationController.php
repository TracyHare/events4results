<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('welcome');
    }


    public function store(Request $request)
    {
        $rules = [
            'first_name'    => 'required',
            'last_name'     => 'required',
            'company'       => 'required',
            'email'         => 'required|email:rfc',
            'phone'         => 'required|min:14',
            'in_person'     => 'required',
            'message'       => 'nullable'
        ];

        $customMessages = [
            'email.required'    => "Required",
            'email.email'       => "This email appears invalid",
            'phone.required'    => "Required",
            'phone.min'         => "This phone number is too short."
        ];

        $this->validate($request, $rules, $customMessages);


        $status = (Registration::query()->where('email', $request->email)->first()) ? 'Your Registration Has Been Updated.' : 'Your Registration Has Been Received.';


        $registrant = Registration::updateOrCreate(
            ['email' => $request->email],
            [
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'company' => $request->company,
                'phone' => $request->phone,
                'in_person' => $request->in_person,
                'message' => $request->message
            ]);

        Mail::to($request->email)
            ->bcc(['deanna@remax-results.com','tracy@remax-results.com','sandy@sandysellshomes.com','sphillips@remax-results.com','kelly@remax-results.com'])
            ->queue(new \App\Mail\Registration($registrant));

        return view('welcome')->with('status', $status);


    }



}
