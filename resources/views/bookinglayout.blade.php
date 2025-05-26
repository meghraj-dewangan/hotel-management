<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>


    <link rel="stylesheet" href="/css/booking.css">
</head>

<body class="min-vh-100">




    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container">
            <a class="navbar-brand  fs-3 fw-bold" href="#">Hotel<span class="text-danger">Ease</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/home') }}">Home</a>
                    </li>
                    <li class="nav-item service">
                        <a class="nav-link " href="{{ url('/home#service') }}">Services</a>
                    </li>
                    <li class="nav-item gallery">
                        <a class="nav-link" href="{{ url('/home#gallery') }}">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('contactpage') }}">Contact Us</a>
                    </li>

                
                   
                    <li class="nav-item d-flex flex-column flex-lg-row align-items-center">
                        @if(Cookie::get('username'))
                            <div
                                class="d-flex flex-column flex-lg-row  justify-content-start align-items-start align-items-lg-center  text-start w-100">
                                <span class="nav-link me-2 fw-bold text-white">Welcome, {{ Cookie::get('username') }}</span>
                                <a class="btn btn-sm btn-outline-danger ms-2 mb-2 mb-lg-0 text-start me-4"
                                    href="{{ url('logout') }}">Logout</a>
                            </div>
                        @else
                            <a class="nav-link text-start w-100 d-flex justify-content-start"
                                href="{{ url('authenticate') }}">Login/Register</a>
                        @endif
                    </li>


                    

                </ul>
            </div>
        </div>
    </nav>

    @yield('main')



    <!-- footer section -->
    <footer class="bg-dark text-white py-5">
        <div class="container">
            <div class="col-lg-6 col-md-6 col-sm-12 mx-auto quick-links-container text-center">
                <h5 class="text-uppercase text-white">Quick Links</h5>
                <ul class="list-unstyled d-flex justify-content-center">
                    <li>
                        <a href="https://www.facebook.com/login.php/" class="text-decoration-none quickicon">
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/accounts/login/" class="text-decoration-none quickicon">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://x.com/?lang=en-in" class="text-decoration-none quickicon">
                            <i class="fa-brands fa-x-twitter"></i>
                        </a>
                    </li>
                </ul>
            </div>

        </div>



        <!-- Copyright -->
        <div class="text-center border-top pt-3 mt-4">
            <p class="mb-0">© 2025 HotelEase. All Rights Reserved.</p>
        </div>

        </div>
    </footer>

</body>

</html>