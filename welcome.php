<?php
////////////////////////////////////////////////////////////////////////////////
//
//  University of New Mexico - School Year 2014 - 2015
//  Senior Design Project - Solar Image Collaboration
//
//  CARINA - Collaborative Solar Imaging Annotation
//
//  Sponsor - Professor Pattichis
//
//  Team - Patrick Lopez PM, Conner Dolan, Edward Sadzewicz, 
//         Cody Shell, Jaclynn Wakley
//
////////////////////////////////////////////////////////////////////////////////
//
//  Module:  welcome.php
//
//  Purpose: View for user once logged in and shows TABS
//
////////////////////////////////////////////////////////////////////////////////
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Carina</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen">
<script type="text/javascript" src="js/jquery-1.6.min.js"></script>
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/cufon-replace.js" type="text/javascript"></script>
<script src="js/Open_Sans_400.font.js" type="text/javascript"></script>
<script src="js/Open_Sans_Light_300.font.js" type="text/javascript"></script>
<script src="js/Open_Sans_Semibold_600.font.js" type="text/javascript"></script>
<script type="text/javascript" src="js/tms-0.3.js"></script>
<script type="text/javascript" src="js/tms_presets.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script src="js/FF-cash.js" type="text/javascript"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
<![endif]-->
</head>
<body id="page1">
<!-- header -->
<div class="bg">
  <div class="main">
    <header>
      <div class="row-1">
          <h1> <a class="logo" href="index.php">Carina</a> <strong class="slog">Collaborative Solar Imaging Annotation</strong> </h1>

            <fieldset>
                <div class="buttons"><a class="button-2"
                                        href="login.php?logout">Log Out</a> </div>
                </field>
      </div>
      <div class="row-2">
        <nav>
          <ul class="menu">
              <li><a class="active" href="welcome.php">Home Page</a></li>
              <li><a href="gallery.php">Gallery</a></li>
              <li><a href="services.php">Services</a></li>
            <li><a href="help.html">Help</a></li>
            <li class="last-item"><a href="contacts.html">Contact Us</a></li>
          </ul>
        </nav>
      </div>
      <div class="row-3">
          <div class="slider-wrapper">
              <div class="slider">
                  <ul class="items">
                      <li><img src="images/slider-img1.jpg" alt=""> <strong class="banner"> <strong class="b1">constellation</strong> <strong class="b2">Carina</strong> <strong class="b3">Carina Constellation in the southern sky, meaning “the keel of a ship”. Carina contains the second brightest star in the night sky.</strong> </strong> </li>
                      <li><img src="images/slider-img2.jpg" alt=""> <strong class="banner"> <strong class="b1">our aim is</strong> <strong class="b2">Dedicated</strong> <strong class="b3">To create an open-source web application that will collect valuable data on coronal holes.</strong> </strong> </li>
                      <li><img src="images/slider-img3.jpg" alt=""> <strong class="banner"> <strong class="b1">Everyone's a </strong> <strong class="b2">Lobo</strong> <strong class="b3">The University of New Mexico's Electrical and Computer Engineers would like to introduce Carina!</strong> </strong> </li>
                  </ul>
                  <a class="prev" href="#">prev</a> <a class="next" href="#">prev</a> </div>
          </div>
      </div>
    </header>
    <!-- content -->
    <section id="content">
        <div class="padding">
            <div class="wrapper">
                <div class="col-3">
                    <div class="indent">
             <h2>CARINA Mission Statement</h2>
              <p class="color-4 p1">The objective of this project is to provide
                  a collaborative internet application (web app) in which users
                  will be able to annotate solar observational images. Users will
                  use a mouse to click along the perimeter of coronal holes in
                  the images.  The annotated data will be joined with its respective
                  image and made available for further analysis by the image provider.</p>

              <div class="wrapper">
                            <figure class="img-indent3"><img src="images/page1-img1.png" alt="" /></figure>
                            <div class="extra-wrap">
                                <div class="indent2"> The astronomical field is in need of this type of collaborative 
                                                technology. With the help of this solar annotation application, 
                                                scientists will have the capacity to exchange ideas and better 
                                                understand the dynamics of the sun that lead to these coronal mass ejections.</div>
                            </div>
                        </div>
                    </div>
                </div>
                </section>
    <!-- footer -->
    <footer>
        <div class="row-top">
        <div class="row-padding">
          <div class="wrapper">

        <div class="aligncenter">
          <p class="p0">Copyright &copy; <a href="#">Domain Name</a> All Rights Reserved</p>
          Design by <a target="_blank" href="http://www.templatemonster.com/">TemplateMonster.com</a><br>
          <!-- {%FOOTER_LINK} -->
        </div>
      </div>
    </footer>
-->
  </div>
</div>
<script type="text/javascript">Cufon.now();</script>
<script type="text/javascript">
$(function () {
    $('.slider')._TMS({
        prevBu: '.prev',
        nextBu: '.next',
        playBu: '.play',
        duration: 800,
        easing: 'easeOutQuad',
        preset: 'simpleFade',
        pagination: false,
        slideshow: 3000,
        numStatus: false,
        pauseOnHover: true,
        banners: true,
        waitBannerAnimation: false,
        bannerShow: function (banner) {
            banner.hide().fadeIn(500)
        },
        bannerHide: function (banner) {
            banner.show().fadeOut(500)
        }
    });
})
</script>
</html>



