@extends('layouts.kos')
@section('content')
<br><br><br>
<div class="container">
    <h1>Edit Penyewa</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div id="error-message" class="alert alert-danger" style="display: none; background-color: #f8d7da; color: #721c24; padding: 15px; border-radius: 5px; margin-bottom: 20px;">
        Tanggal berakhir tidak boleh lebih kecil dari tanggal masuk.
    </div>

    <form action="{{ route('penyewa.update', $penyewa->id_penyewa) }}" method="POST" onsubmit="return validateDates()">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Nama Penyewa</label>
            <input type="text" name="nama_penyewa" class="form-control" value="{{ $penyewa->nama_penyewa }}" required>
        </div>
        <div class="form-group">
            <label>Nomor HP</label>
            <input type="text" name="nomor_hp" class="form-control" value="{{ $penyewa->nomor_hp }}" required>
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control" required>{{ $penyewa->alamat }}</textarea>
        </div>
        <div class="form-group">
            <label>Tanggal Masuk</label>
            <input type="date" id="tanggal_masuk" name="tanggal_masuk" class="form-control" value="{{ $penyewa->tanggal_masuk }}" required>
        </div>
        <div class="form-group">
            <label>Tanggal Berakhir</label>
            <input type="date" id="tanggal_berakhir" name="tanggal_berakhir" class="form-control" value="{{ $penyewa->tanggal_berakhir }}">
        </div>

        <div class="form-group">
            <label>Nama Kamar</label>
            <select name="id_kamar" class="form-control" required>
                <option value="">Pilih Kamar</option>
                @foreach($kamars as $item)
                    <option value="{{ $item->id_kamar }}" {{ $item->id_kamar == $penyewa->id_kamar ? 'selected' : '' }}>
                        {{ $item->Nama_kamar }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>Status Penyewa</label>
            <select name="status_penyewa" class="form-control" required>
                <option value="Aktif" {{ $penyewa->status_penyewa == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                <option value="Selesai" {{ $penyewa->status_penyewa == 'Selesai' ? 'selected' : '' }}>Selesai</option>
            </select>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

<script>
    function validateDates() {
        const tanggalMasuk = document.getElementById('tanggal_masuk').value;
        const tanggalBerakhir = document.getElementById('tanggal_berakhir').value;
        const errorMessage = document.getElementById('error-message');

        if (new Date(tanggalBerakhir) < new Date(tanggalMasuk)) {
            errorMessage.style.display = 'block'; // Tampilkan pesan kesalahan
            return false; // Mencegah form dari pengiriman
        }

        errorMessage.style.display = 'none'; // Sembunyikan pesan kesalahan jika valid
        return true; // Mengizinkan form untuk dikirim
    }
</script>
@endsection
