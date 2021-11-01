<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dosen;

class dosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataDosen = dosen::all();
        return view ('dosen.index', compact('dataDosen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new dosen; 
        return view('dosen.create', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new dosen;
        $model->nama = $request->nama;
        $model->nidn = $request->nidn;
        $model->alamat = $request->alamat;
        $model->kontak = $request->kontak;
        $model->save();

        return redirect('dosen');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = dosen::find($id);
        return view ('dosen.show', compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = dosen::find($id);
        return view ('dosen.edit', compact('model'));
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
        $model = dosen::find($id);
        $model->nama = $request->nama;
        $model->nidn = $request->nidn;
        $model->alamat = $request->alamat;
        $model->kontak = $request->kontak;
        $model->save();

        return redirect('dosen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = dosen::find($id);
        $model->delete();
        return redirect('dosen');
    }
}
