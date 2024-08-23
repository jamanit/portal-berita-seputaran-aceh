<?php

namespace App\Http\Controllers;

use App\Models\M_visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class C_visitor extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $visitor_list = M_visitor::orderBy('created_at', 'desc')->paginate();
        $data         = [
            'title'        => 'Seputaran Aceh - Daftar Pengunjung',
            'visitor_list' => $visitor_list
        ];
        return view('visitor/V_visitor_index', $data);
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
    }

    public function destroy($id)
    {
        M_visitor::where('idp_visitor', $id)->delete();
        return redirect()->to('visitor')->with('success', 'Data berhasil dihapus!');
    }
}
