<?php include 'header.php'; ?>

<style>
    html, body {
    background-image: url('http://getwallpapers.com/wallpaper/full/a/5/d/544750.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    height: 100%;
}
</style>   

<?php

$id = $_GET['id'];

echo '<form method="post">
<div class="container login-container text-center d-flex justify-content-center">
                <div class="w-50 login-form mt-5">
                    <h3 class="register">Cursus Bewerken</h3>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nieuwe Cursusnaam" name="cursus" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Omschrijving" name="omschrijving" value="" />
                        </div>
                        <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nieuwe Prijs" name="prijs" value="" />
                        </div><br>
                        <div class="form-group">
                            <input type="submit" name="edit" class="btnSubmit" value="Bewerken" />
                        </div>
                    </form>
                </div>';
?>
<?php
    if (isset($_POST['edit'])){
      $conn = mysqli_connect('localhost','root','','trainingen');

      $cursus = $_POST['cursus'];
      $omschrijving = $_POST['omschrijving'];
      $prijs = $_POST['prijs'];

      $sql = "UPDATE cursussen SET cursus='$cursus', omschrijving='$omschrijving', prijs='$prijs' WHERE id='$id'";

      if (mysqli_query($conn, $sql)) {
          echo "Bewerkt!";
      } else {
          echo "Error: " . $sql . ":-" . mysqli_error($conn);
      }
      mysqli_close($conn);
      header("Location: index.php");
    }
?>