@extends('layouts.kos')
@section('content')
<br><br><br>
<div class="container">
    <h1>Data Kamar</h1>
    <a href="{{ route('kamar.create') }}" class="btn btn-primary">Tambah Kamar</a>
    <table class="table">
        <thead>
            <tr>
                <th>Nama Kamar</th>
                <th>Jenis Kamar</th>
                <th>Harga Kamar</th>
                <th>Status Kamar</th>
                <th>Deskripsi Kamar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kamar as $item)
            <tr>
                <td>{{ $item->Nama_kamar }}</td>
                <td>{{ $item->jenis_kamar }}</td>
                <td>{{ $item->harga_kamar }}</td>
                <td>{{ $item->status_kamar }}</td>
                <td>{{ $item->deskripsi_kamar }}</td>
                <td>
                    <a href="{{ route('kamar.edit', $item->id_kamar) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('kamar.destroy', $item->id_kamar) }}" method="POST" style="display:inline;">
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
@endsection
