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
            <form class="form-horizontal" action="/fasilitas/update" method="post">
               {{ csrf_field() }}
              <div class="box-body">
                  <input type="hidden" name="id_fasilitas" value="{{ $li->id_fasilitas }}"> <br/>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">ID Fasilitas</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="id_fasilitas" value="{{ $li->id_fasilitas }}" placeholder="ID fasilitas">
                  </div>
                  <label for="inputEmail3" class="col-sm-2 control-label">ID Paket</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="id_paket" value="{{ $li->id_paket }}" placeholder="ID Paket">
                  </div>
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Fasilitas</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_fasilitas" value="{{ $li->nama_fasilitas }}" placeholder="Nama Fasilitas">
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