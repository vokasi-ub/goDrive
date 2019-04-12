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
            
            <form class="form-horizontal" action="/tambah/jadwal" method="post">
               {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">ID Jadwal</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="id_jadwal" placeholder="ID Jadwal">
                  </div>
                  <label for="inputEmail3" class="col-sm-2 control-label">Hari</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="hari" placeholder="hari">
                  </div>
                  <label for="inputEmail3" class="col-sm-2 control-label">Tanggal</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="tanggal" placeholder="Tanggal">
                  </div>
                  <label for="inputEmail3" class="col-sm-2 control-label">Jam</label>
                  <div class="col-sm-10">
                    <input type="time" class="form-control" name="jam" placeholder="Jam">
                  </div>
                  <label for="inputEmail3" class="col-sm-2 control-label">ID customer</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="id_customer" placeholder="ID Customer">
                  </div>
                  <label for="inputEmail3" class="col-sm-2 control-label">ID Pembimbing</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="id_pembimbing" placeholder="ID Pembimbing">
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