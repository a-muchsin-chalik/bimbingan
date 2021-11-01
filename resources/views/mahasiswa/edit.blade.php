@extends('dashboard.bootstrap')

@section('content')
    <form method="POST" action="{{url('mahasiswa/'.$model->id)}}">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">NAMA</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" value="{{$model->nama}}" name="nama">
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">NIM</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" value="{{$model->nim}}" name="nim">
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">ALAMAT</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" value="{{$model->alamat}}" name="alamat">
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">TANGGAL LAHIR</label>
            <div class="col-sm-10">
            <input type="date" class="form-control" value="{{$model->tanggal_lahir}}" name="tanggal_lahir">
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">TAHUN MASUK</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" value="{{$model->tahun_masuk}}" name="tahun_masuk">
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-lg">SIMPAN</button>
    </form>
@endsection