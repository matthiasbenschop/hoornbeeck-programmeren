<?php include 'header.php'; ?>

    <h1>Inloggen</h1>

    <a href="index.php">Home</a>
    <a href="inloggen.php">Inloggen</a><br>

    <br><form method="POST">
        <p>Gebruikersnaam:</p>
        <input type="text" placeholder="Typ hier je gebruikersnaam" name="username"><br><br>
        <p>Wachtwoord:</p>
        <input type="password" placeholder="Typ hier je wachtwoord" name="password"><br><br>
        <input type="submit" name="submit" value="Login">
    </form>
    


    <?php
        if($_POST) {

            $ingelogd = false;
            

            $USERS = [
                ['username' => 'admin', 'password' => 'admin'],
                ['username' => 'matthias', 'password' => 'matthias'],
                ['username' => 'jan', 'password' => 'jan']
            ];

                foreach ($USERS as $USER) { 
                    if ($USER['username'] == $_POST['username'] && $USER['password'] == $_POST['password']) {
                            $ingelogd = true;
                            $_SESSION['ingelogd'] = $USER['username'];
                            header('Location: index.php');
  
                   
                    }
                }
                if (!$ingelogd) {
                    echo 'Gebruikersnaam of wachtwoord is onjuist';
                }

                }


    ?>
</body>
</html>