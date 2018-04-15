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

  <form action="{{ route('dosen.update',$param) }}" method="post">
  {{csrf_field()}}
  {{method_field('PUT')}}
                <div class="col-lg-6">
                  <div class="form-group">
                      <label>Nama</label>
                      <input type="text" name="nama" class="form-control" required value="{{$obj->nama}}">
                  </div>            
                  <div class="form-group">
                      <label>NIP</label>
                      <input type="number" name="nip" class="form-control" value="{{$obj->nip}}">
                  </div>            
                  <div class="form-group">
                      <label>Tanggal Lahir</label>
                      <input type="date" name="tgl_lahir" class="form-control"  value="{{$obj->tgl_lahir}}">
                  </div>            
                  <div class="form-group">
                      <label>Jenjang Pendidikan</label>
                      <input type="text" name="jenjang_pendidikan" class="form-control" value="{{$obj->jenjang_pendidikan}}">
                  </div>           

                  <button class="btn btn-primary">Simpan</button> 
                </div>
</form>
             </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>

      @endsection