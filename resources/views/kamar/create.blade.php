@extends('layouts.kos')
@section('content')
<br><br><br><br>
<div class="container">
    <h1>Tambah Kamar</h1>

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('kamar.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Nama Kamar</label>
            <input type="text" name="nama_kamar" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Jenis Kamar</label>
            <input type="text" name="jenis_kamar" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Harga Kamar</label>
            <input type="number" name="harga_kamar" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Status Kamar</label>
            <input type="text" name="status_kamar" value="Tersedia" class="form-control" readonly>
        </div>
        <div class="form-group">
            <label>Deskripsi Kamar</label>
            <textarea name="deskripsi_kamar" class="form-control"></textarea>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
    <br>
</div>
@endsection