<?php

$uploaddir = "images/profile/";
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
$id = $_POST["id"];

echo "<p>";

if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
  echo "File is valid, and was successfully uploaded.\n";
} else {
   echo "Upload failed";
}

rename("$uploadfile", "images/profile/$id.jpg");

echo "</p>";
echo '<pre>';
echo $id;
echo 'Here is some more debugging info:';
print_r($_FILES);
print "</pre>";

header("location: dashboard.php");
?>