<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mahasiswa;

class mahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataMahasiswa = mahasiswa::all();
        return view ('mahasiswa.index', compact('dataMahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new mahasiswa; 
        return view('mahasiswa.create', compact('model'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new mahasiswa;
        $model->nama = $request->nama;
        $model->nim = $request->nim;
        $model->alamat = $request->alamat;
        $model->tanggal_lahir = $request->tanggal_lahir;
        $model->tahun_masuk = $request->tahun_masuk;
        $model->save();

        return redirect('mahasiswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = mahasiswa::find($id);
        return view ('mahasiswa.show', compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = mahasiswa::find($id); 
        return view('mahasiswa.edit', compact('model'));
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
        $model = mahasiswa::find($id);
        $model->nama = $request->nama;
        $model->nim = $request->nim;
        $model->alamat = $request->alamat;
        $model->tanggal_lahir = $request->tanggal_lahir;
        $model->tahun_masuk = $request->tahun_masuk;
        $model->save();

        return redirect('mahasiswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = mahasiswa::find($id);
        $model->delete();
        return redirect('mahasiswa');
    }
}
