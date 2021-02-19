<?php include 'header.php'; ?>


<h1>Cursussen</h1>

<?php

if (isset($_SESSION["ingelogd"])){

    print '<a href="index.php">Home</a>
            <a href="uitloggen.php">Uitloggen</a><br>';
            

} else {
    header('Location: inloggen.php');
}
?>


    <p>Welkom <?php echo $_SESSION ['ingelogd'];?> 

    <form method="post" action="">
    
            <input type="text" name="naam" placeholder="Naam">
    
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
            echo "Beste ".$_POST['naam'].", je hebt je ingeschreven voor de cursus!";
    
        } else {
            echo "Iemand heeft zich ingeschreven voor een cursus!";
        }
    }
    
    
    ?>
            
    
    </body>
    </html>



