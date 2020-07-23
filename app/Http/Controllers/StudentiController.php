<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Studenti as Studenti;

class StudentiController extends Controller
{
    public function allStudenti(){
        $kn = Studenti::all();
        $data = array('student' => $kn);
        return view('/admin/view_admin', $data);
    }
}
