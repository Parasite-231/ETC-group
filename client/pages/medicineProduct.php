<?php
                    include("./partials/header.php");
?>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <?php
                    include("./partials/navBar.php");
?>

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-3 animated slideInDown">Products</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a class="text-body" href="./index.php">Home</a>
                    </li>

                    <li class="breadcrumb-item text-dark active" aria-current="page">
                        Medicine Products
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Product Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s"
                        style="max-width: 500px">
                        <h1 class="display-5 mb-3">Medicine Products</h1>
                        <p>
                            Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum
                            diam justo sed rebum vero dolor duo.
                        </p>
                    </div>
                </div>
                <?php
                    include("./partials/activeMedicineProduct.php");
?>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        <?php
                    include("./partials/medicineProductContents.php");
?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product End -->
    <?php
                    include("./partials/footer.php");
?>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>