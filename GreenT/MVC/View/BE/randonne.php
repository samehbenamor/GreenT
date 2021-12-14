
<?php
include '../../Controller/randonnéea.php';
require_once '../../Model/randonnée.php';
$randonneC=new randonnéea();
$listeRandonne=$randonneC->afficherrandonnée(); 
session_start(); 
$error = "";
//$image = null;

    // create utilisateur
    $randonnée= null;
    // create an instance of the controller
    $randonnéeaa = new randonnéea();

	
    //creating a user
    if(
        isset($_POST["destination"])&&
        isset($_POST["descriptiona"])&&
        isset($_POST["prix"])&&
        isset($_POST["datea"])&&
        isset($_POST["idc"])
    ){
    if(
        !empty($_POST["destination"])&&
        !empty($_POST["descriptiona"])&&
        !empty($_POST["prix"])&&
        !empty($_POST["datea"])&&
        !empty($_POST["idc"])
       
    ){
   
      $image = $_FILES["image"];
           $img_name = $_FILES['image']['name'];
            $img_size = $_FILES['image']['size'];
            $tmp_name = $_FILES['image']['tmp_name'];
            $error = $_FILES['image']['error'];
            if ($error === 0) {
                $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                $img_ex_lc = strtolower($img_ex);
        
                $allowed_exs = array("jpg", "jpeg", "png", "gif"); 
        
                if (in_array($img_ex_lc, $allowed_exs)) 
                {
                    $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                    $img_upload_path = '../FE/uploads/'.$new_img_name;
                    move_uploaded_file($tmp_name, $img_upload_path);
        
                    
                }
            }
        $randonnée= new randonnée(
            $_POST['destination'],
            $_POST['descriptiona'],
            $_POST['prix'],
            $_POST['datea'],
            $_POST['idc']/*,
            $new_img_name*/
        );
        $randonnéeaa->ajouterrandonnée($randonnée);
      //  header('Location: randonne.php');
    }
    else
    $error="Missing information";
    }

    //modify a user
    if(
        isset($_POST["destination1"])&&
        isset($_POST["descriptiona1"])&&
        isset($_POST["prix1"])&&
        isset($_POST["datea1"])&&
        isset($_POST["idc1"])
    ) {
      
      
            $randonnée = new randonnée(
				$_POST['destination1'],
                $_POST['descriptiona1'], 
				$_POST['prix1'],
                $_POST['datea1'],
                $_POST['idc1']
            );
            $randonneC1->modifierrandonnée($randonnée, $_POST["idu2"]);
            header('Location:randonne.php');
        }
        else
            echo 'Missing information';    
      


    
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tables / Data - NiceAdmin Bootstrap Template</title>
  <script src="../../Controller/registerController.js"></script>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.1.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">GreenT</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <?php
            echo '<span class="d-none d-md-block dropdown-toggle ps-2">'.$_SESSION["name"].'</span>'
            ?>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <?php
              echo'<h6>'.$_SESSION["name"].'</h6>';
              ?>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="forms-elements.html">
              <i class="bi bi-circle"></i><span>Form Elements</span>
            </a>
          </li>
          <li>
            <a href="forms-layouts.html">
              <i class="bi bi-circle"></i><span>Form Layouts</span>
            </a>
          </li>
          <li>
            <a href="forms-editors.html">
              <i class="bi bi-circle"></i><span>Form Editors</span>
            </a>
          </li>
          <li>
            <a href="forms-validation.html">
              <i class="bi bi-circle"></i><span>Form Validation</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link " data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          
          <li>
            <a href="tables-data.php" class="active">
              <i class="bi bi-circle"></i><span>Users</span>
            </a>
          </li>
          <li>
            <a href="formations.php" >
              <i class="bi bi-circle"></i><span>Les formations</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <!-- End Charts Nav -->

      <!-- End Icons Nav -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-faq.html">
          <i class="bi bi-question-circle"></i>
          <span>F.A.Q</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.html">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-error-404.html">
          <i class="bi bi-dash-circle"></i>
          <span>Error 404</span>
        </a>
      </li><!-- End Error 404 Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-blank.html">
          <i class="bi bi-file-earmark"></i>
          <span>Blank</span>
        </a>
      </li><!-- End Blank Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Datatables</h5>
              <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">Id</th> 
                    <th scope="col">Distination</th>
                    <th scope="col">Description</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Date du randonnee</th>
                    <th scope="col">Categorie</th>
                    <th scope="col">Modify</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  foreach($listeRandonne as $randonne){
                  ?>
                  <tr>
                    <td><?php echo $randonne['id']; ?></td>
                    <td><?php echo $randonne['destination']; ?></td>
                    <td><?php echo $randonne['descriptiona']; ?></td>
                    <td><?php echo $randonne['prix']; ?></td>
                    <td><?php echo $randonne['datea']; ?></td>
                    <td><?php echo $randonne['idc']; ?></td>
                    <td><button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#verticalycentered"><i class="bi bi-folder"></i></button><div class="modal fade" id="verticalycentered" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Modifier randonnee</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form method="post" action="">
                      <input type="text" class="form-control" name="idu2" id="idu"  value="<?php echo $randonne['id']; ?>" hidden>

                        <div class="row mb-3">
                          <label for="inputPassword" class="col-sm-2 col-form-label">Destination</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="destination1" id="destination1"  value="<?php echo $randonne['destination']; ?>">
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="inputNumber" class="col-sm-2 col-form-label">Description</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="descriptiona1" id="descriptiona1"  value="<?php echo $randonne['descriptiona']; ?>">
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="inputNumber" class="col-sm-2 col-form-label">Prix</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control"  name="prix1" id="prix1" value="<?php echo $randonne['prix']; ?>">
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="inputNumber" class="col-sm-2 col-form-label" >Date</label>
                          <div class="col-sm-10">
                            <input type="date"  name="datea1" id="datea1"   value="<?php echo $randonne['datea']; ?>">
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="inputNumber" class="col-sm-2 col-form-label">Id du categorie</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="idc1" id="idc1"   value="<?php echo $randonne['idc']; ?>"> 
                          </div>
                        </div>

                        
                         <div class="row mb-3">
                         
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Submit Form</button>
                          </div>
                        </div>
        
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      
                    </div>
                  </div>
                </div>
              </div></td>

                   <td><a href="supprimerRandonnee.php?id=<?php echo $randonne['id']; ?>" class="btn btn-danger" ><i class="bi bi-exclamation-octagon"></i></button></td>
    
                  </tr>
                  <?php
				                }
		            	?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->
              <button type="button" class="btn btn-dark rounded-pill" data-bs-toggle="modal" data-bs-target="#verticalycentered1">
                Ajouter randonnée
              </button>
              <div class="modal fade" id="verticalycentered1" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Creer randonne</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form method="post" action="test.php">
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label">Destination</label>
                          <div class="col-sm-10">
                            <input type="text" name="destination" id="destination">
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="inputPassword" class="col-sm-2 col-form-label">Description</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="descriptiona" id="descriptiona">
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="inputNumber" class="col-sm-2 col-form-label">Prix</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="prix" id="prix">
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="inputNumber" class="col-sm-2 col-form-label">Date</label>
                          <div class="col-sm-10">
                            <input type="date" class="form-control" name="datea" id="datea">
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="inputNumber" class="col-sm-2 col-form-label">idc</label>
                          <div class="col-sm-10">
                          <select name="idc" id="idc">
                      <option value="1">randonnée national</option>
                      <option value="2">randonnée international</option>
                    </select>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label for="inputNumber" class="col-sm-2 col-form-label">Image</label>
                          <div class="col-sm-10">
                            <input type="file" class="form-control" name="image" id="image">
                          </div>
                        </div>
                        <div class="text-center p-t-20">
		                    <a id="err" class="txt2" style="color:red">
					            	<?php echo $error; ?>
						            </a>
						            </div>
                         <div class="row mb-3">
                          <label class="col-sm-2 col-form-label"></label>
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Creer randonne</button>
                          </div>
                        </div>
        
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                    </div>
                  </div>
                </div>
              </div>           
            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>