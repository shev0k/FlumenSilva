<?php
  session_start();

  require_once("config.php");
  $id = $_SESSION['id'];
  $email = $username = "";

  $sql = "SELECT * FROM users WHERE id = $id";
  if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                $email = $row['email'];
                $username = $row['username'];
            }
        }
    }

$new_password = $confirm_password = "";
$new_password_err = $confirm_password_err = "";
 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["new_password"])){

        if(empty(trim($_POST["new_password"]))){
            $new_password_err = "Please enter the new password.";     
        } elseif(strlen(trim($_POST["new_password"])) < 6){
            $new_password_err = "Password must have atleast 6 characters.";
        } else{
            $new_password = trim($_POST["new_password"]);
        }
        
        if(empty(trim($_POST["confirm_password"]))){
            $confirm_password_err = "Please confirm the password.";
        } else{
            $confirm_password = trim($_POST["confirm_password"]);
            if(empty($new_password_err) && ($new_password != $confirm_password)){
                $confirm_password_err = "Password did not match.";
            }
        }
            
        if(empty($new_password_err) && empty($confirm_password_err)){

                $sql = "UPDATE users SET password = ? WHERE id = ?";
                
                if($stmt = mysqli_prepare($link, $sql)){
                
                    mysqli_stmt_bind_param($stmt, "si", $param_password, $param_id);

                    $param_password = password_hash($new_password, PASSWORD_DEFAULT);
                    $param_id = $_SESSION["id"];

                    if(mysqli_stmt_execute($stmt)){

                        session_destroy();
                        header("location: login.php");
                        exit();
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }

                    mysqli_stmt_close($stmt);
                }
            }
        
        }
    }

   // if($_SERVER["REQUEST_METHOD"] == "POST"){
   //     $name = $username;
   //     $sql = "DELETE FROM users WHERE username = '$name'";
   //     
   //     if ($link->query($sql) === TRUE) {
   //       echo "Record deleted successfully";
   //       header("location: logout.php");
   //     } else {
   //       echo "Error deleting record: " . $conn->error;
   //     }
   // }

    $new_email = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["new_email"])){
            $new_email = trim($_POST["new_email"]);
            $sql = "UPDATE users SET email='$new_email' WHERE id=$id";
            if (mysqli_query($link, $sql)){
                echo "Success";
                header("location: dashboard.php");
            }
        }
    }

    $new_username = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["new_username"])){
            $new_username = trim($_POST["new_username"]);
            $sql = "UPDATE users SET username='$new_username' WHERE id=$id";
            
            if (mysqli_query($link, $sql)){
                echo "Success";
                header("location: dashboard.php");
            }
        }
    }

   if($_SERVER["REQUEST_METHOD"] == "POST"){
       if(isset($_POST["newsletter"])){
           $user = "root";  
           $password = "1234";  
           $host = "localhost";  
           $dbase = "newsletter";  
           $dbc= mysqli_connect($host,$user,$password, $dbase)
           or die("Unable to select database"); 
 
           $query="DELETE FROM users WHERE email='$email'"; 
           $result= mysqli_query($dbc, $query)  
           or die ('Error querying database.'); 

           mysqli_close($dbc);
       }
   }

?>
<!DOCTYPE html>
<html>
    <head>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
    <title>Account</title>
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Manrope&display=swap" rel="stylesheet" type="text/css">
    <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/style-dashboard.css">
	<link rel="icon" href="Images/favicon.png">
        <style>
        body::-webkit-scrollbar {
            display: none;
        }
		.img-circle {
      border-radius: 50%;
      }
      .img-circle2{
      border-radius: 5%;
      }
      .img-circle{
      border-radius: 3%;
      }
      p{
      font-family: 'Manrope', sans-serif;
      font-size:13px;
      }
      h3{
      font-family: 'Manrope', sans-serif;
      font-size:16px;
      }
	  h6{
      font-family: 'Manrope', sans-serif;
      font-size:17px;
      }
	  label{
      font-family: 'Manrope', sans-serif;
      font-size:14px;
      }
	  h5{
      font-family: 'Manrope', sans-serif;
      font-size:16px;
	  color: #bfbfbf;
      }
      span{
      font-family: 'Manrope', sans-serif;
      font-size:13px;
      }
      input{
      font-family: 'Manrope', sans-serif;
	  font-size:14px;
      }
      small{
      font-family: 'Manrope', sans-serif;
      font-size:12px;
      }
      li{
      font-family: 'Manrope', sans-serif;
      font-size:14px;
      }
      .section-title{
      font-family: 'Manrope', sans-serif;
      }
	  
            body{
                color: #fff;
                background: #141414;
            }

            .account-settings .user-profile {
                margin: 0 0 1rem 0;
                padding-bottom: 1rem;
                text-align: center;
            }
            .account-settings .user-profile .user-avatar {
                margin: 0 0 1rem 0;
            }
            .account-settings .user-profile .user-avatar img {
                width: 90px;
                height: 90px;
                -webkit-border-radius: 100px;
                -moz-border-radius: 100px;
                border-radius: 100px;
            }
            .account-settings .user-profile h5.user-name {
                margin: 0 0 0.5rem 0;
            }
            .account-settings .user-profile h6.user-email {
                margin: 0;
                font-size: 0.8rem;
                font-weight: 400;
            }
            .account-settings .about {
                margin: 1rem 0 0 0;
                font-size: 0.8rem;
                text-align: center;
            }
            .card {
                background: #252525;
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
                border-radius: 5px;
                border: 0;
                margin-bottom: 1rem;
            }
            .form-control {
                border: 1px solid #666666;
                -webkit-border-radius: 2px;
                -moz-border-radius: 2px;
                border-radius: 5px;
                font-size: .825rem;
                background: #252525;
                color: #fff;
            }
			.form-control:focus {
				border-color: #666666;
				box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 4px rgba(255, 255, 255, 255);
			}


