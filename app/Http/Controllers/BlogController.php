<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\CategoryBlog;
use Exception;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**z
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $param;
    public function index()
    {
        $this->param['data'] = Blog::all();
        return view('pages.blog.index', $this->param);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->param['data'] = CategoryBlog::all();
        return view('pages.blog.create', $this->param);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $file = $request->file('thumbnailblog');
        $date = date("His");
        $final_file_name = $date.'.'.$file->getClientOriginalExtension();

        $slug = Str::slug($request->judulblog, '-');

        // return $request;

        $request->validate(
            [
                'judulblog' => 'required',
                'authorblog' => 'required',
                'ktblog' => 'required',
                'thumbnailblog' => 'required|mimes:png,jpg',
                'kontenblog' => 'required'
            ],
            [
                'required' => ':Attribute harus terisi',
            ],
            [
                'judulblog' => 'Judul blog',
                'authorblog' => 'Author',
                'ktblog' => 'Kategori',
                'thumbnailblog' => 'Thumbnail',
                'kontenblog' => 'Konten Blog'
            ]
        );
        try {
            $insertBlog = new Blog;
            $insertBlog->title = $request->judulblog;
            $insertBlog->author = $request->authorblog;
            $insertBlog->category_id = $request->ktblog;
            $insertBlog->slug = $slug;
            $insertBlog->content = $request->kontenblog;

            $path = public_path('img/blog');
            $file->move($path, $final_file_name);
            $insertBlog->images = $final_file_name;

            $insertBlog->save();
            return redirect('administrator/blog')->withStatus('Berhasil menyimpan data');
        } catch (Exception $e) {
            return redirect()->back()->withErrors('Terdapat kesalahan', $e);
        } catch(\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withErrors('Terdapat kesalahan', $e);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->param['data'] = Blog::where('id', $id)->first();
        $this->param['category'] = CategoryBlog::all();
        return view('pages.blog.detail', $this->param);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->param['data'] = Blog::findOrFail($id);
        $this->param['category'] = CategoryBlog::all();
        return view('pages.blog.edit', $this->param);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $file = $request->file('thumbnailblog');
        $date = date("His");
        $final_file_name = $date.'.'.$file->getClientOriginalExtension();

        $slug = Str::slug($request->judulblog, '-');

        // return $request;

        $request->validate(
            [
                'judulblog' => 'required',
                'authorblog' => 'required',
                'ktblog' => 'required',
                'thumbnailblog' => 'required|mimes:png,jpg',
                'kontenblog' => 'required'
            ],
            [
                'required' => ':Attribute harus terisi',
            ],
            [
                'judulblog' => 'Judul blog',
                'authorblog' => 'Author',
                'ktblog' => 'Kategori',
                'thumbnailblog' => 'Thumbnail',
                'kontenblog' => 'Konten Blog'
            ]
        );
        try {
            $insertBlog = new Blog;
            $insertBlog->title = $request->judulblog;
            $insertBlog->author = $request->authorblog;
            $insertBlog->category_id = $request->ktblog;
            $insertBlog->slug = $slug;
            $insertBlog->content = $request->kontenblog;

            $path = public_path('img/blog');
            $file->move($path, $final_file_name);
            $insertBlog->images = $final_file_name;

            $insertBlog->save();
            return redirect('administrator/blog')->withStatus('Berhasil menyimpan data');
        } catch (Exception $e) {
            return redirect()->back()->withErrors('Terdapat kesalahan', $e);
        } catch(\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withErrors('Terdapat kesalahan', $e);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $deleteBlog = Blog::findOrFail($id);
            $deleteBlog->delete();
            return redirect('administrator/blog')->withStatus('Berhasil Menghapus Data');
        } catch (Exception $e){
            return redirect()->back()->withError('Terdapat Kesalahan',$e);
          }catch(\Illuminate\Database\QueryException $e){
            return redirect()->back()->withError('Terdapat Kesalahan',$e);
        }
    }
}
