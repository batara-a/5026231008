@extends('template')

@section('content')

	<h3>Keranjang Belanja</h3>

	<br/>

    <a href="/keranjang/beli" class="btn btn-primary mb-3"> + Beli Barang Baru</a>

	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Pembelian</th>
			<th>Kode Barang</th>
			<th>Jumlah Pembelian(Y/N)</th>
			<th>Harga Per Item</th>
			<th>Total</th>
            <th>Action</th>


		</tr>
		@foreach($keranjangbelanja as $k)
		<tr>
			<td>{{ $k->ID }}</td>
			<td>{{ $k->KodeBarang }}</td>
			<td>{{ $k->Jumlah }}</td>
			<td>{{ number_format($k->Harga, 0, ',', '.') }}</td>
            <td>{{ number_format($k->Jumlah * $k->Harga, 0, ',', '.') }}</td>
            <td>
				<a href="/keranjang/batal/{{ $k->ID }}" class="btn btn-danger">Batal</a>
			</td>
		</tr>
		@endforeach
	</table>

	{{ $keranjangbelanja->links() }}

@endsection
