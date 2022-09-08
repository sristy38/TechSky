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

<!doctype html>
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

    <title>TechSky</title>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">


    <!-- TOP NAV -->
    <div class="top-nav" id="home">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-auto">
                    <p> <i class="bx bxs-envelope"></i> <?php echo $contacts[0]; ?></p>
                    <p> <i class="bx bxs-phone-call"></i><?php echo $contacts[1]; ?></p>
                </div>
                <div class="col-auto social-icons">
                    <a href="https://www.facebook.com/EnosisSolutions"><i class="bx bxl-facebook"></i></a>
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
                </ul>
                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-brand ms-lg-3">Contact</a>
                <a href="indexlogreg2.php">
                    <button class="btn btn-brand ms-lg-3">Login</button>
                </a>

            </div>
        </div>
    </nav>

    <!-- SLIDER -->
    <div class="owl-carousel owl-theme hero-slider">
        <div class="slide slide1">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center text-white">
                        <h6 class="text-white text-uppercase">HI</h6>
                        <h1 class="display-3 my-4">WE CRAFT <br /> DIGITAL EXPERIENCES</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide slide2">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center text-white">
                        <h6 class="text-white text-uppercase"><?php echo $sliderText[0]; ?></h6>
                        <h1 class="display-3 my-4">We craft digital<br />experiances</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- TOP SKILLS -->
    <section id="about">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 py-5">
                    <div class="row">




                        <?php
            $con = new mysqli("localhost","root","","techsky");

            $sql="select * from skills order by skills_id desc";

            $res=mysqli_query($con,$sql);
                            $cn = 7;
                            while($row=mysqli_fetch_assoc($res)){
                            ?>
                            <div class="col-12 mt-4">
                            <div class="info-box">
                                <img src="img/<?php echo $row['skills_img']; ?>" alt="">
                                <div class="ms-4">
                                    <h5 class="mt-5"><?php echo $row['skills_head']; ?></h5>
                                    <p><?php echo $row['skills_par']; ?></p>
                                </div>
                            </div>
                        </div>
                            <?php } ?>



                    </div>
                </div>
                <div class="col-lg-5">
                    <img src="img/top.jpg" class="rounded-circle borderImg"  alt="Rounded Image" width="150" height="500" >
                </div>
            </div>
        </div>
    </section>

    <!-- MILESTONE -->
    <section id="milestone">
        <div class="container">
            <div class="row text-center justify-content-center gy-4">
                <div class="col-lg-2 col-sm-6">
                    <h1 class="display-4"><?php echo $milestoneText[0]; ?></h1>
                    <p class="mb-0">Happy Clients</p>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <h1 class="display-4"><?php echo $milestoneText[1]; ?></h1>
                    <p class="mb-0">Lines of code</p>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <h1 class="display-4"><?php echo $milestoneText[2]; ?></h1>
                    <p class="mb-0">Total Downloads</p>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <h1 class="display-4"><?php echo $milestoneText[3]; ?></h1>
                    <p class="mb-0">YouTube Subscribers</p>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="intro">
                        <h6>Our Services</h6>
                        <h1>What We Do?</h1>
                        <p class="mx-auto">For the last 10 years, we have been delivering exceptional application development outsourcing services across varied industries.Our business domain knowledge, proven methodologies, and skilled software developers. </p>                    </div>
                </div>
            </div>
            <div class="row g-4">
            <?php
            $con = new mysqli("localhost","root","","techsky");

            $sql="select * from services order by services_id desc";

            $res=mysqli_query($con,$sql);
                            $cn = 7;
                            while($row=mysqli_fetch_assoc($res)){
                            ?>
                            <div class="col-lg-4 col-md-6">
                                <div class="service">
                                    <img src="img/<?php echo $row['services_img']; ?>" alt="">
                                    <h5><?php echo $row['services_head']; ?></h5>
                                    <p><?php echo $row['services_par']; ?></p>
                                </div>
                            </div>
                            <?php } ?>
                
            </div>
        </div>
    </section>

    

    <section id="team">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="intro">
                        <h6>Team</h6>
                        <h1>Team Members</h1>
                        <p class="mx-auto">
                           Leading members of this company</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                

            <?php
            $con = new mysqli("localhost","root","","techsky");

            $sql="select * from we order by we_id desc";

            $res=mysqli_query($con,$sql);
            while($row=mysqli_fetch_assoc($res)){
            ?>
            <div class="col-lg-4 col-md-8">
                    <div class="team-member">
                        <div class="image">
                            <img src="img/<?php echo $row['we_img']; ?>" alt="">
                            <div class="social-icons">
                                <a href="#"><i class='bx bxl-facebook'></i></a>
                                <a href="#"><i class='bx bxl-twitter'></i></a>
                                <a href="#"><i class='bx bxl-instagram'></i></a>
                                <a href="#"><i class='bx bxl-pinterest'></i></a>
                            </div>
                            <div class="overlay"></div>
                        </div>

                        <h5><?php echo $row['we_name']; ?></h5>
                        <p><?php echo $row['we_skill']; ?></p>
                    </div>
                </div>
                            <?php } ?>
                
                
            </div>
        </div>
    </section>

    <section class="bg-light" id="reviews">

        <div class="owl-theme owl-carousel reviews-slider container">
            <div class="review">
                <div class="person">
                    <img src="img/team_1.jpg" alt="">
                    <h5>Ralph Edwards</h5>
                    <small>Market Development Manager</small>
                </div>
                <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut quis, rem culpa labore voluptate
                    ullam! In, nostrum. Dicta, vero nihil. Delectus minus vitae rerum voluptatum, excepturi incidunt ut,
                    enim nam exercitationem optio ducimus!</h3>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class="bx bxs-star-half"></i>
                </div>
                <i class='bx bxs-quote-alt-left'></i>
            </div>
            <div class="review">
                <div class="person">
                    <img src="img/team_2.jpg" alt="">
                    <h5>Ralph Edwards</h5>
                    <small>Market Development Manager</small>
                </div>
                <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut quis, rem culpa labore voluptate
                    ullam! In, nostrum. Dicta, vero nihil. Delectus minus vitae rerum voluptatum, excepturi incidunt ut,
                    enim nam exercitationem optio ducimus!</h3>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class="bx bxs-star-half"></i>
                </div>
                <i class='bx bxs-quote-alt-left'></i>
            </div>
            <div class="review">
                <div class="person">
                    <img src="img/team_3.jpg" alt="">
                    <h5>Ralph Edwards</h5>
                    <small>Market Development Manager</small>
                </div>
                <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut quis, rem culpa labore voluptate
                    ullam! In, nostrum. Dicta, vero nihil. Delectus minus vitae rerum voluptatum, excepturi incidunt ut,
                    enim nam exercitationem optio ducimus!</h3>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class="bx bxs-star-half"></i>
                </div>
                <i class='bx bxs-quote-alt-left'></i>
            </div>
        </div>
    </section>

    <section class="bg-light" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="intro">
                        <h6>Work</h6>
                        <h1>Successful projects</h1>
                        <p class="mx-auto">Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                            roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old</p>
                    </div>
                </div>
            </div>
        </div>


        <div id="projects-slider" class="owl-theme owl-carousel">
                                
            <?php
            $con = new mysqli("localhost","root","","techsky");

            $sql="select * from success order by success_id desc";

            $res=mysqli_query($con,$sql);
            while($row=mysqli_fetch_assoc($res)){
            ?>
            <div class="project">
                <div class="overlay"></div>
                <img src="img/<?php echo $row['success_img']; ?>" alt="">
                <div class="content">
                    <h2><?php echo $row['success_head']; ?></h2>
                    <h6><?php echo $row['success_par']; ?></h6>
                </div>
            </div>
                            <?php } ?>

            

            
            
    </section>



    <footer>
        <div class="footer-top text-center">
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









    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/app.js"></script>
</body>

</html>