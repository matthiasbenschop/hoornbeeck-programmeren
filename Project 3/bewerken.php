<?php include 'header.php'; ?>


<?php

$id = $_GET['product'];
?>

<form class="box" method="POST">
  <h1>Bewerken</h1>
  <input type="text" name="product" placeholder="Productnaam">
  <input type="text" name="code" placeholder="Ean Code">
  <input type="text" name="price" placeholder="Prijs">
  <input type="text" name="aantal" placeholder="Aantal">
  <input type="text" name="cat" placeholder="Categorie">
  <input type="submit" name="" value="Bewerken">
</form>




<?php
    if ($_SERVER['REQUEST_METHOD']==='POST'){
      $conn = mysqli_connect('localhost','root','','dekruidenier');

      $product = $_POST['product'];
      $code = $_POST['code'];
      $price = $_POST['price'];
      $aantal = $_POST['aantal'];
      $cat = $_POST['cat'];

      $sql = "UPDATE producten SET naam='$product', product_id='$code', prijs='$price', aantal='$aantal', cat='$cat' WHERE id=$id";

      mysqli_query($conn, $sql); 

      header ('Location: voorraad.php');

    }
?>