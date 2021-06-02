<?php include 'includes/header.php'; ?>


<?php
if (isset($_POST['toevoegen'])) {


    $type = $_POST['type'];
    $capacity = $_POST['capacity'];
    $price = $_POST['price'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $custom_fields = $_POST['custom_fields'];
    $user_id = $_SESSION['user']['id'];

    $sql = "INSERT INTO houses (type, capacity, price, country, city, title, description, custom_fields, user_id) VALUES ('$type', '$capacity', '$price', '$country', '$city', '$title', '$description', '$custom_fields', '$user_id')";
    if (mysqli_query($conn, $sql)) {
    } else {
        echo mysqli_error($conn);
    }

    $sqlr = "SELECT id FROM houses ORDER BY id DESC LIMIT 1";
    $resultr = mysqli_query($conn, $sqlr);
    $row = mysqli_fetch_assoc($resultr);
    $house_id = $row['id'];

    $houses = [];
    for ($i = 0; $i < count($_FILES['houseimg']['name']); $i++) {
        $houses[$i][] = $_FILES['houseimg']['name'][$i];
        $houses[$i][] = $_FILES['houseimg']['tmp_name'][$i];
        $houses[$i][] = $_FILES['houseimg']['type'][$i];
        $houses[$i][] = $_FILES['houseimg']['size'][$i];
        $houses[$i][] = $_FILES['houseimg']['error'][$i];
    }

    foreach ($houses as $photo) {

        $productimgName = time() . '_' . $photo[0];
        $target = 'image/' . $productimgName;

        if (move_uploaded_file($photo[1], $target)) {
            $msg = "Image uploaded";
            $css_class = "bg-succes";
            $sql = "INSERT INTO images (path, house_id) VALUES ('$productimgName', '$house_id')";
            // echo $sql . '<br/>';

            if (!mysqli_query($conn, $sql)) {
                die(mysqli_error($conn));
            }
        } else {
            $msg = "Failed to upload to upload";
            $css_class = "bg-danger";
        }
    }
    header("Refresh:3; index.php");
}


?>

<form class="box" method="post" enctype="multipart/form-data">
    <h1>Huisje toevoegen</h1>
    <input type="text" name="type" placeholder="Type" required>
    <input type="text" name="capacity" placeholder="Aantal Personen" required>
    <input type="text" name="price" placeholder="Prijs" required>
    <input type="text" name="country" placeholder="Land" required>
    <input type="text" name="city" placeholder="Stad" required>
    <input type="text" name="title" placeholder="Titel" required>
    <input type="text" name="description" placeholder="Beschrijving" required>

    <p>Afbeeldingen:</p>
    <input class="chooseFile" type="file" name="houseimg[]" id="fileToUpload">
    <br><br>

    <div id="imagesJs"></div>
    <button type="button" onclick="moreImages()">Nog meer toevoegen</button>

    <input type="text" name="custom_fields" placeholder="Extra" required>
    <input type="submit" name="toevoegen" value="Toevoegen">
</form>
<script src="images.js?<?= time() ?>"></script>