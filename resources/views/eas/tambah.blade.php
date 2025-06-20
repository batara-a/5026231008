@extends('template')

@section('content')
    <h3>Tambah Data Nilai</h3>

    <a href="/eas" class="btn btn-info"> Kembali</a>
    <br/>
    <br/>

    <form action="/eas/store" method="post" class="form-horizontal">
        {{ csrf_field() }}

        <div class="form-group row">
            <label for="normorinduksiswa" class="col-sm-2 col-form-label">NRP</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="normorinduksiswa" id="normorinduksiswa" placeholder="Masukkan 5 digit NRP" required="required">
            </div>
        </div>

        <div class="form-group row">
            <label for="nilaiangka" class="col-sm-2 col-form-label">Nilai Angka</label>
            <div class="col-sm-6">
                <input type="number" class="form-control" name="nilaiangka" id="nilaiangka" placeholder="Masukkan Nilai Angka" required="required">
            </div>
        </div>

        <div class="form-group row">
            <label for="sks" class="col-sm-2 col-form-label">SKS</label>
            <div class="col-sm-6">
                <input type="number" class="form-control" name="sks" id="sks" placeholder="Masukkan Jumlah SKS" required="required">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label"></label>
            <div class="col-sm-6">
                <input type="submit" value="Simpan Data" class="btn btn-success">
            </div>
        </div>
    </form>
@endsection
