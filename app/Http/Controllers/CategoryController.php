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
        $categories = DB::table('table_category')->where('category_id',$category_id)->get();
        return view('master.edit',['categories' => $categories]);
    }

    public function update()
    {
        DB::table('table_category')->where('category_id',$request->category_id)->update([
            'category_name' => $request->category_name
            
                       
        ]);
            return redirect('category');
    }

    public function destroy()
    {
        DB::table('table_category')->where('category_id',$category_id)->delete();
        return redirect('category');
    }

    public function search(Request $request)
    {
        $query = $request->input('cari');
        $hasil = category::where('category_name', 'LIKE', '%' . $query . '%')->paginate(10);
        return view('master.result', compact('hasil', 'query'));
    }
}