@extends('template')
@section('content')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card border-0 rounded-4">
                    <div class="card-body text-center py-5">
                        <div class="mb-4">
                            <i class="bi bi-people-fill display-3 text-primary"></i>
                        </div>
                        <h3 class="card-title mb-3 fw-bold text-dark">Statistik Pengunjung</h3>
                        <p class="card-text fs-5 text-secondary">
                            Anda pengunjung ke {{ $jumlah }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

@endsection
