<?php
$meerderecursussen = [
[ 'cursus' => 'Dreamweaver', 'omschrijving' => 'Basis webdesign', 'prijs' => '120'], 
[ 'cursus' => 'Javascript', 'omschrijving' => 'Programmeren in de browser', 'prijs' => '90'],
[ 'cursus' => 'PHP', 'omschrijving' => 'Programmeren op de server', 'prijs' => '150'],
[ 'cursus' => 'Dreamweaver Eindwerk', 'omschrijving' => 'Webdesign in de praktjk', 'prijs' => '180'],
];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursussen</title>
</head>
<body>


<h2>Cursussen</h2>

<form method="post" action="">
    <label>Geef je naam:</label>    
    <input type="text" name="naam">
    

<table style="width:20%">
  <tr>
    <th>Cursus</th>
    <th>Omschrijving</th>
    <th>Prijs</th>
    <th></th>
  </tr>

  <?php
  foreach ($meerderecursussen as $cursus){
      echo "
      <tr>
        <td>".$cursus['cursus']."</td>
        <td>".$cursus['omschrijving']."</td>
        <td>€".$cursus['prijs']."</td>
        <td><input type='submit' value='Inschrijven'> </tr>
        
        ";
  }
echo "</table> </form>";

    ?>



<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;
}
</style>
</body>
</html>

<?php 

if ($_POST) {
    if($_POST['naam']) {
        echo "Beste ".$_POST['naam'].", je hebt je ingeschreven voor een hele vreemde cursus";
    } else {
        echo "Iemand heeft zich ingeschreven voor een hele vreemde cursus";
    }
}

?>


