@extends('dashboard.bootstrap')

@section('content')
    <form method="POST" action="{{url('mahasiswa')}}">
        @csrf
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">NAMA</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Nama lengkap" name="nama">
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">NIM</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="NIM" name="nim">
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">ALAMAT</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="alamat" name="alamat">
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">TANGGAL LAHIR</label>
            <div class="col-sm-10">
            <input type="date" class="form-control" placeholder="Tanggal lahir" name="tanggal_lahir">
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">TAHUN MASUK</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="ex:2019" name="tahun_masuk">
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-lg">SIMPAN</button>
    </form>
@endsection