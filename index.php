<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="MYMECHANIC_CSS/style.css">


    <!-- css liabraries start-->
    <!-- css liabraries End-->
    <title>MyMechanic</title>

</head>









<body>
    <!-- include navbar start -->
    <?php include 'partials\_navbar.php'; ?>
    <!-- include navbar End -->


    <!-- carausal start -->
    <div id="carouselExampleCaptions" style="z-index: -1;" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/back1.jpg" style="opacity: 0.89;" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 style="font-size: 100px; font-weight:700; text-shadow: 5px 5px 9px black;">Keep Your Car Newer</h1>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/back2.jpg" style="opacity: 0.89;" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 style="font-size: 100px; font-weight:700; text-shadow: 5px 5px 9px black;">Quality Service For You</h1>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/back3.jpg" style="opacity: 0.89;" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 style="font-size: 100px; font-weight:700; text-shadow: 5px 5px 9px black;">Service Before You Sleep</h1>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- carausal end -->


    <!-- About card strip_tags -->
    <div class="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="images/about1.jpg" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-header text-left">
                        <p>About Us</p>
                        <h2>We are providing Online Booking system for Car Service.</h2>
                    </div>
                    <div class="about-content">
                        <p>
                            Lorem ipsum dolor sit amet elit. In vitae turpis. Donec in hendre dui, vel blandit massa. Ut vestibu suscipi cursus. Cras quis porta nulla, ut placerat risus. Aliquam nec magna eget velit luctus dictum
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i>Seats washing</li>
                            <li><i class="bi bi-check-circle"></i>Vacuum cleaning</li>
                            <li><i class="bi bi-check-circle"></i>Interior wet cleaning</li>
                            <li><i class="bi bi-check-circle"></i>Window wiping</li>
                        </ul>
                        <a type="button" class="btn btn-secondary" href="services.php">View Services</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About card End -->


    <!-- popular services start -->
    <div class="service">
        <div class="container">
            <div class="section-header text-center">
                <p>What We Do?</p>
                <h2>Popular Services</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <img src="images/services_img/carwash.png">
                        <h3>Exterior Washing</h3>
                        <p>this service provide full exterior washing and palish not interior washing.</p>
                        <a type="button" class="btn btn-secondary mt-2" href="services.php">Book Service</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <img src="images/services_img/carwash2.png">
                        <h3>Interior Washing</h3>
                        <p>this service provide only interior washing and palish not exterior washing.</p>
                        <a type="button" class="btn btn-secondary mt-2" href="services.php">Book Service</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <img src="images/services_img/break.png">
                        <h3>Break Reparing</h3>
                        <p>this service provide checkup regarding frontside and backside Break and reparing.</p>
                        <a type="button" class="btn btn-secondary mt-2" href="services.php">Book Service</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <img src="images/services_img/jump.png">
                        <h3>Jump Service</h3>
                        <p>this service provide all the service for Jumpers forntside and backside .</p>
                        <a type="button" class="btn btn-secondary mt-2" href="services.php">Book Service</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <img src="images/services_img/light.png">
                        <h3>Lightings</h3>
                        <p>this service provide the service regarding all head-lights, indicators and interior lights </p>
                        <a type="button" class="btn btn-secondary mt-2" href="services.php">Book Service</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <img src="images/services_img/oil.png">
                        <h3>Oil Changing</h3>
                        <p>this service provide only oil changing in your car angine not reparing regrading that.</p>
                        <a type="button" class="btn btn-secondary mt-2" href="services.php">Book Service</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <img src="images/services_img/silencer.png">
                        <h3>Silencer Problems</h3>
                        <p>this service provide all the solutions for silencer.</p>
                        <a type="button" class="btn btn-secondary mt-2" href="services.php">Book Service</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <img src="images/services_img/staring.png">
                        <h3>Staring Service</h3>
                        <p>this service provide all the solution regarding all types off starings.</p>
                        <a type="button" class="btn btn-secondary mt-2" href="services.php">Book Service</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- popular services End -->


    <!-- customer reviews Start -->
    <div class="testimonial">
        <div class="container">
            <div class="section-header text-center">
                <p>Reviews</p>
                <h2>What our customer say</h2>
            </div>
            <div class="owl-carousel testimonials-carousel">
                <div class="testimonial-item">
                    <img src="images/customer1.JPG" alt="Image">
                    <div class="testimonial-text">
                        <h3>Haresh Padshala</h3>
                        <h4>Profession</h4>
                        <p><i class="bi bi-patch-check-fill" style="font-size: 1.5rem; color: #cc1a2c;"></i>
                            Lorem ipsum dolor sit amet elit. Phasel preti mi facilis ornare velit non vulputa. Aliqu metus tortor auctor gravid
                        </p>
                    </div>
                </div>
                <div class="testimonial-item">
                    <img src="images/customer2.JPG" alt="Image">
                    <div class="testimonial-text">
                        <h3>Brijesh Choudhary</h3>
                        <h4>Profession</h4>
                        <p><i class="bi bi-patch-check-fill" style="font-size: 1.5rem; color:  #cc1a2c;"></i>
                            Lorem ipsum dolor sit amet elit. Phasel preti mi facilis ornare velit non vulputa. Aliqu metus tortor auctor gravid
                        </p>
                    </div>
                </div>
                <div class="testimonial-item">
                    <img src="images/customer3.JPG" alt="Image">
                    <div class="testimonial-text">
                        <h3>Kishan Padshala</h3>
                        <h4>Profession</h4>
                        <p><i class="bi bi-patch-check-fill" style="font-size: 1.5rem; color: #cc1a2c;"></i>
                            Lorem ipsum dolor sit amet elit. Phasel preti mi facilis ornare velit non vulputa. Aliqu metus tortor auctor gravid
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- customer reviews end -->

    <!-- Facts Start -->
    <div class="facts">
        <div class="container">
            <div class="section-header text-center">
                <p>Facts</p>
                <h2>About Our Successful Journy</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="facts-item">
                        <i class="bi bi-geo-alt-fill"></i>
                        <div class="facts-text">
                            <h3>500</h3>
                            <p>Garages</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="facts-item">
                        <i class="bi bi-person-fill"></i>
                        <div class="facts-text">
                            <h3>1500</h3>
                            <p>Engineers & Workers</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="facts-item">
                        <i class="bi bi-people-fill"></i>
                        <div class="facts-text">
                            <h3>900</h3>
                            <p>Satisfied Customers</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="facts-item">
                        <i class="bi bi-check-all"></i>
                        <div class="facts-text">
                            <h3>2000</h3>
                            <p>Service Booked per Month</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->




    <!-- Footer Start -->
    <?php include 'partials/_footer.php'; ?>
    <!-- Footer End -->






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="MYMECHANIC_JS/sidebar.js"></script>

</body>

</html>