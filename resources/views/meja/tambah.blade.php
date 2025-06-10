@extends('template')

@section('content')
<!DOCTYPE html>
<html>
<head>
  <title>Tambah Meja</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
  <div class="card p-4 shadow-sm">
    <h4 class="mb-4 text-success fw-bold">➕ Tambah Meja Baru</h4>
    <form action="/meja/store" method="POST">
      @csrf
      <div class="mb-3">
        <label class="form-label">Merk Meja</label>
        <input type="text" name="merkmeja" class="form-control" placeholder="Masukkan merk meja" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Harga (Rp)</label>
        <input type="number" name="hargameja" class="form-control" placeholder="Masukkan harga meja" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Berat (gram)</label>
        <input type="number" name="berat" class="form-control" placeholder="Masukkan berat meja" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Tersedia</label>
        <select name="tersedia" class="form-select">
          <option value="1">Ya</option>
          <option value="0">Tidak</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Simpan</button>
      <a href="/meja" class="btn btn-secondary">Batal</a>
    </form>
  </div>
</div>
</body>
</html>
@endsection
