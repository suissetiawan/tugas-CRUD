<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jawaban;
class JawabanController extends Controller
{
    //
    public function index($id){
    	$data = Jawaban::get_all($id);
    	return view('content.jawaban',compact('data'));
    }

    public function store(request $request){
    	$data = $request->all();
        unset($data["_token"]);
    	$item = Jawaban::save($data);
    	if ($item) {
    		return redirect()->back();
    	}
    }
}
