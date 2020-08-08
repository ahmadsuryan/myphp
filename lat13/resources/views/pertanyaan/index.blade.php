@extends('layouts.master')

@section('content')
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Projects</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body p-0">
          <table id="example1" class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 5%">
                          id
                      </th>
                      <th style="width: 25%">
                          Judul Pertanyaan
                      </th>
                      <th style="width: 50%">
                          Isi Pertanyaan
                      </th>
                      <th style="width: 20%">
                         Aksi
                      </th>
                  </tr>
              </thead>
              <tbody>
              @foreach($pertanyaan as $dt)
                  <tr>
                      <td>{{ $dt->id }}</td>
                      <td>{{ $dt->judul }}</td>
                      <td>{{ $dt->isi }}</td>
                      <td style="display: flex">
                          <a class="btn btn-primary btn-sm" href="{{url('/pertanyaan/'.$dt->id )}}">
                              <i class="fas fa-folder"></i>
                              View
                          </a>
                          <a class="btn btn-info btn-sm" href="{{url('/pertanyaan/'.$dt->id.'/edit' )}}">
                              <i class="fas fa-pencil-alt"></i>
                              Edit
                          </a>
                          <form action="{{url('/pertanyaan/'.$dt->id )}}" method="post">
                             @csrf
                             @method('DELETE')
                             <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                          </form>
                      </td>
                  </tr>
              @endforeach
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  @endsection

  @push('script')
    <link rel="stylesheet" href="{{url('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <script src="{{asset('plugins/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
    <script>
        $(function () {
            $("#example1").DataTable();
        });
    </script>
@endpush