
<?php
include '../../controller/randonnéea.php';
include '../../controller/categoriea.php';
$randonnéeaa = new randonnéea();
$listerandonnée = $randonnéeaa->afficherrandonnée();

$categorie=new categoriea();
$listecategorie = $categorie->affichercategorie();
	$listerandonnée = $randonnéeaa->tri();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Randonnée</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

 
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

        <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active " href="index.html">Home</a></li>
          <a href="about.html">About</a>
          <li><a href="team.html">Team</a></li>
          <li class="dropdown"><a href="#"><span>User</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="loginregis/index.html">Log in</a></li>
              <li><a href="loginregis/register.html">Register</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="services.html">Les formations</a></li>
              <li><a href="portfolio.html">Les randonnées</a></li>
              <li><a href="blog.html">Les campagnes de propretés</a></li>
              <li><a href="payer/index.html">Payer une don</a></li>
            </ul>
          </li>
          <li><a href="contact.html">Contact Us</a></li>
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
   
          <?php
          
          $bdd = new PDO ('mysql:host=localhost;dbname=greent', 'root','');
          $query = $bdd->prepare("SELECT * FROM randonnéea where idc = ? ");
          $query->execute(array($_GET['idc']));
          while( $randonnée = $query->fetch()){
        ?>
                <article class="entry">

<div class="entry-img">
  <img src="assets/img/photo/cmp1.jpg" alt="" class="img-fluid">
</div>

<h2 class="entry-title">Nous organisons une Randonnée à <?php  echo $randonnée['destination'] ; ?> </a>
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
  <?php  echo $randonnée['descriptiona'] ; ?>
  </p>
  <div class="read-more">
    <a href="blog-single.php?id=<?php echo $randonnée['id'];?>">Partir</a>
  </div>
</div>

</article>
                


<?php
}

?>

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
                <form  method="post" action="recherche.php?destination=<?php echo $randonnée['destination'];?>">
                  <input type="search" id="search" name="search" >
              <button type="submit" name="submit"><i class="bi bi-search"></i></button>  
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
              </div>


              <h3 class="sidebar-title">categories</h3>
              <div class="sidebar-item categories">
                <?php foreach($listecategorie as $categorie){ ?>
                <ul>
                  <li><a href="filtre.php?idc=<?php echo $categorie['idc'];?>"><?php echo $categorie['typec'];?></a></li>
  
                </ul>
                <?php
                }?>
              </div>



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
            <h4>Commentaires</h4>
          </div>
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Envoyer">
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
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Nos Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Nos Randonnées</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Nos formations</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Nos campagnes de propretés</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Nos projets</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Nos Contacts </h4>
            <p>
              Esprit,  <br>
              ariana soghra<br>
              <strong>telephone:</strong>+72.345.612 <br>
              <strong>Email:</strong> green.T@green.com<br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>GREEN-T</h3>
            <p>Voulez-vous profiter et apprendre à connaitre de nouveaux endroits ? vivez l'experience avec GREEN-T</p>
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
        &copy; Copyright <strong><span>GREEN-T</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/ -->
        Designed by <a href="https://bootstrapmade.com/">GREEN-T</a>
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