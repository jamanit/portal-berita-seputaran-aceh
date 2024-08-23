<?php

namespace App\Http\Controllers;

use App\Models\M_medsos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class C_medsos extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $medsos_list = M_medsos::orderBy('idp_medsos', 'desc')->paginate();
        $data        = [
            'title'       => 'Seputaran Aceh - Daftar Medsos',
            'medsos_list' => $medsos_list,
        ];
        return view('medsos/V_medsos_index', $data);
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        $request->validate([
            'medsos_name'    => 'required',
            'medsos_address' => 'required'
        ], [
            Session::flash('error', 'Data gagal ditambah!')
        ]);
        $data = [
            'medsos_name'    => $request->medsos_name,
            'medsos_address' => $request->medsos_address,
            'medsos_link'    => $request->medsos_link != '' ? $request->medsos_link : ''
        ];
        M_medsos::create($data);
        return redirect()->to('/medsos')->with('success', 'Data berhasil diperbarui!');
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
            'medsos_name'    => 'required',
            'medsos_address' => 'required'
        ], [
            Session::flash('error', 'Data gagal diperbarui!')
        ]);
        $data = [
            'medsos_name'    => $request->medsos_name,
            'medsos_address' => $request->medsos_address,
            'medsos_link'    => $request->medsos_link != '' ? $request->medsos_link : ''
        ];
        M_medsos::where('idp_medsos', $id)->update($data);
        return redirect()->to('/medsos')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy($id)
    {
        M_medsos::where('idp_medsos', $id)->delete();
        return redirect()->to('medsos')->with('success', 'Data berhasil dihapus!');
    }
}
