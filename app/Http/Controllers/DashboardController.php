<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\CategoryDivisi;
use App\Models\StructureDivisi;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
   private $param;
   public function index()
   {
       $this->param['divisi'] = CategoryDivisi::count();
       $this->param['pengurus'] = StructureDivisi::count();
       $this->param['blog'] = Blog::count();
       return view('dashboard',$this->param);
   }
}
