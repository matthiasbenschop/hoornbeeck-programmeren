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

    if (isset($_GET['cursus'])) {
        $cursusname = $_GET['cursus'];
    }

?>

    <form method="post" action="">
    
    
            <p></p>
    
            <table class="table table-hover table-center w-auto">
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
                $cursus = $row['cursus'];
                echo "
                <tr>
                  <td>".$row['cursus']."</td>
                  <td>".$row['omschrijving']."</td>
                  <td>€".$row['prijs']."</td>
                  <td>
                  
                <button><a href='index.php?cursus=".$row['cursus']."'<input type='submit'>Inschrijven</a> |
                <a href='bewerken.php?id=".$row['id']."'>Bewerken</a> |
                <a onclick='return confirmSubmit()' href='delete.php?id=".$row['id']."'>Verwijderen</a></button>
                
            </td>
        </tr>";
            }
    
    
    
    echo "</tbody></table>
    </form>";

    if (isset($cursusname)){
            
            echo "Beste ".$_SESSION['ingelogd'].", Je hebt je ingeschreven voor de cursus ". $cursusname."";
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



