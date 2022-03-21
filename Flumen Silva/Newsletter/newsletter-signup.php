 
<?php 
$user = "root";  
$password = "1234";  
$host = "localhost";  
$dbase = "newsletter";  
$table = "users";  

$email= $_POST['email']; 
$feedback='';

// Connection to DBase  
$dbc= mysqli_connect($host,$user,$password, $dbase)  
or die("Unable to select database"); 

$query = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($dbc, $query);

if($result){
    if(mysqli_num_rows($result) > 0){
        header("Location: " . "http://" . $_SERVER['HTTP_HOST'] . $location);
    }else{
        $query= "INSERT INTO $table  ". "VALUES ('$email')"; 
 
        mysqli_query ($dbc, $query) 
        or die ("Error querying database"); 
 
        header("Location: " . "http://" . $_SERVER['HTTP_HOST'] . $location);
    }
}

 
mysqli_close($dbc); 
 
?> 
 
