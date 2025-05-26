<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel-management</title>

    <link rel="stylesheet" href="css/contact.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</head>

<body>



    <style>

    </style>




    <div class="container my-5 ">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">

                <div class="contact-cart bg-white py-5 rounded-5">
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif
                    <h2 class="text-center fw-bold mb-4">📞 Contact Us</h2>

                    <form action="{{ url('contactpagestore') }}" method="post" enctype="multipart/form-data">
                       @csrf
                    <div class="px-5 ">
                            <div class="mb-4">
                                <label for="name" class="form-label fw-bold">Your Name</label>
                                <input type="text" id="name" name="name" class="form-control"
                                    placeholder="Enter your name" required>
                            </div>

                            <div>
                                <label for="email" class="form-label fw-bold"> Your Email</label>
                                <input id="email" name="email" class="form-control" type="text"
                                    placeholder="Enter your email">
                            </div>

                            <div class="mt-3">
                                <label for="message" class="form-label fw-bold"> Your Message</label>
                                <textarea name="message" id="message" class="form-control"
                                    placeholder="Write your message here..."></textarea>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-custom px-4 py-2 my-3">Send Message 🚀</button>
                            </div>




                        </div>
                    </form>

                    <div class="text-center mt-4 ">
                        <a class="home-btn text-white  d-inline-flex justify-content-center align-items-center"
                            href="{{ url('home') }}" type="button"> <i class="fa-solid fa-house "></i></a>
                    </div>





                </div>


            </div>

        </div>

    </div>




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