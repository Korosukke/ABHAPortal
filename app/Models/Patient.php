<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable = ['abha_number', 'aadhar_number', 'name', 'email', 'phone_number', 'dob', 'password'];

}
