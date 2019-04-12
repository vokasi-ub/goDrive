<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\fasilitas;
use Illuminate\Support\Facades\DB;

class FasilitasController extends Controller
{
    public function index()
    {
        $categories = fasilitas::all();
        return view('fasilitas', compact('categories'));
        
    }

    public function edit($id_fasilitas)
    {
        $categories = DB::table('fasilitas_paket')->where('id_fasilitas',$id_fasilitas)->get();
        return view('fasilitas.edit',['categories' => $categories]);
    }

    public function update(Request $request)
    {
        DB::table('fasilitas_paket')->where('id_fasilitas',$request->id_fasilitas)->update([
            'id_fasilitas' => $request->id_fasilitas,
            'id_paket' => $request->id_paket,
            'nama_fasilitas' => $request->nama_fasilitas
                       
        ]);
            return redirect('fasilitas');
    }

    public function destroy($id_fasilitas)
    {
        DB::table('fasilitas_paket')->where('id_fasilitas',$id_fasilitas)->delete();
        return redirect('fasilitas');
    }

    public function search(Request $request)
    {
        $cari = $request->cari;

        $categories = DB::table('fasilitas')->where('id_fasilitas', 'LIKE', '%' . $cari . '%')->paginate(10);
        return view('fasilitas', ['categories' => $categories]);
    }

    public function insert()
    {
        $categories = fasilitas::all();
        return view('fasilitas.tambah', compact('categories'));
        
    }

    public function fasilitas(Request $request)
    {
	    // insert data ke table pegawai
	    DB::table('fasilitas_paket')->insert([
		    'id_fasilitas' => $request->id_fasilitas,
            'id_paket' => $request->id_paket,
            'nama_fasilitas' => $request->nama_fasilitas
	    ]);
	    // alihkan halaman ke halaman pegawai
	    return redirect('fasilitas');
 
    }
}
