<?php
    session_start();
    $username = "";
    $email = "";
    $errors = array();

    // Connect to the SQLiteDatabase
    $db = mysqli_connect("localhost", "root", "", "face_recognition");

    //If the register button is clicked
    if (isset($_POST['register'])) {
      $username = mysqli_real_escape_string($db, $_POST['username']);
      $email = mysqli_real_escape_string($db, $_POST['email']);
      $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
      $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

      // ensure that form fields are filled properly
      if (empty($username)) {
        array_push($errors, "Username is required");
      }
      if (empty($email)) {
        array_push($errors, "Email is required");
      }
      if (empty($password_1)) {
        array_push($errors, "Password is required");
      }
      if ($password_1 != $password_2) {
        array_push($errors, "The two passwords do not match");
      }

      // If there are no errors, save data of user to database
      if (count($errors) == 0) {
        $password = md5($password_1); //encrypt password before storing in database
        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
        mysqli_query($db, $sql);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: login.php'); // redirect to welcome page
      }
    }

    // log user in from login page
    if (isset($_POST['login'])) {
      $username = mysqli_real_escape_string($db, $_POST['username']);
      $password = mysqli_real_escape_string($db, $_POST['password']);

      // ensure that form fields are filled properly
      if (empty($username)) {
        array_push($errors, "Username is required");
      }
      if (empty($password)) {
        array_push($errors, "Password is required");
      }

      if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = mysqli_query($db, $query);
        if (mysqli_num_rows($result) == 1) {
          $_SESSION['username'] = $username;
          $_SESSION['success'] = "You are now logged in";
          header('location: welcome.php'); // redirect to welcome page
        }else {
          array_push($errors, "Wrong username/ password combination");
          header('location: login.php');
        }
      }
    }

    // logout
    if (isset($_GET['logout'])) {
      session_destroy();
      unset($_SESSION["username"]);
      header('location: login.php');
    }
 ?>
