<?php

include '../../Controller/commentaireController.php';
require_once '../../Model/commentaire.php'; 
include '../../Controller/utilisateurController.php';
require_once '../../Model/utilisateur.php'; 
include '../../Controller/formationController.php';
require_once '../../Model/formation.php'; 
session_start();
$id = $_GET["id"];


$formationC = new formationC();

$formation = $formationC->recupererFormation($id);

$titre = $formation["titre"];
$theme = $formation["theme"];
$etat = $formation["etat"];
$description = $formation["descp"];

$commentaireC=new commentaireC();

$listeCommentaire=$commentaireC->afficherCommentaireForBlog($id);

$count = $listeCommentaire->fetchAll();
              

$utilisateurC = new utilisateurC();

$commentaire = null;

if (
      isset($_POST["comment"]) 
  ) {
      if (
          !empty($_POST["comment"]) 
      ) {
    //echo '<script type="text/javascript">alert("Hello! I am an alert box!!");</script>';
          $commentaire = new commentaire(
          $_SESSION["id"],
          $formation['id'], 
          $_POST["comment"]
      //kamil b9iyit les parametre mte3 constructeur fil class utilisateur 7at fil constructeur 8 parametre w lina ta3ti fih ken fi 4
      //ok
          );
          $commentaireC->ajouterCommentaire($commentaire);
          header('Location:formations.php');
      }
      else
          $error = "Missing information";
  }



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Formation</title>
  <script src="../../Controller/commentaireController.js"></script>
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

  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <div class="logo">

          <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
        </div>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">Home</a></li>
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
          <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="services.php">Les formations</a></li>
              <li><a href="portfolio.php">Les randonnées</a></li>
              <li><a href="blog.php">Les campagnes de propretés</a></li>
              <li><a href="payer/index.php">Payer une don</a></li>
            </ul>
          </li>
          <li><a href="contact.html">Contact Us</a></li>
      </nav>
    </div>
  </header>
  </header>

  <main id="main">

    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          

          <ol>
            <li><a href="index.html">Home</a></li>
            <li><a>Formation</a></li>
          </ol>
        </div>

      </div>
    </section>

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry entry-single">

              <div class="entry-img">
                <img src="#" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="formation-single.php"><?php echo $titre; ?></a>
              </h2>

              <div class="entry-meta">
                <ul>
                <?php
                if ($etat == 1) {
                    echo '<li class="d-flex align-items-center"><i class="bi bi-check-lg"></i> <a href="blog-single.html">Free</a></li>';
                } else if ($etat == 2) {
                    echo '<li class="d-flex align-items-center"><i class="bi bi-check2-circle"></i> <a href="blog-single.html">Amateur</a></li>';
                } else if ($etat == 3) {
                    echo '<li class="d-flex align-items-center"><i class="bi bi-check2-square"></i> <a href="blog-single.html">Professional</a></li>';
                }
                ?>
                
                <li class="d-flex align-items-center"><i class="bi bi-chat-left"></i> <a href="blog-single.html"><?php echo $theme; ?></a></li>
                <li class="d-flex align-items-center"><i class="bi bi-hand-thumbs-up"></i><a href="likes.php?id=<?php echo $formation['id']; ?>"><?php echo $formation['likes']; ?>  </a></li>   
              </ul>
              </div>

              <div class="entry-content">
                <p>
                 <?php echo $description; ?>
                </p>
                
                <img src="#" class="img-fluid" alt="">

             

    
            </article><!-- End blog entry -->

           

            <div class="blog-comments">
            <div class="reply-form">
                <h4>Leave a Comment</h4>
                <form action="" method="post">
                  <div class="row">
                    <div class="col form-group">
                      <textarea name="comment" class="form-control" placeholder="Your Comment*"></textarea>
                    </div>
                  </div>
                  <button type="submit" onclick="verif()" class="btn btn-primary">Post Comment</button>

                </form>

              </div>
               
              
              <h4 class="comments-count"><?php echo (count($count)) ?> Comment(s)</h4>
              
				      <!-- Display comments -->
				      <?php foreach ($count as $commentaire): ?>
                <?php if ($commentaire['post_id'] == $formation['id']): ?>
              <?php $utilisateur = $utilisateurC->recupererUtilisateur($commentaire['user_id']); ?>
              <div id="comment-1" class="comment">
                <div class="d-flex">
                  <div>
                    <h5><a href=""><?php echo $utilisateur['nom']; ?> <?php echo $utilisateur['prenom']; ?></a></h5>
                    <time><?php echo date("F j, Y ", strtotime($commentaire["created_at"])); ?></time>
                    <p>
                      <?php echo $commentaire['body']; ?>
                    </p>
                  </div>
                </div>
              </div><!-- End comment #1 -->
              <?php endif ?>
              <?php endforeach ?>
             


             

            </div><!-- End blog comments -->

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">

              <h3 class="sidebar-title">Recherche</h3>
              <div class="sidebar-item search-form">
                <form action="">
                  <input type="text">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div><!-- End sidebar search formn-->

             
              

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Single Section -->

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