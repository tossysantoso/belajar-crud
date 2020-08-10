@extends('adminlte.master')


@section('content')
    <div class="ml-3 mt-3">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Table Answer</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <a class="btn btn-primary mb-2" href="/pertanyaan/create">Create new answer</a>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Judul</th>
                    <th>Isi</th>
                    <th style="width: 40px">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($pertanyaan as $key => $pertanyaan)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $pertanyaan->judul }}</td>
                        <td>{{ $pertanyaan->isi }}</td>
                        <td style="display: flex">
                        <a href="/pertanyaan/{{$pertanyaan->id}}" class="btn btn-info btn-sm">Show</a>
                        <a href="/pertanyaan/{{$pertanyaan->id}}/edit" class="btn btn-default btn-sm">edit</a>
                        <form action="/pertanyaan/{{$pertanyaan->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                        <input type="submit" value="delete" class="btn btn-danger btn-sm">
                        </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" align="center">No Posts</td>
                    </tr>
                  @endforelse
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
            <!--<div class="card-footer clearfix">
              <ul class="pagination pagination-sm m-0 float-right">
                <li class="page-item"><a class="page-link" href="#">«</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">»</a></li>
              </ul>
            </div>-->
          </div>
    </div>
@endsection
