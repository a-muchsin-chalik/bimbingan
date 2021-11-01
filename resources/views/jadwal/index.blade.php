@extends('dashboard.bootstrap')

@section('content')
    <a type="button" class="btn btn-primary btn-lg" href="{{url('jadwal/create')}}">TAMBAH</a>
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
            @foreach($dataJadwal as $key=>$value)
            <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->mahasiswa_id}}</td>
                <td>{{$value->dosen_id}}</td>
                <td>{{$value->judul}}</td>
                <td>{{$value->deskripsi}}</td>
                <td>{{$value->awal}}</td>
                <td>{{$value->akhir}}</td>

                <td>
                    <a class="btn btn-info" href="{{url('jadwal/'.$value->id)}}">SHOW</a>

                    <a class="btn btn-info" href="{{url('jadwal/'.$value->id.'/edit')}}">EDIT</a>
                </td>
                <td>
                    <form action="{{url('jadwal/'.$value->id)}}" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">

                        <button class="btn btn-danger" type="submit">DELETE</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection