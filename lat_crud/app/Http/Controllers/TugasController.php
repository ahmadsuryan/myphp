<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TugasController extends Controller
{
    public function home()
    {
        $data['judul']='';
        return view('layouts.master',$data);
    }

    public function table()
    {
        $data['judul']='Task Progress';
        return view('tabel',$data);
    }

    public function datatable()
    {
        $data['judul']='Rendering Engine';
        return view('datatabel',$data);
    }
}
