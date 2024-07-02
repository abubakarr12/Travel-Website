<?php
include('./include/db.php');
if (!$_SESSION['login']) {
    header("location: register.php");
}
?>

<!DOCTYPE php>
<php lang="en">

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
                            <h1 class="display-3 text-white mb-3">About Us</h1>
                            <p class="fs-4 text-white mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis,
                                praesentium!</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-----------------------------About section------------------------------->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <img src="./img/aboutus.jpg" alt="" style="object-fit: cover;" class="img-fluid position-absolute w-100 h-100">
                        </div>
                    </div>

                    <div class="col-lg-6">

                        <h1 class="mb-4">Welcome to <span class="text-primary">Tourist</span></h1>

                        <p class="mb-4">Tourist was established 45 years ago in Karachi, Pakistan by Khawaja Jahan Zeb and
                            is one of
                            the oldest and well known travel and tourism companies in Pakistan. It all started in a small
                            office run by a young Khawaja Jahan Zeb who, fascinated by travelling from a young age on, knew
                            that this profession was his calling in life. A whole new world in tourism opened up and over
                            the years he was able to create a variety of new ideas in the field of travel in Pakistan. The
                            company grew steadily under his guidance and his will to continuously promote the importance of
                            tourism in and for Pakistan has remained steadfast to this day. He has represented Pakistan in
                            various worldwide exhibitions and conventions, giving him the chance to promote this country as
                            a tourist destination on an international platform as well.We’re the leader in small group
                            adventure travel for more than 30 years. How’d we
                            get here? By redefining the way travellers see the world. Check out how we’re creating the
                            future of travel.We’re the leader in small group adventure travel for more than 30 years. How’d
                            we
                            get here? By redefining the way travellers see the world. Check out how we’re creating the
                            future of travel.We’re the leader in small group adventure travel for more than 30 years. How’d
                            we
                            get here? By redefining the way travellers see the world. Check out how we’re creating the
                            future of travel
                        </p>
                    </div>
                    <!-- our legacy -->
                    <div class="col-lg-12">
                        <h1 class="mb-4 text-center">OUR <span class="text-primary">LEGACY</span></h1>
                        <p class="mb-4">Tourist is one of Pakistan’s largest tour sellers and specializes in organizing
                            tours tailored to the specific interests, needs and requirements of every in and outbound
                            client. The Zeb Travels head office is located in Karachi, with branches in Islamabad, Lahore,
                            Skardu as well as Hunza, and together we have more than 60 employees who ensure that a wide
                            range of services are made available to all of our customers.

                            Tourist has a team of professionals who have been in the tourism industry for many years and
                            who are extremely determined to provide a different vision for travelling to all clients so that
                            they may experience the best and then return satisfied with our service. Tourist management
                            philosophy is based on the simple concept of delivering the highest quality customer services at
                            the best possible price. Today we serve an ever growing number of clients, travel agents and
                            tour operators around the world. All of our partners remain exceedingly happy with our services,
                            especially by the number of value added services we have on offer.
                        </p>
                    </div>
                    <!-- ceo msg -->
                    <div class="col-lg-12">
                        <h1 class="mb-4 text-center">MESSAGE FROM<span class="text-primary"> CEO</span></h1>
                    </div>
                    <div class="col-lg-8">
                        <p class="mb-4">Having worked in this field since a very young age, I developed an early love for
                            travelling and everything that has something to do with tourism. From an early stage of my life
                            I was especially interested in exploring my own country, Pakistan, which offers an amazing
                            variety of superb holiday destinations. During my extensive travels over the years in Pakistan,
                            I believed I had visited every corner of this country, but to my surprise, on each new journey I
                            discovered a part of my country that I had never experienced before.
                            <br><br>
                            Throughout the years I have strived to attain several goals:
                            <br><br>

                            To emphasize the importance of “domestic travelers” and to increase awareness amongst my fellow
                            Pakistanis, both those who live in Pakistan and those who live elsewhere in the world, about the
                            beauty of their own country. To invite and serve people from all over the world who have
                            developed a love for Pakistan. Until today many customers return, and many continue to keep in
                            touch with us, recalling the “Adventure Pakistan” that they had had the chance to experience. To
                            encourage my fellow Pakistanis to travel abroad and experience new cultures and meet new people
                            in order to expand the horizons of their mind as well as their knowledge. And last but not
                            least, to encourage our youth to participate in school trips in order to change attitudes and
                            raise aspirations through new activities and experiences. Rising to new challenges and living
                            alongside their peers helps pupils become more adaptable and confident; aspects which are
                            critical to so many areas of their development.


                        </p>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="team-item">
                            <div class="overflow-hidden">
                                <img src="./img/ahad.jpg" alt="" class="img-fluid">
                            </div>

                            <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                                <a href="" class="btn btn-square mx-1">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="" class="btn btn-square mx-1">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="https://instagram.com/ahadxch?igshid=YmMyMTA2M2Y=" class="btn btn-square mx-1">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>

                            <div class="text-center p-4">
                                <h5 class="mb-0">Abdulahad</h5>
                                <small>CEO</small>
                            </div>
                        </div>
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

</php>