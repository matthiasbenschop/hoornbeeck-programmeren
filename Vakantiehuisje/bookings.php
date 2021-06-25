<?php include 'includes/header.php'; ?>

<h2 class="titleBookings">Hier vind u uw boekingen!</h2><br>

<?php
$user_id = $_SESSION['user']['id'];
$sql = "SELECT * FROM bookings WHERE user_id='$user_id'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    echo '<div class="bookings">';
    // echo $row['email'] . '<br><br>';
    // echo 'Naam: ' . $row['name'] . '<br>';
    // echo 'Geboortedatum: ' . $row['birthday'] . '<br>';
    // echo 'Telefoonnummer: ' . $row['phone'] . ' <br>';
    // echo 'Stad: ' . $row['city'] . '<br>';
    // echo 'Straat: ' . $row['street'] . '<br>';
    // echo 'Postcode: <br>' . $row['postal_code'] . '<br>';
    // echo 'Land: ' . $row['country'] . '<br>';
    echo 'Check-in Datum: ' . $row['start_date'] . '<br>';
    echo 'Check-out Datum: ' . $row['end_date'] . '<br>';
    echo 'Aantal personen: ' . $row['number_persons'] . '<br>';
    echo 'Beschrijving:<br> ' . $row['remarks'] . '<br><br>';
}
?>