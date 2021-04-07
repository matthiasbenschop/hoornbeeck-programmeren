 <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <link href="style.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>De Kruidenier</title>
    <style>
      body {
        background-color: #34495e;
      }
      </style>
  </head>
  <body>



<form class="box" method="post">
  <h1>Login</h1>
  <input type="text" name="username" placeholder="Gebruikersnaam">
  <input type="password" name="password" placeholder="Wachtwoord">
  <input type="submit" name="" value="Login">
</form>


<?php session_start();


$conn = mysqli_connect('localhost','root','','dekruidenier');


if ($_POST){
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT*FROM LOGIN WHERE username='$username' AND password='$password'";
$results = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($results);
$row = mysqli_fetch_array($results, MYSQLI_ASSOC);
$count = mysqli_num_rows($results);
  if ($count >=1) {
    $_SESSION['user']=$data;
    header ('location: home.php');
  }
}
?>

</body>
</html>

