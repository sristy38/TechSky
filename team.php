<?php
session_start();
include('teamImages.php');

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

    <title>Team</title>



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
                        <a class="nav-link" href="aboutus.php">About</a>
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

                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Blog</a>
                    </li>
                </ul>
                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-brand ms-lg-3">Contact</a>
                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-brand ms-lg-3">login</a>
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
    <!-- HEADER ENDS -->



    <!------------------------team------------------------>

    <div class="team-page">
        <div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center">
            <div class="content text-center">
                <h1 class="text-white">
                    <h1 class="teambgtext">YOUR POWER <br>TO MAKE <br><b>GREAT SOFTWARE</b></h1>
            </div>
        </div>


        <div class="team_t1">
            <h5>PROFESSIONALS WITH ABSTRACTION LAYERS</h5>
            <p> We have a great working environment with a rich culture of fun and professionalism that attracts the
                best talents. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus, quisquam facilis
                consectetur cumque nobis totam porro a distinctio aspernatur? Ratione numquam tempore optio rerum
                accusamu</p>
        </div>

        <div class="team_t1">
            <h5>PROFESSIONALS WITH ABSTRACTION LAYERS</h5>
            <p> We have a great working environment with a rich culture of fun and professionalism that attracts the
                best talents. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus, quisquam facilis
                consectetur cumque nobis totam porro a distinctio aspernatur? Ratione numquam tempore optio rerum
                accusamu</p>
        </div>



        <div class="team_t1">
            <h5>Abstraction layers</h5>
            <p> We have a great working environment with a rich culture of fun and professionalism that attracts the
                best talents. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus, quisquam facilis
                consectetur cumque nobis totam porro a distinctio aspernatur? Ratione numquam tempore optio rerum
                accusamu</p>
        </div>



        <div class="grid-col-2">

            <div class="team_t1">
                <h5>Culture of fun and creativity</h5>
                <p> We have a great working environment with a rich culture of fun and professionalism that attracts the
                    best talents. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus, quisquam
                    facilis consectetur cumque nobis totam porro a distinctio aspernatur? Ratione numquam tempore optio
                    rerum accusamu</p>
            </div>

            <div class="team_t1">
                <h5>Abstraction layers</h5>
                <p> We have a great working environment with a rich culture of fun and professionalism that attracts the
                    best talents. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus, quisquam
                    facilis consectetur cumque nobis totam porro a distinctio aspernatur? Ratione numquam tempore optio
                    rerum accusamu</p>
            </div>

        </div>

        <div class="leadership-tittle">
            <h1>leadership</h1>
        </div>

        <div class="leaders-details">


            <div class="container mt-5">
                <div class="row d-flex justify-content-between aboutUs">
                    <div class="row-lg me-5 col-md mb-4">
                        <img src="img/<?php echo $teamImages[1]; ?>">
                        <h5>Sristy</h5>
                        <p>Sristy has more than 20 years of experience in software development. He is the founder and
                            leader of several software companies in diverse industries such as regulatory compliance,
                            eCommerce, legal services and computer games. </p>
                    </div>
                    <div class="row-lg me-5 col-md mb-4">
                        <img src="img/<?php echo $teamImages[2]; ?>">
                        <h5>Sarwar</h5>
                        <p>Sarwar is a technology leader and has more than 15 years of experience in software
                            development space.

                            His strength in technical project is over a wide range of projects in device drivers,
                            enterprise web applications and mobile apps using technologies such as C#, Asp.NET, Aspnet
                            Core, .NET Core, Xamarin, Angular, Aurelia, Angular JS, Knockout JS, Node JS, Azure and AWS.
                        </p>
                    </div>
                    <div class="col-md mb-4">
                        <img src="img/<?php echo $teamImages[3]; ?>">
                        <h5>Hia</h5>
                        <p>Hia is an international tax consultant and entrepreneur. He works with major multinationals
                            on tax policy and business strategy issues; he also advises governments on tax policy and
                            administration through his consulting firm, The M Group, Inc. </p>
                    </div>
                </div>
            </div>


        </div>

        <div class="text-parts">
            <div class="team_t1">
                <h5 align="center">Culture of fun and passion</h5>
                <p> There is no doubt that there is something wrong with us - but in a good way (we think)!

                    We are always obsessed with something. The object of obsession changes over time, sometimes is just
                    a new programming trick that someone has found, or sometimes its a game that we are playing. People
                    outside of Kaz point these out as signs of our insanity. But we are proud of them.

                    Here is a random sampling. But if you really want to know what we are up to (or what we've done, but
                    management won't allow that to be published on the website) visit our FB page!
            </div>
            <div class="team_t1">
                <h5 align="center">Living to eat and drink, hackathons, sports, trips all over the world and other
                    stories</h5>
                <p> One thing we are particularly famous for are our parties. We are seriously into eating and drinking
                    - as all custom software companies should be we think.

                    "Kaz Catering Service" has earned a good reputation over the years arranging for great buffets and
                    cocktail parties. It is so good the people sometimes ask us for catering for their events! We
                    haven't expanded into that business yet thinking that the insanity might scare our potential
                    customers, but you never know :)
            </div>

        </div>


        <div class="container-team">
            <div><img src="img/<?php echo $teamImages[4]; ?>" /></div>
            <div class="verticalteam"><img src="img/<?php echo $teamImages[5];?>" /></div>
            <div class="horizontalteam"><img src="img/<?php echo $teamImages[6]; ?>" /></div>
            <div><img src="img/<?php echo $teamImages[7]; ?>" /></div>
            <div><img src="img/<?php echo $teamImages[8]; ?>" /></div>
            <div class="bigteam"><img src="img/<?php echo $teamImages[9]; ?>" /></div>
            <div><img src="img/<?php echo $teamImages[10]; ?>" /></div>
            <div class="verticalteam"><img src="img/<?php echo $teamImages[11]; ?>" /></div>
            <div class="horizontalteam"><img src="img/<?php echo $teamImages[12]; ?>" /></div>
            <div><img src="img/<?php echo $teamImages[13]; ?>" /></div>
            <div class="bigteam"><img src="img/<?php echo $teamImages[14]; ?>" /></div>
            <div class="verticalteam"><img src="img/<?php echo $teamImages[15]; ?>" /></div>
            <div class="verticalteam"><img src="img/<?php echo $teamImages[16]; ?>" /></div>
            <div class="horizontalteam"><img src="img/<?php echo $teamImages[17]; ?>" /></div>
            <div class="horizontalteam"><img src="img/<?php echo $teamImages[18]; ?>" /></div>
            <div><img src="img/<?php echo $teamImages[19]; ?>" /></div>
            <div class="bigteam"><img src="img/<?php echo $teamImages[20]; ?>" /></div>
            <div class="verticalteam"><img src="img/<?php echo $teamImages[21]; ?>" /></div>
            <div><img src="img/<?php echo $teamImages[22]; ?>" /></div>
            <div><img src="img/<?php echo $teamImages[23]; ?>" /></div>
        </div>


        <div class="text-parts">
            <div class="team_t1">
                <h5 align="center">Helping the community</h5>
                <p> We are strong believers that we as group of thinking humans have a very important responsibility for
                    people around us. Our country has its share of woes and problems. We feel that we can play a role in
                    our march towards a better and prosperous future.

                    We are involved with many efforts in helping the community around us. One our big long term project
                    is a partnership with an organization called Prothom Shurjo <b>(প্রথম সূর্য - Bangla for "first
                        sun") </b>that helps street children in the area near us by arranging education, food and
                    shelter for them. They also run various training programs for them to teach them skills that they
                    can use. Visit their Facebook site to see the great things they are doing: <a class="prothomshurjo" href=" https://www.facebook.com/ProthomSurjoBD"> https://www.facebook.com/ProthomSurjoBD</a>
            </div>
            </p>
            <p>Our blog also has s<a class="prothomshurjo" href="https://kaz.com.bd/blog?category=CSR ">tories about
                    what we are doing with them. </a> </p>
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