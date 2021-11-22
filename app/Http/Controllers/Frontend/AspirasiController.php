<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Aspirasi;
use Illuminate\Http\Request;


class AspirasiController extends Controller
{
    public function index() {
        return view('aspirasi.aspirasi');
    }

    public function store(Request $request) {
        $this->validate($request,[
            'nama'=>'required',
            'email'=>'required|regex:/(.+)@(.+)\.(.+)/i',
            'pesan'=>'required'
        ]);
        $newAspirasi = new Aspirasi;
        $newAspirasi->name = $request->nama;
        $newAspirasi->email = $request->email;
        $newAspirasi->aspirasi = $request->pesan;
        $newAspirasi->save();

        return redirect('/aspirasi')->withStatus('Berhasil menyimpan data')->withStatus('Pesan berhasil disampaikan');
    }

}
