<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Randonnée</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">


  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">


  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


  <link href="assets/css/style.css" rel="stylesheet">


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
          <a class="active href="about.php">About</a>
          <li><a href="team.php">Team</a></li>
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
  </header>

  <main id="main">

    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Nos Randonnées : </h2>

          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Randonnée</li>
          </ol>
        </div>

      </div>
    </section>

    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry">

              <div class="entry-img">
                <img src="assets/img/photo/cmp1.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">Nous organisons une Randonnée au Parc national de bouhedma </a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">Mohamed Amine Chtioui</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">9 Aout, 2021</time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Commentaires</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  Le parc national de Bouhedma se trouve au centre de la Tunisie, entre le gouvernorat de Gafsa et celui de Sidi Bouzid (à 85 km à l’est de Gafsa et à 105 km à l’ouest de Sfax), sur la chaîne Orbata-Bou Hedma de l’Atlas saharien.
                  Le parc national de Bouhedma Couvre 16 448 hectares, il représente le deuxième parc naturel tunisien en termes de superficie.
                  Il s’agit d’une réserve de biosphère reconnue par l’UNESCO en tant que zone modèle conciliant la conservation de la biodiversité et le développement durable.
                </p>
                <div class="read-more">
                  <a href="blog-single.html">Partir</a>
                </div>
              </div>

            </article>

            <article class="entry">

              <div class="entry-img">
                <img src="assets/img/photo/cmp2.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html">Nous organisons une Randonnée au Parc national de boukornine</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">Mohamed Amine Chtioui</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">20 juin, 2021</time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">5 Comments</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  Couvrant presque 2 000 ha, Le parc national de Boukornine est à une vingtaine de kilomètres de Tunis, se situant dans le voisinage de Hammam-Lif. Le climat humide a permis le développement d’une forêt sublime ainsi que de nombreuses espèces végétales : genévriers, cyclamens, tulipes, romarin.
                  De plus, Le parc national de Boukornine abrite 25 espèces de mammifères : le sanglier, le chacal, le chat sauvage, le porc-épic, des rapaces, plusieurs espèces d’oiseaux sédentaires et migrateurs, les caméléons, le lézard ocellé, la tortue terrestre, la couleuvre à fer de cheval, etc…
                  </p>
                <div class="read-more">
                  <a href="blog-single.html">Partir</a>
                </div>
              </div>

            </article>

            <article class="entry">

              <div class="entry-img">
                <img src="assets/img/photo/cmp3.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html">Nous organisons une Randonnée au Parc national d'Ichkeul</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">Mohamed Amine Chtioui</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">20 avril, 2021</time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">20 Comments</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  Le Parc National de l’Ichkeul est situé dans la plaine de Mateur, à 75 Km au Nord de Tunis ; il fait partie du Gouvernorat de Bizerte.
                  Le lac et les marais de l’Ichkeul sont depuis longtemps reconnus (avec Donana en Espagne, la Camargue en France et El Kala en Algérie) comme une des quatre principales zones humides du bassin occidental de la Méditerranée.
                  C’est un des rares sites au monde inscrit sur trois conventions internationales.Reservez maintenant !
                </p>
                <div class="read-more">
                  <a href="blog-single.html">Partir</a>
                </div>
              </div>

            </article>

            <article class="entry">

              <div class="entry-img">
                <img src="assets/img/photo/cmp4.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html">Nous organisons une Randonnée au Parc national d'El Feija </a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">Mohamed Amine Chtioui</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">10 fevrier, 2021</time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">3 Comments</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  Le parc est considéré comme l'une des zones ayant d'immenses potentialités avec ses paysages naturels, ses écosystèmes, sa faune et sa flore. Le parc représente l'environnement naturel de la Kroumirie -la région la plus humide de Tunisie - et appartient donc à l'étage bioclimatique humide. Les forêts de chêne zen, chêne liège et de pin marin et les nombreuses sources d'eau donnent aux visiteurs une sensation de liberté et sérénité .
                </p>
                <div class="read-more">
                  <a href="blog-single.html">Partir</a>
                </div>
              </div>

            </article>

            <div class="blog-pagination">
              <ul class="justify-content-center">
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
              </ul>
            </div>

          </div>

          <div class="col-lg-4">

            <div class="sidebar">

              <h3 class="sidebar-title">Recherche</h3>
              <div class="sidebar-item search-form">
                <form action="">
                  <input type="text">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div><!-- End sidebar search formn-->

              <h3 class="sidebar-title">Villes</h3>
              <div class="sidebar-item categories">
                <ul>
                  <li><a href="#">Tunis <span></span></a></li>
                  <li><a href="#">Bizerte <span></span></a></li>
                  <li><a href="#">Sfax <span></span></a></li>
                  <li><a href="#">Nabeul <span></span></a></li>
                  <li><a href="#">Sousse <span></span></a></li>
                  <li><a href="#">Monastir <span></span></a></li>
                </ul>
              </div><!-- End sidebar categories-->

              <h3 class="sidebar-title">Recent Posts</h3>
              <div class="sidebar-item recent-posts">
                <div class="post-item clearfix">
                  <img src="assets/img/blog/blog-recent-1.jpg" alt="">
                  <h4><a href="blog-single.html">Tunisie : « Les réserves financières de l’Etat sont disponibles, il faut en parfaire la gestion » </a></h4>
                  <time datetime="2020-01-01">Jan 1, 2021</time>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/blog/blog-recent-2.jpg" alt="">
                  <h4><a href="blog-single.html">Quidem autem et impedit</a></h4>
                  <time datetime="2020-01-01">08/08/2021</time>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/blog/blog-recent-3.jpg" alt="">
                  <h4><a href="blog-single.html">Id quia et et ut maxime similique occaecati ut</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2021</time>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/blog/blog-recent-4.jpg" alt="">
                  <h4><a href="blog-single.html">Laborum corporis quo dara net para</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/blog/blog-recent-5.jpg" alt="">
                  <h4><a href="blog-single.html">Et dolores corrupti quae illo quod dolor</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>

              </div><!-- End sidebar recent posts-->

              <h3 class="sidebar-title">Tags</h3>
              <div class="sidebar-item tags">
                <ul>
                  <li><a href="#">Randonnée</a></li>
                  <li><a href="#">Ichkeul</a></li>
                  <li><a href="#">prix</a></li>
                </ul>
              </div><!-- End sidebar tags-->

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->

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
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>


  <script src="assets/js/main.js"></script>

</body>

</html>