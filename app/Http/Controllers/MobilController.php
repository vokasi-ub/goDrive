<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mobil;
use Illuminate\Support\Facades\DB;

class MobilController extends Controller
{
    public function index()
    {
        $categories = mobil::all();
        return view('mobil', compact('categories'));
        
    }

    public function edit($id_mobil)
    {
        $categories = DB::table('jenis_mobil')->where('id_mobil',$id_mobil)->get();
        return view('mobil.edit',['categories' => $categories]);
    }

    public function update(Request $request)
    {
        DB::table('jenis_mobil')->where('id_mobil',$request->id_mobil)->update([
            'id_mobil' => $request->id_mobil,
            'jenis' => $request->jenis,
            'nama_mobil' => $request->nama_mobil,
            'status' => $request->status
                       
        ]);
            return redirect('mobil');
    }

    public function destroy($id_mobil)
    {
        DB::table('jenis_mobil')->where('id_mobil',$id_mobil)->delete();
        return redirect('mobil');
    }

    public function search(Request $request)
    {
        $cari = $request->cari;

        $categories = DB::table('jenis_mobil')->where('id_mobil', 'LIKE', '%' . $cari . '%')->paginate(10);
        return view('mobil', ['categories' => $categories]);
    }

    public function insert()
    {
        $categories = mobil::all();
        return view('mobil.tambah', compact('categories'));
        
    }

    public function mobil(Request $request)
    {
	    // insert data ke table pegawai
	    DB::table('jenis_mobil')->insert([
		    'id_mobil' => $request->id_mobil,
            'jenis' => $request->jenis,
            'nama_mobil' => $request->nama_mobil,
            'status' => $request->status
	    ]);
	    // alihkan halaman ke halaman pegawai
	    return redirect('mobil');
 
    }
}
