<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
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
            $username = $_POST['username'];
            $password = $_POST['password'];


            if ($username = "admin") {
                if ($password ="admin") {
                    header('Location: index.php?ingelogd');
                }

            }

        }


    ?>
</body>
</html>