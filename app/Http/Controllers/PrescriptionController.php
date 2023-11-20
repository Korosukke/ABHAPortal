<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\Record;
use App\Models\Doctor;

class PrescriptionController extends Controller
{
    public function prescription(Request $request, $abha_number)
    {
        $records = Record::where('abha_number', $abha_number)->get();
        return view('prescription', ['records' => $records, 'abha' => $abha_number]);
    }

    public function writeprescription(Request $request, $abha_number)
    {
        return view('writeprescription', ['userAbha' => $abha_number]);
    }

    

    public function processPrescription(Request $request){

        $rules = [
            'abha_number' => 'required|digits:16',
            'hospital' => 'required|string',
            'disease' => 'required|string',
            'symptoms' => 'required|string',
            'weight' => 'required|integer',
            'tests' => 'required|string',
            'medicine' => 'required|string',
            'admission' => 'required|in:0,1', // Ensure admission is either 0 or 1
            'days' => ['sometimes', 'nullable', 'integer', 'min:0'],
        ];
        
        $userAbha = $request->input('userAbha');

        $validator = Validator::make($request->all(),$rules);
        if($validator->fails()){
            return redirect('/writeprescription/$userAbha')
            ->withErrors($validator)
            ->withInput();
        }
        
        $doctor = Doctor::where('abha_number', $userAbha)->first();
        if ($doctor) {
            $docname = $doctor->name;

        $admission = $request->input('admission');
        $days = ($admission == 0) ? 0 : $request->input('days');

        $record = new Record([
            'abha_number' => $request->input('abha_number'),
            'doctor' => $docname,
            'hospital' => $request->input('hospital'),
            'disease' => $request->input('disease'),
            'symptoms' => $request->input('symptoms'),
            'tests' => $request->input('tests'),
            'weight' => $request->input('weight'),
            'meds' => $request->input('medicine'), 
            'admit' => $admission,
            'days' => $days,
        ]);

        // Save the patient data to the 'patients' table
        $record->save();
        
        return redirect()->back();
    }else {
        // Handle the case when the doctor with the provided ABHA number is not found
        return redirect()->back()->with('error', 'Doctor not found.');
    }

    }

}
