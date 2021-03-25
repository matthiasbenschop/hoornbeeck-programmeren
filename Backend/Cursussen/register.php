<?php include 'header.php'; ?>


<style>
    html, body {
    background-image: url('http://getwallpapers.com/wallpaper/full/a/5/d/544750.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    height: 0%;
}
</style> 

<div class="container">
  <div class="row">
  <form method="post" class="col-xs-12 col-sm-12 col-md-12">
  <h2 class="register1">Registreren</h2>
  <div class="form-group">
      <input type="text" class="form-control" id="name" name="username1" placeholder="Volledige naam" required>
    </div>
	
	<div class="form-group">
      <input type="text" class="form-control" id="surname" name="username" placeholder="Gebruikersnaam" required>
    </div>
	
	<div class="form-group">
      <input type="password" class="form-control" id="pwd" name="password" placeholder="Wachtwoord" required>
   </div>
   <div class="form-group">
      <input type="password" class="form-control" id="pwd" name="password1" placeholder="Herhaal wachtwoord"  required>
   </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> <span>Remember me</span></label>
    </div>
    <button type="submit" class="btn btn-warning">Registreren</button>
    <p class="inloggen">Heb je al een account? <a href="inloggen.php">Login</a>
  </form>
  </div>
</div>



 <?php

if ($_POST) {
    $conn = mysqli_connect('localhost','root','','trainingen');
    if(!$conn){
        echo('Kan geen contact met de server maken!:' .mysql_error());
    }


    $naam_voluit = $_POST['username1'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $passwordconfirm = $_POST['password1'];

    if ($password == $passwordconfirm) {
        $sql = "INSERT INTO users(naam_voluit,username,password)
        VALUES ('$naam_voluit','$username','$password')";


        if (mysqli_query($conn, $sql)) {
            echo "Geregistreerd";
        
        } else {
            echo "Error: " . $sql . ":-" . mysqli_error($conn);
        } 
        mysqli_close($conn);
        header("Location: inloggen.php"); 
    } else {
        echo 'Wachtwoord is niet hetzelfde!';
    }
}


?>