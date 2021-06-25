<?php include 'includes/header.php'; ?>

<form method="post">
    <div class="elem-group">
        <label for="name">Je naam</label>
        <input type="text" id="name" name="name" placeholder="Je naam" pattern=[A-Z\sa-z]{3,20} required>
    </div>
    <div class="elem-group">
        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" placeholder="piet@email.com" required>
    </div>
    <div class="elem-group">
        <label for="phone">Telefoonnummer</label>
        <input type="tel" id="phone" name="phone" placeholder="06-12345678" required>
    </div>
    <div class="elem-group">
        <label for="phone">Stad</label>
        <input type="text" name="city" placeholder="vul hier je stad in" required>
    </div>
    <div class="elem-group">
        <label for="phone">Straat</label>
        <input type="text" name="street" placeholder="vul hier je straat in" required>
    </div>
    <div class="elem-group">
        <label for="phone">Postcode</label>
        <input type="text" name="postal_code" placeholder="vul hier je postcode in" required>
    </div>
    <div class="elem-group">
        <label for="phone">Land</label>
        <input type="text" name="country" placeholder="vul hier je land in" required>
    </div>
    <div class="elem-group inlined">
        <label for="child">Aantal personen</label>
        <input type="number" id="child" name="number_persons" placeholder="aantal" min="0" required>
    </div>
    <div class="elem-group inlined">
        <label for="checkin-date">Geboortedatum</label>
        <input type="date" id="checkin-date" name="birthday" required>
    </div>
    <div class="elem-group inlined">
        <label for="checkin-date">Check-in Datum</label>
        <input type="date" id="checkin-date" name="start_date" required>
    </div>
    <div class="elem-group inlined">
        <label for="checkout-date">Check-out Datum</label>
        <input type="date" id="checkout-date" name="end_date" required>
    </div>
    <div class="elem-group">
        <label for="message">Opmerkingen?</label>
        <textarea id="message" name="remarks" placeholder="Nog extra opmerkingen?" required></textarea>
    </div>
    <input name="bookings" class="buttonBoeken" type="submit" value="Boeken">
</form>

<?php
if (isset($_POST['bookings'])) {
    $user_id = $_SESSION['user']['id'];
    $house_id = $_GET['id'];
    $sql = "INSERT INTO user_info (email, name, birthday, phone, city, street, postal_code, country, user_id) values ('$_POST[email]', '$_POST[name]', '$_POST[birthday]', '$_POST[phone]', '$_POST[city]','$_POST[street]', '$_POST[postal_code]', '$_POST[country]', '$user_id')";
    $sql1 = "INSERT INTO bookings (house_id, user_id, start_date, end_date, number_persons, remarks) values ('$house_id', '$user_id', '$_POST[start_date]', '$_POST[end_date]', '$_POST[number_persons]','$_POST[remarks]')";
    mysqli_query($conn, $sql);
    mysqli_query($conn, $sql1);
}



?>