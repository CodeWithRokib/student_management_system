<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'address', 'father_name', 'mother_name', 'gender', 'age', 'contact', 'department', 'password',
    ];

    protected $hidden = [
        'password',
    ];
}