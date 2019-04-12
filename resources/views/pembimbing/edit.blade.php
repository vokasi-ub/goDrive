@extends('master.app')
@section('content')

  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
<h1>Data Jadwal</h1>
<br>
      
    

          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Horizontal Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            @foreach($categories as $li)
            <form class="form-horizontal" action="/pembimbing/update" method="post">
               {{ csrf_field() }}
              <div class="box-body">
                  <input type="hidden" name="id_pembimbing" value="{{ $li->id_pembimbing }}"> <br/>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">ID Pembimbing</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="id_pembimbing" value="{{ $li->id_pembimbing }}" placeholder="ID Pembimbing">
                  </div>
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Pembimbing</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_pembimbing" value="{{ $li->nama_pembimbing }}" placeholder="Nama Pembimbing">
                  </div>
                  <label for="inputEmail3" class="col-sm-2 control-label">No HP</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="no_hp" value="{{ $li->no_hp }}" placeholder="No HP">
                  </div>
                  <label for="inputEmail3" class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat" value="{{ $li->alamat }}" placeholder="Alamat">
                  </div>
                  <label for="inputEmail3" class="col-sm-2 control-label">Status</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="status" value="{{ $li->status }}" placeholder="Status">
                  </div>
                </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Submit</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        </section>
        @endforeach

    <!-- /.content -->
  
    <!-- /.content -->
@endsection