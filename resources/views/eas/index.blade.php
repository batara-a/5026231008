@extends('template')

@section('content')
    <h3>Data Nilai Mahasiswa</h3>

    <a href="/eas/tambah" class="btn btn-primary mb-3"> + Tambah Data</a>

     <table class="table table-hover table-bordered align-middle shadow-sm rounded text-center">
        <tr>
            <th>ID</th>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
        </tr>
        @foreach($nilai as $n)
        <tr>
            <td>{{ $n->id }}</td>
            <td>{{ $n->normorinduksiswa }}</td>
            <td>{{ $n->nilaiangka }}</td>
            <td>{{ $n->sks }}</td>
            <td>
                @php
                    $na = $n->nilaiangka;
                    if ($na <= 40) {
                        echo 'D';
                    } elseif ($na >= 41 && $na <= 60) {
                        echo 'C';
                    } elseif ($na >= 61 && $na <= 80) {
                        echo 'B';
                    } elseif ($na >= 81) {
                        echo 'A';
                    }
                @endphp
            </td>
            <td>{{ $n->nilaiangka * $n->sks }}</td>
        </tr>
        @endforeach
    </table>
@endsection
