@extends('layouts.kos')
@section('content')

<br><br><br><br>
<div class="container">

    <h1>Edit Kamar</h1>
    <form action="{{ route('kamar.update', $kamar->id_kamar) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Nama Kamar</label>
            <input type="text" name="nama_kamar" class="form-control" value="{{ $kamar->Nama_kamar }}" required>
        </div>
        <div class="form-group">
            <label>Jenis Kamar</label>
            <input type="text" name="jenis_kamar" class="form-control" value="{{ $kamar->jenis_kamar }}" required>
        </div>
        <div class="form-group">
            <label>Harga Kamar</label>
            <input type="number" name="harga_kamar" class="form-control" value="{{ $kamar->harga_kamar }}" required>
        </div>
        <div class="form-group">
            <label>Status Kamar</label>
            <input type="text" name="status_kamar" value="Tersedia" class="form-control" readonly>
        </div>
        <div class="form-group">
            <label>Deskripsi Kamar</label>
            <textarea name="deskripsi_kamar" class="form-control">{{ $kamar->deskripsi_kamar }}</textarea>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
    <br>
</div>
@endsection