<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\File;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    private $param;
    public function index()
    {
        // $this->param['tujuan'] = \File::get(public_path('ad-art/tujuan.txt'));
        return view('profil.profil');
    }
}
