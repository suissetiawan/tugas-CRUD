@extends('layouts.master')
@section('content')
<div class="card">
<div class="card-body">
  <div class="card card-primary card-outline">
    <div class="card-header">
      <h3 class="card-title">daftar Pertanyaan</h3>
      <div class="card-tools">
        <div class="input-group input-group-sm">
          <input type="text" class="form-control" placeholder="Search Pertanyaan">
          <div class="input-group-append">
            <div class="btn btn-primary">
              <i class="fas fa-search"></i>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
      <div class="table-responsive mailbox-messages">
        <table class="table table-hover table-striped">
          <thead>                  
            <tr>
              <th>No</th>
              <th>Judul</th>
              <th>Isi</th>
              <th>Jawaban</th>
              <th>detail</th>
            </tr>
          </thead>
          <tbody>
          @foreach($data as $key => $ask)
          <tr>
            <td>{{$key + 1}}</td>
            <td>{{$ask -> judul}}</td>
            <td class="mailbox-subject">{{$ask -> isi_pertanyaan}}</td>
            <td>
              <form action="{{ url('/jawaban/'. $ask->id) }}" method="post">
                @csrf
                <input class="col-sm-7" type="text" name="isi_jawaban">
                <input hidden name="pertanyaan_id" value="{{$ask->id}}">
                <input hidden name="created_at" value="{{ \Carbon\Carbon::now()}}">
                <input hidden name="updated_at" value="{{ \Carbon\Carbon::now()}}">
                <button type="submit" class="btn btn-success btn-sm">submit</button>
              </form>
            </td>
            <td>
              <a href="/jawaban/{{$ask -> id}}"><button type="button" class="btn btn-sm btn-info">lihat</button></a>
            </td>
          </tr>
          @endforeach
          </tbody>
        </table>
        <!-- /.table -->
      </div>
      <!-- /.mail-box-messages -->
    </div>
    <!-- /.card-body -->
    <div class="card-footer p-0">
          <div class="m-2">
            <a href="/pertanyaan/create"><button type="button" class="btn btn-success">bertanya?</button></a>
          </div>
    </div>
  </div>
  <!-- /.card -->
</div>
</div>
@endsection