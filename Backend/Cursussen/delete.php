<?php include 'header.php'; ?> 
    
  
    <?php
    session_start();
    if (isset($_SESSION['ingelogd'])) {
    $id = $_GET['id'];
    $conn = mysqli_connect('localhost','root','','trainingen');
    $sql = "DELETE FROM cursussen where id='$id'";
    
    if (mysqli_query($conn, $sql)) {
        header('Location: index.php');
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
    mysqli_close($conn);
    
    
    } else {
        echo 'geen rechten';
    }
    ?>