<!DOCTYPE html>
<html lang="en">
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="style.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>De Kruidenier</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<?php session_start();
if ($_SESSION['user']['admin']=='ja'){

    echo '<div class="navbar navbar-expand-md navbar-dark bg-dark mb-4" role="navigation">
     <a class="navbar-brand" href="home.php">&nbsp De Kruidenier</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarCollapse">
         <ul class="navbar-nav mr-auto">
             <li class="nav-item active">
                 <a class="nav-link" href="kassa.php">Kassa</a>
             </li>
             <li class="nav-item ">
                 <a class="nav-link" href="voorraad.php">Voorraad</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="beveiliging.php">Beveiliging</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="register.php">Registreren</a>
             </li>
             <li class="nav-item active">
                 <a class="nav-link" href="uitloggen.php">Uitloggen</a>
             </li>
         </ul>
        
 
     </div>
 </div>'; }

    else{

        echo '<div class="navbar navbar-expand-md navbar-dark bg-dark mb-4" role="navigation">
        <a class="navbar-brand" href="home.php">&nbsp De Kruidenier</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="kassa.php">Kassa</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="uitloggen.php">Uitloggen</a>
                </li>
            </ul>
    
        </div>
    </div>'; }


 ?>
<!-- <script>

        var icon = document.getElementById("icon");

        icon.onclick = function(){
            document.body.classlist.toggle("dark-theme");
        }


    </script> -->
</body>
</html>

