@extends('layouts.kos')
@section('content')
<div class="container">
    <h1>Tambah Kamar</h1>
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
            <select name="status_kamar" class="form-control" required>
                <option value="Tersedia">Tersedia</option>
                <option value="Terisi">Terisi</option>
            </select>
        </div>
        <div class="form-group">
            <label>Deskripsi Kamar</label>
            <textarea name="deskripsi_kamar" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
