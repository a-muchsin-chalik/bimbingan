@extends('dashboard.bootstrap')

@section('content')
    <a type="button" class="btn btn-primary btn-lg" href="{{url('dosen/create')}}">TAMBAH</a>
    <br>
    <table class="table">
        <thead class="thead-light">
            <tr>
            <th scope="col">ID</th>
            <th scope="col">NAMA</th>
            <th scope="col">NIDN</th>
            <th scope="col">ACTION</th>
            <th scope="col">DELETE</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dataDosen as $key=>$value)
            <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->nama}}</td>
                <td>{{$value->nidn}}</td>
                <td>
                    <a class="btn btn-info" href="{{url('dosen/'.$value->id)}}">SHOW</a>

                    <a class="btn btn-info" href="{{url('dosen/'.$value->id.'/edit')}}">EDIT</a>
                </td>
                <td>
                    <form action="{{url('dosen/'.$value->id)}}" method="POST">
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