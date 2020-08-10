@extends('adminlte.master')

@section('content')
<div class="ml-3 mt-3">
    <!-- general form elements -->
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Create New Answer</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="/pertanyaan" method="POST">
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="judul">Judul</label>
          <input type="text" class="form-control" id="judul" name="judul" value="{{ old('judul', '') }}" placeholder="Masukan Judul Pertanyaan" required>
          @error('judul')
            <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="isi">Isi</label>
          <input type="text" class="form-control" id="isi" name="isi" value="{{ old('isi', '') }}" placeholder="Masukan Isi Pertanyaan" required>
            @error('isi')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
</div>

@endsection
