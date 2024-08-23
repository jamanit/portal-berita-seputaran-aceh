<?php

namespace App\Http\Controllers;

use App\Models\M_account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class C_account extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $account_list = M_account::orderBy('id', 'desc')->paginate();
        $data         = [
            'title'        => 'Seputaran Aceh - Daftar Akun',
            'account_list' => $account_list,
        ];
        return view('account/V_account_index', $data);
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
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'  => 'required',
            'email' => 'required'
        ], [
            'name.required'  => 'Nama harus diisi!',
            'email.required' => 'Email harus diisi!',
            Session::flash('error', 'Data gagal diperbarui!')
        ]);
        $data = [
            'name'  => $request->name,
            'email' => $request->email
        ];
        M_account::where('id', $id)->update($data);
        return redirect()->to('/account')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy($id)
    {
        M_account::where('id', $id)->delete();
        return redirect()->to('account')->with('success', 'Data berhasil dihapus!');
    }
}
