@extends('template')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Data Karyawan</h4>
        </div>

        <form action="/karyawanuas/cari" method="GET" class="mb-4 d-flex gap-2">
        <input type="text" name="cari" class="form-control" placeholder="Cari nama karyawan..." value="{{ request('cari') }}">
        <button type="submit" class="btn btn-primary">Cari</button>
        <a href="/karyawanuas" class="btn btn-secondary">Reset</a>
    </form>

        <div class="card-body">
            @if ($message = Session::get('success'))
                <div class="alert alert-success" role="alert">{{ $message }}</div>
            @endif
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Pegawai</th>
                        <th>Nama Lengkap </th>
                        <th>Divisi</th>
                        <th>Departemen </th>
                        <th width="150px">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($karyawanuas as $i => $karyawan)
                        <tr>
                            <td>{{ $karyawanuas->firstItem() + $i }}</td>
                            <td>{{ $karyawan->kodepegawai }}</td>
                            <td>{{ strtoupper($karyawan->namalengkap) }}</td>
                            <td>{{ $karyawan->divisi }}</td>
                            <td>{{ strtolower($karyawan->departemen) }}</td>
                            <td>
                                <a href="/karyawanuas/hapus/{{ $karyawan->kodepegawai }}" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">Tidak ada data.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            <div class="mt-3"><a class="btn btn-primary" href="{{ route('karyawanuas.tambah') }}">Tambah Data</a></div>
            <div class="d-flex justify-content-center mt-3">{!! $karyawanuas->links() !!}</div>

        </div>

    </div>
@endsection
