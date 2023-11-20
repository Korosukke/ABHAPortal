<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\Record;
use App\Models\Doctor;

class RecordController extends Controller
{
    public function allrecord(Request $request, $abha_number)
    {
        $records = Record::where('abha_number', $abha_number)->get();
        return view('record', ['records' => $records, 'abha' => $abha_number]);
    }

    public function checkHistory(){
        return view('history');
    }

    public function showSearch(Request $request)
    {
        $abha_number = $request->input('abha_number');
        
        $records = Record::where('abha_number', $abha_number)->get();
        return view('searchResults', ['records' => $records, 'abha' => $abha_number]);
    }


    

}
