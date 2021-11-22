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
        return view('profil.profil');
    }
}
