@extends('dashboard.bootstrap')

@section('content')
    <br>
    <table class="table">
        <thead class="thead-light">
            <tr>
            <th scope="col">ID</th>
            <th scope="col">NAMA</th>
            <th scope="col">NIM</th>
            <th scope="col">ALAMAT</th>
            <th scope="col">TANGGAL LAHIR</th>
            <th scope="col">TAHUN MASUK</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$model->id}}</td>
                <td>{{$model->nama}}</td>
                <td>{{$model->nim}}</td>
                <td>{{$model->alamat}}</td>
                <td>{{$model->tanggal_lahir}}</td>
                <td>{{$model->tahun_masuk}}</td>
            </tr>
        </tbody>
    </table>
    <br>
    <a type="button" class="btn btn-primary btn-lg" href="{{url('mahasiswa')}}">KEMBALI</a>
@endsection