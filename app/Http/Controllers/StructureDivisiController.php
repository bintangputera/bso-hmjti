<?php

namespace App\Http\Controllers;

use App\Models\CategoryDivisi;
use App\Models\StructureDivisi;
use App\Models\Periode;
use Illuminate\Http\Request;
use Exception;

class StructureDivisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $param;
    public function index()
    {
        $this->param['data'] = StructureDivisi::select('divisi.*', 'category_divisi.id as id_divisi', 'category_divisi.divisi_name',)
        ->join('category_divisi', 'category_divisi.id', '=', 'divisi.category_divisi_id')
        ->get();
        return view('pages.divisi.index', $this->param);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->param['category_divisi'] = CategoryDivisi::all();
        $this->param['periode'] = Periode::all();
        return view('pages.divisi.create', $this->param);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->file('foto');

        $file = $request->file('foto');
        $date = date("His");
        $final_file_name = $date . '.' . $file->getClientOriginalExtension();

        $request->validate(
            [
                'nama' => 'required',
                'posisi' => 'required',
                'divisi' => 'required',
                'foto' => 'required|mimes:png,jpg',
                'periode' => 'required'
            ],
            [
                'required' => ':Attribute harus terisi'
            ],
            [
                'nama' => 'Nama',
                'posisi' => 'Posisi',
                'divisi' => 'Divisi',
                'foto' => 'Foto',
                'periode' => 'Periode'
            ]
        );
        try {
            $insertDivisi = new StructureDivisi();
            $insertDivisi->name = $request->nama;
            $insertDivisi->position = $request->posisi;
            $insertDivisi->category_divisi_id = $request->divisi;
            $insertDivisi->periode_id = $request->periode;

            $path = public_path('img/pengurus');
            $file->move($path, $final_file_name);
            $insertDivisi->images = $final_file_name;

            $insertDivisi->save();

            return redirect('administrator/structure-division')->withStatus('Berhasil menyimpan data');
        } catch (Exception $e) {
            return redirect()->back()->withErrors('Terdapat kesalahan', $e);
        } catch (\Illuminate\Database\QueryException $e) {
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
        $this->param['data'] = StructureDivisi::findOrFail($id);
        $this->param['category_divisi'] = CategoryDivisi::all();
        $this->param['periode'] = Periode::all();
        // return $this->param;
        return view('pages.divisi.edit', $this->param);
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
        $file = $request->file('foto');

        $request->validate(
            [
                'nama' => 'required',
                'posisi' => 'required',
                'divisi' => 'required',
                'foto' => 'mimes:png,jpg',
                'periode' => 'required'
            ],
            [
                'required' => ':Attribute harus terisi'
            ],
            [
                'nama' => 'Nama',
                'posisi' => 'Posisi',
                'divisi' => 'Divisi',
                'foto' => 'Foto',
                'periode' => 'Periode'
            ]
        );
        try {
            $updateDivisi = StructureDivisi::find($id);
            $updateDivisi->name = $request->nama;
            $updateDivisi->position = $request->posisi;
            $updateDivisi->category_divisi_id = $request->divisi;
            $updateDivisi->periode_id = $request->periode;

            if (isset($file)) {
                $path = public_path() . '/img/pengurus/';
                $file_old = $path . $request->old_picture;
                unlink($file_old);

                $date = date("His");
                $final_file_name = $date . '.' . $file->getClientOriginalExtension();
                $file->move($path, $final_file_name);
                $updateDivisi->images = $final_file_name;
            }

            $updateDivisi->save();

            return redirect('administrator/structure-division')->withStatus('Berhasil menyimpan data');
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
