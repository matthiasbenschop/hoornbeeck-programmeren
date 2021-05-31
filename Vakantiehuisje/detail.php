<?php include 'header.php'; ?>

<?php

$id = $_GET['id'];
$sql = "SELECT * FROM images WHERE house_id='$id'";
$sql1 = "SELECT * FROM houses WHERE id='$id'";
$results = mysqli_query($conn, $sql);
echo '<div class="grid">';
while ($data = mysqli_fetch_assoc($results)) {

    echo '<img src="image/' . $data['path'] . '">';
}
echo '</div>';
$result = mysqli_query($conn, $sql1);
$row = mysqli_fetch_assoc($result);
echo '<div class="titleDetail">' . $row['title'] . '</div><br>';
echo '<div class="typeDetail"> Type: ' . $row['type'] . '</div>';
echo '<div class="capacityDetail"> Aantal: ' . $row['capacity'] . '</div>';
echo '<div class="priceDetail"> Prijs: €' . $row['price'] . ',00</div>';
echo '<div class="Countrydetail"> Land: ' . $row['country'] . '</div>';
echo '<div class="cityDetail"> Stad: ' . $row['city'] . '</div><br>';
echo '<div class="descriptionDetail">Korte beschrijving:<br><br>' . $row['description'] . '</div>';
echo '<div class="custom_fieldsDetail">✔ ' . $row['custom_fields'] . '</div>';
?>







<?php include 'footer.php'; ?>