#right-panel-link {
  position: relative;
  right: 55;
}
        </style>
    </head>
    <body class="header-collapse">
    <div id="site-content">
    <header class="site-header">
      <div class="container">
        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" id="branding">
        <small class="site-description">'Tempora mutantur et<br>  nos mutamur in illis.'</small>
        </a>
        <nav class="main-navigation">
          <button type="button" class="toggle-menu"><i class="fa fa-bars"></i></button>
          <ul class="menu">
              <li class="menu-item"><a href="../index.php">ACASĂ</a></li>
              <li class="menu-item"><a href="../despre.php">DESPRE</a></li>
              <li class="menu-item"><a href="../galerie.php">GALERIE</a></li>
              <li class="menu-item"><a href="../contact/contact_index.php">CONTACT</a></li>
              <li class="menu-item  current-menu-item"><a href="../dashboard.php">ACCOUNT</a></li>
          </ul>
        </nav>
        <div class="mobile-menu"></div>
      </div>
    </header>
<br><br><br><br><br><br><br>
        <div class="container">
            <div class="row gutters">
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="account-settings">
							<br>
                                <div class="user-profile">
                                    <div class="user-avatar">
                                        <img src="images/profile/<?php echo $id ?>.jpg" alt="user" onerror=this.src="Images/profile/alt.png">
                                    </div>
									 <div class="about">
                                    <h5>WELCOME</h5>
                                </div>
                                    <h5 class="user-name"><?php echo $username ?></h5>
                                    <h6 class="user-email"><?php echo $email ?></h6>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h6 class="mb-3 text-muted">ACCOUNT DETAILS</h6>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="fullName">Username</label>
                                        <label type="text" class="form-control" id="fullName" placeholder="Enter full name"><?php echo $username ?></label>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="website">E-mail</label>
                                        <label type="url" class="form-control" id="website" placeholder="E-mail"><?php echo $email ?></label>
                                    </div>
                                </div>
                            </div>

                            <div class="row gutters">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <h6 class="mb-3 text-muted">PASSWORD AND AUTHENTICATION</h6>
                                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                        <div class="form-group">
                                            <label>New Password</label>
                                            <input type="password" name="new_password" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input type="password" name="confirm_password" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-outline-success " value="Change Password">
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="row gutters">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <h6 class="mb-3 text-muted">E-MAIL</h6>
                                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                        <div class="form-group">
                                            <label>New e-mail</label>
                                            <input type="email" name="new_email" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-outline-success" value="Change e-mail">
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="row gutters">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <h6 class="mb-3 text-muted">USERNAME</h6>
                                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                        <div class="form-group">
                                            <label>New username</label>
                                            <input type="text" name="new_username" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-outline-success" value="Change Username">
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h6 class="mb-3 text-muted">ACCOUNT MANAGEMENT</h6>
                                    <form method="post" action="delete.php">
                                        <div class="form-group">
                                            <input type="hidden" name="username" value="<?=$username?>">
                                            <input type="submit" method="post" class="btn tn btn-outline-danger" value="DELETE ACCOUNT">
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h6 class="mb-3 text-muted">NEWSLETTER</h6>
                                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                        <div class="form-group">
                                            <input type="hidden" name="newsletter">
                                            <input type="submit" class="btn btn btn-outline-danger" value="UNSUBSCRIBE">
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h6 class="mb-3 text-muted">Profile picture</h6>
                                    <form action="upload.php" enctype="multipart/form-data" method="post">
                                        <div class="form-group">
                                            <input type="hidden" name="id" value="<?=$id?>">
                                            <input type="file" name="userfile">
                                            <input type="submit" name="Submit1" class="btn btn-outline-secondary" value="UPLOAD">
                                        </div>
                                    </form>
                                </div>
                            </div>
<br><br>
							<a class="btn btn-outline-secondary btn-sm pull-right" id="right-panel-link" href="logout.php" role="button">LOGOUT</a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
			<br>
			      <footer class="site-footer">
        <div class="container">
          <img src="images/logo.png" alt="Flumen Silva">
          <p class="copy">© Flumen Silva</p>
        </div>
      </footer>
	        <script src="../js/jquery-1.11.1.min.js"></script>
      <script src="../js/plugins.js"></script>
      <script src="../js/app.js"></script>
    </body>
</html>