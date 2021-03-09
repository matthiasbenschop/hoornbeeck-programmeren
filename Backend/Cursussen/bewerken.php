<?php include 'header.php'; ?>

<?php

$id = $_GET['id'];

echo '<form method="post">
<div class="form-group">
  <label for="cursus">Cursus</label>
  <input type="text" class="form-control" id="usr" name="cursus" required>
</div>
<div class="form-group">
  <label for="omschrijving">Omschrijving</label>
  <input type="text" class="form-control" id="pwd" name="omschrijving" required>
</div>
<div class="form-group">
  <label for="prijs">Prijs</label>
  <input type="text" class="form-control" id="pwd" name="prijs" required>
</div><br>
<input type="submit" value="Bewerken" name="edit">
</form>';
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