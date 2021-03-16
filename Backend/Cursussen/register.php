<?php include 'header.php'; ?>


<style>
    html, body {
    background-image: url('http://getwallpapers.com/wallpaper/full/a/5/d/544750.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    height: 100%;
}
</style> 

<div class="container login-container text-center d-flex justify-content-center">
                <div class="w-50 login-form mt-5">
                    <h3 class="register">Registreren</h3>
                    <form method='post'>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Volledige naam" name="username1" value="" required/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Gebruikersnaam" name="username" value="" required/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Wachtwoord" name="password" value="" required/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Herhaal wachtwoord" name="password1" value="" required/>
                        </div><br>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Registreren" />
                        </div>
                    </form>
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