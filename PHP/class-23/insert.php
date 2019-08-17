
<?php

include_once 'connect.php';
if(isset($_POST['signup'])){
 // echo "<script> alert('something')</script>";
 $email = mysqli_escape_string($conn, $_POST['email']);
 $password = mysqli_escape_string($conn, md5($_POST['password']));
 $dob = mysqli_escape_string($conn, $_POST['date']);

$sql = "INSERT INTO user (email, password, dob) VALUES('$email','$password','$dob')";
$query = mysqli_query($conn, $sql);
if($query){
  header('location: insert.php');
  http_response_code(200);
  echo "<script> alert('You are registered successfully !')</script>";
}
else {
  http_response_code(500);
  echo "<script> alert('Something went wrong !')</script>".mysqli_error($conn);
}
}

else {

  http_response_code(500);
  echo "<script> alert('There was a problem with your sub,ission, please try again.')</script>";
}

?>


<?php
include 'signup.php';

?>