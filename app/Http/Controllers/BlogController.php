<?php

namespace App\Http\Controllers;

use App\Category;
use App\Posts;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Posts $posts)
    {
        $category_widget = Category::all();

        $title = 'Blog SEO Sederhana';

        $data = $posts->latest()->take(8)->get();
        return view('blog', compact('data', 'category_widget', 'title'));
    }

    public function isi_blog($slug)
    {
        $category_widget = Category::all();

        $title = 'Blog SEO Sederhana';

        $data = Posts::where('slug', $slug)->get();
        return view('blog.konten_post', compact('data', 'category_widget', 'title'));
    }

    public function list_blog()
    {
        $category_widget = Category::all();

        $title = 'Blog SEO Sederhana';

        $data = Posts::latest()->paginate(6);
        return view('blog.list_post', compact('data', 'category_widget', 'title'));
    }

    public function list_category(category $category)
    {
        $category_widget = Category::all();

        $title = 'Blog SEO Sederhana';

        $data = $category->posts()->paginate();
        return view('blog.list_post', compact('data', 'category_widget', 'title'));
    }

    public function cari(request $request)
    {
        $category_widget = Category::all();

        $title = 'Blog SEO Sederhana';

        $data = Posts::where('Judul', $request->cari)->orWhere('Judul', 'like', '%' . $request->cari . '%')->paginate(6);
        return view('blog.list_post', compact('data', 'category_widget', 'title'));
    }
}
