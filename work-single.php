<!DOCTYPE html>
<html lang="en">

<head>
    <title>Purple Buzz - Work Detail Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <!-- Load Require CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font CSS -->
    <link href="assets/css/boxicon.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Load Tempalte CSS -->
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
<!--
    
TemplateMo 561 Purple Buzz

https://templatemo.com/tm-561-purple-buzz

-->
</head>

<body>
    <!-- Header -->
    <nav id="main_nav" class="navbar navbar-expand-lg navbar-light bg-white shadow">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand h1" href="index.php">
                <!-- <i ><img src="assets/img/icon.png "width="35" height="30"></img></i> -->
                <span class="text-primary h4">Nurul Iman</span>
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler-success" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="navbar-toggler-success">
                <div class="flex-fill mx-xl-5 mb-2">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-xl-5 text-center text-dark">
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="index.php">Home</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="#">Visi & Misi</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="about.php">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="work.php">News</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="#">Testimonial</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- <div class="navbar align-self-center d-flex">
                    <a class="nav-link" href="#"><i class='bx bx-bell bx-sm bx-tada-hover text-primary'></i></a>
                    <a class="nav-link" href="#"><i class='bx bx-cog bx-sm text-primary'></i></a>
                    <a class="nav-link" href="#"><i class='bx bx-user-circle bx-sm text-primary'></i></a>
                </div> -->
            </div>
        </div>
    </nav>
    <!-- Close Header -->

    <!-- Start Banner Hero -->
    <div id="work_single_banner" class="bg-light w-100">
        <div class="container-fluid text-light d-flex justify-content-center align-items-center border-0 rounded-0 p-0 py-5">
            <div class="banner-content col-lg-8 m-lg-auto text-center py-5 px-3">
            <?php
                $id = $_GET['id'];
                $db_connection = mysqli_connect("us-cdbr-east-04.cleardb.com","b4d4b5e8043e16","1109892b","heroku_afcc4630639690d");
                $select = mysqli_query($db_connection, "SELECT * FROM work where id='$id'");
                while ($row = $select->fetch_assoc()) {                         
                ?>
                <h1 class="banner-heading h2 pb-5 typo-space-line-center"><?php echo $row['judul']; ?></<h1>
                </h1>
              
                <p class="banner-footer light-300">
                <?php echo $row['deskripsi']; ?>
                </p>
         
            </div>
        </div>
    </div>
    <!-- End Banner Hero -->

    <!-- Start Work Sigle -->
    <section class="container py-5">

        <div class="row pt-5">
            <div class="worksingle-content col-lg-8 m-auto text-left justify-content-center">
                <h2 class="worksingle-heading h3 pb-3 light-300 typo-space-line"><?php echo $row['judul']; ?> </h2>
            </div>
        </div><!-- End Blog Cover -->

        <div class="row justify-content-center pb-4">
            <div class="col-lg-8">
                <div id="templatemo-slide-link-target" class="card mb-3">
                    <img class="img-fluid border rounded" src="./admin-master/img/<?php echo $row['foto']; ?>" alt="Card image cap">
                </div>
            </div>
        </div><!-- End Slider -->

        <div class="row">
            <div class="col-md-8 m-auto text-left justify-content-center">
                <p class="pt-5 text-muted light-300">
                <?php echo $row['isi']; ?>
                </p>
            </div>
        </div><!-- End Paragrph -->


        <div class="row justify-content-center">
            <div class="col-lg-8 pt-4 pb-4">
                <div class="ratio ratio-16x9">
                    <iframe class="embed-responsive-item" src="<?php echo $row['youtube']; ?>" allowfullscreen></iframe>
                </div>
            </div>
        </div><!-- End Video -->


        <!-- Start Comment -->
        


    </section>
    <!-- End Work Sigle -->

    <!-- Start Related Post -->
    <!-- <article class="container-fluid bg-light">
        <div class="container">
            <div class="worksingle-related-header row">
                <h1 class="h2 py-5">Related Post</h1>
                <div class="col-md-12 text-left justify-content-center">
                    <div class="row gx-5">


                        <div class="col-sm-6 col-lg-4 mb-5">
                            <a href="#" class="related-content card text-decoration-none overflow-hidden h-100">
                                <img class="related-img card-img-top" src="./assets/img/related-post-01.jpg" alt="Card image cap">
                                <div class="related-body card-body p-4">
                                    <h5 class="card-title h6 m-0 semi-bold-600 text-dark">Digital Marketing</h5>
                                    <p class="card-text pt-2 mb-1 light-300 text-dark">
                                        Lorem ipsum dolor sit amet, consectetur.
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <span class="text-primary light-300">Read more</span>
                                        <div class="light-300">
                                            <i class='bx-fw bx bx-heart me-1'></i>5
                                            <i class='bx-fw bx bx-chat    ms-1 me-1'></i>3
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-lg-4 mb-5">
                            <a href="#" class="related-content card text-decoration-none overflow-hidden h-100">
                                <img class="related-img card-img-top" src="./assets/img/related-post-02.jpg" alt="Card image cap">
                                <div class="related-body card-body p-4">
                                    <h5 class="card-title h6 m-0 semi-bold-600 text-dark">App Development</h5>
                                    <p class="card-text pt-2 mb-1 light-300 text-dark">
                                        Tempor incididunt ut labore et dolore.
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <span class="text-primary light-300">Read more</span>
                                        <div class="light-300">
                                            <i class='bx-fw bx bx-heart me-1'></i>11
                                            <i class='bx-fw bx bx-chat    ms-1 me-1'></i>9
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-lg-4 mb-5">
                            <a href="#" class="related-content card text-decoration-none overflow-hidden h-100">
                                <img class="related-img card-img-top" src="./assets/img/related-post-03.jpg" alt="Card image cap">
                                <div class="related-body card-body p-4">
                                    <h5 class="card-title h6 m-0 semi-bold-600 text-dark">Digital Marketing</h5>
                                    <p class="card-text pt-2 mb-1 light-300 text-dark">
                                        Consectetur adipiscing elit.
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <span class="text-primary light-300">Read more</span>
                                        <div class="light-300">
                                            <i class='bx-fw bx bx-heart me-1'></i>31
                                            <i class='bx-fw bx bx-chat    ms-1 me-1'></i>2
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

    </article> -->
    <!-- End Related Post -->

    <?php } ?>                    
    <!-- Start Footer -->
    <!-- Start Footer -->
    <footer class="bg-secondary pt-4">
        <div class="container">
            <div class="row py-4">

                <div class="col-lg-3 col-12 align-left">
                    <a class="navbar-brand" href="index.php">
                        <i class='bx bx-buildings bx-sm text-light'></i>
                        <span class="text-light h5">Nurul</span> <span class="text-light h5 semi-bold-600">Iman</span>
                    </a>
                    <p class="text-light my-lg-4 my-2">
                   <b> TPQ Nurul Iman </b>
                <br>
                Jalan Hasanuddin Rt. 03 Rw.07 <br>
                Kota Batu - Jawa Timur <br> <br>

                    </p>
                    <ul class="list-inline footer-icons light-300">
                        <li class="list-inline-item m-0">
                            <a class="text-light" target="_blank" href="http://facebook.com/">
                                <i class='bx bxl-facebook-square bx-md'></i>
                            </a>
                        </li>
                        <li class="list-inline-item m-0">
                            <a class="text-light" target="_blank" href="https://www.linkedin.com/">
                                <i class='bx bxl-linkedin-square bx-md'></i>
                            </a>
                        </li>
                        <li class="list-inline-item m-0">
                            <a class="text-light" target="_blank" href="https://www.whatsapp.com/">
                                <i class='bx bxl-whatsapp-square bx-md'></i>
                            </a>
                        </li>
                        <li class="list-inline-item m-0">
                            <a class="text-light" target="_blank" href="https://www.flickr.com/">
                                <i class='bx bxl-flickr-square bx-md'></i>
                            </a>
                        </li>
                        <li class="list-inline-item m-0">
                            <a class="text-light" target="_blank" href="https://www.medium.com/">
                                <i class='bx bxl-medium-square bx-md' ></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 my-sm-0 mt-4">
                    <h3 class="h4 pb-lg-3 text-light light-300">Profile</h2>
                        <ul class="list-unstyled text-light light-300">
                            <!-- <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light" href="index.php">Home</a>
                            </li> -->
                            <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="about.php">About Us</a>
                            </li>
                            <!-- <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="work.php">Work</a>
                            </li> -->
                            <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="contact.php">Contact</a>
                            </li>
                        </ul>
                </div>


                <div class="col-lg-3 col-md-4 my-sm-0 mt-4">
                    <h2 class="h4 pb-lg-3 text-light light-300">For Client</h2>
                    <ul class="list-unstyled text-light light-300">
                        <li class="pb-2">
                            <i class='bx-fw bx bx-phone bx-xs'></i><a class="text-decoration-none text-light py-1" href="tel:010-020-0340">08505610048</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bx-mail-send bx-xs'></i><a class="text-decoration-none text-light py-1" href="mailto:info@company.com">tpqnuruliman782@gmail.com</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="w-100 bg-primary py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-lg-6 col-sm-12">
                        <p class="text-lg-start text-center text-light light-300">
                            © Copyright 2021.
                        </p>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <p class="text-lg-end text-center text-light light-300">
                            Designed by <a rel="sponsored" class="text-decoration-none text-light" href="https://templatemo.com/" target="_blank"><strong>TemplateMo</strong></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->


    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- Load jQuery require for Page Script -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Page Script -->
    <script>
        $(window).load(function() {
            // Slide
            $('.templatemo-slide-link').click(function() {
                var this_href = $(this).attr('href');
                $('#templatemo-slide-link-target img').attr('src', this_href);
                return false;
            });
            // End Slide
        });
    </script>
    <!-- Templatemo -->
    <script src="assets/js/templatemo.js"></script>
    <!-- Custom -->
    <script src="assets/js/custom.js"></script>

</body>

</html>