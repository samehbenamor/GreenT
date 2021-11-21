<?php 
    //require 'C:\xampp\htdocs\WebGreenT\GreenT\MVC\Model\utilisateur.php';
    //require 'C:\xampp\htdocs\WebGreenT\GreenT\MVC\Controller\utilisateurController.php';
	include_once '../../../Controller/utilisateurController.php';
	require_once '../../../Model/utilisateur.php';
	require_once $_SERVER['DOCUMENT_ROOT'].'\WebGreenT\GreenT\MVC\config.php';
    $error = "";
	session_start();
    // create utilisateur
    $utilisateur = null;

    // create an instance of the controller
    $utilisateurC = new utilisateurC();

	/*if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
		header("location: welcome.php");
		exit;
	}*/

	$pdo = config::getConnexion();

	$email = $password = "";

	if($_SERVER["REQUEST_METHOD"] == "POST"){
 
		// Check if username is empty
		if(empty(trim($_POST["email"]))){
			$error = "Please enter email.";
		} else{
			$email = trim($_POST["email"]);
		}

	if(empty(trim($_POST["mdp"]))){
        $error = "Please enter your password.";
    } else{
        $password = trim($_POST["mdp"]);
    }

	if(empty($error)){
        // Prepare a select statement
        $sql = "SELECT idu, nom, prenom, email, mdp  FROM utilisateur WHERE email = :email";

		if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":email", $param_email, PDO::PARAM_STR);
			$param_email = trim($_POST["email"]);
			// Attempt to execute the prepared statement
            if($stmt->execute()){
				// Check if username exists, if yes then verify password
                if($stmt->rowCount() == 1){
                    if($row = $stmt->fetch()){
                        $id = $row["idu"];
                        $email = $row["email"];
						$name = $row["nom"];
						$prenom = $row["prenom"];
                        $hashed_password = $row["mdp"];
                        if($password == $hashed_password){
                            // Password is correct, so start a new session
                            session_start();
							$_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["email"] = $email; 
							$_SESSION["name"] = $name;
							$_SESSION["prenom"] = $prenom;
							$_SESSION["mdp"] = $password;
;							header("location:../index.php");
						} else{
                            // Password is not valid, display a generic error message
                            $error = "Invalid password.";
                        }
                    }
				} else{
                    // Username doesn't exist, display a generic error message
                    $error = "Invalid email.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            unset($stmt);
        }
    }
    
    // Close connection
    unset($pdo);
}



    /*if (
		isset($_POST["email"]) && 
        isset($_POST["mdp"])
    ) {
        if (
            !empty($_POST["email"]) && 
			!empty($_POST["mdp"])
        ) {
			$email = $_POST["email"];
			$mdp = $_POST["mdp"];
			$sql="SELECT * from utilisateur where email=$email";
			$db = config::getConnexion();
			$query=$db->prepare($sql);
			//$query->execute();

			if (mysqli_num_rows($query) != 0)
  				{
					$utilisateur = new utilisateur();
					$utilisateur=$query->fetch();
					
					$_SESSION["id"] = $utilisateur->$idu;
					header('Location:../index.html');
 				}
			}
				else 
					$error = "Email or password wrong.";
		}*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>GreenT - Login</title>
	<script src="../../../Controller/loginController.js"></script>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" >
					<span class="login100-form-title">
						Member Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" id="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="mdp" id="pass" placeholder="Mot de passe">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="text-center p-t-20">
						<a id="err" class="txt2" style="color:red">
						<?php echo $error; ?>
						</a>
						</div>
					
					<div class="container-login100-form-btn">
						<button type="submit" onclick="verif();" class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="register.php">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>