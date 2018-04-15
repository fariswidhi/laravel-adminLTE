@extends('admin.template')

@section('title')
  {{-- expr --}}
  {{$title}}
@endsection
@section('content')
  {{-- expr --}}
  
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
                        <a href="{{ url('dosen/create') }}" class="btn btn-primary">Tambah</a>
                        <br>
                        <br>
              <h3 class="box-title">{{$page}}</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive ">

              <table class="table table-hover">
                <tbody>
                <tr>
                  <th>#</th>
                  <th>NIP</th>
                  <th>Nama</th>
                  <th>Tgl Lahir</th>
                  <th>Jenjang Pendidikan</th>
                  <th>Aksi</th>
                </tr>

                @foreach ($data as $d)
                  {{-- expr --}}

                <tr>
                  <td>{{$no++}}</td>
                  <td>{{$d->nip}}</td>
                  <td>{{$d->nama}}</td>
                  <td>{{$d->tgl_lahir}}</td>
                  <td>{{$d->jenjang_pendidikan}}</td>
                  <td>
                    <a href="{{ url('/dosen/'.$d->nip.'-'.$d->id.'/edit') }}" class="btn btn-success">Edit</a>
                    <form action="{{ route('dosen.destroy',$d->id) }}" method="post" style="display: inline;">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                        <button class="btn btn-danger" type="submit">Hapus</button>
                    </form>
                  </td>
                </tr>

                                @endforeach
              </tbody></table>
<center>
              {{$data->links()}}
              </center>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>

      @endsection