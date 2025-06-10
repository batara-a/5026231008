@extends('template')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Data Meja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    body {
        background-color: #f4f6f9;
    }

    .table th {
        background-color: #343a40;
        color: white;
    }

    .btn-sm {
        font-size: 0.75rem;
        padding: 0.4rem 0.6rem;
    }

    .card {
        border-radius: 10px;
    }
</style>

<body>
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="fw-bold text-primary"> Data Meja </h3>
        <a href="/meja/tambah" class="btn btn-success">+ Tambah Meja</a>
    </div>

    <form action="/meja/cari" method="GET" class="mb-4 d-flex gap-2">
        <input type="text" name="cari" class="form-control" placeholder="Cari merk meja..." value="{{ request('cari') }}">
        <button type="submit" class="btn btn-primary">Cari</button>
        <a href="/meja" class="btn btn-secondary">Reset</a>
    </form>

    <table class="table table-hover table-bordered align-middle shadow-sm rounded text-center">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Merk</th>
                <th>Harga</th>
                <th>Berat (gr)</th>
                <th>Tersedia</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($meja as $m)
            <tr>
                <td>{{ $m->ID }}</td>
                <td>{{ $m->merkmeja }}</td>
                <td>Rp {{ number_format($m->hargameja, 0, ',', '.') }}</td>
                <td>{{ $m->berat }}</td>
                <td>
                    <span class="badge {{ $m->tersedia ? 'bg-success' : 'bg-danger' }}">
                        {{ $m->tersedia ? '✅ Ya' : '❌ Tidak' }}
                    </span>
                </td>
                <td>
                    <a href="/meja/edit/{{ $m->ID }}" class="btn btn-warning btn-sm rounded-pill">✏️ Edit</a>
                    <a href="/meja/hapus/{{ $m->ID }}" class="btn btn-danger btn-sm rounded-pill" onclick="return confirm('Yakin ingin menghapus?')">🗑️ Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $meja->appends(['cari' => request('cari')])->links() }}
</div>
@endsection
</body>
</html>
