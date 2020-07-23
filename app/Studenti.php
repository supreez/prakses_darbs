<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studenti extends Model
{
    //
    protected $table = 'student';
    protected $fillable = ['s_name','s_surname','s_personalcode','s_address','s_mobile','s_email','s_education','s_school',
        's_year','slang','s_endmarks4','s_endmarks1','s_endmarks2','s_endmarks6','s_endmarks7','s_endmarks3','avgMark',
        's_mother1','s_mother2','s_mother3','s_mother4','s_father1','s_father2','s_father3','s_father4','g1','g2','g3','g4',
        's_specialty','e_code','s_hotel','p1','p2','p3','file_name1','file_name2','s_date','rvtgroupID','s_code'];
}
