<?php include 'header.php'; ?>


<?php

$id = $_GET['product'];
?>

<form class="box" method="POST">
  <h1>Bewerken</h1>
  <input type="text" name="name" placeholder="Productnaam">
  <input type="text" name="product_id" placeholder="Ean Code">
  <input type="text" name="price" placeholder="Prijs">
  <input type="text" name="stock" placeholder="Aantal">
  <input type="text" name="group_id" placeholder="Categorie">
  <input type="text" name="supplier" placeholder="Leverancier">
  <input type="submit" name="" value="Bewerken">
</form>




<?php
  if ($_POST){
    $conn = mysqli_connect('localhost','root','','dekruidenier');

    $arr = ['name', 'product_id', 'price', 'stock', 'group_id', 'supplier'];

    foreach($arr as $a) {
      if(isset($_POST[$a])&&!empty($_POST[$a])) {
        $new = $_POST[$a];
        $sql = "UPDATE articles SET $a='$new' WHERE id=$id";
        mysqli_query($conn, $sql);
      }
    }
    header ('Location: voorraad.php');
  }
?>