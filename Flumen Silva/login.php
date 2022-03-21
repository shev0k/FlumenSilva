<?php
//initializarea sesiunii
session_start();
 
//verifica daca utilizatorul este deja conectat, daca da redirectioneaza la pagina de start
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: index.php");
    exit;
}
 
//include pagina config.php
require_once "config.php";

$username = $email = $password = "";
$username_err = $email_err = $password_err = $login_err = "";
 
if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    if(empty($username_err) && empty($password_err)){
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            $param_username = $username;

            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            session_start();
                            
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            //redirectionarea la pagina index.php
                            header("location: index.php");
                        } else{
                          header("location: login.php");
                          echo "Invalid username or password.";
                        }
                    }
                } else{
                  header("location: login.php");
                  echo "Invalid username or password.";
                }
            }else{
              header("location: login.php");
              echo "Invalid username or password.";
            }
            mysqli_stmt_close($stmt);
        }
    }

}


if($_SERVER["REQUEST_METHOD"] == "POST"){
 
  if(empty(trim($_POST["username"]))){
      $username_err = "Please enter a username.";
  } else{
      $sql = "SELECT id FROM users WHERE username = ?";
      
      if($stmt = mysqli_prepare($link, $sql)){
          mysqli_stmt_bind_param($stmt, "s", $param_username);
          
          $param_username = trim($_POST["username"]);
          
          if(mysqli_stmt_execute($stmt)){
              mysqli_stmt_store_result($stmt);
              
              if(mysqli_stmt_num_rows($stmt) == 1){
                  $username_err = "This username is already taken.";
              } else{
                  $username = trim($_POST["username"]);
              }
          } else{
              echo "Oops! Something went wrong. Please try again later.";
          }

          mysqli_stmt_close($stmt);
      }
  }

  if(empty(trim($_POST["email"]))){
    $email_err = "Please enter a email.";     
  }else{
    $email = trim($_POST["email"]);
  }

  if(empty(trim($_POST["password"]))){
      $password_err = "Please enter a password.";     
  } elseif(strlen(trim($_POST["password"])) < 6){
      $password_err = "Password must have atleast 6 characters.";
  } else{
      $password = trim($_POST["password"]);
  }

  if(empty($username_err) && empty($password_err)){

      $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
       
      if($stmt = mysqli_prepare($link, $sql)){

          mysqli_stmt_bind_param($stmt, "sss", $param_username, $param_email, $param_password);

          $param_username = $username;
          $param_email = $email;
          $param_password = password_hash($password, PASSWORD_DEFAULT);
          
          if(mysqli_stmt_execute($stmt)){
              header("location: login.php");
          } else{
              echo "Oops! Something went wrong. Please try again later.";
          }

          mysqli_stmt_close($stmt);
      }
  }
  
  // Close connection
  // mysqli_close($link);
}
?>
 
 <!DOCTYPE html>
<html lang="en" dir="ltr">
	  <style>
	  body::-webkit-scrollbar {
      display: none;
      }	 
	  </style>
  <head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="CSS/login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="Images/favicon.png">
  </head>
  <body>
    <div class="wrapper">
      <div class="title-text">
        <div class="title login">Login Form</div>
        <div class="title signup">
          Signup Form
        </div>
      </div>
      <div class="form-container">
        <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked>
          <input type="radio" name="slide" id="signup">
          <label for="login" class="slide login">Login</label>
          <label for="signup" class="slide signup">Signup</label>
          <div class="slider-tab"></div>
        </div>
        
        <div class="form-inner">
          <form class="login" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="field">
            <input placeholder="Username" type="text" name="username" <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?> value="<?php echo $username; ?>">
            </div>
            <div class="field">
            <input placeholder="Password" type="password" name="password" <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>>
            </div>
            <div class="pass-link">
              <a href="reset.php">Forgot password?</a>
            </div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Login">
            </div>
            <div class="signup-link">
              Not a member? <a href="">Signup now</a>
            </div>
          </form>

          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="signup">
            <div class="field">
            <input placeholder="Username" type="text" name="username" <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?> value="<?php echo $username; ?>">
            </div>
            <div class="field">
            <div class="field">
            <input placeholder="E-mail" type="text" name="email" <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?> value="<?php echo $email; ?>">
            </div>
            <div class="field">
            <input placeholder="Password" type="password" name="password" <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?> value="<?php echo $password; ?>">
            </div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Submit">
            </div>
          </form>
        </div>
      </div>
    </div>
    <script>
      const loginText = document.querySelector(".title-text .login");
      const loginForm = document.querySelector("form.login");
      const loginBtn = document.querySelector("label.login");
      const signupBtn = document.querySelector("label.signup");
      const signupLink = document.querySelector("form .signup-link a");
      signupBtn.onclick = (()=>{
        loginForm.style.marginLeft = "-50%";
        loginText.style.marginLeft = "-50%";
      });
      loginBtn.onclick = (()=>{
        loginForm.style.marginLeft = "0%";
        loginText.style.marginLeft = "0%";
      });
      signupLink.onclick = (()=>{
        signupBtn.click();
        return false;
      });
    </script>
  </body>
</html>