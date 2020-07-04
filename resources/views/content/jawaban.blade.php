@extends('layouts.master')
@section('content')
<div class="card card-primary card-outline">
  <div class="card-body box-profile">
    @foreach($data as $key => $anw)
    <h2 class="profile-username text-center"><b>{{$anw -> isi_pertanyaan}}</b></h2>
    <h5 class="text-muted text-center">Judul : {{$anw -> judul}}</h5>
    <?php break;?>
    @endforeach
    <h5 class="ml-3 mt-5">Jawaban :</h5>
    <ul class="list-group list-group-unbordered mb-3 mt-2">
    @foreach($data as $key => $anw)
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