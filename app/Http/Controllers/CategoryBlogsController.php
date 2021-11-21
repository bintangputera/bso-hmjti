<?php

namespace App\Http\Controllers;

use App\Models\CategoryBlog;
use Exception;
use Illuminate\Http\Request;

class CategoryBlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $param;
    public function index()
    {
        $this->param['data'] = CategoryBlog::all();
        return view('pages.category-blog.index', $this->param);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.category-blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'ktblog' => 'required',
        ],[
            'required' =>':Attribute harus terisi',
        ],[
            'ktblog' => 'Kategori Blog',
        ]);
        try {
          $insertCategoryBlog = new CategoryBlog;
          $insertCategoryBlog->category_name = $request->ktblog;
          $insertCategoryBlog->save();
          return redirect('administrator/category-blogs')->withStatus('Berhasil Menyimpan Data');
        } catch (Exception $e){
          return redirect()->back()->withError('Terdapat Kesalahan',$e);
        }catch(\Illuminate\Database\QueryException $e){
          return redirect()->back()->withError('Terdapat Kesalahan',$e);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->param['data'] = CategoryBlog::findOrFail($id);
        // return $this->param;
        return view('pages.category-blog.edit',$this->param);
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
        $request->validate([
            'ktblog' => 'required',
        ],[
            'required' =>':Attribute harus terisi',
        ],[
            'ktblog' => 'Kategori Blog',
            'desc' => 'Deskripsi'
        ]);
        try {
          $updateCategoryBlog = CategoryBlog::find($id);
          $updateCategoryBlog->category_name = $request->ktblog;
          $updateCategoryBlog->save();
          return redirect('category-blogs')->withStatus('Berhasil Mengedit Data');
        } catch (Exception $e){
          return redirect()->back()->withError('Terdapat Kesalahan',$e);
        }catch(\Illuminate\Database\QueryException $e){
          return redirect()->back()->withError('Terdapat Kesalahan',$e);
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
            $deleteCategoryBlog = CategoryBlog::findOrFail($id);
            $deleteCategoryBlog->delete();
            return redirect('administrator/category-blogs')->withStatus('Berhasil Menghapus Data');
          } catch (Exception $e){
            return redirect()->back()->withError('Terdapat Kesalahan',$e);
          }catch(\Illuminate\Database\QueryException $e){
            return redirect()->back()->withError('Terdapat Kesalahan',$e);
        }
    }
}
