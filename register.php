<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <title> Register page </title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@500&display=swap" rel="stylesheet">
  </head>
  <body class="register">
    <header>
      <a href="index.php"><h1 class="domain text-capitalize"> TeleEmotion </h1></a>
      <a href="index.php"><i class="fa-2x fa fa-backward" aria-hidden="true" style="color: white; margin-top: -100px; float: right;"></i></a>
    </header>
    <div class="Can">
    <!-- display validation errors here -->
        <h2 style="color: #0c0012; margin: 30px 0 0 360px; font-family: 'Sansita Swashed', cursive; font-size:50px;"> Create account </h2>
        <h2 style="color: white; margin-top: 50px; margin-left: 70px;"> Welcome !!</h2>
        <p style="color: white; margin-left: 40px;"> To keep connected with us please<br>
        <p style="color: white; margin-left: 50px; margin-top: -10px;">login with your personal info </p>
        </p>
        <p style="color: white; margin-left: 40px;"> If already a member, </p>
        <a href="login.php"> Login </a>
        <img style="height: 100px; width: 100px; margin-left: 250px; margin-top: -330px;" src="images/reg.jpg" alt="registration">
    <form method="post" action="register.php" class="form">
      <p style="margin-left: 30px;"> Use your email for registration </p>
      <div class="input-group">
        <input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>">
        <input type="text" name="email" placeholder="Email Id" value="<?php echo $email; ?>">
        <input type="password" placeholder="Password" name="password_1">
        <input type="password" placeholder="Please Confirm Your Password" name="password_2">
        <button type="submit" name="register" class="btn"> Register </button>
      </div>
    </form>
    </div>
    <?php include('errors.php'); ?>
  </body>
</html>
