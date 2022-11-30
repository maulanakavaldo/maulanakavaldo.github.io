<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>Churn Prediction</title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon" />
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet" />
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet" />

  <!-- =======================================================
  * Template Name: MyResume - v4.9.2
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <main id="main">
    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">
        <div class="col-lg-12">
          <div class="portfolio-details-slider swiper">
            <div class="swiper-wrapper align-items-center">

              <?php
              $a = count(glob("../assets/img/portfolio/thk/*.png", GLOB_BRACE));

              for ($x = 1; $x <= $a; $x++) {
                echo '<div class="swiper-slide">';
                echo '<img src="../assets/img/portfolio/thk/Slide' . $x . '.png" alt="churn prediction" />';
                echo '</div>';
              }

              ?>

              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-12">
            <div class="portfolio-info">
              <h3>Project Information</h3>
              <ul>
                <li>
                  <strong>Category</strong> : Data Science, COVID-19, Health
                </li>
                <!-- <li><strong>Client</strong>: ASU Company</li> -->
                <li><strong>Project date</strong> : October-November 2022</li>
                <li>
                  <strong>Project URL</strong> :
                  <a href="https://github.com/maulanakavaldo/THK_Project">Github</a>
                </li>
              </ul>
              <br />
              <h3>Details</h3>
              <p>
                This project was made in the context of Tri Hita Karana in Bali
                and aims to find out the correlation between COVID-19 metrics,
                in this case death growth with the number of public healthcare
                facilities in 34 provinces all over Indonesia.
              </p>
            </div>
          </div>
        </div>
    </section>
    <!-- End Portfolio Details Section -->
  </main>
  <!-- End #main -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/typed.js/typed.min.js"></script>
  <script src="../assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
</body>

</html>