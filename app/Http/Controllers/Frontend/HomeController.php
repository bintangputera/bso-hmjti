<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $param;
    public function index()
    {
        // $this->param[''] =
        return view('welcome');
    }
}
