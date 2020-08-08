<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use DB;

class PertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pertanyaan = DB::table('pertanyaan')->get();
        $data['judul']='Daftar Pertanyaan';
        $data['pertanyaan']=$pertanyaan;
        return view('pertanyaan.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['judul']='Buat Pertanyaan Baru';
        return view('pertanyaan.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "judul" => 'required|unique:pertanyaan',
            "isi" => 'required'
        ]);
        $query = DB::table('pertanyaan')->insert([
            "judul" => $request['judul'],
            "isi" => $request['isi'],
            "tanggal_dibuat" => date('Y-m-d')
        ]);

        return redirect('/pertanyaan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pertanyaan = DB::table('pertanyaan')->where('id', $id)->first();
        $data['judul']='Detail Pertanyaan';
        $data['pertanyaan']=$pertanyaan;
        return view('pertanyaan.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pertanyaan = DB::table('pertanyaan')->where('id', $id)->first();
        $data['judul']='Ubah Pertanyaan';
        $data['pertanyaan']=$pertanyaan;
        return view('pertanyaan.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $request->validate([
            "judul" => ['required',Rule::unique('pertanyaan')->ignore($id)],
            "isi" => 'required'
        ]);
        $affected = DB::table('pertanyaan')
              ->where('id', $id)
              ->update([
                  'judul' => $request['judul'],
                  'isi' => $request['isi'],
                  "tanggal_diperbaharui" => date('Y-m-d')
                ]);
        return redirect('/pertanyaan')->with('sukses','berhasil update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('pertanyaan')->where('id', $id)->delete();
        return redirect('/pertanyaan')->with('sukses','berhasil delete');
    }
}





