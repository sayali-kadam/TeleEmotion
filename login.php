<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <title> Login Page </title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  </head>
  <body class="login"> 
    <div class="card">
      <?php include('errors.php'); ?>
      <img class="card-img-top rounded-circle" src="images/avatar.jpg" alt="Card image">
      <div class="card-header"><h1><center> LOGIN </center></h1></div>
      <div class="card-body">
        <form action="login.php" method="post">
          <!-- display validation errors here -->
          <input type="text" name="username" placeholder="User Name">
          <input type="password" name="password" placeholder="Password"><br>
          <button type="submit" name="login"> Login </button>
        </form>
        <p style="margin: -10px 0px 0px 20px;">
          New to Emotion recognition? <a href="register.php"> Crate a account</a>
        </p>
      </div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
