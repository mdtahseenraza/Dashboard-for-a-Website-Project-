<?php
session_start();
if(!isset($_SESSION["username"])){
    header('location:home.php');
}

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Welcome Page</title>
  </head>
  <body>
    <h1 class="text-center text-warning mt-5">Welcome
    <?php echo $_SESSION['username'];?>
    </h1>
<div class="container">
  <a href = "logout.php" class="btn btn-primary mt-5">Logout</a>
</div>

</html>
