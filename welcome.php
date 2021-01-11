<?php include('server.php');
  //if user is not logged in, they cannot this website
  if (empty($_SESSION['username'])) {
    header('location: login.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> Welcome Page </title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@500&display=swap" rel="stylesheet">
  </head>
  <body>
    <input type="checkbox" id="check">
    <header class="head">
      <label for="check" style="color: #f1e4f7; z-index: 1; cursor: pointer; position: fixed;
       margin: 45px 0px 0px 400px; font-size: 25px;" id="sidebarBtn">
        <i class="fa fa-bars"></i>
      </label>
      <h1 class="domain text-capitalize"> TeleEmotion </h1>
      <?php if (isset($_SESSION["username"])): ?>
        <p class="logout">Welcome, <strong><?php echo $_SESSION['username']; ?></strong> !!</p><br>
      <?php endif ?>
    </header>

<!---***************************** Header part end ********************************-->
    <div class="sidebar">
      <center>
        <img src="images/avatar1.jpg" class="profile" alt="Profile">
        <?php if (isset($_SESSION["username"])): ?>
          <h4 style="color: #f1e4f7; font-size: 30px;"><?php echo $_SESSION['username']; ?></h4>
        <?php endif ?>
      </center>
      <a href="index.html"><i class="fa fa-desktop"></i><span>Dashboard</span></a>
      <a href="about.html"><i class="fa fa-info-circle"></i><span>About</span></a>
      <a href="service.html"><i class="fa fa-question-circle"></i><span>Service</span></a>
      <?php if (isset($_SESSION["username"])): ?>
      <a href="welcome.php?logout='1'"><i class="fa fa-power-off"></i><span>Logout</span></a>
      <?php endif ?>
    </div>
<!--****************************Sidebar part end *********************************-->
    <div class="contentArea">
      <?php if (isset($_SESSION['success'])): ?>
        <div class="error success">
          <h3>
            <?php
              echo $_SESSION['success'];
              unset($_SESSION['success']);
            ?>
          </h3>
        </div>
      <?php endif ?>

      <div class="box1">
        <h4> Real Time Emotion Recognition</h4>
        <a href="realTime.php"><img src="images/videosymbol.png" class="symbol"></a>
      </div>
      <div class="box2">
        <h4> Past Emotion Recognition</h4>
        <a href="past.php"><img src="images/photosymbol.png" class="symbol"></a>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
