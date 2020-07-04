<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pertanyaan;

class PertanyaanController extends Controller
{
    //
    public function index(){
    	$data = Pertanyaan::get_all();
    	return view('content.pertanyaan', compact('data'));
    }

    public function create(){
    	return view('content.form');
    }

    public function store(request $request){
    	//dd($request->all());
    	$data = $request->all();
    	unset($data["_token"]);
    	$item = Pertanyaan::save($data);
    	if ($item) {
    		return redirect('/pertanyaan');
    	}
    }
}
