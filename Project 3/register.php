<?php include ('header.php')?>


  <form class="box" method="post">
  <h1>Registreren</h1>
  <input type="text" name="naam_voluit" placeholder="Volledige naam">
  <input type="text" name="username" placeholder="Gebruikersnaam">
  <input type="password" name="password" placeholder="Wachtwoord">
  <input type="radio" id="male" name="beheer" value="male"> <label for="male" class="radio" >&nbspBeheerdersrechten</label></input>
  <input type="submit" name="" value="Registreren">
</form>


 <?php

if ($_POST) {
    $conn = mysqli_connect('localhost','root','','dekruidenier');
    if(!$conn){
        echo('Kan geen contact met de server maken!:' .mysqli_connect_error());
    }

    $naam_voluit = $_POST['naam_voluit'];
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    $sql = "INSERT INTO users(name,username,password,admin)
    VALUES ('$naam_voluit','$username','$password','nee')";

    if ($password) {
        if (isset($_POST['beheer'])){
        $sql = "INSERT INTO users(name,username,password,admin)
        VALUES ('$naam_voluit','$username','$password','ja')";
        }



        if (mysqli_query($conn, $sql)) {
            echo "Geregistreerd";
        
        } else {
            echo "Error: " . $sql . ":-" . mysqli_error($conn);
        } 
        mysqli_close($conn);
        header("Location: index.php"); 
    } else {
        echo 'Wachtwoord is niet hetzelfde!';
    }
}


?>