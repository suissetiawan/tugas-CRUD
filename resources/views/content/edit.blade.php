@extends('layouts.master')
@section('content')
<div class="card card-body card-info">
<div class="card-header">
   <h3 class="card-title">Apa ada yang ditanyakan??</h3>
</div>
<div class="card-body">
  <form class="form-horizontal" action="/pertanyaan/{{$qna->id}}" method="POST">
    {{method_field('put')}}
  	@csrf
    <input hidden type="text" name="id" value="{{$qna->id}}">
    <div class="card-body">
      <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="judul">Judul</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" placeholder="masukan judul pertanyaan" id="judul" name="judul" value="{{$qna-> judul}}">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="isi_pertanyaan">Isi pertanyaan</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" placeholder="masukan pertanyaan" id="isi_pertanyaan" name="isi_pertanyaan" value="{{$qna-> isi_pertanyaan}}">
        </div>
        <input hidden type="text" name="updated_at" value="{{\Carbon\Carbon::now()}}">
      </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <button type="submit" class="btn btn-warning">Update</button>
      <a href="/pertanyaan" class="btn btn-info">cancel</a>
    <!-- /.card-footer -->
  </div>
</form>
</div>
</div>
@endsection