@extends('template')

@section('content')
    <div class="card">
        <div class="card-header"><h4>Halaman Tambah Data</h4></div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> Ada masalah dengan input Anda.<br><br>
                    <ul>@foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach</ul>
                </div>
            @endif
            <form action="/karyawanuas/store" method="POST">
                @csrf
                <div class="row mb-3">
                    <label for="kodepegawai" class="col-sm-2 col-form-label">Kode Pegawai</label>
                    <div class="col-sm-10"><input type="text" name="kodepegawai" class="form-control" id="kodepegawai" placeholder="Contoh: PG031" value="{{ old('kodepegawai') }}"></div>
                </div>
                 <div class="row mb-3">
                    <label for="namalengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10"><input type="text" name="namalengkap" class="form-control" id="namalengkap" placeholder="Masukkan Nama Lengkap" value="{{ old('namalengkap') }}"></div>
                </div>
                 <div class="row mb-3">
                    <label for="divisi" class="col-sm-2 col-form-label">Divisi</label>
                    <div class="col-sm-10"><input type="text" name="divisi" class="form-control" id="divisi" placeholder="Contoh: DV001" value="{{ old('divisi') }}"></div>
                </div>
                 <div class="row mb-3">
                    <label for="departemen" class="col-sm-2 col-form-label">Departemen</label>
                    <div class="col-sm-10"><input type="text" name="departemen" class="form-control" id="departemen" placeholder="Masukkan Nama Departemen (Contoh: IT)" value="{{ old('departemen') }}"></div>
                </div>
                <div class="row">
                     <div class="col-sm-10 offset-sm-2">
                         <button type="submit" value="SIMPAN" class="btn btn-primary">SIMPAN</button>
                         <a class="btn btn-secondary" href="/karyawanuas">Kembali</a>
                     </div>
                </div>
            </form>
        </div>
    </div>
@endsection
