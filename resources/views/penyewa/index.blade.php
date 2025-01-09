@extends('layouts.kos')

@section('content')
<br><br>

<div class="container mt-5">
    <h1 class="mb-4">Data Sewa</h1>
    <a href="{{ route('penyewa.create') }}" class="btn btn-primary mb-3">Tambah Penyewa</a>

    @if(session('success'))
        <div class="alert alert-success text-start">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger text-start">{{ session('error') }}</div>
    @endif
    @if(session('tanggal_berakhir_success'))
        <div class="alert alert-success text-start">
            {{ session('tanggal_berakhir_success') }}
        </div>
    @endif


    <div class="table-responsive">
        <table class="table table-hover table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>NO</th>
                    <th>Nama Penyewa</th>
                    <th>Nomor HP</th>
                    <th>Alamat</th>
                    <th>Kamar yang dihuni</th>
                    <th>Tanggal Masuk</th>
                    <th>Tanggal Berakhir</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($penyewa as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama_penyewa }}</td>
                        <td>{{ $item->nomor_hp }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>{{ $item->kamar ? $item->kamar->Nama_kamar : 'Tidak ada kamar' }}</td>
                        <td>{{ \Carbon\Carbon::parse($item->tanggal_masuk)->format('d-m-Y') }}</td>
                        <td>
                            {{ $item->tanggal_berakhir ? \Carbon\Carbon::parse($item->tanggal_berakhir)->format('d-m-Y') : '-' }}
                        </td>
                        <td>{{ $item->status_penyewa }}</td>
                        <td>
                            <a href="{{ route('penyewa.edit', $item->id_penyewa) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('penyewa.destroy', $item->id_penyewa) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
