<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>CekDong! Booking Alat</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/kode1.css') }}">
    <style>

    </style>
</head>
<body>
    <div class="container-fluid p-0">

        <div class="app-header d-flex justify-content-between align-items-center">
            <a href="#" class="back-arrow">
                <i class="fas fa-arrow-left"></i>
            </a>
            <div>
                <span class="app-title">CekDong!</span>
                <span class="page-title ml-1">Booking Alat</span>
            </div>
        </div>


        <div class="booking-card">
            <div class="row">

                <div class="col-4">
                    <div class="camera-img-container mb-3">
                       <img src="{{ asset('img/kamera.png') }}" alt="Camera Canon EOS 4000D" class="img-fluid" style="max-width: 80px;">
                    </div>
                    <div class="d-flex align-items-center justify-content-center mt-4">
                        <button class="quantity-btn minus-btn">-</button>
                        <span class="quantity-value">1</span>
                        <button class="quantity-btn plus-btn">+</button>
                    </div>
                </div>


                <div class="col-8">
                    <h6 class="font-weight-bold text-uppercase mb-2">Camera Canon EOS 4000D</h6>
                    <div class="d-flex align-items-center mb-1">
                        <span class="text-muted small">Disewakan pada tanggal 20/11/24</span>
                        <span class="calendar-icon">
                            <i class="far fa-calendar-alt"></i>
                        </span>
                    </div>
                    <div class="small mb-1">E17_YANUAR - CREW ITS TV</div>
                    <div class="small mb-1">07:00 - 19:00</div>
                    <div class="small">Liputan : <span class="font-weight-bold">Pengukuhan Proffesor</span></div>
                </div>
            </div>
        </div>


        <div class="app-footer d-flex justify-content-between align-items-center">
            <div>
                <div class="text-muted small">Teknisi hari ini</div>
                <div class="small"><strong>E17_AJI - TEKNISI ITS TV</strong></div>
            </div>
            <button class="confirm-btn">Konfirmasi Teknisi</button>
        </div>
    </div>


</body>
</html>
