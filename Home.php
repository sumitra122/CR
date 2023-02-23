<?php
session_start();

if (!isset($_SESSION['logged_in'])) {
    header('Location: signin.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTf-8">
    <meta name="veiwport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <title>
        Recruitement
    </title>

    <link rel="stylesheet" href="home.css">
    <link rel="shortcut icon" href="images/logo.png" type="image/png">

</head>

<body>
    <div class="container-fluid main_menu">
        <div class="row">
            <div class="col-md-10 col-12 mx-auto">
                <nav class="navbar navbar-expand-lg ">
                    <a class="navbar-brand" href="#" style="font-size: 30px;"><i class="fa-duotone fa-badge-sheriff"></i> Campus Recuitement <i class="fa-duotone fa-badge-sheriff"></i></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/weather">Apply now</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="logout.php">Logout</a>
                            </li>




                        </ul>

                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="container-fluid main_header">
        <div class="row">
            <div class="col-md-10 col-12 mx-auto">
                <div class="row">
                    <div class="col-md-6 col-12 main_header_left">
                        <p>Career With Us</p>
                        <h1>Get Your <span class="text-clr">Dream Job</span> Now</h1>
                        <a href="login.php"><button>Apply Now</button></a>

                    </div>
                    <div class="col-md-6 col-12 main_header_right">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class=" w-100" src="https://cdn.dribbble.com/users/2058540/screenshots/8225181/media/b58d8e704437b76d915877b2cc4d1bc7.gif" alt="First slide" width="550" height="490">
                                </div>
                                <div class="carousel-item">
                                    <img class=" w-100" src="https://cdn.dribbble.com/users/759099/screenshots/4322310/media/386aafad8ea2c850c4e3c5b0ccb6cf6a.gif" height="490" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class=" w-100" src="https://cdn.dribbble.com/users/1545256/screenshots/9338399/media/51511aa4ff960933c1a7404f066bde3f.gif" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <div class="card-deck">
        <div class="card">
            <img class="card-img-top" src="https://r7q6w9z6.rocketcdn.me/career/wp-content/uploads/2021/01/0fb047326b3c85e9d1e57b159d21935c531c-600x450.gif" alt="Card image cap">
            <div class="card-body">
                <h2 class="card-title">Target the Right Campus</h2>
                <p class="card-text" style="font-size: 15px;">Our team members travel across India in search of team members who can bring fresh thinking and unique 
                    perspectives to enhancing the guest experience and delivering on our purpose. We partner with a variety of colleges to identify 
                    talented young individuals with the potential to become team members and work closely with placement officers to take them through 
                    the Target journey. Offers are typically made on-the-spot after a round of rigorous aptitude/skill testing and interviewing – 
                    the whole process takes anywhere between one to two days from start to finish.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="https://cdn.dribbble.com/users/1026227/screenshots/5798882/media/83d13a5acec69c3f7dbf7d3a79c9c8fb.gif" alt="Card image cap">
            <div class="card-body">
                <h2 class="card-title">Broaden Your Reach</h2>
                <p class="card-text" style="font-size: 15px;">Our team members travel across India in search of team members who can bring fresh thinking and unique 
                    perspectives to enhancing the guest experience and delivering on our purpose. We partner with a variety of colleges to identify 
                    talented young individuals with the potential to become team members and work closely with placement officers to take them through 
                    the Target journey. Offers are typically made on-the-spot after a round of rigorous aptitude/skill testing and interviewing – 
                    the whole process takes anywhere between one to two days from start to finish.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="https://cdn.dribbble.com/users/43762/screenshots/7500309/media/de8662b6399c5d07c9f154030bf27ccc.gif" alt="Card image cap">
            <div class="card-body">
                <h2 class="card-title">Seamless Process</h2>
                <p class="card-text" style="font-size: 15px;">Our team members travel across India in search of team members who can bring fresh thinking and unique 
                    perspectives to enhancing the guest experience and delivering on our purpose. We partner with a variety of colleges to identify 
                    talented young individuals with the potential to become team members and work closely with placement officers to take them through 
                    the Target journey. Offers are typically made on-the-spot after a round of rigorous aptitude/skill testing and interviewing – 
                    the whole process takes anywhere between one to two days from start to finish.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>
    <br><br>
    <!-- Footer -->
    <footer class="text-center text-lg-start bg-blue text-muted">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="" class="me-4 link-grayish">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 link-grayish">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="me-4 link-grayish">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="me-4 link-grayish">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="me-4 link-grayish">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="me-4 link-grayish">
                    <i class="fab fa-github"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h2 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3 text-grayish"></i>Company name
                        </h2>
                        <p>
                            Here you can use rows and columns to organize your footer content. Lorem ipsum
                            dolor sit amet, consectetur adipisicing elit.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h2 class="text-uppercase fw-bold mb-4">
                            Products
                        </h2>
                        <p>
                            <a href="#!" class="text-reset">Angular</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">React</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Vue</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Laravel</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h2 class="text-uppercase fw-bold mb-4">
                            Useful links
                        </h2>
                        <p>
                            <a href="#!" class="text-reset">Pricing</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Settings</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Orders</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Help</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h2 class="text-uppercase fw-bold mb-4">Contact</h2>
                        <p><i class="fas fa-home me-3 text-grayish"></i> New York, NY 10012, US</p>
                        <p>
                            <i class="fas fa-envelope me-3 text-grayish"></i>
                            info@example.com
                        </p>
                        <p><i class="fas fa-phone me-3 text-grayish"></i> + 01 234 567 88</p>
                        <p><i class="fas fa-print me-3 text-grayish"></i> + 01 234 567 89</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
            © 2021 Copyright:
            <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Recuitement.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->

</body>

</html>