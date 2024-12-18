@extends('home.blade.php')
@section('content')
    <div class="card">
        <h5 class="card-header">Data Penyewa</h5>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Penyewa</th>
                        <th>No HP</th>
                        <th>Alamat</th>
                        <th>Tanggal Masuk</th>
                        <th>Tanggal Berakhir</th>
                        <th>Status Penyewa</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach($daftar as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->pasien->nama }}</td>
                            <td>{{ $item->pasien->jenis_kelamin }}</td>
                            <td>{{ $item->tanggal_daftar }}</td>
                            <td>{{ $item->poli->nama }}</td>
                            <td>{{ $item->keluhan }}</td>
                            <td>
                                <a href="/daftar/{{ $item->id }}" class="btn btn-warning btn-sm ml-2">Detail</a>
                                {{-- tombol hapus --}}
                                {{-- <form action="/daftar/{{ $item->id }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger byn-sm ml-2"
                                        onclick="return confirm('Yakin ingin menghapus data?')">Hapus</button>
                                </form>
                            </td>
                        </tr> --}}
                    {{-- @endforeach --}}
                </tbody>
            </table>
            {{-- {!!  $daftar->links() !!} --}}
        </div>
    </div>
@endsection
