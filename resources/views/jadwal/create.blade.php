@extends('dashboard.bootstrap')

@section('content')
    <form method="POST" action="{{url('jadwal')}}">
        @csrf
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">ID MAHASISWA</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="id mahasiswa" name="mahasiswa_id">
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">ID DOSEN</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="id dosen" name="dosen_id">
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">JUDUL</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="judul" name="judul">
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">DESKRIPSI</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="deskripsi" name="deskripsi">
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">AWAL</label>
            <div class="col-sm-10">
            <input type="datetime-local" class="form-control" placeholder="awal" name="awal">
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">AKHIR</label>
            <div class="col-sm-10">
            <input type="datetime-local" class="form-control" placeholder="akhir" name="akhir">
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-lg">SIMPAN</button>
    </form>
@endsection