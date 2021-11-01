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
        return view ('jadwal.index', compact('dataJadwal'));
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
    public function store(Request $request, $id)
    {
        $dataJadwal = new jadwal;
        $dataDosen = new dosen;

        $dataMahasiswa->id = $request->mahasiswa_id;
        $dataMahasiswa = mahasiswa::find($id);
        $dataDosen->id = $request->dosen_id;

        return ($dataMahasiswa->nama);

        // $dataJadwal->mahasiswa_id = $dataMahasiswa->nama;
        // $dataJadwal->dosen_id = $dataDosen->nama;
        // $dataJadwal->judul = $request->judul;
        // $dataJadwal->deskripsi = $request->deskripsi;
        // $dataJadwal->awal = $request->awal;
        // $dataJadwal->akhir = $request->akhir;
        
        // $dataJadwal->save();
        // return redirect('jadwal');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}