<?php

session_start();

?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <link rel="stylesheet" href="style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <title>Inschrijven</title>
    </head>
    <body>

    <?php

if (isset($_SESSION['ingelogd'])){

    echo '<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="add.php">Cursussen toevoegen</a>
                        </li>
 
                        <li class="nav-item">
                            <a class="nav-link" href="uitloggen.php">Uitloggen</a>
                        </li>'
                        ; }
                        // else{
                        //     echo '<nav class="navbar navbar-expand-lg navbar-light bg-light">
                        //     <div class="container-fluid">
                        //         <div class="collapse navbar-collapse" id="navbarText">
                        //             <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        //     <li class="nav-item">
                        //     <a class="nav-link" href="register.php">Registreren</a>
                        //     </li>
                        //     <li class="nav-item">
                        //     <a class="nav-link" href="inloggen.php">Inloggen</a>
                        // </li>';
                        // }
                        
                        ?>
                
    
    
                    </ul>
                </div>
            </div>
        </nav>

                    