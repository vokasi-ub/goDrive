<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\customer;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function index()
    {
        $categories = customer::all();
        return view('customer', compact('categories'));
        
    }

    public function edit($id_customer)
    {
        $categories = DB::table('customer')->where('id_customer',$id_customer)->get();
        return view('customer.edit',['categories' => $categories]);
    }

    public function update(Request $request)
    {
        DB::table('customer')->where('id_customer',$request->id_customer)->update([
            'id_customer' => $request->id_customer,
            'nama_customer' => $request->nama_customer,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'status' => $request->status,
            'id_mobil' => $request->id_mobil,
            'id_paket' => $request->id_paket
                       
        ]);
            return redirect('customer');
    }

    public function destroy($id_customer)
    {
        DB::table('customer')->where('id_customer',$id_customer)->delete();
        return redirect('customer');
    }

    public function search(Request $request)
    {
        $cari = $request->cari;

        $categories = DB::table('customer')->where('id_customer', 'LIKE', '%' . $cari . '%')->paginate(10);
        return view('customer', ['categories' => $categories]);
    }

    public function insert()
    {
        $categories = customer::all();
        return view('customer.tambah', compact('categories'));
        
    }

    public function customer(Request $request)
    {
	    // insert data ke table pegawai
	    DB::table('customer')->insert([
		    'id_customer' => $request->id_customer,
            'nama_customer' => $request->nama_customer,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'status' => $request->status,
            'id_mobil' => $request->id_mobil,
            'id_paket' => $request->id_paket
	    ]);
	    // alihkan halaman ke halaman pegawai
	    return redirect('customer');
 
    }
}
