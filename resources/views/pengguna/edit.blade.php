@extends('layout')

@section('konten')
<h4>edit pengiriman</h4>

<form action="{{ route('pengguna.update',$pengguna->id) }}" method="POST">
@csrf
    <label >NAMA</label>
    <input type="text" name="nama" value="{{ $pengguna->nama }}" class="form-control">
    <label >NO.TELP</label>
    <input type="number" name="no_telp" value="{{ $pengguna->no_telp }}" class="form-control">
    <label >ALAMAT</label>
    <input type="text" name="alamat" value="{{ $pengguna->alamat }}" class="form-control">
    <label >KODEPOST</label>
    <input type="number" name="kodepost" value="{{ $pengguna->kodepost }}" class="form-control">

    <button class="btn btn-primary">edit</button>
</form>
@endsection