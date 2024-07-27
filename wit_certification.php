<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Winners IT Solutions</title>
    <link rel="icon" href="img\wit-logo.png" type="image/x-icon">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">


</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark py-2 d-none d-md-flex">
        <div class="container">
            <div class="d-flex justify-content-between topbar">
                <div class="top-info">

                    <small class="me-3 text-white-50"><a href="#"><i class="fas fa-envelope me-2 text-secondary"></i></a>info@winnersitsolutions.com</small>
                </div>
                <div id="note" class="text-secondary d-none d-xl-flex">

                    <!-- Display Current Marquee -->
                    <marquee direction="left" behavior="scroll" scrollamount="3" scrolldelay="100">
                        <?php
                        $hostname = 'localhost';
                        $username = 'root';
                        $password = '';
                        $database = 'etms_db'; // Use the name of your database

                        $conn = new mysqli($hostname, $username, $password, $database);

                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        $sql = "SELECT text FROM marquee_text";
                        $result = $conn->query($sql);

                        $marqueeText = "";

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                $marqueeText .= $row["text"] . "<br>";
                            }
                        }

                        $conn->close();

                        echo $marqueeText;
                        ?>
                    </marquee>
                </div>
                <div class="top-link">
                    <a href="" class="bg-light nav-fill btn btn-sm-square rounded-circle"><i class="fab fa-facebook-f text-primary"></i></a>
                    <a href="" class="bg-light nav-fill btn btn-sm-square rounded-circle"><i class="fab fa-twitter text-primary"></i></a>
                    <a href="" class="bg-light nav-fill btn btn-sm-square rounded-circle"><i class="fab fa-instagram text-primary"></i></a>
                    <a href="" class="bg-light nav-fill btn btn-sm-square rounded-circle "><i class="fab fa-linkedin-in text-primary"></i></a>
                    <a href="/etms/index.php" class="bg-light nav-fill btn btn-sm-square rounded-circle admin-login-button me-0">
                        <i class="fas fa-user text-primary"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>



    <!-- Topbar End -->
    <!-- Navbar Start -->
    <div class="container-fluid bg-primary">
        <div class="container">
            <nav class="navbar navbar-dark navbar-expand-lg py-0">
                <a href="index.php" class="navbar-brand">
                    <p>
                        <h3 class="text-white fw-bold d-block"> <img src="img\wit-logo.png" style="margin-right: 10px;" alt="Your Logo" width="70" height="70">Winners<span class="text-secondary">IT</span> </h3>
                    </p>
                </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse bg-transparent" id="navbarCollapse">
                    <div class="navbar-nav ms-auto mx-xl-auto p-0">
                        <a href="index.php" class="nav-item nav-link active text-secondary">Home</a>
                        <a href="product.php" class="nav-item nav-link">Product</a>
                        <a href="online_training.php" class="nav-item nav-link">Online Training</a>
                        <a href="industrial_training.php" class="nav-item nav-link">Industrial Training</a>
                        <a href="wit_certification.php" class="nav-item nav-link">W-IT Certification</a>
                        <a href="https://store.shoopy.in/winnersitsolutions" class="nav-item nav-link">Order Books</a>
                        <a href="educational_projects.php" class="nav-item nav-link">Educational Projects</a>
                        <a href="contact.php" class="nav-item nav-link">Contact Us</a>
                    </div>
                </div>


            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Winners IT Certifications</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item" aria-current="page">Winners IT Certifications</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->



    <!-- WIT Certification Start -->
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6 wow fadeIn" data-wow-delay=".3s">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <h1 class="mb-3 text-primary">Winners IT Certifications</h1>
                        <h2 class="mb-4 text-primary">Winners IT Certified Professional Software Developer</h2>
                        <img src="../website/img/certifywit.jpg" width="500px" height="300px" style="border: 5px solid #007bff; border-radius: 10px;">
                        <p><strong>Certification Fees</strong>: 2400/-</p>
                        <p><strong>Technologies</strong>: Python, MS-SQL Server, Power-BI</p>
                        <p><strong>Examination</strong>:</p>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check-circle text-success"></i> Online Written Exam - 100 Marks</li>
                            <li><i class="fas fa-check-circle text-success"></i> Oral Exam - 100 Marks</li>
                            <li><i class="fas fa-check-circle text-success"></i> Total - 200 Marks</li>
                        </ul>
                        <p>Books will be provided through courier to your address.</p>
                        <p>After passing the examination, you will get the following benefits:</p>
                        <ol>
                            <li>Free Career Guidance Workshop</li>
                            <li>Free Mock Interview</li>
                            <li>Industrial Training handbook is provided to the candidate</li>
                        </ol>
                    </div>
                </div>

            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay=".5s">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <h2 class="mb-4 text-primary">Order Books</h2>
                        <p>1) IT Career Jet:</p>
                        <p>Price: 585/- Only</p>
                        <p>Please buy this book from below "Buy Now" button and enjoy the following benefits:</p>
                        <button class="btn btn-primary" onclick="window.location.href='https://store.shoopy.in/winnersitsolutions'">Buy Now</button>

                        <ol class="list-unstyled mt-3">
                            <li><i class="fas fa-tags text-primary"></i> Flat Rs.45/- discount on 'Pay on Delivery'.</li>
                            <li><i class="fas fa-check-circle text-success"></i> Free Career Guidance Workshop</li>
                            <li><i class="fas fa-check-circle text-success"></i> Free Mock Interview</li>
                            <li><i class="fas fa-check-circle text-success"></i> Industrial Training handbook is also included in the same book.</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- WIT Certification End -->





    <!-- Footer Start -->
    <div class="container-fluid footer bg-dark wow fadeIn" data-wow-delay=".3s">
        <div class="container pt-5 pb-4">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <a href="index.html">
                        <p>
                            <h3 class="text-white fw-bold d-block"> <img src="img\wit-logo.png" style="margin-right: 10px;" alt="Your Logo" width="70" height="70">Winners<span class="text-secondary">IT</span> </h3>
                        </p>
                    </a>
                    <p class="mt-4 text-light">Get a Responsive Website that presents optimal viewing experience across a range of digital media platforms, and who can do it better than us for you?
                        Portal Websites, the doorway to all cyber world explorations, are mushrooming!
                        And you find all that the good ones have in common in our web designs.</p>
                    <div class="d-flex hightech-link">
                        <a href="" class="btn-light nav-fill btn btn-square rounded-circle me-2"><i class="fab fa-facebook-f text-primary"></i></a>
                        <a href="" class="btn-light nav-fill btn btn-square rounded-circle me-2"><i class="fab fa-twitter text-primary"></i></a>
                        <a href="" class="btn-light nav-fill btn btn-square rounded-circle me-2"><i class="fab fa-instagram text-primary"></i></a>
                        <a href="" class="btn-light nav-fill btn btn-square rounded-circle me-0"><i class="fab fa-linkedin-in text-primary"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="#" class="h3 text-secondary">Short Link</a>
                    <div class="mt-4 d-flex flex-column short-link">
                        <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>About us</a>
                        <a href="contact.PHP" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Contact us</a>
                        <a href="product.php" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Our Products</a>
                        <a href="online_training.php" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Trainings</a>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="#" class="h3 text-secondary">Help Link</a>
                    <div class="mt-4 d-flex flex-column help-link">
                        <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Terms Of use</a>
                        <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Privacy Policy</a>
                        <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Helps</a>
                        <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>FQAs</a>
                        <a href="" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Contact</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="#" class="h3 text-secondary">Contact Us</a>
                    <div class="text-white mt-4 d-flex flex-column contact-link">
                        <a href="#" class="pb-3 text-light border-bottom border-primary"><i class="fas fa-map-marker-alt text-secondary me-2"></i> A/P Kesnand,Taleranwadi Tal-Haveli,dist-Pune</a>
                        <a href="#" class="py-3 text-light border-bottom border-primary"><i class="fas fa-phone-alt text-secondary me-2"></i> 8411850101</a>
                        <a href="#" class="py-3 text-light border-bottom border-primary"><i class="fas fa-envelope text-secondary me-2"></i> info@winnersitsolutions.com</a>
                    </div>
                </div>
            </div>
            <hr class="text-light mt-5 mb-4">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <span class="text-light"><a href="#" class="text-secondary"><i class="fas fa-copyright text-secondary me-2"></i>Winners IT Solutions </a>All Rights Reserved. © 2023</span>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    <span class="text-light">Designed By<a href="" class="text-secondary"> WIT Web development Team</a> </span>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->




    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary btn-square rounded-circle back-to-top"><i class="fa fa-arrow-up text-white"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>



    <!-- WhatsApp Icon -->
    <a href="https://api.whatsapp.com/send?phone=+91%208411850101&text=Hello!%20We%20are%20interested%20to%20know%20more%20about%20all%20the%20services%20you%20provide..." style="position: fixed; top: 70%; left: 20px; transform: translateY(-50%); z-index: 999;">
        <img src="img\whatsapp.png" alt="WhatsApp Icon" style="width: 50px; height: auto; cursor: pointer;">
    </a>

    <!-- Contact Icon -->
    <a href="tel:+91 8411850101" style="position: fixed; top: 70%; right: 20px; transform: translateY(-50%); z-index: 999;">
        <img src="img\phone-call.png" alt="Contact Icon" style="width: 50px; height: auto; cursor: pointer;">
    </a>

</body>

</html>