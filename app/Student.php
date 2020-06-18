<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'surname',
        'name',
        'class',
        'gender',
        'birth_year'
    ];
}
