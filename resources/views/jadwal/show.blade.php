@extends('dashboard.bootstrap')

@section('content')
    <br>
    <table class="table">
        <thead class="thead-light">
            <tr>
            <th scope="col">ID</th>
            <th scope="col">MAHASISWA</th>
            <th scope="col">DOSEN</th>
            <th scope="col">JUDUL</th>
            <th scope="col">DESKRIPSI</th>
            <th scope="col">AWAL</th>
            <th scope="col">AKHIR</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$model->id}}</td>
                <td>{{$model->mahasiswa_id}}</td>
                <td>{{$model->dosen_id}}</td>
                <td>{{$model->judul}}</td>
                <td>{{$model->deskripsi}}</td>
                <td>{{$model->awal}}</td>
                <td>{{$model->akhir}}</td>
            </tr>
        </tbody>
    </table>
    <br>
    <a type="button" class="btn btn-primary btn-lg" href="{{url('jadwal')}}">KEMBALI</a>
@endsection