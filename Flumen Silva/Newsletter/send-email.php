 
<?php 
 $user = "root";  
 $password = "1234";  
 $host = "localhost";  
 $dbase = "newsletter";  
 $table = "users";  
   
  $from= 'alexav20044@gmail.com';

  $dbc= mysqli_connect($host,$user,$password, $dbase)  
  or die("Unable to select database"); 
   
  $query= "SELECT * FROM $table"; 
  $result= mysqli_query ($dbc, $query)  
  or die ('Error querying database.'); 
   
  while ($row = mysqli_fetch_array($result)) { 
  $first_name= $row['firstname']; 
  $last_name= $row['lastname']; 
  $email= $row['email']; 
   
  $msg= "Dear $first_name $last_name,\n"; 
  mail($email, 'hello', $msg, 'From:' . $from); 
  echo 'Email sent to: ' . $email. '<br>'; 
  } 
   
  mysqli_close($dbc); 
  ?> 
   
  