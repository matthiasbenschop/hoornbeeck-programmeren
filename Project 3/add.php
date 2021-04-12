<?php include 'header.php'; ?>



<form class="box" method="POST">
  <h1>Toevoegen</h1>
  <input type="text" name="name" placeholder="Productnaam">
  <input type="text" name="product_id" placeholder="Ean Code">
  <input type="text" name="price" placeholder="Prijs">
  <input type="text" name="stock" placeholder="Aantal">
  <input type="text" name="group_id" placeholder="Categorie">
  <input type="text" name="supplier" placeholder="Leverancier">
  <input type="submit" name="" value="Toevoegen">
</form>




<?php
  if ($_POST){
    $conn = mysqli_connect('localhost','root','','dekruidenier');

    $name = $_POST['name'];
    $product_id = $_POST['product_id'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $group_id = $_POST['group_id'];
    $supplier = $_POST['supplier'];
    
        $sql = "INSERT INTO articles (name, product_id, price, stock, group_id, supplier) VALUES ('$name', '$product_id', '$price', '$stock', '$group_id', '$supplier')";
        if (mysqli_query($conn, $sql)) {
            header ('Location: voorraad.php');
        }else {
          echo mysqli_error($conn);
        }
      }
    
    
  
?>