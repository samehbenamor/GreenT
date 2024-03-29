<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Formations - GreenT Bootstrap Template</title>
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
  * Template Name: GreenT - v4.7.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-GreenT/
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
          <li><a  href="index.php">Home</a></li>
          <a href="about.php">About</a>
          <li><a href="team.php">Team</a></li>
          <?php
              if (isset($_SESSION['id'])) {
                echo '<li class="dropdown"><a href="#"><span>'.$_SESSION["name"].'</span> <i class="bi bi-chevron-down"></i></a>
                  <ul>';
                    if ($_SESSION['role'] == 1) {
                      echo '<li><a href="../BE/index.html">Dashboard</a></li>';
                    }
                    echo '<li><a href="loginregis/modifier.php">Modifier votre profile</a></li>
                    <li><a href="loginregis/logout.php">Log out</a></li>
                  </ul>
                </li>';
              } else {
                echo '<li class="dropdown"><a href="#"><span>Login or register</span> <i class="bi bi-chevron-down"></i></a>';
                 echo '<ul><li><a href="loginregis/index.php">Log in</a></li>';
                  echo'<li><a href="loginregis/register.php">Register</a></li></ul></li>';
                  
                
              }
              ?>
          <li class="dropdown"><a class="active" href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
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

    <!-- ======= Our Formations Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Our Formations</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Our Formations</li>
          </ol>
        </div>

      </div>
    </section><!-- End Our Formations Section -->

    <!-- ======= Formations Section ======= -->
    <!--<section class="Formations">
      <div class="container">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box icon-box-pink">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">	Récifs coralliens</a></h4>
              <p class="description">Les récifs coralliens protègent les côtes contre les vagues, les tempêtes, les inondations et l'érosion. Ils sont également d'importantes ressources pour de nouveaux médicaments en cours de développement.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box icon-box-cyan">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">	Pollution plastique</a></h4>
              <p class="description">Il est plus écologique et aussi économique de réutiliser ses propres produits que d'en racheter. D'ailleurs l'emballage de certains produits devraient emboîter le pas, bidons de lessive, shampoings, tubes de crèmes ou encore pots de yaourt pourraient eux aussi quitter l'emballage en plastique pour du carton.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-green">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Sport et ecologie </a></h4>
              <p class="description">L'idée : partir courir avec un sac poubelle à la main pour ramasser les déchets trouvés en cours de route. En plus de nettoyer son environnement de course, c'est aussi l'occasion d'ajouter un peu de renfo musculaire avec des flexions, squats et autres étirements... Tout le monde y gagne !</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-blue">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">	Environnement et migration</a></h4>
              <p class="description">« On appelle migrants environnementaux les personnes ou groupes de personnes qui, essentiellement pour des raisons liées à un changement environnemental soudain ou progressif influant négativement sur leur vie ou leurs conditions de vie, sont contraintes de quitter leur foyer habituel ou le quittent de leur propre initiative, temporairement ou définitivement, et qui, de ce fait, se déplacent à l’intérieur de leur pays ou en sortent » </p>
            </div>
          </div>

        </div>

      </div>
    </section>

    
    <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 video-box">
            <img src="assets/img/why-us.jpg" class="img-fluid" alt="">
            <a href="https://youtu.be/1lhXbu_9qOM" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>

          </div>
        </div>

      </div>
    </section>

    
    <section class="Formation-details">
      <div class="container">

        <div class="row">
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="card">
              <div class="card-img">
                
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="#">Our Mission</a></h5>
                <p class="card-text">La protection de l'environnement consiste à prendre des mesures pour limiter ou supprimer l'impact négatif des activités de l'Homme sur son environnement.</p>
                <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="card">
              <div class="card-img">
               
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="#">Our Plan</a></h5>
                <p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo</p>
                <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
              </div>
            </div>

          </div>
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="card">
              <div class="card-img">
                
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="#">Our Vision</a></h5>
                <p class="card-text">Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores eos qui ratione voluptatem sequi nesciunt Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet</p>
                <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="card">
              <div class="card-img">
                
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="#">Our Care</a></h5>
                <p class="card-text">Nostrum eum sed et autem dolorum perspiciatis. Magni porro quisquam laudantium voluptatem. In molestiae earum ab sit esse voluptatem. Eos ipsam cumque ipsum officiis qui nihil aut incidunt aut</p>
                <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <section id="Formation" class="Formation section-bg">
        <div class="container">
  
          <div class="section-title">
            <h2>Formation</h2>
            <p>Pourquoi parle-t-on aujourd’hui de protection de l’environnement et non plus de protection de la nature ? Parce que la notion d’environnement et plus large : elle englobe les problématiques économiques, sociales et culturelles lesquelles sont déterminantes pour l’avenir des humains sur Terre.</p>
          </div>
  
          
  
          <div class="row Formation-container" data-aos="fade-up" data-aos-delay="100">
  
            <div class="col-lg-4 col-md-6 Formation-item filter-app">
              <div class="Formation-wrap">
                
                <div class="Formation-links">
                  <a href="assets/img/Formation/Formation-1.jpg" data-gallery="FormationGallery" class="Formation-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="Formation-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 Formation-item filter-web">
              <div class="Formation-wrap">
                <img src="assets/img/Formation/Formation-2.jpg" class="img-fluid" alt="">
                <div class="Formation-links">
                  <a href="assets/img/Formation/Formation-2.jpg" data-gallery="FormationGallery" class="Formation-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="Formation-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 Formation-item filter-app">
              <div class="Formation-wrap">
                
                <div class="Formation-links">
                  <a href="assets/img/Formation/Formation-3.jpg" data-gallery="FormationGallery" class="Formation-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                  <a href="Formation-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 Formation-item filter-card">
              <div class="Formation-wrap">
                
                <div class="Formation-links">
                  <a href="assets/img/Formation/Formation-4.jpg" data-gallery="FormationGallery" class="Formation-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                  <a href="Formation-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 Formation-item filter-web">
              <div class="Formation-wrap">
               
                <div class="Formation-links">
                  <a href="assets/img/Formation/Formation-5.jpg" data-gallery="FormationGallery" class="Formation-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                  <a href="Formation-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 Formation-item filter-app">
              <div class="Formation-wrap">
                <img src="assets/img/Formation/Formation-6.jpg" class="img-fluid" alt="">
                <div class="Formation-links">
                  <a href="assets/img/Formation/Formation-6.jpg" data-gallery="FormationGallery" class="Formation-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                  <a href="Formation-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 Formation-item filter-card">
              <div class="Formation-wrap">
                <img src="assets/img/Formation/Formation-7.jpg" class="img-fluid" alt="">
                <div class="Formation-links">
                  <a href="assets/img/Formation/Formation-7.jpg" data-gallery="FormationGallery" class="Formation-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                  <a href="Formation-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 Formation-item filter-card">
              <div class="Formation-wrap">
                
                <div class="Formation-links">
                  <a href="assets/img/Formation/Formation-8.jpg" data-gallery="FormationGallery" class="Formation-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                  <a href="Formation-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 Formation-item filter-web">
              <div class="Formation-wrap">
                
                <div class="Formation-links">
                  <a href="assets/img/Formation/Formation-9.jpg" data-gallery="FormationGallery" class="Formation-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="Formation-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
  
          </div>
          <div>  <a href="assets/img/Formation/Human impact.mp4">
          <p>L'impact de l'homme sur l'environnement</p>
          </div>
  
        </div>

    </div>
  
    </section>-->

    <!-- ======= Pricing Section ======= -->
    <section class="pricing section-bg" data-aos="fade-up">
      <div class="container">

        <div class="section-title">
          <h2>Fixation des prix</h2>
          <p>Nos formations se répartissent en 3 catégories, nous proposons des formations gratuites, amateurs et professionnelles portant sur les récifs coralliens, la pollution plastique, le sport et l'écologie, l'environnement et la migration et bien plus encore !</p>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-4 box">
            <h3>Gratuit</h3>
            <h4>0Dt<span>par mois</span></h4>
            <ul>
              <li><i class="bx bx-check"></i> Accès à des sessions de formation gratuites </li>
              <li class="na"><i class="bx bx-x"></i> <span>Accès aux sessions de formation payantes</span></li>
              <li class="na"><i class="bx bx-x"></i> <span>Vidéos de meilleure qualité</span></li>
              <li class="na"><i class="bx bx-x"></i> <span>La possibilité de télécharger les vidéos plutôt que de les regarder en streaming</span></li>
            </ul>
            <a href="formations.php" class="get-started-btn">Commencez</a>
          </div>

          <div class="col-lg-4 box featured">
            <h3>Amateur</h3>
            <h4>12Dt<span>par mois</span></h4>
            <ul>
            <li><i class="bx bx-check"></i> Accès à des sessions de formation gratuites </li>
              <li class="na"><li class="bx bx-check"></i> <span>Accès aux sessions de formation payantes</span></li>
              <li class="na"><i class="bx bx-x"></i> <span>Vidéos de meilleure qualité</span></li>
              <li class="na"><i class="bx bx-x"></i> <span>La possibilité de télécharger les vidéos plutôt que de les regarder en streaming</span></li>
            </ul>
            <a href="#" class="get-started-btn">Commencez</a>
          </div>

          <div class="col-lg-4 box">
            <h3>Professionnel</h3>
            <h4>20Dt<span>par mois</span></h4>
            <ul>
            <li><i class="bx bx-check"></i> Accès à des sessions de formation gratuites </li>
              <li class="bx bx-check"></i> <span>Accès aux sessions de formation payantes</span></li>
              <li class="bx bx-check"></i> <span>Vidéos de meilleure qualité</span></li>
              <li class="bx bx-check"></i> <span>La possibilité de télécharger les vidéos plutôt que de les regarder en streaming</span></li>
            </ul>
            <a href="#" class="get-started-btn">Commencez</a>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
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
  </footer>

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