@extends('template')

@section('content')
    <h3>Keranjang Belanja</h3>

    <a href="/keranjang" class="btn btn-info"> Kembali</a>

    <br />
    <br />

    <form action="/keranjang/store" method="post" class="form-horizontal">
        {{ csrf_field() }}

        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="kode">
                Kode Barang
            </label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="kode" placeholder="Masukkan Kode Barang" name="KodeBarang"
                    required="required">
            </div>
        </div>

        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="jumlah">
                Jumlah
            </label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="jumlah" placeholder="Masukkan Jumlah Barang" name="Jumlah"
                    required="required">
            </div>
        </div>

        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="harga">
                Harga
            </label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="harga" placeholder="Masukkan Harga Barang" name="Harga"
                    required="required">
            </div>
        </div>

        <input type="submit" value="Simpan Data" class="btn btn-success" >
    </form>

    @endsection
