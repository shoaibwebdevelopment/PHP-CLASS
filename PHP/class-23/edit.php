
<?php

include 'connect.php';

$id = '';
$email = '';
$password = '';
$dob = '';
 if(isset($_GET['id'])){
     $sql = "SELECT FROM user id =".$_GET['id'];
     $query = mysqli_query($conn, $sql);
     if($query){
         while ($row = mysqli_num_rows($query)>0){
             $id = $row['id'];
             $email = $row['email'];
             $password = $row['password'];
             $dob = $row['dob'];
             
         }
     }
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Vertical (basic) form</h2>
  <form action="?">
    <div class="form-group">
      <label for="email">Email:</label>
                                
      <input type="email" value ="<?= $email; ?>" class="form-control" id="email"  name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" value ="<?= $password; ?>" class="form-control" id="pwd"  name="password">
    </div>
    <div class="form-group">
      <label for="pwd">Date of Birth:</label>
      <input type="date" value ="<?= $dob; ?>" class="form-control" id="pwd"  name="dob">
    </div>

    <div class="form-group">
    
      <input type="hidden" value ="<?= $dob ?>" class="form-control" id="uid"  name="<?= $id; ?>">
    </div>

    <button type="update" class="btn btn-success">Update Information</button>
  </form>
</div>

</body>
</html>
