@extends('layouts.master')
@section('content')
<div class="card card-body card-info">
<div class="card-header">
   <h3 class="card-title">Apa ada yang ditanyakan??</h3>
</div>
<div class="card-body">
  <form class="form-horizontal" action="/pertanyaan/store" method="POST">
  	@csrf
    <div class="card-body">
      <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="judul">Judul</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" placeholder="masukan judul pertanyaan" id="judul" name="judul">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="isi_pertanyaan">Isi pertanyaan</label>
        <div class="col-sm-10">
          <textarea id="isi_pertanyaan" class="form-control" rows="4" name="isi_pertanyaan" placeholder="type here"></textarea>
        </div>
      </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <button type="submit" class="btn btn-info">Submit</button>
    </div>
    <!-- /.card-footer -->
  </form>
</div>
</div>
@endsection