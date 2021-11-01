@extends('dashboard.bootstrap')

@section('content')
    <form method="POST" action="{{url('dosen/'.$model->id)}}">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">NAMA</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" value="{{$model->nama}}" name="nama">
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">NIDN</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" value="{{$model->nidn}}" name="nidn">
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">ALAMAT</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" value="{{$model->alamat}}" name="alamat">
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">KONTAK</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" value="{{$model->kontak}}" name="kontak">
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-lg">SIMPAN</button>
    </form>
@endsection