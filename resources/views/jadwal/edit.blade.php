@extends('dashboard.bootstrap')

@section('content')
    <form method="POST" action="{{url('jadwal/'.$model->id)}}">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">AWAL</label>
            <div class="col-sm-10">
            <input type="datetime-local" class="form-control" value="{{$model->awal}}" name="awal">
            </div>
        </div>
        <div class="form-group row">
            <label for="colFormLabel" class="col-sm-2 col-form-label">AKHIR</label>
            <div class="col-sm-10">
            <input type="datetime-local" class="form-control" value="{{$model->akhir}}" name="akhir">
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-lg">SIMPAN</button>
    </form>
@endsection