@extends('layouts.kos')

@section('content')
<br><br>
<div class="container mt-5">
    <h1 class="mb-4">Riwayat Penyewa</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="table-responsive">
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th>NO</th>
                    <th>ID Penyewa</th>
                    <th>Nama Penyewa</th>
                    <th>Nomor HP</th>
                    <th>Alamat</th>
                    <th>Tanggal Masuk</th>
                    <th>Tanggal Berakhir</th>
                    <th>Status Penyewa</th>
                    <th>Waktu Dibuat</th>
                </tr>
            </thead>
            <tbody>
                @forelse($history as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->id_penyewa }}</td>
                        <td>{{ $item->nama_penyewa }}</td>
                        <td>{{ $item->nomor_hp }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>{{ \Carbon\Carbon::parse($item->tanggal_masuk)->format('d-m-Y') }}</td>
                        <td>{{ $item->tanggal_berakhir ? \Carbon\Carbon::parse($item->tanggal_berakhir)->format('d-m-Y') : '-' }}
                        </td>
                        <td>{{ $item->status_penyewa }}</td>
                        <td>{{ \Carbon\Carbon::parse($item->created_at)->format('d-m-Y') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="9" class="text-center">Tidak ada data riwayat penyewa.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection