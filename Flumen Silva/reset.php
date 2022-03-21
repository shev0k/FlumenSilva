<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "login";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
$name = $_POST['nume'];
$sql = "DELETE FROM users WHERE username = '$name'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
  //redirectionare dupa apasarea butonului submit
  //header("location: login.php");
} else {
  echo "Error deleting record: " . $conn->error;
}
}
$conn->close();
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
    <title>Reset Account</title>
    <link rel="stylesheet" href="CSS/reset.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="Images/favicon.png">
  </head>
  <body>
    <div class="wrapper">
    <div class="title-text">
      <div class="title reset">Forgot password?</div>
    </div>
    <div class="form-container">
      <div class="slide-controls">
        <label for="reset" class="slide reset">Reset Form</label>
        <div class="slider-tab"></div>
      </div>
      <div class="form-inner">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="reset">
          <div class="field">
             <input placeholder="Username" type="text" name="nume">
          </div>
          <div class="pass-link">
            <br>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Submit">
            </div>
            <div class="goback-link">Made a mistake? <a href="login.php">Go back</a></div>
        </form>
        </div>
      </div>
    </div>
    <script>
      const resetText = document.querySelector(".title-text .reset");
      const resetForm = document.querySelector("form.reset");
      const resetBtn = document.querySelector("label.reset");
      const resetLink = document.querySelector("form .reset-link a");
      resetBtn.onclick = (()=>{
        resetForm.style.marginLeft = "-50%";
        resetText.style.marginLeft = "-50%";
      });
      resetBtn.onclick = (()=>{
        resetForm.style.marginLeft = "0%";
        resetText.style.marginLeft = "0%";
      });
      resetLink.onclick = (()=>{
        resetBtn.click();
        return false;
      });
    </script>
  </body>
</html>