<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //Hiển thị danh sách
    public function index()
    {
        $posts = Post::all();
        //Sắp xếp
        $posts = Post::query()
            ->orderBy('id', 'desc')
            ->limit(10)
            ->get();
        //Sử dụng Relationship
        $posts = $posts[0]->category->name;

        $posts = Post::with('category')
            ->orderBy('id', 'desc')
            ->paginate(10); //Phân trang

        $categories = Category::all();

        return view('clients.list', compact('posts', 'categories'));
    }
    public function show($id)
    {
        //Lấy 1 bản ghi theo id
        $post = DB::table('posts')
            ->join('categories', 'posts.category_id', '=', 'categories.id')
            ->select('posts.*', 'name')
            ->where('posts.id', $id)
            ->first();
        return view('clients.post', compact('post'));
    }
}
