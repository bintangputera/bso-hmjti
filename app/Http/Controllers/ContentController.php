<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
use Exception;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $param;
    public function index()
    {
        $this->param['data'] = Content::all();
        return view('pages.content.index', $this->param);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->param['data'] = Content::where('id', $id)->first();
        return view('pages.content.detail', $this->param);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->param['data'] = Content::findOrFail($id);
        return view('pages.content.edit', $this->param);
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
        $file = $request->file('banner');

        $request->validate(
            [
                'visi' => 'required',
                'misi' => 'required',
                'motto' => 'required',
                'desc' => 'required',
                'banner' => 'mimes:png,jpg'
            ],
            [
                'required' => ':Attribute harus terisi'
            ],
            [
                'visi' => 'Visi',
                'misi' => 'Misi',
                'motto' => 'Motto',
                'desc' => 'Deskripsi',
                'banner' => 'Banner'
            ]
        );
        try {
            $updateContent = Content::find($id);
            $updateContent->visi = $request->visi;
            $updateContent->misi = $request->misi;
            $updateContent->moto = $request->motto;
            $updateContent->desc = $request->desc;

            if (isset($file)) {
                $path = public_path() . '/img/content/';
                $file_old = $path . $request->old_banner;
                // Menghapus file yang lalu
                unlink($file_old);

                $date = date("His");
                $final_file_name = 'banner' . $date . '.' . $file->getClientOriginalExtension();
                $file->move($path, $final_file_name);
                $updateContent->banner = $final_file_name;
            }

            $updateContent->save();
            return redirect()->route('content.index')->withStatus('Berhasil menyimpan data');
        } catch (Exception $e) {
            return redirect()->back()->withErrors('Terdapat kesalahan', $e);
        } catch (\Illuminate\Database\QueryException $e) {
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
        //
    }
}
