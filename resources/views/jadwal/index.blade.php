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
            <th scope="col">ACTION</th>
            <th scope="col">DELETE</th>
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

                <td>
                    <a class="btn btn-info" href="{{url('jadwal/'.$value->id)}}">DETAIL</a>

                    <a class="btn btn-info" href="{{url('jadwal/'.$value->id.'/edit')}}">UBAH</a>
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
    <a type="button" class="btn btn-primary btn-lg" href="{{url('../public')}}">DASHBOARD</a>
@endsection