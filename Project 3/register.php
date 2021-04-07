<?php include ('header.php')?>

<form method="post">
  <label>
    <p class="label-txt">Volledige naam</p>
    <input name="naam_voluit" type="text" class="input">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
    <p class="label-txt">Gebruikersnaam</p>
    <input name="username" type="text" class="input">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
    <p class="label-txt">Wachtwoord</p>
    <input name="password" type="password" class="input">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>

  
  <label for="male">Beheerdersrechten &nbsp &nbsp &nbsp</label><input class="radio" type="radio" id="male" name="beheer" value="male">

  <button type="submit">Registreren</button>
</form>

<script>
$(document).ready(function(){

$('.input').focus(function(){
  $(this).parent().find(".label-txt").addClass('label-active');
});

$(".input").focusout(function(){
  if ($(this).val() == '') {
    $(this).parent().find(".label-txt").removeClass('label-active');
  };
});

});

</script>
 <?php

if ($_POST) {
    $conn = mysqli_connect('localhost','root','','dekruidenier');
    if(!$conn){
        echo('Kan geen contact met de server maken!:' .mysql_error());
    }

    $naam_voluit = $_POST['naam_voluit'];
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    $sql = "INSERT INTO login(naam,username,password,admin)
    VALUES ('$naam_voluit','$username','$password','nee')";

    if ($password) {
        if (isset($_POST['beheer'])){
        $sql = "INSERT INTO login(naam,username,password,admin)
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