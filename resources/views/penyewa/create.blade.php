@extends('layouts.kos')
@section('content')
<br><br><br>

<div class="container">
    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <h1>Tambah Penyewa</h1>

    <form action="{{ route('penyewa.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Nama Penyewa</label>
            <input type="text" name="nama_penyewa" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Nomor HP</label>
            <input type="text" name="nomor_hp" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label>Tanggal Masuk</label>
            <input type="date" name="tanggal_masuk" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Nama Kamar</label>
            <select name="id_kamar" class="form-control" required>
                <option value="">Pilih Kamar</option>
                @foreach($kamar as $item)
                    <option value="{{ $item->id_kamar }}">{{ $item->Nama_kamar }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Status Penyewa</label>
            <input type="text" name="status_penyewa" value="Aktif" class="form-control" readonly>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection