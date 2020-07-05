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
      <div class="table-responsive">
        <table class="table table-hover">
          <thead class="text-center">                  
            <tr>
              <th>No</th>
              <th>Judul</th>
              <th>Isi</th>
              <th>Jawaban</th>
              <th>Aksi Pertanyaan</th>
            </tr>
          </thead>
          <tbody>
          @foreach($data as $key => $ask)
          <tr>
            <td>{{$key + 1}}</td>
            <td>{{$ask -> judul}}</td>
            <td class="mailbox-subject">{{$ask -> isi_pertanyaan}}</td>
            <td>
              <div class="btn-group">
              <form action="{{ url('/jawaban/'. $ask->id) }}" method="post">
                @csrf
                <div class="input-group mb-3">
                  <input type="text" class="form-control rounded-0" name="isi_jawaban" placeholder="isi jawaban disini">
                  <span class="input-group-append">
                    <button type="submit" class="btn btn-success btn-flat">submit</button>
                  </span>
                </div>
                <input hidden name="pertanyaan_id" value="{{$ask->id}}">
                <input hidden name="created_at" value="{{ \Carbon\Carbon::now()}}">
                <input hidden name="updated_at" value="{{ \Carbon\Carbon::now()}}">
              </form>
              <a href="/jawaban/{{$ask -> id}}">
                <button type="button" class="btn btn-info ml-3">lihat</button>
              </a>
            </div>
            </td>
            <td class="text-center">
              <div class="btn-group">
                <a href="/pertanyaan/{{$ask -> id}}">
                  <button type="button" class="btn btn-sm btn-primary m-1">detail</button>
                </a>
                <a href="/pertanyaan/{{$ask -> id}}/edit">
                  <button type="button" class="btn btn-sm btn-warning m-1">edit</button>
                </a>
                <form action="/pertanyaan/{{$ask->id}}" method="POST">
                {{method_field('delete')}}
                @csrf
              <button type="submit" class="btn btn-sm btn-danger m-1">hapus</button>
                </form>
              </div>
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