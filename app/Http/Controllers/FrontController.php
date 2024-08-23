<?php

namespace App\Http\Controllers;

use App\Models\M_news;
use App\Models\M_category;
use App\Models\M_medsos;
use App\Models\M_about;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $news_slideshow = M_news::orderBy('idp_news', 'desc')->paginate(3);
        $news_list      = M_news::select('tb_news.*', 'tb_category.category_name')
            ->join('tb_category', 'tb_news.idf_category', '=', 'tb_category.idp_category')
            ->orderBy('idp_news', 'desc')->paginate(10);
        $category_list = M_category::orderBy('order', 'asc')->get();
        $medsos_list   = M_medsos::orderBy('idp_medsos', 'desc')->get();
        $data          = [
            'title'          => 'Seputaran Aceh - Halaman Depan',
            'news_slideshow' => $news_slideshow,
            'news_list'      => $news_list,
            'category_list'  => $category_list,
            'medsos_list'    => $medsos_list
        ];
        return view('index', $data);
    }

    public function news_detail($id)
    {
        $news_list      = M_news::select('tb_news.*', 'tb_category.category_name')
            ->join('tb_category', 'tb_news.idf_category', '=', 'tb_category.idp_category')
            ->orderBy('idp_news', 'desc')->paginate(10);
        $news_detail = M_news::select('tb_news.*', 'tb_category.category_name')
            ->join('tb_category', 'tb_news.idf_category', '=', 'tb_category.idp_category')
            ->where('idp_news', $id)->first();
        $category_list = M_category::orderBy('idp_category', 'desc')->get();
        $medsos_list   = M_medsos::orderBy('idp_medsos', 'desc')->get();
        $data          = [
            'title'         => 'Seputaran Aceh - Detail Berita',
            'news_list'     => $news_list,
            'news_detail'   => $news_detail,
            'category_list' => $category_list,
            'medsos_list'   => $medsos_list
        ];
        return view('front/V_front_news_detail', $data);
    }

    public function about_detail($id)
    {
        $category_list = M_category::orderBy('idp_category', 'desc')->get();
        $medsos_list   = M_medsos::orderBy('idp_medsos', 'desc')->get();
        $about_detail  = M_about::where('idp_about', $id)->first();
        $data          = [
            'title'         => 'Seputaran Aceh - Detail Tentang',
            'category_list' => $category_list,
            'medsos_list'   => $medsos_list,
            'about_detail'  => $about_detail
        ];
        return view('front/V_front_about_detail', $data);
    }

    public function category_detail($id)
    {
        $news_list = M_news::select('tb_news.*', 'tb_category.category_name')
            ->join('tb_category', 'tb_news.idf_category', '=', 'tb_category.idp_category')
            ->where('idf_category', $id)
            ->orderBy('idp_news', 'desc')->paginate(10);
        $category_list = M_category::orderBy('idp_category', 'desc')->get();
        $medsos_list   = M_medsos::orderBy('idp_medsos', 'desc')->get();
        $data          = [
            'title'         => 'Seputaran Aceh - Detail Kategori',
            'news_list'     => $news_list,
            'category_list' => $category_list,
            'medsos_list'   => $medsos_list
        ];
        return view('front/V_front_category_detail', $data);
    }
}
