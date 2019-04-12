<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jadwal;
use Illuminate\Support\Facades\DB;

class JadwalController extends Controller
{
    
    public function index()
    {
        $categories = jadwal::all();
        return view('home', compact('categories'));
        
    }

    public function edit($id_jadwal)
    {
        $categories = DB::table('jadwal')->where('id_jadwal',$id_jadwal)->get();
        return view('master.edit',['categories' => $categories]);
    }

    public function update(Request $request)
    {
        DB::table('jadwal')->where('id_jadwal',$request->id_jadwal)->update([
            'id_jadwal' => $categories->id_jadwal,
            'hari' => $categories->hari,
            'tanggal' => $categories->tanggal,
            'jam' => $categories->jam,
            'id_customer' => $categories->id_customer,
            'id_pembimbing' => $categories->id_pembimbing
                       
        ]);
            return redirect('category');
    }

    public function destroy()
    {
        DB::table('jadwal')->where('id_jadwal',$id_jadwal)->delete();
        return redirect('category');
    }

    public function search(Request $request)
    {
        $cari = $request->cari;

        $categories = DB::table('jadwal')->where('hari', 'LIKE', '%' . $cari . '%')->paginate(10);
        return view('home', ['categories' => $categories]);
    }

    public function insert()
    {
        $categories = jadwal::all();
        return view('master.tambah', compact('categories'));
        
    }

    public function jadwal(Request $request)
    {
	    // insert data ke table pegawai
	    DB::table('jadwal')->insert([
		    'id_jadwal' => $request->id_jadwal,
            'hari' => $request->hari,
            'tanggal' => $request->tanggal,
            'jam' => $request->jam,
            'id_customer' => $request->id_customer,
            'id_pembimbing' => $request->id_pembimbing
	    ]);
	    // alihkan halaman ke halaman pegawai
	    return redirect('home');
 
    }
}