<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ggicballia</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/upboard.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="assets/img/upboard.png" class="me-2" height="30" alt="MDB Logo" loading="lazy" />
            <small>GGICBALLIA</small>
          </a>
        </div>
      </nav>
      <h1 class="logo me-auto"><a href="index.php"></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="active" href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="academics.php">Acedemics</a></li>
          <li><a href="admission.php">Admission</a></li>
          <li><a href="events.php">Events</a></li>

          <li><a href="contact.php">Contact</a></li>&nbsp;&nbsp;&nbsp;
          <li><a href="login.php?admin=student"><button class="btn btn-primary"
                style="background-color:#5fcf80; border:none">Student Admin</button></a></li>
          <li><a href="login.php?admin=teacher"><button class="btn btn-primary"
                style="background-color:#5fcf80; border:none">Teacher Admin</button></a></li>



        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->


    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="masthead-slider owl-carousel owl-theme">
      <div class="container masthead-cont position-relative" data-aos="zoom-in" data-aos-delay="100">
        <img src="assets/images/bg-1.jpeg" class="masthead-bg" height="" alt="" loading="lazy" />
        <h1>Learning Today,<br>For better Tomorrow</h1>
        <h2>Welcome to our Government Aadrsh tara Boy Girl Collage ! We are excited to provide you Part of that
          education
          comes from our school systems and the other part of that comes from within the home.</h2>
      </div>
      <div class="container masthead-cont position-relative" data-aos="zoom-in" data-aos-delay="100">
        <img src="assets/images/bg-2.jpeg" class="masthead-bg" height="" alt="" loading="lazy" />
        <h1>Learning Today,<br>For better Tomorrow</h1>
        <h2>Welcome to our Government Aadrsh tara Boy Girl Collage ! We are excited to provide you Part of that
          education
          comes from our school systems and the other part of that comes from within the home.</h2>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/18.jpeg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Our mission is to provide a foundation for lifelong learning, beginning with us.</h3>
            <p class="fst-italic">
              Our school is committed to providing a high-quality education to all of our students. We believe that
              every student has the potential to succeed, and we work hard to create an environment that fosters
              academic and personal growth.
              Our experienced and dedicated teachers are passionate about their subjects and are committed to helping
              our students achieve their full potential. They use a variety of teaching methods to engage our students
              and make learning fun and interactive.
            </p>


          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="1232" data-purecounter-duration="1"
              class="purecounter"></span>
            <p>Students</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="64" data-purecounter-duration="1"
              class="purecounter"></span>
            <p>Courses</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1"
              class="purecounter"></span>
            <p>Events</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
              class="purecounter"></span>
            <p>Trainers</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <!-- <h3>Why Choose Mentor?</h3> -->
              <p>
                आदर्श तारा बालक बालिका इण्‍टर कालेज, सचुई, मऊ, उत्तर प्रदेश की स्थापना 2001 में हुई थी। यह ग्रामीण
                क्षेत्र में स्थित है। स्कूल कक्षा 6 से 12 तक के छात्र-छात्राओं को शिक्षा प्रदान करता है।

                शिक्षा का प्राथमिक माध्यम हिन्दी है। एकेडमिक सेशन अप्रैल से शुरू होता है। स्कूल में खेल का मैदान है।</p>
              <div class="text-center">
                <a href="about.php" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>OVERALL SCHOOL AVERAGE</h4>
                    <p>90.6%</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4>YEARS OF TRUST</h4>
                    <p>30</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-user"></i>
                    <h4>STUDENT IN THE AVERAGE CLASS</h4>
                    <p>30</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-lg-3 col-md-4">
            <div class="icon-box">
              <i class="ri-book-line" style="color: #ffbb2c;"></i>
              <h3><a href="">Education</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="ri-football-line" style="color: #5578ff;"></i>
              <h3><a href="">Extracurricular activities</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="ri-bus-fill" style="color: #e80368;"></i>
              <h3><a href="">Transportation</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class="ri-mental-health-line" style="color: #e361ff;"></i>
              <h3><a href="">Counseling</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-heart-line" style="color: #47aeff;"></i>
              <h3><a href="">Health services</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-file-text-line" style="color: #ffa76e;"></i>
              <h3><a href="">Special Education</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-folder-line" style="color: #11dbcf;"></i>
              <h3><a href="">Library Services</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-apple-line" style="color: #4233ff;"></i>
              <h3><a href="">Nutrition Services</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-computer-line" style="color: #b2904f;"></i>
              <h3><a href="">Technology</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-fingerprint-line" style="color: #b20969;"></i>
              <h3><a href="">Safety and Security</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-group-fill" style="color: #ff5828;"></i>
              <h3><a href="">Parental Involvement</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-hand-heart-line" style="color: #29cc61;"></i>
              <h3><a href="">Community Partnerships</a></h3>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Popular Courses Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Curriculum Overview</h2>
          <!-- <p>Popular Courses</p> -->
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="assets/img/science1.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Science</h4>
                  <!-- <p class="price">$169</p> -->
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->


          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="course-item">
              <img src="assets/img/math.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Mathematics</h4>
                  <!-- <p class="price">$250</p> -->
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->


          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="course-item">
              <img src="assets/img/art.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Fine Arts</h4>
                  <!-- <p class="price">$250</p> -->
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

          

        </div>

      </div>
    </section><!-- End Popular Courses Section -->

    <!-- ======= Trainers Section ======= -->
    <section class="testimonials">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <ul class="nav" style="justify-content:center">
              <li>
                <a href="#testimonial-1" data-toggle="tab">
                  <img src="assets/img/cm.jpg" alt="image">
                  <strong>श्री योगी आदित्यनाथ</strong>
                  <span>माननीय मुख्यमंत्री, उत्तर प्रदेश</span>
                </a>
              </li>
              <li>
                <a href="#testimonial-2" data-toggle="tab">
                  <img src="assets/img/gulabdevi.jpg" alt="image">
                  <strong>श्रीमती गुलाब देवी</strong>
                  <span>राज्य मंत्री (स्वतंत्र प्रभार), माध्यमिक शिक्षा</span>
                </a>
              </li>
              <li>
                <a href="#testimonial-4" data-toggle="tab">
                  <img src="assets/img/Manager.jpg" alt="image">
                  <strong>श्री संतोष कुमार यादव</strong>
                  <span>प्रबंधक, आदर्श तारा बालक बालिका इण्‍टर कालेज, सचुई, मऊ, उत्तर प्रदेश</span>
                </a>
              </li>
              <li>
                <a href="#testimonial-5" data-toggle="tab">
                  <img src="assets/img/Principal.jpeg" alt="image">
                  <strong>श्री फौजदारी यादव</strong>
                  <span>प्रधानाचार्य, <br>आदर्श तारा बालक बालिका इण्‍टर कालेज,<br> सचुई, मऊ, उत्तर प्रदेश</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <br>
        <br>
        <br>



      </div>
    </section>
    <!-- <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">

      <div class="col-sm-12">
						<ul class="nav">
							<li>
								<a href="#testimonial-1" data-toggle="tab">
									<img src="images/cm.jpg" alt="image">
									<strong>श्री योगी आदित्यनाथ</strong>
									<span>माननीय मुख्यमंत्री, उत्तर प्रदेश</span>
								</a>
							</li>
							<li>
								<a href="#testimonial-2" data-toggle="tab">
									<img src="images/gulabdevi.jpg" alt="image">
									<strong>श्रीमती गुलाब देवी</strong>
									<span>राज्य मंत्री (स्वतंत्र प्रभार), माध्यमिक शिक्षा</span>
								</a>
							</li>
							<li>
								<a href="#testimonial-3" data-toggle="tab">
									<img src="images/PS.jpg" alt="image">
									<strong>श्रीमती आराधना शुक्ला, IAS</strong>
									<span>अपर मुख्य सचिव, माध्यमिक शिक्षा</span>
								</a>
							</li>
							<li>
								<a href="#testimonial-4" data-toggle="tab">
									<img src="images/Secretary.jpg" alt="image">
									<strong>श्री दिव्यकान्त शुक्ल</strong>
									<span>सचिव, माध्यमिक शिक्षा परिषद्</span>
								</a>
							</li>
							<li>
								<a href="#testimonial-5" data-toggle="tab">
									<img src="images/Principal.jpeg" alt="image">
									<strong>श्रीमती अल्का पाण्डेय</strong>
									<span>प्रधानाचार्या, राजकीय बालिका इंटर कॉलेज, सिविल लाइन, बलिया</span>
								</a>
							</li>
						</ul>
					</div>

      </div>
    </section>End Trainers Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php
include "footer.php";
?>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/owl.carousel.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <!--<script src="assets/js/owl.carousel.js"></script>
  <script src="assets/js/jquery-3.6.0.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script> -->
  <script src="assets/js/slider.js"></script>

</body>

</html>