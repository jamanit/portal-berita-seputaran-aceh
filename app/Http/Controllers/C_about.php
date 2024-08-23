<?php

namespace App\Http\Controllers;

use App\Models\M_about;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class C_about extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
        $about_detail = M_about::where('idp_about', $id)->first();
        $data         = [
            'title'        => 'Seputaran Aceh - Ubah Tentang',
            'about_detail' => $about_detail
        ];
        return view('about/V_about_edit', $data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'logo'  => 'image|mimes:jpeg,png,jpg,gif,svg|max:3048',
            'about' => 'required'
        ], []);
        if ($request->logo == '') {
            $imageName = $request->old_logo;
        } else {
            $randno    = rand(99, 999999999999);
            $imageName = $id . '-LG' . $randno . '.' . $request->logo->extension();
            $request->logo->move(public_path('img/about'), $imageName);
            $image_path = public_path('img/about/' . $request->old_logo);
            if (file_exists($image_path)) {
                unlink($image_path);
            }
        }
        $data = [
            'logo'  => $imageName,
            'about' => $request->about
        ];
        M_about::where('idp_about', $id)->update($data);
        return redirect()->to('/about/edit/' . $id)->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy($id)
    {
    }
}
