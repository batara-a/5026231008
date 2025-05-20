<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Stylish Portfolio - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.icon') }}" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Simple line icons-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <script>
            function validasi() {
                var name = document.getElementById("name").value.trim();
                var phone = document.getElementById("phoneNumber").value.trim();
                var email = document.getElementById("email").value.trim();
                var address = document.getElementById("address").value.trim();
                var date = document.getElementById("date").value.trim();

                // Validasi input tidak boleh kosong (kecuali comment)
                if (!name || !phone || !email || !address || !date) {
                    swal("Oops...", "Please fill in all fields except Comments", "error");
                    return false;
                }

                // Validasi email
                var emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
                if (!emailPattern.test(email)) {
                    swal("Oops...", "Please enter a valid email address", "error");
                    return false;
                }
                 // Validasi phone number dimulai dengan angka 0
                 if (!phone.startsWith("0")) {
                    swal("Oops...", "Phone number must start with 0", "error");
                    return false;
                }
                // Jika semua validasi benar → Tampilkan SweetAlert konfirmasi
                const swalWithBootstrapButtons = Swal.mixin({
                    customClass: {
                        confirmButton: "btn btn-success",
                        cancelButton: "btn btn-danger"
                    },
                    buttonsStyling: false
                });

                swalWithBootstrapButtons.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonText: "Yes, Submit it!",
                    cancelButtonText: "No, cancel!",
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        swalWithBootstrapButtons.fire({
                            title: "Congrats!",
                            text: "Your form has been submitted.",
                            icon: "success"
                        }).then(() => {
                            document.getElementById("fromOrder").submit(); // Submit form secara manual
                        });
                    } else if (result.dismiss === Swal.DismissReason.cancel) {
                        swalWithBootstrapButtons.fire({
                            title: "Cancelled",
                            text: "Your form doesn't submitted",
                            icon: "error"
                        });
                    }
                });

                return false;
            }
        </script>

    </head>
    <body id="page-top">

        <!-- About-->
        <section class="content-section bg-light" id="about">
            <div class="container mt-4">
        <!-- Header Section -->
        <div class="row mb-4">
            <div class="col-12">
                <h1 class="header-title">Welcome to Santa Pod Raceway</h1>
                <h3 class="header-subtitle">Home of the FIA European Drag Racing Championships, the fastest & loudest motorsport on Earth!</h3>

                <div class="mt-3">
                    <p>Santa Pod is the UK's most action-packed venue, hosting over 60 events annually including: 300mph Drag Racing, Modified Car Shows, VW Beetle & Campervan Festivals, Japanese Performance Car Shows, Retro & Classic Car Shows, plus Run What Ya Brung (RWYB) and Drift What Ya Brung (DWYB) public track days.</p>

                    <p>Enjoy VIP / Corporate Hospitality and fantastic family days out in the heart of England (on the border of Northamptonshire and Bedfordshire) and see Top Fuel Dragsters, Jet Cars, Monster Trucks, Drifting, Stunt Displays, Live Music and much more.</p>
                </div>

                <div class="buy-tickets">
                    <a href="#" class="text-decoration-none">Buy Tickets Online Today!</a>
                </div>
            </div>
        </div>
        </section>

        <!-- Events Section -->
        <section class="content-section" id="portfolio">
            <div class="container px-4 px-lg-5">
                <div class="content-section-heading text-center">
                    <h2 class="yellow-section">Coming Soon at Santa Pod Raceway</h2>
                </div>
                <div class="row gx-1">
                    <div class="col-md-6">
                        <a class="portfolio-item" href="#!">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h2">The first major event for Japanese car fans with Jap only RWYB, Show & Shine and more.</div>
                                    <p class="mb-0">Full Event Details | Buy Tickets Today</p>
                                </div>
                            </div>
                            <img class="img-fluid" src="{{ asset('img/assets/img/japshow.jpg') }}" alt="..." />
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="#!">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h2">Family Friendly VW Weekender! Doorslammers on track, Show & Shine, music and more.</div>
                                    <p class="mb-0">Full Event Details |  Buy tickets today  |  View Entrylist </p>
                                </div>
                            </div>
                            <img class="img-fluid" src="{{ asset('img/assets/img/breakout.jpg') }}" alt="..." />
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="#!">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h2">Doorslammers</div>
                                    <p class="mb-0">Full Event Details |  Buy tickets today  |  View Entrylist</p>
                                </div>
                            </div>
                            <img class="img-fluid" src="{{ asset('img/assets/img/doorslamer.jpg') }}" alt="..." />
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a class="portfolio-item" href="#!">
                            <div class="caption">
                                <div class="caption-content">
                                    <div class="h2">European Championship drag racing, the perfect event for race fans and families alike!</div>
                                    <p class="mb-0">Full Event Details |  Buy tickets today  |  View Entrylist</p>
                                </div>
                            </div>
                            <img class="img-fluid" src="{{ asset('img/assets/img/mainevent.jpg') }}" alt="..." />
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services-->
        <section class="content-section bg-primary text-white text-center" id="services">
            <div class="container px-4 px-lg-5">
                <div class="content-section-heading">
                    <h3 class="text-secondary mb-0">Tickets & Merchandise</h3>
                    <h2 class="mb-5">Buy tickets to Santa Pod Raceway events at</h2>
                   <h2><a href="http://www.SantaPodTickets.com" class="fw-bold">www.SantaPodTickets.com</a></h2>
                   <h2><a href="http://www.SantaPodShop.com" class="fw-bold">www.SantaPodShop.com</a></h2>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <img src="{{ asset('img/assets/img/ticket.jpg') }}" class="merchandise-img" alt="Buy Tickets Online">
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('img/assets/img/champions.jpg') }}" class="merchandise-img" alt="Santa Pod Merchandise">
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!-- Callout-->
        <section class="callout">
            <div class="container px-4 px-lg-5 text-center">
                <h2 class="mx-auto mb-5">
                    Santa Pod
                    <em>TV</em>
                </h2>
                <div class="video-container mt-3">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/cbrQWLYv7r4?si=BXAh4oZLNCo1-vhJ" title="Festival of Power 2025 - Drag Racing and Stunt Shows" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            </div>
        </section>

        <!-- FORM ORDER -->
       <div class="yellow-section">
        <div class="container my-3">
            <h2>GET IN TOUCH</h2>
            <p class="text-muted">Fill in the order form below to get your seats</p>
            <form id="formOrder" method="get" action="https://google.co.id" onsubmit="return validasi();">
                <div class="mb-3 mt-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your full name" name="name">
                </div>
                <div class="mb-3 mt-3">
                    <label for="phoneNumber">Phone Number</label>
                    <input type="text" class="form-control" id="phoneNumber"
                        placeholder="Enter your phone number starting with the number 0" name="phoneNumber">
                </div>
                <div class="mb-3 mt-3">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email">
                </div>
                <div class="mb-3 mt-3">
                    <label for="address">Address :</label>
                    <input type="address" class="form-control" id="address" placeholder="Enter where to deliver"
        name="address">
                </div>
                <div class="mb-3 mt-3">
                    <label for="date">Date :</label>
                    <input type="date" class="form-control" id="date" placeholder="Enter when to deliver" name="date">
                </div>
                <label for="orderType">Order Type : </label>
                <div class="container mt-3">
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="wholesale" name="optradio" value="option1"
                            required>Wholesale
                        <label class="form-check-label" for="radio1"></label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" id="piece" name="optradio" value="option2">Piece
                        <label class="form-check-label" for="radio2"></label>
                    </div>
                </div>
                <div class="mb-3 mt-3">
                    <label for="comment">Comments:</label>
                    <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
      </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Order Now</button>


                </div>


        <!-- Bootstrap JS Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
