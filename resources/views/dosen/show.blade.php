@extends('dashboard.bootstrap')

@section('content')
    <br>
    <table class="table">
        <thead class="thead-light">
            <tr>
            <th scope="col">ID</th>
            <th scope="col">NAMA</th>
            <th scope="col">NIDN</th>
            <th scope="col">ALAMAT</th>
            <th scope="col">KONTAK</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$model->id}}</td>
                <td>{{$model->nama}}</td>
                <td>{{$model->nidn}}</td>
                <td>{{$model->alamat}}</td>
                <td>{{$model->kontak}}</td>
            </tr>
        </tbody>
    </table>
    <br>
    <a type="button" class="btn btn-primary btn-lg" href="{{url('dosen')}}">KEMBALI</a>
@endsection