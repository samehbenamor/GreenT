<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Team - Moderna Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Moderna - v4.7.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <!--<h1 class="text-light"><a href="index.html"><span>Moderna</span></a></h1>-->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
      <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a class="active" href="team.php">Team</a></li>
          <?php
              if (isset($_SESSION['id'])) {
                echo '<li class="dropdown"><a href="#"><span>'.$_SESSION["name"].'</span> <i class="bi bi-chevron-down"></i></a>
                  <ul>
                    <li><a href="loginregis/index.php">Modifier votre profile</a></li>
                    <li><a href="loginregis/logout.php">Log out</a></li>
                  </ul>
                </li>';
              } else {
                echo '<li class="dropdown"><a href="#"><span>User</span> <i class="bi bi-chevron-down"></i></a>';
                 echo '<ul><li><a href="loginregis/index.php">Log in</a></li>';
                  echo'<li><a href="loginregis/register.php">Register</a></li></ul></li>';
                  
                
              }
              ?>
          <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="services.php">Les formations</a></li>
              <li><a href="portfolio.php">Les randonnées</a></li>
              <li><a href="blog.php">Les campagnes de propretés</a></li>
              <li><a href="payer/index.php">Payer une don</a></li>
            </ul>
          </li>
          <li><a href="contact.php">Contact Us</a></li>
      </nav>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Our Team Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Notre équipe</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Notre équipe</li>
          </ol>
        </div>

      </div>
    </section><!-- End Our Team Section -->

    <!-- ======= Team Section ======= -->
    <section class="team" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">

        <div class="row">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://twitter.com/elonmusk?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="bi bi-twitter"></i></a>
                  <a href="https://www.facebook.com/ISawStarsInHerEyes/"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/nocturnalmelophile/"><i class="bi bi-instagram"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Ben Amor Sameh</h4>
                <span>Directeur général</span>
                <p>J'ai commencé en tant qu'ingénieur web normal travaillant pour une association, j'avais l'impression de ne rien accomplir hors de la norme et avec l'escalade de l'état de la nature de notre pays en descente, j'ai décidé de quitter mon travail et de créer ce site dans l'espoir de regagner un peu de ce que nous avons fait.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://www.facebook.com/mohamedamine.chtioui.501"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/med_amine_chtioui/"><i class="bi bi-instagram"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Mohamed Amine Chtioui</h4>
                <span>Chef de produit</span>
                <p>J'étais le collègue de Sameh lorsqu'il a annoncé qu'il allait quitter son emploi pour le bien de tous et lancer cet immense projet et je n'ai pu m'empêcher, en tant que naturaliste et militant de l'environnement, de lui emboîter le pas et de compiler avec lui cette œuvre d'art. </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://www.facebook.com/ahmed.zarrami.7 "><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/imene_zarrami/"><i class="bi bi-instagram"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Zarrami Imene</h4>
                <span>CTO</span>
                <p>Amoureuse de ce site que j'ai découvert par hasard à travers une annonce, j'ai immédiatement soumis mon CV pour en être l'administratrice. Le travail ici est très fluide et la communauté est très sympa, réactive et solidaire.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://www.facebook.com/Rouaachibouub"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/rouaa_chiboub/"><i class="bi bi-instagram"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Chiboub Roua</h4>
                <span>Comptable</span>
                <p>Entendu par l'ami d'un ami, j'ai été heureux de savoir que Tunis a enfin un prétendant sérieux qui cherche à travailler sérieusement et à aller jusqu'au bout de ses actions. Contrairement aux associations environnementales dans lesquelles j'ai travaillé dans le passé, aucune n'a fait le travail plus que les Defenders.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-5.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href="https://www.facebook.com/dhia.hamdi.140"><i class="bi bi-facebook"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Hamdi Dhia</h4>
                <span>Marketing</span>
                <p>Cette organisation adhère à l'idée de s'entraider pour atteindre l'objectif principal. J'ai vraiment adhéré à cette idée et me suis donc engagé à travailler.</p>
              </div>
            </div>
          </div>

      

        </div>

      </div>
    </section><!-- End Team Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h4>Notre bulletin d'information</h4>
            <p>Inscrivez-vous à notre newsletter pour recevoir les dernières mises à jour !</p>
          </div>
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.html">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.html">Accueil</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="Terms and conditions.txt">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="Privacy Policy.txt">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Notre Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="services.html">Les formations</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="portfolio.html">Les randonnées</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="blog.html">Les campagnes de propretés</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="payer/index.html">Payer une don our financier un projet</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              1, 2 rue André Ampère<br>
              2083 - Pôle Technologique<br>
              El Ghazala. <br><br>
              <strong>Phone:</strong> +216 25 019 058
              <br>
              <strong>Email:</strong> Defenders@esprit.tn

              <br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>À propos de Defenders</h3>
            <p>Nous sommes une équipe d'étudiants dévoués qui cherchent à faire un changement dans le monde de la nature en Tunisie.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Moderna</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>