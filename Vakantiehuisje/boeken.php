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
        <input type="text" name="stad" placeholder="vul hier je stad in" required>
    </div>
    <div class="elem-group">
        <label for="phone">Straat</label>
        <input type="text" name="straat" placeholder="vul hier je straat in" required>
    </div>
    <div class="elem-group">
        <label for="phone">Postcode</label>
        <input type="text" name="postcode" placeholder="vul hier je postcode in" required>
    </div>
    <div class="elem-group">
        <label for="phone">Land</label>
        <input type="text" name="land" placeholder="vul hier je land in" required>
    </div>
    <div class="elem-group inlined">
        <label for="child">Aantal personen</label>
        <input type="number" id="child" name="aantal" placeholder="aantal" min="0" required>
    </div>
    <div class="elem-group inlined">
        <label for="checkin-date">Geboortedatum</label>
        <input type="date" id="checkin-date" name="birthday" required>
    </div>
    <div class="elem-group inlined">
        <label for="checkin-date">Check-in Datum</label>
        <input type="date" id="checkin-date" name="checkin" required>
    </div>
    <div class="elem-group inlined">
        <label for="checkout-date">Check-out Datum</label>
        <input type="date" id="checkout-date" name="checkout" required>
    </div>
    <div class="elem-group">
        <label for="message">Opmerkingen?</label>
        <textarea id="message" name="visitor_message" placeholder="Nog extra opmerkingen?" required></textarea>
    </div>
    <button type="submit">Boeken</button>
</form>