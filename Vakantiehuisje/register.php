<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <title>Registreren</title>
  <link href="style.css" rel="stylesheet">
</head>

<body>
  <?php session_start(); ?>

  <a href="login.php"><i class="fas fa-arrow-left"></i></a>

  <form class="box" method="post">
    <h1>Registreren</h1>
    <input type="text" name="username" placeholder="Gebruikersnaam" required>
    <input type="password" name="password" placeholder="Wachtwoord" required>

    <?php
    if (isset($_SESSION['user']['role']) && $_SESSION['user']['role'] == 'admin') {
      echo '<input type="radio" id="male" name="seller" value="male"> <label for="male" class="radio">&nbspSeller</label></input>';
    }
    ?>

    <input type="submit" name="" value="Registreer">
  </form>

  <?php

  if (isset($_POST['username'])) {
    $conn = mysqli_connect('localhost', 'root', '', 'vakantie');
    if (!$conn) {
      echo ('Kan geen contact met de server maken!:' . mysqli_connect_error());
    }


    $username = $_POST['username'];
    $password = hash('sha256', $_POST['password']);




    if ($password) {
      if (isset($_POST['seller'])) {
        $sql = "INSERT INTO users(username,password,role)
  VALUES ('$username','$password','seller')";
      } else {
        $sql = "INSERT INTO users(username,password,role)
        VALUES ('$username','$password','user')";
      }
    }

    if (mysqli_query($conn, $sql)) {
      echo "Geregistreerd";
      unset($_POST['username']);
      header("Location: login.php");
    } else {
      echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
  }
  ?>

</body>

</html>