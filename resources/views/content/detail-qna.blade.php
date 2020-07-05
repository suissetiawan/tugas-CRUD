@extends('layouts.master')
@section('content')
<div class="card card-primary card-outline">
  <div class="card-body box-profile">
    <h2 class="profile-username text-center"><b>{{$qna -> isi_pertanyaan}}</b></h2>
    <h5 class="text-muted text-center">Judul : {{ $qna -> judul}}</h5>
    <h6 class="ml-3 text-muted text-left">Dibuat : {{ $qna -> created_at}}</h6>
    <h6 class="ml-3 text-muted text-left">Diupdate : {{ $qna -> updated_at}}</h6>
    <h5 class="ml-3 mt-5">Jawaban :</h5>
    <ul class="list-group list-group-unbordered mb-3 mt-2">
    @foreach($jawaban as $key => $anw)
      <li class="list-group-item ml-3 mr-3">
        {{$anw -> isi_jawaban}}<a class="float-right">diupdate : {{$anw -> updated_at}}</a>
      </li>
      @endforeach
    </ul>
  </div>
  <!-- /.card-body -->
    <div class="card-footer p-0">
          <div class="m-2">
            <a href="/pertanyaan"><button type="button" class="btn btn-info ml-3">kembali</button></a>
          </div>
    </div>
</div>
@endsection