<?php
include('./include/db.php');
if (!$_SESSION['login']) {
    header("location: register.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tourist - About</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/profile.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>



    <!--------------------------------------Top NAVBAR-------------------------------->
    <div class="container-f1uid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marked-alt me-2"></i> 123 Street,
                        NewYork,USA</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i> +92 3096 3816 48</small>
                    <small class="me-3 text-light"><i class="fa fa-envelope-open me-2"></i> info@ahadking.com</small>
                </div>
            </div>

            <!-- social Button -->
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a href="" class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2">
                        <i class="fab fa-twitter fw-normal"></i>
                    </a>
                    <a href="" class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2">
                        <i class="fab fa-facebook-f fw-normal"></i>
                    </a>
                    <a href="" class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2">
                        <i class="fab fa-instagram fw-normal"></i>
                    </a>
                    <a href="" class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2">
                        <i class="fab fa-linkedin-in fw-normal"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>



    <!------------------------------HERO SECTION------------------------------------------>
    <div class="container-fluid position-relative p-0">
    <?php
        include('./include/navbar.php')
        ?>





        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white mb-3">Gallery</h1>
                        <p class="fs-4 text-white mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis,
                            praesentium Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus delectus natus
                            est. Cumque, veritatis quidem! Et, eveniet quisquam! Sint quibusdam perspiciatis animi eius
                            porro dolores corrupti dignissimos optio! Perferendis, qui.!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- contact section -->

    <div class="container-xxl py-5 destination">
        <div class="container">
            <div class="text-center">
                <h2 class="text-primary">Featured Pics</h2>
            </div>

            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">

                        <div class="col-lg-12 col-md-12">
                            <a href="" class="d-block position-relative overflow-hidden">
                                <img src="./img/destination-1.jpg" alt="" class="img-fluid">

                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <a href="" class="d-block position-relative overflow-hidden">
                                <img src="./img/im2.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <a href="" class="d-block position-relative overflow-hidden">
                                <img src="./img/im3.jpg" alt="" class="img-fluid">

                            </a>
                        </div>

                    </div>
                </div>

                <div class="col-lg-5 col-md-6" style="min-height: 350px;">
                    <a href="" class="d-block position-relative h-100 overflow-hidden">
                        <img src="./img/im4].jpg" alt="" class="img-fluid position-absolute w-100 h-100" style="object-fit: cover;">

                    </a>
                </div>

                <div class="col-lg-5 col-md-6" style="min-height: 350px;">
                    <a href="" class="d-block position-relative h-100 overflow-hidden">
                        <img src="./img/im5.jpg" alt="" class="img-fluid position-absolute w-100 h-100" style="object-fit: cover;">

                    </a>
                </div>

                <div class="col-lg-6 col-md-12">
                    <a href="" class="d-block position-relative overflow-hidden">
                        <img src="./img/im7.jpg" alt="" class="img-fluid">
                    </a>
                </div>


                <div class="col-lg-6 col-md-12">
                    <a href="" class="d-block position-relative overflow-hidden">
                        <img src="./img/im8.jpg" alt="" class="img-fluid">

                    </a>
                </div>

            </div>
        </div>
    </div>







    <!-- --------------------------Footer section---------------------------- -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Company</h4>
                    <a href="" class="btn btn-link">About Us</a>
                    <a href="" class="btn btn-link">Contact Us</a>
                    <a href="" class="btn btn-link">Privacy Policy</a>
                    <a href="" class="btn btn-link">Terms & Condition</a>
                    <a href="" class="btn btn-link">FAQ & Help</a>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York,USA</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+92 3096 3816 48</p>
                    <p class="mb-2"><i class="fa fa-envelope-open me-3"></i>info@ahadking.com</p>

                    <div class="d-flex pt-2">
                        <a href="" class="btn btn-outline-light btn-social">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="" class="btn btn-outline-light btn-social">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="" class="btn btn-outline-light btn-social">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="" class="btn btn-outline-light btn-social">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a href="" class="btn btn-outline-light btn-social">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Gallery</h4>

                    <div class="row g-2 pt-2">

                        <div class="col-4">
                            <img src="./img/package-1.jpg" alt="" class="img-fluid bg-light p-1">
                        </div>
                        <div class="col-4">
                            <img src="./img/package-2.jpg" alt="" class="img-fluid bg-light p-1">
                        </div>
                        <div class="col-4">
                            <img src="./img/package-3.jpg" alt="" class="img-fluid bg-light p-1">
                        </div>
                        <div class="col-4">
                            <img src="./img/package-1.jpg" alt="" class="img-fluid bg-light p-1">
                        </div>
                        <div class="col-4">
                            <img src="./img/package-2.jpg" alt="" class="img-fluid bg-light p-1">
                        </div>
                        <div class="col-4">
                            <img src="./img/package-3.jpg" alt="" class="img-fluid bg-light p-1">
                        </div>

                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Newsletter</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati reprehenderit quos
                        repudiandae consequuntur omnis a velit, saepe vitae iure, perferendis perspiciatis sint
                        doloremque iusto nisi temporibus quo! Cupiditate, dolorum esse?</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input type="email" class="form-control border-primary w-100 py-3 ps-4 pe-5" placeholder="Your Email...">
                        <button class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2 " type="button ">SignUP</button>
                    </div>
                </div>
            </div>
        </div>




        <!-- --------------copy right ------------------------->
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">&copy; <a href="" class="border-bottom">Mystery Code</a> |All Rights Reserved.</div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="" class="">Home</a>
                            <a href="" class="">Cookies</a>
                            <a href="" class="">Help</a>
                            <a href="" class="">FQAs</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

</body>

</html>