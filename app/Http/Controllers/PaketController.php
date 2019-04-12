<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\paket;
use Illuminate\Support\Facades\DB;

class PaketController extends Controller
{
    public function index()
    {
        $categories = paket::all();
        return view('paket', compact('categories'));
        
    }

    public function edit($id_paket)
    {
        $categories = DB::table('jenis_paket')->where('id_paket',$id_paket)->get();
        return view('paket.edit',['categories' => $categories]);
    }

    public function update(Request $request)
    {
        DB::table('jenis_paket')->where('id_paket',$request->id_paket)->update([
            'id_paket' => $request->id_paket,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga
        ]);
            return redirect('paket');
    }

    public function destroy($id_paket)
    {
        DB::table('jenis_paket')->where('id_paket',$id_paket)->delete();
        return redirect('paket');
    }

    public function search(Request $request)
    {
        $cari = $request->cari;

        $categories = DB::table('jenis_paket')->where('id_paket', 'LIKE', '%' . $cari . '%')->paginate(10);
        return view('paket', ['categories' => $categories]);
    }

    public function insert()
    {
        $categories = paket::all();
        return view('paket.tambah', compact('categories'));
        
    }

    public function paket(Request $request)
    {
	    // insert data ke table pegawai
	    DB::table('jenis_paket')->insert([
		    'id_paket' => $request->id_paket,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga
	    ]);
	    // alihkan halaman ke halaman pegawai
	    return redirect('paket');
 
    }
}
