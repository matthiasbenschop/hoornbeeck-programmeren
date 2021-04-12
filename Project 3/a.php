<?php
session_start();
$count = count($_SESSION['items']);

      for ($i=0; $i<$count; $i++){
          print_r($_SESSION['items']);
          $rest = substr($_SESSION['items'][$i], 5, 1);
        //  $stock = $_SESSION['items'][$i];
        //  print_r($stock. "<br>");
      }

?>