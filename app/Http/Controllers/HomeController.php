<?php

namespace App\Http\Controllers;

use App\Models\M_news;
use App\Models\M_category;
use App\Models\M_medsos;
use App\Models\M_visitor;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $count_news          = M_news::get()->count();
        $count_category      = M_category::get()->count();
        $count_medsos        = M_medsos::get()->count();
        $count_visitor       = M_visitor::get()->count();
        $count_visitor_visit = M_visitor::sum('visit');
        $data                = [
            'title'               => 'Seputaran Aceh - Beranda',
            'count_news'          => $count_news,
            'count_category'      => $count_category,
            'count_medsos'        => $count_medsos,
            'count_visitor'       => $count_visitor,
            'count_visitor_visit' => $count_visitor_visit
        ];
        return view('home', $data);
    }
}
