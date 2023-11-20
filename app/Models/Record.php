<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;
    protected $fillable = ['abha_number', 'doctor', 'hospital', 'disease', 'symptoms', 'tests', 'weight','meds','admit','days'];

}
