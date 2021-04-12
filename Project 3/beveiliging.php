<?php include ('header.php')?>

<h1 class="beveiliging">Hier vind u de meldingen van de beveiliging</h1>

<?php

$json_url = "https://martenbiesheuvel.nl/hoornbeeckhelden/security_log.json";
$json = file_get_contents($json_url);
$data = json_decode($json, TRUE);

foreach ($data as $item) {
    echo "<div class='meldingen'><b>Camera: </b>" . $item['camera'] . "";
    echo "<div><b>Tijd: </b>" . $item['datetime'] . "";
    echo "<div><b>Bericht: </b>" . $item['message'] . "</div>";
}

?>