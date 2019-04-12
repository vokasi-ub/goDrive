@extends('master.app')
@section('content')
  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
<h1>JADWAL</h1>
<br>
     
@if (count($hasil))
          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Data Result</h3>

       
            </div>

            <div class="box-body">
              
            <table class="table table-stripped">
            <tr>
                <td> ID Jadwal </td>
                <td> Hari </td>
                <td> Tanggal </td>
                <td> Jam </td>
                <td> ID Customer </td>
                <td> ID Pembimbing </td>
                <td> Opsi </td>
            </tr>        
            @foreach($categories as $li)
            <tr>
                <td> {{$li->id_jadwal}} </td>
                <td> {{$li->hari}} </td>
                <td> {{$li->tanggal}} </td>
                <td> {{$li->jam}} </td>
                <td> {{$li->id_customer}} </td>
                <td> {{$li->id_pembimbing}}</td>
                <td>
				            <a href="/edit/edit/{{ $li->id_jadwal }}">Edit</a>
				|
				            <a href="/hapus/destroy/{{ $li->id_jadwal }}">Hapus</a>
			          </td>
            </tr>
            @endforeach
            </table>
            </div>
            <!-- /.box-body -->
          </div>
        </section>

    <!-- /.content -->
  @else
   <div class="card-panel red darken-3 white-text">Oops.. Data Tidak Ditemukan</div>
@endif
    <!-- /.content -->
@endsection