<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pembimbing;
use Illuminate\Support\Facades\DB;

class PembimbingController extends Controller
{
    public function index()
    {
        $categories = pembimbing::all();
        return view('pembimbing', compact('categories'));
        
    }

    public function edit($id_pembimbing)
    {
        $categories = DB::table('pembimbing')->where('id_pembimbing',$id_pembimbing)->get();
        return view('pembimbing.edit',['categories' => $categories]);
    }

    public function update(Request $request)
    {
        DB::table('pembimbing')->where('id_pembimbing',$request->id_pembimbing)->update([
            'id_pembimbing' => $request->id_pembimbing,
            'nama_pembimbing' => $request->nama_pembimbing,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'status' => $request->status
                       
        ]);
            return redirect('pembimbing');
    }

    public function destroy($id_pembimbing)
    {
        DB::table('pembimbing')->where('id_pembimbing',$id_pembimbing)->delete();
        return redirect('pembimbing');
    }

    public function search(Request $request)
    {
        $cari = $request->cari;

        $categories = DB::table('pembimbing')->where('id_pembimbing', 'LIKE', '%' . $cari . '%')->paginate(10);
        return view('pembimbing', ['categories' => $categories]);
    }

    public function insert()
    {
        $categories = pembimbing::all();
        return view('pembimbing.tambah', compact('categories'));
        
    }

    public function pembimbing(Request $request)
    {
	    // insert data ke table pegawai
	    DB::table('pembimbing')->insert([
		    'id_pembimbing' => $request->id_pembimbing,
            'nama_pembimbing' => $request->nama_pembimbing,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'status' => $request->status
	    ]);
	    // alihkan halaman ke halaman pegawai
	    return redirect('pembimbing');
 
    }
}
