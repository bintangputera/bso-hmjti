<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    protected $param;
    public function index()
    {
        $this->param['data'] = Blog::select('blogs.title','blogs.author','blogs.slug','blogs.content','blogs.images','blogs.category_id','blogs.updated_at','blog_category.id as id_kategori','blog_category.category_name')
                                ->join('blog_category','blog_category.id','blogs.category_id')
                                ->orderBy('blogs.id','DESC')
                                ->paginate(4);
        $this->param['data_recent'] =Blog::select('blogs.title','blogs.author','blogs.slug','blogs.content','blogs.images','blogs.category_id','blogs.updated_at','blog_category.id as id_kategori','blog_category.category_name')
                                    ->join('blog_category','blog_category.id','blogs.category_id')
                                    ->orderBy('blogs.id','ASC')
                                    ->limit(3)
                                    ->get();
                                // ->get();
                                // return $this->param['data_recent'];
        return view('blog.blog',$this->param);
    }

    public function detailBlog($slug)
    {
        $this->param['data'] = Blog::select('blogs.title','blogs.author','blogs.slug','blogs.content','blogs.images','blogs.category_id','blogs.updated_at','blog_category.id as id_kategori','blog_category.category_name')
                                ->join('blog_category','blog_category.id','blogs.category_id')
                                ->where('blogs.slug',$slug)
                                ->first();
                            //    return $this->param['data'];
        $this->param['data_recent'] = Blog::select('blogs.title','blogs.author','blogs.slug','blogs.content','blogs.images','blogs.category_id','blogs.updated_at','blog_category.id as id_kategori','blog_category.category_name')
                                    ->join('blog_category','blog_category.id','blogs.category_id')
                                    ->orderBy('blogs.id','ASC')
                                    ->limit(3)
                                    ->get();
        // return $slug;
        return view('blog.detail-blog',$this->param);
    }
}
