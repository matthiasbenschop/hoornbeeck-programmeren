<?php include 'includes/header.php'; ?>


<?php
$persons = $_POST['persons'];
$sql = "SELECT * from houses where capacity >= '$persons'";
$result = mysqli_query($conn, $sql);

while ($house = mysqli_fetch_assoc($result)) {
    $house_id = $house['id'];
    $sql1 = "SELECT * FROM images where house_id='$house_id'";
    $result1 = mysqli_query($conn, $sql1);
    $row = mysqli_fetch_assoc($result1);?>
    <fieldset>
        <legend class="titleResult"><?= $house["title"]; ?></legend>
        <div>
            <p class="descriptionResult"><?= $house["description"]; ?></p>
            <img class="resultImage" src="image/<?= $row['path'] ?>" alt="">

            <a class="detailResult" href="detail.php?id=<?= $house['id']; ?>">Details</a>
        </div>
    </fieldset><br>
<?php } ?>