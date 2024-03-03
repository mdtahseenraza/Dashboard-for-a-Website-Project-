<?php
$success=0;
$user=0;

if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
    $username=$_POST['username'];
    $password=$_POST['password'];

    // $sql = "INSERT INTO registration (username, password) 
    // VALUES ('$username', '$password')";
    // $result=mysqli_query($con,$sql);
    
    // if($result){
    //     echo "Data Inserted Successfully";
    // } else {
    //     die(mysqli_error($con));
    // }
    $sql = "SELECT * FROM registration WHERE username='$username'";

    $result=mysqli_query($con,$sql);
    if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
            // echo "User Aleady there";
            $user=1;

        }else{

    $sql = "INSERT INTO registration (username, password) 
    VALUES ('$username', '$password')";
    $result=mysqli_query($con,$sql);

    if($result){
            // echo "Signup Completed";
            $success=1;
            header('location:login.php');
        } else {
            die(mysqli_error($con));
        }
        }
    }

}
?>


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Signup Page</title>
  </head>
  <body>

<?php
if($user){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Oops!</strong> User Already Exist
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
}
?>

<?php
if($success){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success</strong> Congrats,You are Succesfully Signed up
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
}
?>


    <h1 class="text-center">Signup Page</h1>
    <div class="container mt-5">
    <form action = 'sign.php' method = 'post'>

<style>
  .form-group {
    text-align: center; /* Center-aligns the text content */
  }
</style>

  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Name" name="username" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Your Password" name = "password">
  </div>
  
  <button  type="submit" class="btn btn-primary w-100">Submit</button>
</form>
     </div>
   </body>
</html>