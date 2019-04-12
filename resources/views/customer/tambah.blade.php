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
            
            <form class="form-horizontal" action="/tambah/customer" method="post">
               {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">ID Customer</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="id_customer" placeholder="ID Customer">
                  </div>
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Customer</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_customer" placeholder="Nama Customer">
                  </div>
                  <label for="inputEmail3" class="col-sm-2 control-label">No HP</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="no_hp" placeholder="No HP">
                  </div>
                  <label for="inputEmail3" class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat" placeholder="alamat">
                  </div>
                  <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="email" placeholder="Email">
                  </div>
                  <label for="inputEmail3" class="col-sm-2 control-label">Status</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="status" placeholder="Status">
                  </div>
                  <label for="inputEmail3" class="col-sm-2 control-label">ID Mobil</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="id_mobil" placeholder="ID Mobil">
                  </div>
                  <label for="inputEmail3" class="col-sm-2 control-label">ID Paket</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="id_paket" placeholder="ID Paket">
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