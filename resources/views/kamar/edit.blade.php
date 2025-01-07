@extends('layouts.kos')
@section('content')


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
            <select name="status_kamar" class="form-control" required>
                <option value="Tersedia" {{ $kamar->status_kamar == 'Tersedia' ? 'selected' : '' }}>Tersedia</option>
                <option value="Terisi" {{ $kamar->status_kamar == 'Terisi' ? 'selected' : '' }}>Terisi</option>
            </select>
        </div>
        <div class="form-group">
            <label>Deskripsi Kamar</label>
            <textarea name="deskripsi_kamar" class="form-control">{{ $kamar->deskripsi_kamar }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
