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
    header('location:index.php');

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
    <link rel="stylesheet" href="css/style.css" type="text/css">


    

    <title>Services</title>
</head>

<body>
    <!-- TOP NAV -->
    <div class="top-nav" id="home">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-auto">
                    <p> <i class="bx bxs-envelope"></i> <?php echo $contacts[0]; ?></p>
                    <p> <i class="bx bxs-phone-call"></i> <?php echo $contacts[1]; ?></p>
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
                        <a class="nav-link" href="aboutus.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.php">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="portfolio.php">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="team.php">Team</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#blog">Blog</a>
                    </li>
                </ul>
                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-brand ms-lg-3">Contact</a>
                <a href="indexlogreg2.php">
                    <button class="btn btn-brand ms-lg-3">Login</button>
                </a>
            </div>
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
                                <form class="p-lg-5 col-12 row g-3">
                                    <div>
                                        <h1>Get in touch</h1>
                                        <p>Fell free to contact us and we will get back to you as soon as possible</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="userName" class="form-label">First name</label>
                                        <input type="text" class="form-control" placeholder="Jon" id="userName" aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="userName" class="form-label">Last name</label>
                                        <input type="text" class="form-control" placeholder="Doe" id="userName" aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-12">
                                        <label for="userName" class="form-label">Email address</label>
                                        <input type="email" class="form-control" placeholder="Johndoe@example.com" id="userName" aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-12">
                                        <label for="exampleInputEmail1" class="form-label">Enter Message</label>
                                        <textarea name="" placeholder="This is looking great and nice." class="form-control" id="" rows="4"></textarea>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-brand">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="service-image w-250 vh-100 d-flex justify-content-center align-items-center">
        <div class="content text-center">
            <h1 class="text-white">
                <h3 class="teambgtext">Services<br><b>services we offer.</b></h3>
        </div>
    </div>


        <?php
            $con = new mysqli("localhost","root","","techsky");

            $sql="select * from servicepage order by sp_id desc";

            $res=mysqli_query($con,$sql);
                            while($row=mysqli_fetch_assoc($res)){
                            ?>
                                <div class="container mt-5">
            <div class="row d-flex justify-content-between">
                <div class="col-md-6 ">
                    <h1 class="service-1-head"><?php echo $row['sp_name']; ?></h1>
                    <p class="h5 text-muted pt-5"><?php echo $row['sp_p1']; ?></p><br>
                    <p><?php echo $row['sp_p2']; ?> </p>
                </div>
                <div class="col-md-6 service-1-img">
                    <img src="img/<?php echo $row['sp_img']; ?>" alt="">
                </div>
            </div>
        </div>
                            <?php } ?>



    <section id="services-milestone">
        <div class="container">
            <div class="row text-center justify-content-center gy-4">
                <div class="col-lg-2 col-sm-6">
                    <h1 class="display-4">90K+</h1>
                    <p class="mb-0">Happy Clients</p>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <h1 class="display-4">45M</h1>
                    <p class="mb-0">Lines of code</p>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <h1 class="display-4">190</h1>
                    <p class="mb-0">Total Downloads</p>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <h1 class="display-4">380K</h1>
                    <p class="mb-0">YouTube Subscribers</p>
                </div>
            </div>
        </div>


    </section>




    <section class="servicelist">

        <div class="grid-col-2">

            <div class="team_t1">

                <div class="row">

                    <div class="col-12">
                        <div class="info-box">
                            <i class='bx bxs-star'></i>
                            <div class="ms-4">
                                <h5>
                                    CORE BANKING SOLUTIONS</h5>

                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-4">
                        <div class="info-box">
                            <i class='bx bxs-star'></i>
                            <div class="ms-4">
                                <h5>
                                    FINTECH APPLICATIONS</h5>

                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-4">
                        <div class="info-box">
                            <i class='bx bxs-star'></i>
                            <div class="ms-4">
                                <h5>
                                    ENTERPRISE RESOURCE PLANNING</h5>

                            </div>
                        </div>
                    </div>




                </div>

            </div>



            <div class="grid-col-2">

                <div class="team_t1">

                    <div class="row">

                        <div class="col-12">
                            <div class="info-box">
                                <i class='bx bxs-star'></i>
                                <div class="ms-4">
                                    <h5>
                                        MOBILE APPLICATION DEVELOPMENT</h5>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-4">
                            <div class="info-box">
                                <i class='bx bxs-star'></i>
                                <div class="ms-4">
                                    <h5>RESOURCE OUTSOURCING</h5>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-4">
                            <div class="info-box">
                                <i class='bx bxs-star'></i>
                                <div class="ms-4">
                                    <h5>ARTIFICIAL INTELLIGENCE </h5>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>

    </section>

    <section class="pgrid">
        <div class="grid-col-2">

            <div class="team_t1">
                <h5 align="center">TIME & MATERIAL</h5>
                <p align="justify"> T&M model is to pay for the actual time and efforts spent on your project. The
                    approach works best for large projects, innovative projects (including IoT and Artificial
                    Intelligence software development) and projects with unclear or evolving requirements.
            </div>

            <div class="team_t1">
                <h5 align="center">PROJECT BASIS</h5>
                <p align="justify">This model is suitable for small, medium-sized and large scale projects with clean
                    and clear requirements that aren’t likely to change over time and milestones that can be achieved
                    within a definite time-frame. You negotiate the scope of work, sign the contract and we get it done.
            </div>
            <div class="team_t1">
                <h5 align="center">DEDICATED TEAM</h5>
                <p align="justify"> This approach is basically a variation of the T&M model. By going DDT, you are 100
                    percent free to manage your remote employees directly, monitor the development process, hold
                    meetings on a regular basis, prioritize tasks on the scope etc.
            </div>

            <div class="team_t1">
                <h5 align="center">HYBRID MODEL</h5>
                <p align="justify"> This model can include multiple models to meet your needs. It depends on several
                    factors, and the size of a software project is surely not one of them. The hybrid model gives you
                    the same capabilities optimized based on talent and cost with just a single point of contact.
            </div>

        </div>


    </section>


    <section>
        <h1 align="center">Our Clients</h1>
        <div id="projects-slider" class="owl-theme owl-carousel">
            <div class="project">
                <div class="overlay"></div>
                <img src="img/project1.jpg" alt="">

            </div>
            <div class="project">
                <div class="overlay"></div>
                <img src="img/project2.jpg" alt="">

            </div>
            <div class="project">
                <div class="overlay"></div>
                <img src="img/project3.jpg" alt="">

            </div>
            <div class="project">
                <div class="overlay"></div>
                <img src="img/project4.jpg" alt="">

            </div>
            <div class="project">
                <div class="overlay"></div>
                <img src="img/project5.jpg" alt="">

            </div>
        </div>
    </section>



























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