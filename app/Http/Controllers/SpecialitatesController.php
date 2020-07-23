<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\specialitates as Specialitates;
use mysql_xdevapi\Table;

class SpecialitatesController extends Controller{
    public function show(){
        $specialitate = Specialitates::all();

        return view('/admin/specialitates', compact('specialitates')); //undefined variable specialitates
    }
    public function addSpecialitates(Request $request){
        $post_data = $request->all();
        Specialitates::create($post_data);
        return redirect('/specialitates');
    }
    public function deleteSpecialitates(Request $request){
        $id = $request->id;
        $kn = Specialitates::find($id);
        $kn->delete();
        return redirect('/specialitates');
    }
    public function allSpecialitates(){
        $kn = Specialitates::all();
        $data = array('part' => $kn);
        return view('/admin/specialitates', $data);
    }
    public function updateSpecialitates(Request $request){
        $id = $request->id;
        $kn = Specialitates::find($id);
        $data = array('part' => $kn);
        return view('/admin/labot_specialitates', $data);
    }
    public function allSpecialitatesForIndex1(){
        $part = Specialitates::orderBy('part_title', 'ASC')->get();
        $data = array('part' => $part);
        return view('/index', $data);
    }
    public function editSpecialitates(Request $request, $id){
        Specialitates::where('id', $id)
            ->update(['classification' => $request->input('classification'),
                'part_title'=>$request->input('part_title'),
                'part_code'=>$request->input('part_code'),
                'note'=>$request->input('note')]
            );
    }
}
