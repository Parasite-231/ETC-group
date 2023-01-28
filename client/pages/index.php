<?php
                    include("./partials/header.php");
?>


<body>
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status"></div>
    </div>

    <?php
                    include("./partials/navBar.php");
      ?>

    <?php
                    include("./partials/homePageCarousel.php");
      ?>

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img position-relative overflow-hidden p-5 pe-0">
                        <img class="img-fluid w-100" src="./images/web banner cover 1-4.png" />
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-5 mb-4">Best Organic Natural Products</h1>
                    <p class="mb-4">

                    </p>
                    <p>
                        <i class="fa fa-check text-primary me-3"></i>
                        <img src="./icons/salad.png"> &nbsp;All type of natural food are available.
                    </p>
                    <p>
                        <i class="fa fa-check text-primary me-3"></i>
                        <img src="./icons/pharmacy.png"> &nbsp;All type of organic medicine are available.
                    </p>
                    <p>
                        <i class="fa fa-check text-primary me-3"></i>
                        <img src="./icons/lotion.png"> &nbsp;All type of organic cosmetic products are available
                    </p>
                    <a class="btn btn-primary rounded-pill py-3 px-5 mt-3" href="./about.php">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Feature Start -->
    <div class="container-fluid bg-light bg-icon my-5 py-6">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 500px">
                <h1 class="display-5 mb-3">Our Motivation</h1>
                <p>

                </p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="img/icon-1.png" alt="" />
                        <h4 class="mb-3">Business Strategy</h4>
                        <p class="mb-4">
                            Business Establishment via E-commerce across Bangladesh
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="img/icon-2.png" alt="" />
                        <h4 class="mb-3">Organic Products</h4>
                        <p class="mb-4">
                            When we demand organic, we are demanding poison-free food
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="img/icon-3.png" alt="" />
                        <h4 class="mb-3">Industrialization</h4>
                        <p class="mb-4">
                            Transforming ETC Organic Group to an Industrial company within 5
                            years
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->

    <!-- Product Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s"
                        style="max-width: 500px">
                        <h1 class="display-5 mb-3">Our Products</h1>

                    </div>
                </div>

            </div>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="./images/baby life 2.png" alt="" />
                                    <div
                                        class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                        New
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="">Baby Life 2</a>

                                </div>

                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="./images/Diabetes Tea 1.png" alt="" />
                                    <div
                                        class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                        New
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="">Diabetes Tea 1</a>

                                </div>

                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="./images/ciya 3.png" alt="" />
                                    <div
                                        class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                        New
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="">Ciya 3</a>

                                </div>

                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="./images/Dibedex 1.png" alt="" />
                                    <div
                                        class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                        New
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="">Dibedex 1</a>

                                </div>

                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="./images/excellent shampoo 2.png" alt="" />
                                    <div
                                        class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                        New
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="">excellent shampoo 2</a>

                                </div>

                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="./images/Flower Honey 2.png" alt="" />
                                    <div
                                        class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                        New
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="">Flower Honey 2</a>
                                </div>

                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="./images/Hazmola 2.png" alt="" />
                                    <div
                                        class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                        New
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="">Hazmola 2</a>

                                </div>

                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="product-item">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="./images/face wash 2.png" alt="" />
                                    <div
                                        class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                        New
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="">face wash 2</a>

                                </div>

                            </div>
                        </div>
                        <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                            <a class="btn btn-primary rounded-pill py-3 px-5" href="./allProduct.php">Browse More
                                Products</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Product End -->

    <div class="container-fluid bg-primary bg-icon mt-5 py-6">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-md-7 wow fadeIn" data-wow-delay="0.1s">
                    <h1 class="display-5 text-white mb-3">Visit Our Outlets</h1>
                    <p class="text-white mb-0">
                        <i class="fas fa-map-marker-alt" aria-hidden="true"></i>&nbsp;
                        Garden City, first floor, Shop #-A57, College Road, Feni
                    </p>
                    <p class="text-white mb-0">
                        <i class="fas fa-map-marker-alt" aria-hidden="true"></i>&nbsp;
                        Majeda Manson, First Floor, Feni Road, Dagonbhuncha, Feni
                    </p>
                </div>
                <div class="col-md-5 text-md-end wow fadeIn" data-wow-delay="0.5s">

                    <img src="./icons/shop.png" />
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-light bg-icon py-6 mb-5">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 500px">
                <h1 class="display-5 mb-3">Customer Review</h1>
                <p>
                    Feedbacks from our top customers who have shared their thoughts about our products with us.
                </p>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item position-relative bg-white p-5 mt-4">
                    <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
                    <p class="mb-4">
                        Best skin care tip I can ever give to you is to use etcorganic's Face Wash 2. It's extremely
                        helpful
                        in removing the dark spots and saves you from the ultraviolet rays. I have used it and got great
                        results
                        over night. Thankyou etcorganic.
                    </p>
                    <div class="d-flex align-items-center">
                        <img class="flex-shrink-0 rounded-circle" src="./images/st.jpg" alt="" />
                        <div class="ms-3">
                            <h5 class="mb-1">Jule Ashfi Rafi</h5>
                            <span>Student</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item position-relative bg-white p-5 mt-4">
                    <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
                    <p class="mb-4">
                        What can I see ? Never seen such an effective organic product before. My tooths are not hurting
                        anymore after using toothpaste koyla 1 of etcorganic.
                    </p>
                    <div class="d-flex align-items-center">
                        <img class="flex-shrink-0 rounded-circle" src="./images/re.cms" alt="" />
                        <div class="ms-3">
                            <h5 class="mb-1">Reaz Ahmed</h5>
                            <span>Photographer</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item position-relative bg-white p-5 mt-4">
                    <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
                    <p class="mb-4">
                        A few years ago, I was having tremendous problem with my curly hairs. Faced a lot of
                        dandruff problem. But fortunately there was excellent shampoo 2 for me in the market.
                        After using it, my hair fall and dandruff are gone. My rating will be 10/10.
                    </p>
                    <div class="d-flex align-items-center">
                        <img class="flex-shrink-0 rounded-circle" src="./images/des.jpg" alt="" />
                        <div class="ms-3">
                            <h5 class="mb-1">Labiba Fairoz Raidah</h5>
                            <span>Fashion Designer</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item position-relative bg-white p-5 mt-4">
                    <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
                    <p class="mb-4">
                        Many of my patients faced stomach issues and diabetes problems. After recommending them
                        etcorganic's
                        triphala powder 1 for treating stomach problem and Diabetes Tea 1 for the Diabetic patient; now
                        they are
                        happy. I thank cordially etcorganic. Surely, the best organic shop in the country.
                    </p>
                    <div class="d-flex align-items-center">
                        <img class="flex-shrink-0 rounded-circle" src="./images/dc.png" alt="" />
                        <div class="ms-3">
                            <h5 class="mb-1">Abu Mahadi</h5>
                            <span>Doctor</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php
                    include("./partials/footer.php");
     ?>


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <script src="js/main.js"></script>
</body>

</html>