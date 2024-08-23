<?php

namespace App\Http\Controllers;

use App\Models\M_category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class C_category extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $category_list = M_category::orderBy('order', 'asc')->paginate();
        $data          = [
            'title'         => 'Seputaran Aceh - Daftar Kategori',
            'category_list' => $category_list,
        ];
        return view('category/V_category_index', $data);
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required',
            'order'         => 'required'
        ], [
            Session::flash('error', 'Data gagal ditambah!')
        ]);
        $data = [
            'category_name' => $request->category_name,
            'order'         => $request->order
        ];
        M_category::create($data);
        return redirect()->to('/category')->with('success', 'Data berhasil ditambah!');
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'category_name' => 'required',
            'order'         => 'required'
        ], [
            Session::flash('error', 'Data gagal diperbarui!')
        ]);
        $data = [
            'category_name' => $request->category_name,
            'order'         => $request->order
        ];
        M_category::where('idp_category', $id)->update($data);
        return redirect()->to('/category')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy($id)
    {
        M_category::where('idp_category', $id)->delete();
        return redirect()->to('category')->with('success', 'Data berhasil dihapus!');
    }
}
