<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Patient;
use App\Models\Doctor;


class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function login(Request $request)
    {
        $abha = $request->input('abha');
        $password = $request->input('password');

        // Retrieve the patient with the given abha_number
        $patient = Patient::where('abha_number', $abha)->first();

        // Check if the patient exists and the password is correct
        if ($patient && password_verify($password, $patient->password)) {
            // Authentication successful
            session(['form_abha' => $abha]);
            session(['form_password' => $password]);
            // return view('home', ['abha' => $abha]);

            $user = Patient::where('abha_number', $abha)->first();
            return view('home', ['user' => $user]);

        }

        $doctor = Doctor::where('abha_number', $abha)->first();

        if ($doctor && password_verify($password, $doctor->password)) {
            // Authentication successful
            session(['form_abha' => $abha]);
            session(['form_password' => $password]);
            // return view('home', ['abha' => $abha]);

            $user = Doctor::where('abha_number', $abha)->first();
            return view('dochome', ['user' => $user]);

        } else {
            return view('login');
        }

    }
    public function logout(){
        session()->forget('abha');
        session()->forget('form_password');
        return redirect()->route('session');
    }

}
