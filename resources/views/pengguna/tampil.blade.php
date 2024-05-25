@extends('layout')

@section('konten')

<div class="d-flex">
    <h4>list pengiriman</h4>
    <div class="ms-auto">
        <a class="btn btn-success" href="{{ route('pengguna.tambah') }}">Tambah pengiriman</a>
        
    </div>
</div>
    <table class="table">
        <tr>
            
            <th>nama</th>
            <th>no.tlp</th>
            <th>alamat</th>
            <th>kode-post</th>

        </tr>
        @foreach($pengguna as  $data)
        <tr>
            
            <td>{{ $data->nama }}</td>
            <td>{{ $data->no_telp }}</td>
            <td>{{ $data->alamat }}</td>
            <td>{{ $data->kodepost}}</td>
            <td>
                <a href="{{ route('pengguna.edit',$data->id) }}" class="btn btn-sm btn-warning">edit</a>
                <form action="{{ route('pengguna.delete',$data->id) }}" method="post">
                @csrf
                <button class="btn btn-sm btn-danger">hapus</button>
                </form>
            </td>

        </tr>
        @endforeach
    </table>
@endsection