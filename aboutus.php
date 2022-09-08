
<?php
include('homeImages.php');
include('homeConHP.php');
require('Admin/function.inc.php');
require('Admin/conncetion.in.php');
?>


<?php
if(isset($_POST['submit'])){
	$contact_fname=get_safe_value($con,$_POST['contact_fname']);
    $contact_lname=get_safe_value($con,$_POST['contact_lname']);
    $contact_email=get_safe_value($con,$_POST['contact_email']);
    $contact_msg=get_safe_value($con,$_POST['contact_msg']);


	mysqli_query($con,"insert into contactreq(contact_fname,contact_lname,contact_email,contact_msg) values('$contact_fname','$contact_lname','$contact_email','$contact_msg')");
    header('location:aboutus.php');

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <title>About Us</title>
</head>

<body>

    <!-- TOP NAV -->
    <div class="top-nav" id="home">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-auto">
                    <p> <i class="bx bxs-envelope"></i> email@gmail.com</p>
                    <p> <i class="bx bxs-phone-call"></i> (219) 555-0114</p>
                </div>
                <div class="col-auto social-icons">
                    <a href="#"><i class="bx bxl-facebook"></i></a>
                    <a href="#"><i class="bx bxl-twitter"></i></a>
                    <a href="#"><i class="bx bxl-instagram"></i></a>
                    <a href="#"><i class="bx bxl-pinterest"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- BOTTOM NAV -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">TechSky<span class="dot">.</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.html">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="portfolio.php">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="team.php">Team</a>
                    </li>
                </ul>
                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-brand ms-lg-3">Contact</a>
                <a href="indexlogreg2.php">
                    <button class="btn btn-brand ms-lg-3">Login</button>
                </a>            </div>
        </div>
    </nav>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="container-fluid">
                        <div class="row gy-4">
                            <div class="col-lg-4 col-sm-12 bg-cover" style="background-image: url(img/c2.jpg); min-height:300px;">
                                <div>

                                </div>
                            </div>
                            <div class="col-lg-8">
                                <form class="p-lg-5 col-12 row g-3" method="POST">
                                    <div>
                                        <h1>Get in touch</h1>
                                        <p>Fell free to contact us and we will get back to you as soon as possible</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="userName" class="form-label">First name</label>
                                        <input type="text" class="form-control" name="contact_fname" placeholder="" id="userName" aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="userName" class="form-label">Last name</label>
                                        <input type="text" class="form-control" name="contact_lname" placeholder="" id="userName" aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-12">
                                        <label for="userName" class="form-label">Email address</label>
                                        <input type="email" name="contact_email" class="form-control" placeholder="" id="userName" aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-12">
                                        <label for="exampleInputEmail1" class="form-label">Enter Message</label>
                                        <textarea name="contact_msg" placeholder="" class="form-control" id="" rows="4"></textarea>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" name="submit" class="btn btn-brand">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row d-flex justify-content-between aboutUs">
            <div class="row-lg me-5 col-md mb-4">
                <i class='bx bx-history'></i>
                <h5>Who We Are</h5>
                <p>TexhSky Bangladesh Limited, founded in 1999, is the subsidiary of the local giant LEADS Corporation
                    Limited & LEADS Training & Consulting Ltd.</p>
            </div>
            <div class="row-lg me-5 col-md mb-4">
                <i class='bx bx-briefcase-alt'></i>
                <h5>WHAT WE DO</h5>
                <p>After successfully delivering many products & services, TexhSky is now aimed to outsource skilled
                    resources to fulfill any IT needs.</p>
            </div>
            <div class="col-md mb-4">
                <i class='bx bx-radio'></i>
                <h5>OUR HISTORY</h5>
                <p>Since it’s inception in 1999 TexhSky Bangladesh Limited is growing day by day, it has now a core
                    competent team of 300+ personnel</p>
            </div>
        </div>
    </div>

    <section id="about">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <img src="img/ourBuilding.jpg" class="rounded-circle" alt="Rounded Image" width="200" height="500">
                </div>
                <div class="col-lg-5 py-5">
                    <div class="row">

                        <div class="col-12">
                            <div class="info-box">
                                <div class="ms-4">
                                    <p>
                                        TechSky Bangladesh Limited is the leading IT/ITeS solution provider company in
                                        Bangladesh. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="info-box">
                                <div class="ms-4">
                                    <p>
                                        <b>TechSky</b> is involved in designing, developing, implementing and
                                        maintaining
                                        business application software for both domestic and overseas markets. TechSky
                                        provides <b>Core Banking Solution (BankUltimus)</b> for the Banking industry for
                                        both
                                        local and global markets. In addition to the banking industry TechSky also
                                        provides products, services and solutions for Non-Banking Financial Companies,
                                        Agent Banking, Capital Market, Life Insurance, Enterprise Resource Planning
                                        <b>(ERP)</b> etc.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="info-box">
                                <div class="ms-4">
                                    <p>Over the last couple of years, TechSky has also moved into disruptive
                                        technologies like Blockchain, Internet of Things (IoT), Artificial Intelligence
                                        (AI) etc. Today TechSky is considered as one of the renowned ICT Solution
                                        Providers of Bangladesh and has become an IT partner of choice for managing
                                        people, process and environment.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div class="container mt-5">
        <div class="row d-flex justify-content-between">

            <div class="col-md-7 aboutUsLowestPart">

                <h5><b>300+ Expert Professionals</b></h5>
                <p>We are home to a diverse set of certified personnel like Microsoft MVP, MCP, MCTS, CEH etc.</p>
                <ul>
                    <li>Project Managers</li>
                    <li>Software Architects</li>
                    <li>Project Managers</li>
                    <li>Software Architects</li>
                    <li>Project Managers</li>
                    <li>Software Architects</li>
                    <li>Project Managers</li>
                    <li>Software Architects</li>
                </ul>
            </div>
            <div class="col-md-5">
                <iframe width="420" height="315" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                </iframe>
            </div>
        </div>
    </div>




    <!-- FOOTER -->
    <footer>
        <div class="footer-top text-center footerDesign">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h4 class="navbar-brand">TechSky<span class="dot">.</span></h4>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                            classical Latin literature from</p>
                        <div class="col-auto social-icons">
                            <a href="#"><i class='bx bxl-facebook'></i></a>
                            <a href="#"><i class='bx bxl-twitter'></i></a>
                            <a href="#"><i class='bx bxl-instagram'></i></a>
                            <a href="#"><i class='bx bxl-pinterest'></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom text-center">
            <p class="mb-0">Copyright@2020. All rights Reserved</p>
        </div>
    </footer>


    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/app.js"></script>

</body>

</html>