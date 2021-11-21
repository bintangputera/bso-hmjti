<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $param;
    public function index()
    {
        $this->param['data'] =Blog::select('blogs.title','blogs.author','blogs.slug','blogs.content','blogs.images','blogs.category_id','blogs.updated_at','blog_category.id as id_kategori','blog_category.category_name')
                                    ->join('blog_category','blog_category.id','blogs.category_id')
                                    ->orderBy('blogs.id','DESC')
                                    ->limit(4)
                                    ->get();
        return view('welcome',$this->param);
    }
}
