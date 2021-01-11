<!DOCTYPE html>
<html lang="en">
<head>
  <title> Real time Emotion Recognition </title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="ie-edge">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@500&display=swap" rel="stylesheet">
</head>
<body>
  <header class="head">
    <h1 class="domain text-capitalize"> TeleEmotion </h1>
    <a href="welcome.php"><p class="logout"><i class="fa fa-home" aria-hidden="true"> Home </i></p></a>
  </header>
  <div class="past">
    <input id="myFileUpload" type="file" onchange="upload()" accept=".jpg, .jpeg, .png">
    <img src="" id="myImg" alt="Please select an Image">
    <canvas id="myCan"></canvas>
  </div>
  <script src="face-api.min.js"></script>
  <script src="past.js"></script>
</body>
</html>
