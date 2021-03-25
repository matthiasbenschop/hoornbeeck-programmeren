<?php include 'header.php'; ?>

<style>
    html, body {
    background-image: url('http://getwallpapers.com/wallpaper/full/a/5/d/544750.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    height: 0%;
    opacity: 0.9;
}
</style> 

<?php
        if (!(isset($_SESSION['ingelogd']))){
        header('Location: inloggen.php');
    }
       ?>


<div class="welkomclr">
<?php
    if (isset($_SESSION['ingelogd'])) {
        echo 'Welkom ' .$_SESSION['ingelogd']['naam'];
    }
 
    if (isset($_GET['cursus'])) {
        $cursusname = $_GET['cursus'];
    }
   
?>

    <form method="post" action="">
    </div>
    
            
        <div class="clrtextable">
            <table class="table table-center w-auto">
            
                <thead>
                <tr class="txtclr">
                    <th>Cursus</th>
                    <th>Omschrijving</th>
                    <th>Prijs</th>
                    <th>&nbsp;</th>
                </tr>
                </thead>
                </div>
                <tbody>
                
                
                
                <?php
    
            $conn = mysqli_connect('localhost','root','','trainingen');
            $sql = "SELECT * FROM cursussen";
            $result = mysqli_query($conn, $sql);

            
            while ($row = mysqli_fetch_assoc($result)){
                $cursus = $row['cursus'];
                echo "
                <tr class='txtclrtbl'>
                  <td>".$row['cursus']."</td>
                  <td>".$row['omschrijving']."</td>
                  <td>€".$row['prijs']."</td>
                  <td>
                  
                <button><a href='index.php?cursus=".$row['id']."'<input type='submit'>Inschrijven</a> 
                <a href='bewerken.php?id=".$row['id']."'>Bewerken</a> 
                <a onclick='return confirmSubmit()' href='delete.php?id=".$row['id']."'>Verwijderen</a></button>
                
            </td>
        </tr>";
            }
    
    
    
    echo "</tbody></table>
    </form>";
  
            if (isset($_GET['cursus'])) {
                $user_id = $_SESSION['ingelogd']['id'];
                $cursus_id = $_GET['cursus'];
                $sql = "INSERT INTO inschrijven (user_id, cursus_id) values ('{$user_id}','{$cursus_id}')";
                if (mysqli_query($conn,$sql)){

                    echo '<p class="succes">Succesvol ingeschreven</p>';
                } else {
                    echo '<p class="false">Door een fout, kunt u niet inschrijven</p>';
                }
            }

    if (isset($cursusname)){
            
            // echo "Beste ".$_SESSION['ingelogd'].", Je hebt je ingeschreven voor de cursus ". $cursusname."";
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



