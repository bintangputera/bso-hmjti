<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryDivisi;
use Exception;

class CategoryDivisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $param;
    public function index()
    {
        $this->param['data'] = CategoryDivisi::all();
        return view('pages.category-divisi.index',$this->param);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('pages.category-divisi.create');
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
            'ktdivisi' => 'required',
            'desc' => 'required',
        ],[
            'required' =>':Attribute harus terisi',
        ],[
            'ktdivisi' => 'Kategori Divisi',
            'desc' => 'Deskripsi'
        ]);
        try {
          $updateCategoryDivisi = new CategoryDivisi;
          $updateCategoryDivisi->divisi_name = $request->ktdivisi;
          $updateCategoryDivisi->desc = $request->desc;
          $updateCategoryDivisi->save();
          return redirect('category-division')->withStatus('Berhasil Menyimpan Data');
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
        $this->param['data'] = CategoryDivisi::findOrFail($id);
        // return $this->param;
        return view('pages.category-divisi.edit',$this->param);
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
    //   return $id;
      $request->validate([
          'ktdivisi' => 'required',
          'desc' => 'required',
      ],[
          'required' =>':Attribute harus terisi',
      ],[
          'ktdivisi' => 'Kategori Divisi',
          'desc' => 'Deskripsi'
      ]);
      try {
        $updateCategoryDivisi = CategoryDivisi::find($id);
        $updateCategoryDivisi->divisi_name = $request->ktdivisi;
        $updateCategoryDivisi->desc = $request->desc;
        $updateCategoryDivisi->save();
        return redirect('category-division')->withStatus('Berhasil Mengedit Data');
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
            $deleteCategoryDivisi = CategoryDivisi::findOrFail($id);
            $deleteCategoryDivisi->delete();
            return redirect('category-division')->withStatus('Berhasil Menghapus Data');
          } catch (Exception $e){
            return redirect()->back()->withError('Terdapat Kesalahan',$e);
          }catch(\Illuminate\Database\QueryException $e){
            return redirect()->back()->withError('Terdapat Kesalahan',$e);
          }
    }
}
