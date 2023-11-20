<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Patient;
use App\Models\Doctor;

class SignupController extends Controller
{

    public function showForm(){
        return view('signup');
    }

    public function showFormDoc(){
        return view('doctorsignup');
    }

    public function processReg(Request $request){

        $rules = [
            'aadhar_number' => 'required|digits:12|unique:patients,aadhar_number',
            'name' => 'required|string',
            'email' => 'required|email|unique:patients,email',
            'phone' => 'required|digits:10',
            'dob' => 'required|date|before:today',
            'password' => [
                'required',
                'string',
                'min:6',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/',
            ],
        ];
        $validator = Validator::make($request->all(),$rules);
        if($validator->fails()){
            return redirect('/signup')
            ->withErrors($validator)
            ->withInput();
        }

        
        // Generate a unique 16-digit number
        $abhaNumber = $this->generateUniqueAbhaNumber();

        $patient = new Patient([
            'abha_number' => $abhaNumber,
            'aadhar_number' => $request->input('aadhar_number'),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone_number' => $request->input('phone'),
            'dob' => $request->input('dob'),
            'password' => bcrypt($request->input('password')),
        ]);

        // Save the patient data to the 'patients' table
        $patient->save();
        
        $user = Patient::where('abha_number', $abhaNumber)->first();
        return view('home', ['user' => $user]);

    }

    public function processDoc(Request $request){

        $rules = [
            'uid' => 'required|digits:7|unique:doctors,uid',
            'name' => 'required|string',
            'email' => 'required|email|unique:doctors,email',
            'phone' => 'required|digits:10',
            'password' => [
                'required',
                'string',
                'min:6',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/',
            ],
        ];
        $validator = Validator::make($request->all(),$rules);
        if($validator->fails()){
            return redirect('/docsignup')
            ->withErrors($validator)
            ->withInput();
        }

        
        // Generate a unique 16-digit number
        $abhaNumber = $this->generateUniqueAbhaNumber();

        $doctor = new Doctor([
            'abha_number' => $abhaNumber,
            'uid' => $request->input('uid'),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone_number' => $request->input('phone'),
            'password' => bcrypt($request->input('password')),
        ]);

        // Save the patient data to the 'patients' table
        $doctor->save();
        
        $user = Doctor::where('abha_number', $abhaNumber)->first();
        return view('dochome', ['user' => $user]);

    }

    private function generateUniqueAbhaNumber() {
        // Generate a unique 16-digit number (you might want to implement your logic here)
        $abhaNumber = mt_rand(1000000000000000, 9999999999999999);

        // Check if the generated number already exists in the 'abha_number' column
        // If it does, regenerate until a unique number is found
        while (Patient::where('abha_number', $abhaNumber)->exists()) {
            $abhaNumber = mt_rand(1000000000000000, 9999999999999999);
        }

        return $abhaNumber;
    }
}
