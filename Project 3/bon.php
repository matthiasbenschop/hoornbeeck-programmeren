<?php include ('header.php')?>

<div class="kassabon_container">
   <div class="kassabon_items_list">
      <h1 class="kassabon_items_header">Uw winkelmandje</h1>
      <div class="kassabon_items">

      <?php

         $i = 0;

         if(isset($_SESSION['items'])) {
            $_SESSION['remove_items'] = [];
            foreach($_SESSION['items'] as $a) {
               $a = explode('?', $a);
               $description = $a[0];
               $code = $a[1];
               $price = $a[2];
               $stock = $a[3];
               $group_name = $a[4];
               $id = $a[5];
               $_SESSION['remove_items'][] = [$id];
               echo "<div class='kassabon_item'>";
               echo " <span class='items_name'>$description</span><span class='items_price'>€$price</span>";
               echo "</div>";

               $price = $i += $price;
            }
         }
         
      ?>


      </div>
   </div>
   <div class="kassabon_items_checkout">

   <?php 

         if (isset($price)) {
   $priceExcl =  number_format($price, 2, ',', '');
   $priceTotal = number_format($price / 100 *121, 2,',', ' ');

   echo '<h1 class="bonTotaalExcl">Totaal:<span class="bonTotaal1">Excl. €'. $priceExcl . '</span></h1>';
   echo '<h1 class="bonTotaalIncl">Totaal:<span class="bonTotaal2">Incl. €'. $priceTotal . '</span></h1>'; 
         }
   ?>

   <form method="POST"><button name="closeBon" class="printBon">Print bon</button></form>
    <?php

     if ($_POST) {
      if(isset($_SESSION['remove_items'])) {
         foreach($_SESSION['remove_items'] as $item) {
            $conn = mysqli_connect('localhost','root','','dekruidenier');
            $item = implode("", $item);
            $sql = "SELECT stock FROM articles WHERE id=$item";
            $results = mysqli_query($conn, $sql);
            $data = mysqli_fetch_assoc($results);
            $newStock = $data['stock'] - 1;
            $sql = "UPDATE articles SET stock='$newStock' WHERE id='$item'";
            mysqli_query($conn, $sql);
         }
         $_SESSION['items'] = [];
      }
        
      header('location: kassa.php');
     }

    ?>

    
     
   </div>
</div>