<?php include ('header.php')?>

<form><br>
  <input onkeyup="myFunction()" id="zoeken" type="text" name="search" placeholder="Zoeken...">
</form>






<h3><br>Voorraadsysteem</h3>

<div class="ex1" id="kassa">
    <div class="item_header" style="background-color: darkgreen;">
        <p style="font-weight: bolder; margin-top: 15px; color: whitesmoke;">Naam</p>
        <p style="font-weight: bolder; margin-top: 15px; color: whitesmoke;">Ean Code</p>
        <p style="font-weight: bolder; margin-top: 15px; color: whitesmoke;">Prijs</p>
        <p style="font-weight: bolder; margin-top: 15px; color: whitesmoke;">Aantal</p>
        <p style="font-weight: bolder; margin-top: 15px; color: whitesmoke;">Categorie</p>
    </div>
    <?php 
    
    $conn = mysqli_connect('localhost','root','','dekruidenier');
    $sql = "SELECT * FROM producten";
    $result = mysqli_query($conn, $sql);
    
    while ($row = mysqli_fetch_assoc($result)){ 
        echo "
        <div class='item'>
            <p>".$row['naam']."</p>
            <p>".$row['product_id']."</p>
            <p>€".$row['prijs']."</p>
            <p>".$row['aantal']."x</p>
            <p>".$row['cat']."</p>
           <button><a href='bewerken.php?product=". $row['id'] ."'>Bewerken</a></button>
        </div>";
    }


    ?> 
</div>










<script>
function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("zoeken");
    filter = input.value.toUpperCase();
    ul = document.getElementById("kassa");
    li = ul.getElementsByClassName("item");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("p")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}

</script>