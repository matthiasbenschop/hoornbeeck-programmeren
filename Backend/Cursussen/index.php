<h1>Cursussen</h1>

<?php

if (isset($_GET["ingelogd"])){

    print '<a href="index.php">Home</a>
            <a href="index.php">Uitloggen</a><br>';
            

} else {
    header('Location: inloggen.php');
}
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inschrijven</title>
    </head>
    <body>

    <form method="post" action="">
    
            <input type="text" name="naam" placeholder="Hoe heet je?">
    
            <p></p>
    
            <table border="1" cellspacing="0" cellpadding="5">
                <tr>
                    <td>Cursus</td>
                    <td>Omschrijving</td>
                    <td>Prijs</td>
                    <td>&nbsp;</td>
                </tr>
    
                <?php
    
                $items = [
                    ['cursus' => 'Dreamwaver', 'omschrijving' => 'Basis webdesign', 'prijs' => '190'],
                    ['cursus' => 'Javascript', 'omschrijving' => 'Programmeren in de browser', 'prijs' => '390'],
                    ['cursus' => 'PHP', 'omschrijving' => 'Programmeren op de server', 'prijs' => '155'],
                    ['cursus' => 'Dreamwaver Eindwerk', 'omschrijving' => 'Webdesign in de praktijk', 'prijs' => '182'],
                    ['cursus' => 'Dreamwaver', 'omschrijving' => 'Webdesign thuis', 'prijs' => '285']
                ];
    
    
    foreach ($items as $item) {
        echo "
        <tr>
            <td>".$item['cursus']."</td>
            <td>".$item['omschrijving']."</td>
            <td>€".$item['prijs']."</td>
            <td>
                <input type='submit' value='Inschrijven'>
            </td>
        </tr>";
    }
    
    echo "</table>
    </form>";
    
    if ($_POST) {
        if($_POST['naam']) {
            echo "Beste ".$_POST['naam'].", je hebt je ingeschreven voor een hele vreemde cursus";
        } else {
            echo "Iemand heeft zich ingeschreven voor een hele vreemde cursus";
        }
    }
    
    
    ?>
            
    
    </body>
    </html>



