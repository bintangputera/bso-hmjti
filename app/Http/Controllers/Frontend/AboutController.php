<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    private $param;
    public function index()
    {
        $this->param['content'] = Content::select('content.*')->first();
        $this->param['tujuan'] = \File::get(public_path('ad-art/tujuan.txt'));
        $this->param['fungsi'] = \File::get(public_path('ad-art/fungsi.txt'));
        $this->param['tugas'] = \File::get(public_path('ad-art/tugas.txt'));
        $this->param['sejarah'] = \File::get(public_path('ad-art/sejarah.txt'));
        return view('profil.profil',$this->param);
    }
}
