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
            
            <form class="form-horizontal" action="/tambah/mobil" method="post">
               {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">ID Mobil</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="id_mobil" placeholder="ID Mobil">
                  </div>
                  <label for="inputEmail3" class="col-sm-2 control-label">Jenis</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="jenis" placeholder="Jenis">
                  </div>
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Mobil</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_mobil" placeholder="Nama Mobil">
                  </div>
                  <label for="inputEmail3" class="col-sm-2 control-label">Status</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="status" placeholder="Status">
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
        

    <!-- /.content -->
  
    <!-- /.content -->
@endsection