@extends('dashboard.bootstrap')

@section('content')
    <form method="POST" action="{{url('dosen')}}">
        @csrf
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">NAMA</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Nama lengkap" name="nama">
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">NIDN</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="NIDN" name="nidn">
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">ALAMAT</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="alamat" name="alamat">
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">KONTAK</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="kontak" name="kontak">
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-lg">SIMPAN</button>
    </form>
@endsection