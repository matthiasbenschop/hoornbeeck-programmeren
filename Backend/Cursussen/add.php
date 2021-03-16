<?php include 'header.php'; ?>

<style>
    html, body {
    background-image: url('http://getwallpapers.com/wallpaper/full/a/5/d/544750.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    height: 100%;
}
</style>   


<div class="container login-container text-center d-flex justify-content-center">
                <div class="w-50 login-form mt-5">
                    <h3 class="register">Cursus toevoegen</h3>
                    <form method='post'>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Cursus" name="cursus" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Omschrijving" name="omschrijving" value="" />
                        </div>
                        <div class="form-group">
                        <input type="text" class="form-control" placeholder="Prijs" name="prijs" value="" />
                        </div><br>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Toevoegen" />
                        </div>
                    </form>
                </div>

<?php

if ($_POST) {
    $conn = mysqli_connect('localhost','root','','trainingen');
    if(!$conn){
        die('Kan niet met de server verbinden!:' .mysql_error());
    }

    $cursus = $_POST['cursus'];
    $omschrijving = $_POST['omschrijving'];
    $prijs = $_POST['prijs'];

    $sql = "INSERT INTO cursussen(cursus,omschrijving,prijs) 
     VALUES ('$cursus','$omschrijving','$prijs')";


    if (mysqli_query($conn, $sql)) {
        echo "Toegevoegd!";
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
    mysqli_close($conn);
    header("Location: index.php");
}


?>
