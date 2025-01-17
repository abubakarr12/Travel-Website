<!-- ========================Php Start========================= -->
<?php
include('./include/db.php');
if (!$_SESSION['login']) {
    header("location: register.php");
}
if (isset($_POST['b_save'])) {

    $name = $conn->real_escape_string($_POST['username']);
    $email = $conn->real_escape_string($_POST['email']);
    $bookingtime = $conn->real_escape_string($_POST['bookingtime']);
    $destination = $conn->real_escape_string($_POST['destination']);
    $request = $conn->real_escape_string($_POST['request']);

    $sql = "INSERT INTO `booking`( `name`, `email`, `booking_d_t`, `destination`, `request`) VALUES ('$name','$email','$bookingtime','$destination','$request')";
    $result = mysqli_query($conn, $sql);
    if ($result) {

        ?>
        <script>
            alert("Booking add ");
        </script>
        <?php
    }
}

?>
<!-- ========================Php End========================= -->

<!-- ========================HTML-Bootstrap-Start============= -->
<!DOCTYPE php>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tourist - Home</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/profile.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet">

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


    <!-- ========================Top navbar========================= -->
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

    <!-- ========================Hero Section======================= -->
    <div class="container-fluid position-relative p-0">
        <?php
        include('./include/navbar.php')
            ?>







        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white mb-3">Enjoy Your Vacation With Us</h1>
                        <p class="fs-4 text-white mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis,
                            praesentium!</p>
                        <div class="position-relative w-75 mx-auto">
                            <!-- input box -->
                            <input type="text" class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5"
                                placeholder="Eg: Pakistan">
                            <!-- button -->
                            <button type="button"
                                class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2"
                                style="margin-top: 7px;">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ========================About Section====================== -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img src="./img/ship.jpg" alt="" style="object-fit: cover;"
                            class="img-fluid position-absolute w-100 h-100">
                    </div>
                </div>

                <div class="col-lg-6">
                    <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                    <h1 class="mb-4">Welcome to <span class="text-primary">Tourist</span></h1>

                    <p class="mb-4">We’re the leader in small group adventure travel for more than 30 years. How’d we
                        get here? By redefining the way travellers see the world. Check out how we’re creating the
                        future of travel.
                    </p>
                    <p class="mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias repudiandae
                        asperiores cupiditate id consequuntur tempora?</p>


                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>First Class Flights</p>
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Hand Picked Hotels</p>
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>First Class Flights</p>
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>First Class Flights</p>
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>First Class Flights</p>
                        </div>
                    </div>
                    <a href="about.php" class="btn btn-primary py-3 px-5 mt-2">Read More</a>
                </div>
            </div>
        </div>
    </div>

    <!-- ========================Service Section==================== -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Services</h6>
                <h1 class="mb-5">Our Services</h1>
            </div>

            <div class="row g-4">

                <div class="col-lg-3 col-sm-6">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                            <h5>WorldWide Tours</h5>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt quis facere hic?</p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-sm-6">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-hotel text-primary mb-4"></i>
                            <h5>Hotel Reservation</h5>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt quis facere hic?</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-user text-primary mb-4"></i>
                            <h5>Travel Guides</h5>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt quis facere hic?</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-cog text-primary mb-4"></i>
                            <h5>Event Management</h5>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt quis facere hic?</p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-sm-6">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                            <h5>WorldWide Tours</h5>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt quis facere hic?</p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-sm-6">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-hotel text-primary mb-4"></i>
                            <h5>Hotel Reservation</h5>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt quis facere hic?</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-user text-primary mb-4"></i>
                            <h5>Travel Guides</h5>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt quis facere hic?</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="service-item rounded pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-cog text-primary mb-4"></i>
                            <h5>Event Management</h5>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt quis facere hic?</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- ========================Destination Section================= -->
    <div class="container-xxl py-5 destination">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">
                    Destination
                </h6>
                <h1 class="mb-5">Popular Destination</h1>
            </div>

            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">

                        <div class="col-lg-12 col-md-12">
                            <a href="" class="d-block position-relative overflow-hidden">
                                <img src="./img/destination-1.jpg" alt="" class="img-fluid">
                                <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">
                                    30% OFF</div>
                                <div
                                    class="bg-white text-primary fe-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">
                                    Thailand</div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <a href="" class="d-block position-relative overflow-hidden">
                                <img src="./img/destination-2.jpg" alt="" class="img-fluid">
                                <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">
                                    50% OFF</div>
                                <div
                                    class="bg-white text-primary fe-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">
                                    Malaysia</div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <a href="" class="d-block position-relative overflow-hidden">
                                <img src="./img/destination-3.jpg" alt="" class="img-fluid">
                                <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">
                                    25% OFF</div>
                                <div
                                    class="bg-white text-primary fe-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">
                                    Austraila</div>
                            </a>
                        </div>

                    </div>
                </div>

                <div class="col-lg-5 col-md-6" style="min-height: 350px;">
                    <a href="" class="d-block position-relative h-100 overflow-hidden">
                        <img src="./img/destination-4.jpg" alt="" class="img-fluid position-absolute w-100 h-100"
                            style="object-fit: cover;">
                        <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">20% OFF
                        </div>
                        <div class="bg-white text-primary- fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">
                            Indonesia</div>
                    </a>
                </div>

            </div>
        </div>
    </div>

    <!-- ========================Packege Section===================== -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Packages</h6>
                <h1 class="mb-5">Awsome Packages</h1>
            </div>
            <div class="row g-4 justify-content-center">

                <div class="col-lg-4 col-md-6">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img src="./img/package-1.jpg" alt="" class="img-fluid">
                        </div>

                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2">
                                <i class="fa fa-map-marker-alt text-primary me-2"></i> Thailand
                            </small>
                            <small class="flex-fill text-center border-end py-2">
                                <i class="fa fa-calendar-alt text-primary me-2"></i> 3 days
                            </small>
                            <small class="flex-fill text-center border-end py-2">
                                <i class="fa fa-user-alt text-primary me-2"></i> Group
                            </small>
                        </div>

                        <div class="text-center p-4">
                            <h3 class="mb-0">$249.00</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil, tempora. Earum, dicta!
                            </p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="" class="btn btn-sm btn-primary px-3"
                                    style="border-radius: 30px 0 0 30px ;">Read More</a>
                                <a href="" class="btn btn-sm btn-primary px-3"
                                    style="border-radius: 0 30px 30px 0;">Book Now</a>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img src="./img/package-2.jpg" alt="" class="img-fluid">
                        </div>

                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2">
                                <i class="fa fa-map-marker-alt text-primary me-2"></i> Sawat
                            </small>
                            <small class="flex-fill text-center border-end py-2">
                                <i class="fa fa-calendar-alt text-primary me-2"></i> 1 days
                            </small>
                            <small class="flex-fill text-center border-end py-2">
                                <i class="fa fa-user-alt text-primary me-2"></i> 2 Person
                            </small>
                        </div>

                        <div class="text-center p-4">
                            <h3 class="mb-0">$75.00</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil, tempora. Earum, dicta!
                            </p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="" class="btn btn-sm btn-primary px-3"
                                    style="border-radius: 30px 0 0 30px ;">Read More</a>
                                <a href="" class="btn btn-sm btn-primary px-3"
                                    style="border-radius: 0 30px 30px 0;">Book Now</a>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="package-item">
                        <div class="overflow-hidden">
                            <img src="./img/package-3.jpg" alt="" class="img-fluid">
                        </div>

                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2">
                                <i class="fa fa-map-marker-alt text-primary me-2"></i> Murree
                            </small>
                            <small class="flex-fill text-center border-end py-2">
                                <i class="fa fa-calendar-alt text-primary me-2"></i> 7 days
                            </small>
                            <small class="flex-fill text-center border-end py-2">
                                <i class="fa fa-user-alt text-primary me-2"></i> 1 Person
                            </small>
                        </div>

                        <div class="text-center p-4">
                            <h3 class="mb-0">$195.00</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil, tempora. Earum, dicta!
                            </p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="" class="btn btn-sm btn-primary px-3"
                                    style="border-radius: 30px 0 0 30px ;">Read More</a>
                                <a href="cart.php" class="btn btn-sm btn-primary px-3"
                                    style="border-radius: 0 30px 30px 0;">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- ========================Booking Section===================== -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="booking p-5">
                <div class="row g-5 align-items-center">
                    <div class="col-md-6 text-white">
                        <h6 class="text-white text-uppercase">Booking</h6>
                        <h1 class="text-white mb-4">Online Booking</h1>
                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, deserunt? Lorem
                            ipsum dolor sit amet Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod obcaecati
                            voluptatum, optio doloribus dicta natus eius. Totam, perspiciatis, cumque, expedita harum
                            vel facilis modi perferendis quisquam provident laudantium nesciunt quas?.</p>
                        <a href="" class="btn btn-outline-light py-3 px-5 mt-2">Read More</a>
                    </div>
                    <div class="col-md-6">
                        <h1 class="text-white mb-4">
                            Book A Tour
                        </h1>
                        <form action="index.php" method="post">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-transparent" id="name"
                                            placeholder="Your Name" name="username">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control bg-transparent" id="email"
                                            placeholder="Your Email" name="email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating" id="date3">
                                        <input type="datetime-local" class="form-control bg-transparent " id="datetime"
                                            name="bookingtime">
                                        <label for="datetime">Date & Time</label>
                                    </div>
                                </div>

                                <!-- select box -->
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select id="select1" class="form-select bg-transparent" name="destination">
                                            <option value="1">Destination 1</option>
                                            <option value="2">Destination 2</option>
                                            <option value="3">Destination 3</option>
                                        </select>
                                        <label for="select1">Destination</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control bg-transparent" placeholder="Special Request"
                                            id="message" style="height: 100px; " name="request"></textarea>
                                        <label for="message">Special Request</label>
                                    </div>
                                </div>
                                <!--button-->
                                <div class="col-12">

                                    <button class="btn btn-outline-light w-100 py-3" type="submit" name="b_save">Book
                                        Now</button>

                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ========================Process Section===================== -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center pb-4">
                <h6 class="section-title bg-white text-center text-primary px-3">Process</h6>
                <h1 class="mb-5">Easy steps</h1>
            </div>

            <div class="row gy-5 gx-4 justify-content-center">

                <div class="col-lg-4 col-sm-6 text-center pt-4">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow "
                            style="width: 100px; height: 100px;">
                            <i class="i fa fa-globe fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Choose A Destination</h5>
                        <hr class="w-25 mx-auto bg-primary mt-0">

                        <p class="mb-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia libero fuga
                            veniam in, similique labore.</p>
                    </div>
                </div>


                <div class="col-lg-4 col-sm-6 text-center pt-4">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow "
                            style="width: 100px; height: 100px;">
                            <i class="i fa fa-dollar-sign fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Choose A Destination</h5>
                        <hr class="w-25 mx-auto bg-primary mt-0">

                        <p class="mb-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia libero fuga
                            veniam in, similique labore.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 text-center pt-4">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow "
                            style="width: 100px; height: 100px;">
                            <i class="i fa fa-plane fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Choose A Destination</h5>
                        <hr class="w-25 mx-auto bg-primary mt-0">

                        <p class="mb-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia libero fuga
                            veniam in, similique labore.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- ========================Team Section======================== -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Travel Guide</h6>
                <h1 class="mb-5">Meet Our Guide</h1>
            </div>
            <div class="row g-4">

                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img src="./img/team-1.jpg" alt="" class="img-fluid">
                        </div>

                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a href="" class="btn btn-square mx-1">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="" class="btn btn-square mx-1">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="" class="btn btn-square mx-1">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>

                        <div class="text-center p-4">
                            <h5 class="mb-0">Full Name</h5>
                            <small>Destination</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img src="./img/team-2.jpg" alt="" class="img-fluid">
                        </div>

                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a href="" class="btn btn-square mx-1">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="" class="btn btn-square mx-1">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="" class="btn btn-square mx-1">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>

                        <div class="text-center p-4">
                            <h5 class="mb-0">Full Name</h5>
                            <small>Destination</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img src="./img/team-3.jpg" alt="" class="img-fluid">
                        </div>

                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a href="" class="btn btn-square mx-1">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="" class="btn btn-square mx-1">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="" class="btn btn-square mx-1">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>

                        <div class="text-center p-4">
                            <h5 class="mb-0">Full Name</h5>
                            <small>Destination</small>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img src="./img/team-4.jpg" alt="" class="img-fluid">
                        </div>

                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a href="" class="btn btn-square mx-1">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="" class="btn btn-square mx-1">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="" class="btn btn-square mx-1">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>

                        <div class="text-center p-4">
                            <h5 class="mb-0">Full Name</h5>
                            <small>Destination</small>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- ========================Testimonial Section================= -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Testimonial</h6>
                <h1 class="mb-5">Our Clinets Say!!</h1>
            </div>

            <div class="owl-carousel testimonial-carousel position-relative">

                <div class="testimonial-item bg-white text-center border p-4">
                    <img src="./img/testimonial-1.jpg" alt="" class="bg-white rounded-circle shadow p-1 mx-auto mb-3"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">John Doe</h5>
                    <p>New York, USA</p>
                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora ducimus ab tempore
                        eius?</p>
                </div>
                <div class="testimonial-item bg-white text-center border p-4">
                    <img src="./img/testimonial-2.jpg" alt="" class="bg-white rounded-circle shadow p-1 mx-auto mb-3"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">John Doe</h5>
                    <p>New York, USA</p>
                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora ducimus ab tempore
                        eius?</p>
                </div>
                <div class="testimonial-item bg-white text-center border p-4">
                    <img src="./img/testimonial-3.jpg" alt="" class="bg-white rounded-circle shadow p-1 mx-auto mb-3"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">John Doe</h5>
                    <p>New York, USA</p>
                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora ducimus ab tempore
                        eius?</p>
                </div>
                <div class="testimonial-item bg-white text-center border p-4">
                    <img src="./img/testimonial-4.jpg" alt="" class="bg-white rounded-circle shadow p-1 mx-auto mb-3"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">John Doe</h5>
                    <p>New York, USA</p>
                    <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora ducimus ab tempore
                        eius?</p>
                </div>

            </div>

        </div>
    </div>

    <!-- ========================Footer Section====================== -->
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
                    <p class="mb-2"><i class="fa fa-envelope-alt me-3"></i>info@ahadking.com</p>

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
                            <img src="./img/package-3.jpg" alt="" class="img-fluid bg-light pw-1">
                        </div>

                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Newsletter</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati reprehenderit quos
                        repudiandae consequuntur omnis a velit, saepe vitae iure, perferendis perspiciatis sint
                        doloremque iusto nisi temporibus quo! Cupiditate, dolorum esse?</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input type="email" class="form-control border-primary w-100 py-3 ps-4 pe-5"
                            placeholder="Your Email...">
                        <button class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2 "
                            type="button ">SignUP</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright@section -->
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">&copy;
                        <a href="" class="border-bottom">Mystery Code</a> |All Rights Reserved.
                    </div>
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

    <!-- #endregion -->
    






    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

</body>

</html>