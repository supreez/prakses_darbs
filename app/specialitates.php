<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialitates extends Model
{
    //
    protected $table = 'part';
    protected $fillable = ['classification','part_title','part_code','note'];

}
