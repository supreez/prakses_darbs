<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupas extends Model
{
    //
    protected $table = 'rvtgroup';
    protected $fillable = ['groupName','partID'];
}
