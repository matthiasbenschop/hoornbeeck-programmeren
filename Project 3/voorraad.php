<?php include ('header.php')?>

<form class="form"><br>
  <input onkeyup="myFunction()" id="zoeken" type="text" name="search" placeholder="Zoeken...">
</form>



<br>
<a href="add.php" witdh><button class="addbutton">Toevoegen</button></a>

<h3><br>Voorraadsysteem</h3><br>

<div class="ex1" id="kassa">
    <div class="item_header" style="background-color: darkgreen;">
        <p style="font-weight: bolder; margin-top: 15px; color: whitesmoke;">Naam</p>
        <p style="font-weight: bolder; margin-top: 15px; color: whitesmoke;">Ean Code</p>
        <p style="font-weight: bolder; margin-top: 15px; color: whitesmoke;">Prijs</p>
        <p style="font-weight: bolder; margin-top: 15px; color: whitesmoke;">Aantal</p>
        <p style="font-weight: bolder; margin-top: 15px; color: whitesmoke;">Categorie</p>
        <p style="font-weight: bolder; margin-top: 15px; color: whitesmoke;">Leverancier</p>
        <p style="font-weight: bolder; margin-top: 15px; color: whitesmoke;">Bewerken</p>
    </div>
    <?php 
    
    $conn = mysqli_connect('localhost','root','','dekruidenier');
    $sql = "SELECT articles.*,`group`.`name` AS group_name FROM articles left join `group` on articles.group_id = `group`.id";
    $result = mysqli_query($conn, $sql);
    
    while ($row = mysqli_fetch_assoc($result)){ 
        echo "
        <div class='item'>
            <p>".$row['name']."</p>
            <p>".$row['product_id']."</p>
            <p>€".$row['price']."</p>
            <p>".$row['stock']."x</p>
            <p>".$row['group_name']."</p>
            <p>".$row['supplier']."</p>
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