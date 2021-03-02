<?php include 'header.php'; ?>

    

   

    
    <div class="container login-container text-center d-flex justify-content-center">
                <div class="w-50 login-form mt-5">
                    <h3>Inloggen</h3>
                    <form method='post'>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Gebruikersnaam" name="username" value="" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Wachtwoord" name="password" value="" />
                        </div><br>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Login" />
                        </div>
                    </form>
                </div>

    


    <?php


$conn = mysqli_connect('localhost','root','','trainingen');
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

if ($_POST){
$username = FALSE;
while ($row = mysqli_fetch_assoc($result)) {
    if ($row['username'] == $_POST['username']) {
        $username = TRUE;
        if ($row['password'] == $_POST['password']){
            $_SESSION['ingelogd'] = $row['username'];
            header('Location: index.php');
        } else {
            echo 'wachtwoord is onjuist';
        }
    } 

} 
if ($username == FALSE){
    echo 'gebruikersnaam niet gevonden';
}

}

    ?>
</body>
</html>