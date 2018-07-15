﻿<?php
echo $response;
include "curl.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Jonathan Doe - Photographer / Director</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Header -->
<header id="header">
  <div class="intro">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-8">
            <div class="intro-text">
              <h1>Beekeeper</h1>
              <p>Test Application 1</p>
              <a href="#portfolio" class="btn btn-custom btn-lg page-scroll">Portfolio</a> <a href="#contact" class="btn btn-custom btn-lg page-scroll">About Me</a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- Portfolio Section -->
<div id="portfolio">
  <div class="container">
    <div class="section-title">
      <h2>Portfolio</h2>
    </div>
    <div class="categories">
      <ul class="cat">
        <li>
          <ol class="type">
            <li><a href="#" data-filter="*" class="active">All</a></li>
            <li><a href="#" data-filter=".lorem">Lorem Ipsum</a></li>
            <li><a href="#" data-filter=".dolor">Dolor Sit</a></li>
            <li><a href="#" data-filter=".adipiscing">Adipiscing Elit</a></li>
          </ol>
        </li>
      </ul>
    </div>
    <div class="row">
      <div class="portfolio-items">
        <div class="col-sm-6 col-md-4 lorem">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/01-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <div class="overlay-caption">
                  <div class="overlay-content">
                    <h4>Project Name</h4>
                  </div>
                </div>
              </div>
              <img src="img/portfolio/01-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 adipiscing">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/02-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <div class="overlay-caption">
                  <div class="overlay-content">
                    <h4>Project Name</h4>
                  </div>
                </div>
              </div>
              <img src="img/portfolio/02-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 lorem">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/03-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <div class="overlay-caption">
                  <div class="overlay-content">
                    <h4>Project Name</h4>
                  </div>
                </div>
              </div>
              <img src="img/portfolio/03-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 lorem">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/04-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <div class="overlay-caption">
                  <div class="overlay-content">
                    <h4>Project Name</h4>
                  </div>
                </div>
              </div>
              <img src="img/portfolio/04-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 adipiscing">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/05-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <div class="overlay-caption">
                  <div class="overlay-content">
                    <h4>Project Name</h4>
                  </div>
                </div>
              </div>
              <img src="img/portfolio/05-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 dolor">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/06-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <div class="overlay-caption">
                  <div class="overlay-content">
                    <h4>Project Name</h4>
                  </div>
                </div>
              </div>
              <img src="img/portfolio/06-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 dolor">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/07-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <div class="overlay-caption">
                  <div class="overlay-content">
                    <h4>Project Name</h4>
                  </div>
                </div>
              </div>
              <img src="img/portfolio/07-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 lorem">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/08-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <div class="overlay-caption">
                  <div class="overlay-content">
                    <h4>Project Name</h4>
                  </div>
                </div>
              </div>
              <img src="img/portfolio/08-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 adipiscing">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/09-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <div class="overlay-caption">
                  <div class="overlay-content">
                    <h4>Project Name</h4>
                  </div>
                </div>
              </div>
              <img src="img/portfolio/09-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 adipiscing">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/10-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <div class="overlay-caption">
                  <div class="overlay-content">
                    <h4>Project Name</h4>
                  </div>
                </div>
              </div>
              <img src="img/portfolio/10-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 adipiscing">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/11-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <div class="overlay-caption">
                  <div class="overlay-content">
                    <h4>Project Name</h4>
                  </div>
                </div>
              </div>
              <img src="img/portfolio/11-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 lorem">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/12-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <div class="overlay-caption">
                  <div class="overlay-content">
                    <h4>Project Name</h4>
                  </div>
                </div>
              </div>
              <img src="img/portfolio/12-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 adipiscing">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/13-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <div class="overlay-caption">
                  <div class="overlay-content">
                    <h4>Project Name</h4>
                  </div>
                </div>
              </div>
              <img src="img/portfolio/13-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 dolor">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/14-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <div class="overlay-caption">
                  <div class="overlay-content">
                    <h4>Project Name</h4>
                  </div>
                </div>
              </div>
              <img src="img/portfolio/14-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 dolor">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/15-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <div class="overlay-caption">
                  <div class="overlay-content">
                    <h4>Project Name</h4>
                  </div>
                </div>
              </div>
              <img src="img/portfolio/15-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 lorem">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/16-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <div class="overlay-caption">
                  <div class="overlay-content">
                    <h4>Project Name</h4>
                  </div>
                </div>
              </div>
              <img src="img/portfolio/16-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 adipiscing">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/17-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <div class="overlay-caption">
                  <div class="overlay-content">
                    <h4>Project Name</h4>
                  </div>
                </div>
              </div>
              <img src="img/portfolio/17-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 lorem">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/18-large.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <div class="overlay-caption">
                  <div class="overlay-content">
                    <h4>Project Name</h4>
                  </div>
                </div>
              </div>
              <img src="img/portfolio/18-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Contact Section -->
<div id="contact">
  <div class="container">
    <h2>About Me</h2>
    <div class="col-md-6">
      <div class="section-title">
        <div class="row"> <img src="img/about.jpg" class="img-responsive pull-left" alt="">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare diam commodo nibh.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare diam commodo nibh.</p>
          <div class="social">
            <ul>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-behance"></i></a></li>
              <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-5 col-md-offset-1">
      <div class="section-title">
        <p>For inquiries or collaborations please contact me by email at <strong>info@company.com</strong> or fill out the form below.</p>
      </div>
      <form name="sentMessage" id="contactForm" novalidate>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" id="name" class="form-control" placeholder="Name" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="email" id="email" class="form-control" placeholder="Email" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
        <div class="form-group">
          <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
          <p class="help-block text-danger"></p>
        </div>
        <div id="success"></div>
        <button type="submit" class="btn btn-default btn-lg">Send Message</button>
      </form>
    </div>
  </div>
</div>
<div id="footer">
  <div class="container">
    <p>&copy; 2016 Jonathan Doe. All rights reserved.</p>
  </div>
</div>
<script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/SmoothScroll.js"></script> 
<script type="text/javascript" src="js/nivo-lightbox.js"></script> 
<script type="text/javascript" src="js/jquery.isotope.js"></script> 
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 
<script type="text/javascript" src="js/contact_me.js"></script> 
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
