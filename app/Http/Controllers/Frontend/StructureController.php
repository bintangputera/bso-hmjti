<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CategoryDivisi;
use App\Models\Content;
use App\Models\Periode;
use App\Models\StructureDivisi;
use Illuminate\Http\Request;

class StructureController extends Controller
{
    private $param;
    public function index()
    {
        $this->param['data'] = StructureDivisi::select('divisi.*','category_divisi.id as id_category','category_divisi.divisi_name','periode.id as id_periode','periode.periode')
                                            ->join('category_divisi','category_divisi.id','divisi.category_divisi_id')
                                            ->join('periode','periode.id','divisi.periode_id')
                                            // ->groupBy('divisi.id')
                                            ->get();
        $this->param['periode'] = Periode::select('periode')
                                           ->orderBy('id','DESC')
                                           ->first();
        $this->param['kategori'] = CategoryDivisi::select('category_divisi.id','category_divisi.divisi_name','category_divisi.desc')->get();
        // foreach ($this->param['kategori'] as $data) {
        //     $this->param['data'] = StructureDivisi::select('divisi.*','category_divisi.id as id_category','category_divisi.divisi_name','periode.id as id_periode','periode.periode')
        //     ->join('category_divisi','category_divisi.id','divisi.category_divisi_id')
        //     ->join('periode','periode.id','divisi.periode_id')
        //     ->where('category_divisi.id as id_category',$data->id)
        //     // ->groupBy('divisi.id')
        //     ->get();
        //     return $this->param['data']
        // }
        return view('struktur.struktur',$this->param);
    }
}
