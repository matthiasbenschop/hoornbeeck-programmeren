<?php include 'header.php'; ?>

<?php
        if (!(isset($_SESSION['ingelogd']))){
        header('Location: inloggen.php');
    }
       ?>



<?php
    if (isset($_SESSION['ingelogd'])) {
        echo 'Welkom ' .$_SESSION['ingelogd'];
    }

?>

    <form method="post" action="">
    
            <input type="text" name="naam" placeholder="Naam">
    
            <p></p>
    
            <table class="table table-hover table-sm w-auto m-2">
                <thead>
                <tr>
                    <th>Cursus</th>
                    <th>Omschrijving</th>
                    <th>Prijs</th>
                    <th>&nbsp;</th>
                </tr>
                </thead>
                <tbody>

                

                
                <?php
    
            $conn = mysqli_connect('localhost','root','','trainingen');
            $sql = "SELECT * FROM cursussen";
            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_assoc($result)){
                echo "
                <tr>
                  <td>".$row['cursus']."</td>
                  <td>".$row['omschrijving']."</td>
                  <td>€".$row['prijs']."</td>
                  <td>
                <input type='submit' value='Inschrijven'>
                <button><a href='bewerken.php?id=".$row['id']."'>Bewerken</a> |
                <a onclick='return confirmSubmit()' href='delete.php?id=".$row['id']."'>Verwijderen</a></button>
                
            </td>
        </tr>";
            }
    
    
    
    echo "</tbody></table>
    </form>";
    
    if ($_POST) {
        if($_POST['naam']) {
            echo "Beste ".$_POST['naam'].", je hebt je ingeschreven voor de cursus!";
    
        } else {
            echo "Iemand heeft zich ingeschreven voor een cursus!";
        }
    }
    
    
    ?>


         <script>

        function confirmSubmit(){
            var agree=confirm("Weet je zeker dat je hem wilt verwijderen?");
            if (agree){
                return true;
            } else {
                return false;
            }
        }

         </script>   
    
    </body>
    </html>



