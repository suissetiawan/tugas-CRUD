<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pertanyaan;
use App\Models\Jawaban;


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

    public function show($id){
        $qna = Pertanyaan::find_by_id($id);
        $jawaban = Jawaban::find_by_pertanyaan_id($id);
        return view('content.detail-qna',compact('qna', 'jawaban'));

    }

    public function edit($id){
        $qna = Pertanyaan::find_by_id($id);
        return view('content.edit',compact('qna'));
    }

    public function update(request $request){
        $data = $request->all();
        unset($data['_token'], $data['_method']);
        $up = Pertanyaan::update($data);
        if ($up) {
            return redirect('/pertanyaan');
        }
    }

    public function delete($id){
        Pertanyaan::delete($id);
        return redirect('/pertanyaan');
    }
}
