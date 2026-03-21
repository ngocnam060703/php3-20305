<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $posts = DB::table('posts')->get(); //lấy toàn bộ dữ liệu

        //Nối 2 bảng
        $posts = DB::table('posts')
            ->join('categories', 'posts.category_id', '=', 'categories.id')
            ->select('posts.*', 'name')
            ->orderBy('id', 'desc')
            ->limit(8)
            ->get();

        return view('clients.home', compact('posts'));
    }
}
