<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <title>Inloggen</title>
  <link href="styling/style.css" rel="stylesheet">
</head>

<body>

  <a href="index.php"><i class="fas fa-arrow-left"></i></a>

  <form class="box" method="post">
    <h1>Login</h1>
    <input type="text" name="username" placeholder="Gebruikersnaam" required>
    <input type="password" name="password" placeholder="Wachtwoord" required>
    <input type="submit" name="" value="Login">
    <p class="login-register-color">Nog geen account? <a href="register.php">Registreren</p>
  </form>

  <?php session_start();


  $conn = mysqli_connect('localhost', 'root', '', 'vakantie');


  if ($_POST) {
    $username = $_POST['username'];
    $password = hash('sha256', $_POST['password']);
    $sql = "SELECT*FROM users WHERE username='$username' AND password='$password'";
    $results = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($results);
    $row = mysqli_fetch_array($results, MYSQLI_ASSOC);
    $count = mysqli_num_rows($results);
    if ($count >= 1) {
      $_SESSION['user'] = $data;
      header('location: index.php');
    }
  }
  ?>



</body>

</html>