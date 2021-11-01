<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jadwal;
use App\Models\mahasiswa;
use App\Models\dosen;

class jadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataJadwal = jadwal::all();
        $dataMahasiswa = mahasiswa::all();
        $dataDosen = dosen::all();
        return view ('jadwal.index', compact('dataJadwal', 'dataMahasiswa', 'dataDosen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dataJadwal = new jadwal;
        $dataMahasiswa = new mahasiswa;
        $dataDosen = new dosen;
        return view('jadwal.create', compact('dataJadwal', 'dataMahasiswa', 'dataDosen'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $dataJadwal = new jadwal;
        $dataMahasiswa = mahasiswa::find($id = $request->mahasiswa_id);
        $dataDosen = dosen::find($id = $request->dosen_id);

        // return ($dataMahasiswa->nama);
        $dataJadwal->mahasiswa_id = $dataMahasiswa->id;
        $dataJadwal->dosen_id = $dataDosen->id;
        $dataJadwal->judul = $request->judul;
        $dataJadwal->deskripsi = $request->deskripsi;
        $dataJadwal->awal = $request->awal;
        $dataJadwal->akhir = $request->akhir;
        $dataJadwal->save();

        return redirect('jadwal');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = jadwal::find($id);
        return view ('jadwal.show', compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = jadwal::find($id); 
        return view('jadwal.edit', compact('model'));
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
        $model = jadwal::find($id);
        $model->mahasiswa_id = $model->mahasiswa_id;
        $model->dosen_id = $model->dosen_id;
        $model->judul = $model->judul;
        $model->deskripsi = $model->deskripsi;
        $model->awal = $request->awal;
        $model->akhir = $request->akhir;
        $model->save();

        return redirect('jadwal');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = jadwal::find($id);
        $model->delete();
        return redirect('jadwal');
    }
}
