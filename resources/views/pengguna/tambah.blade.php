@extends('layout')

@section('konten')
<h4>tambah pengiriman</h4>

<form action="{{ route('pengguna.submit') }}" method="POST">
@csrf
    <label >NAMA</label>
    <input type="text" name="nama" class="form-control">
    <label >NO.TELP</label>
    <input type="number" name="no_telp" class="form-control">
    <label >ALAMAT</label>
    <input type="text" name="alamat" class="form-control">
    <label >KODEPOST</label>
    <input type="number" name="kodepost" class="form-control">

    <button class="btn btn-primary">Tambah</button>
</form>
@endsection