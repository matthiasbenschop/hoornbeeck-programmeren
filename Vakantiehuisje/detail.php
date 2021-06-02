<?php include 'includes/header.php'; ?>

<?php

$id = $_GET['id'];

$sql1 = "SELECT * FROM houses WHERE id='$id'";


$result = mysqli_query($conn, $sql1);
$row = mysqli_fetch_assoc($result);
echo '<div class="wrapper">';
echo $row['title'] . '<br><br>';
echo 'Type: ' . $row['type'] . '<br>';
echo 'Aantal: ' . $row['capacity'] . '<br>';
echo 'Prijs: €' . $row['price'] . ',00 <br>';
echo 'Land: ' . $row['country'] . '<br>';
echo 'Stad: ' . $row['city'] . '<br><br>';
echo 'Korte omschrijving: <br>' . $row['description'] . '<br><br>';
echo 'Extra: <br>' . json_decode($row['custom_fields'], true)['wifi']  . '<br>' . '<br><br>';
$sql = "SELECT * FROM reviews WHERE house_id = '$id'";
$result = mysqli_query($conn, $sql);
echo 'Reviews: <br>';
while ($row = mysqli_fetch_assoc($result)) {
    echo $row['title'] . '<br>';
    echo $row['review'] . '<br>';
    if ($row['rating'] == 1) {
        echo '<span class="fa fa-star checked"></span>
    <span class="fa fa-star"></span>
    <span class="fa fa-star"></span>
    <span class="fa fa-star"></span>
    <span class="fa fa-star"></span>';
    }
    if ($row['rating'] == 2) {
        echo '<span class="fa fa-star checked"></span>
     <span class="fa fa-star checked"></span>
     <span class="fa fa-star"></span>
     <span class="fa fa-star"></span>
     <span class="fa fa-star"></span>';
    }
    if ($row['rating'] == 3) {
        echo '<span class="fa fa-star checked"></span>
     <span class="fa fa-star checked"></span>
     <span class="fa fa-star checked"></span>
     <span class="fa fa-star"></span>
     <span class="fa fa-star"></span>';
    }
    if ($row['rating'] == 4) {
        echo '<span class="fa fa-star checked"></span>
     <span class="fa fa-star checked"></span>
     <span class="fa fa-star checked"></span>
     <span class="fa fa-star checked"></span>
     <span class="fa fa-star"></span>';
    }
    if ($row['rating'] == 5) {
        echo '<span class="fa fa-star checked"></span>
     <span class="fa fa-star checked"></span>
     <span class="fa fa-star checked"></span>
     <span class="fa fa-star checked"></span>
     <span class="fa fa-star checked"></span>';
    }
    echo '<br><br>';
}
echo '</div>'; ?>

<?php
$sql = "SELECT * FROM images WHERE house_id='$id'";
$results = mysqli_query($conn, $sql);
echo '<div class="grid">';
while ($data = mysqli_fetch_assoc($results)) {

    echo '<img src="image/' . $data['path'] . '">';
}
echo '</div>';
?><br>

<h2 class="titleReserveren">Ziet het er leuk uit? Klik dan nu op de knop hieronder!</h2>
<a href="boeken.php"><button class="buttonReserveren">Boeken</button></a>
<form method="POST" class="reviewForm">
    <h3 class="reviewTitle">Laat hier je mening achter!</h3>
    <label for="title"></label><br>
    <input type="text" name="title" placeholder="Titel">
    <label for="review"></label><br>
    <input type="text" name="review" placeholder="Review">
    <label for="rating"></label><br>
    <input type="text" name="rating" placeholder="rating 1/5">
</form>
<button class="buttonReviews">Review Toevoegen</button>


<?php include 'includes/footer.php'; ?>