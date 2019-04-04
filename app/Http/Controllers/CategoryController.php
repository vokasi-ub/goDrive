<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    
    public function index()
    {
        $categories = Category::all();
        return view('home', compact('categories'));
        
    }

    public function edit()
    {
        $categories = DB::table('jadwal')->where('id_jadwal',$id_jadwal)->get();
        return view('master.edit',['categories' => $categories]);
    }

    public function update()
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
        $query = $request->input('cari');
        $hasil = category::where('category_name', 'LIKE', '%' . $query . '%')->paginate(10);
        return view('master.result', compact('hasil', 'query'));
    }
}