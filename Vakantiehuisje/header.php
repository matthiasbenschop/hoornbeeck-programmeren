<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <title>Vakantie Huisjes</title>
</head>

<body>
  <?php

  $conn = mysqli_connect('localhost', 'root', '', 'vakantie');
  if (!$conn) {
    echo ('Kan geen contact met de server maken!:' . mysqli_connect_error());
  }
  ?>

  <?php session_start(); ?>

  <!-- Menu -->
  <?php
  if (isset($SESSION['user'])) {


    if ($_SESSION['user']['role'] == 'seller') {

      echo '<div class="container">
    <h1>
      <a class="menu-color" href="#menu">Menu</a>
    </h1>
    <div class="popover" id="menu">
      <div class="content">
        <a href="#" class="close"></a>
        <div class="nav">
          <ul class="nav_list">
            <div class="nav_list_item">
              <li><a href="index.php">Home</a></li>
            </div>
            <div class="nav_list_item">
              <li><a href="add.php">Toevoegen</a></li>
            </div>
            <div class="nav_list_item">
              <li><a href="login.php">Inloggen</a></li>
            </div>
            <div class="nav_list_item">
              <li><a href="index.php">Uitloggen</a></li>
            </div>
          </ul>
        </div>
      </div>
    </div>
  </div>';
    }
  } else {

    echo '<div class="container">
    <h1>
      <a class="menu-color" href="#menu">Menu</a>
    </h1>
    <div class="popover" id="menu">
      <div class="content">
        <a href="#" class="close"></a>
        <div class="nav">
          <ul class="nav_list">
            <div class="nav_list_item">
              <li><a href="index.php">Home</a></li>
            </div>
            <div class="nav_list_item">
              <li><a href="login.php">Inloggen</a></li>
            </div>
            <div class="nav_list_item">
              <li><a href="index.php">Uitloggen</a></li>
            </div>
          </ul>
        </div>
      </div>
    </div>
  </div>';
  }

  ?>





  <script src="script.js"></script>

</body>

</html>