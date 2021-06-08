<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title></title>
</head>

<body>

    <?php
    $conn = mysqli_connect('localhost', 'root', '', 'extra_opdrachten');
    if (!$conn) {
        echo ('Kan geen contact met de server maken!:' . mysqli_connect_error());
    }
    ?>



</body>

</html>