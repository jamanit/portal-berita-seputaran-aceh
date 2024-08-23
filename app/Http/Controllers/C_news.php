<?php

namespace App\Http\Controllers;

use App\Models\M_news;
use App\Models\M_category;
use Illuminate\Http\Request;

class C_news extends Controller
{
    public function __construct()
    {
    }

    public function index(Request $request)
    {
        $news_list = M_news::select('tb_news.*', 'tb_category.category_name')
            ->join('tb_category', 'tb_news.idf_category', '=', 'tb_category.idp_category')
            ->orderBy('idp_news', 'desc')->paginate();
        $data = [
            'title'     => 'Seputaran Aceh - Daftar Berita',
            'news_list' => $news_list,
        ];
        return view('news/V_news_index', $data);
    }

    public function create()
    {
        $category_list = M_category::orderBy('order', 'asc')->paginate();
        $data          = [
            'title'         => 'Seputaran Aceh - Tambah Berita',
            'category_list' => $category_list
        ];
        return view('news/V_news_create', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'idf_category' => 'required',
            'photo'        => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3048',
            'title'        => 'required',
            'content'      => 'required'
        ], []);
        if ($request->photo != '') {
            $randno    = rand(99, 999999999999);
            $imageName = $request->idf_category . '-NWS' . $randno . '.' . $request->photo->extension();
            $request->photo->move(public_path('img/news'), $imageName);
        } else {
            $imageName = '';
        }
        $data = [
            'idf_category' => $request->idf_category,
            'photo'        => $imageName,
            'title'        => $request->title,
            'content'      => $request->content,
            'created_by'   => $request->created_by
        ];
        M_news::create($data);
        return redirect()->to('/news')->with('success', 'Data berhasil ditambah!');
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
        $news_detail   = M_news::where('idp_news', $id)->first();
        $category_list = M_category::orderBy('order', 'asc')->paginate();
        $data          = [
            'title'         => 'Seputaran Aceh - Ubah Berita',
            'news_detail'   => $news_detail,
            'category_list' => $category_list
        ];
        return view('news/V_news_edit', $data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'idf_category' => 'required',
            'photo'        => 'image|mimes:jpeg,png,jpg,gif,svg|max:3048',
            'title'        => 'required',
            'content'      => 'required'
        ], []);
        if ($request->photo == '') {
            $imageName = $request->old_photo;
        } else {
            $randno    = rand(99, 999999999999);
            $imageName = $request->idf_category . '-NWS' . $randno . '.' . $request->photo->extension();
            $request->photo->move(public_path('img/news'), $imageName);
            $image_path = public_path('img/news/' . $request->old_photo);
            if (file_exists($image_path)) {
                unlink($image_path);
            }
        }
        $data = [
            'idf_category' => $request->idf_category,
            'photo'        => $imageName,
            'title'        => $request->title,
            'content'      => $request->content,
            'created_by'   => $request->created_by,
            'updated_by'   => $request->updated_by
        ];
        M_news::where('idp_news', $id)->update($data);
        return redirect()->to('/news')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy(Request $request, $id)
    {
        $image_path = public_path('img/news/' . $request->photo);
        if (file_exists($image_path)) {
            unlink($image_path);
        }
        M_news::where('idp_news', $id)->delete();
        return redirect()->to('news')->with('success', 'Data berhasil dihapus!');
    }
}
