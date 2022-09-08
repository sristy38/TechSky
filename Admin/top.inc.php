<?php
ob_start();
require('conncetion.in.php');
require('function.inc.php');

?>
<!doctype html>
<html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Dashboard Page</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="assets/css/normalize.css">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/font-awesome.min.css">
      <link rel="stylesheet" href="assets/css/themify-icons.css">
      <link rel="stylesheet" href="assets/css/pe-icon-7-filled.css">
      <link rel="stylesheet" href="assets/css/flag-icon.min.css">
      <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
   </head>
   <body>
      <aside id="left-panel" class="left-panel" style="background-color: rgb(140, 140, 140);">
         <nav class="navbar navbar-expand-sm navbar-default" style="background-color: rgb(140, 140, 140);">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
               <ul class="nav navbar-nav">
                  <li class="menu-title" style="color:orange">Choose a option below</li>

                  <li class="menu-item-has-children dropdown dropdown-btn">
                     <a href="info.php" style="color:orange"> Informations of website</a>
                  </li>

                  <li class="menu-item-has-children dropdown dropdown-btn">
                     <a href="admin.php" style="color:orange">Admins</a>
                  </li>

                  <li class="menu-item-has-children dropdown dropdown-btn">
                     <a href="userss.php" style="color:orange">Users</a>
                  </li>

               <li class="menu-item-has-children dropdown dropdown-btn">
                     <a href="our_info.php" style="color:orange" > Office Contact</a>
                  </li>
                  <li class="menu-item-has-children dropdown dropdown-btn">
                     <a href="stat.php"style="color:orange" > Milestones</a>
                  </li>
                  <li class="menu-item-has-children dropdown dropdown-btn">
                     <a href="topskills.php"style="color:orange" > Top Skills</a>
                  </li>
                  <li class="menu-item-has-children dropdown dropdown-btn">
                     <a href="services.php"style="color:orange" > Services</a>
                  </li>

                  <li class="menu-item-has-children dropdown dropdown-btn">
                     <a href="servicepage.php"style="color:orange" > Service Page</a>
                  </li>

                  <li class="menu-item-has-children dropdown dropdown-btn">
                     <a href="successfullprojects.php"style="color:orange" > Successfull Projects</a>
                  </li>
                  <li class="menu-item-has-children dropdown dropdown-btn">
                     <a href="team.php" style="color:orange"> Team</a>
                  </li>
                  <li class="menu-item-has-children dropdown dropdown-btn">
                     <a href="portfolio.php" style="color:orange"> Portfolio</a>
                  </li>
                  <li class="menu-item-has-children dropdown dropdown-btn">
                     <a href="contactreq.php" style="color:orange"> Contact Requests</a>
                  </li>
                  <li class="menu-item-has-children dropdown dropdown-btn">
                     <a href="#" style="color:orange"> User Queries</a>
                  </li>
                  <li class="menu-item-has-children dropdown dropdown-btn">
                     <a href="#" style="color:orange"> User Reviews</a>
                  </li>
                  <li class="menu-item-has-children dropdown dropdown-btn">
                     <a href="#" style="color:orange"> Active Works</a>
                  </li>
                  
               </ul>
            </div>
         </nav>
      </aside>
      <div id="right-panel" class="right-panel" >
         <header id="header" class="header"  >
            <div class="top-left">
               <div class="navbar-header"  style=" color: orange; ">
                  <a id="menuToggle" class="menutoggle"><i class="fa fa-bars" style="color: orange; "></i></a>
               </div>
            </div>
            <div class="top-right" >
               <div class="header-menu">
                  <div class="user-area dropdown float-right">
                     <a href="logout.php" class="dropdown-toggle active" style="color: red;" >Log Out</a>
                  </div>
               </div>
            </div>
         </header>