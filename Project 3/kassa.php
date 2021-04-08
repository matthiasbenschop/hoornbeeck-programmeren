<?php include ('header.php')?>

<form><br>
  <input onkeyup="myFunction()" id="zoeken" type="text" name="search" placeholder="Zoeken...">
</form>



<h3><br>Kassasysteem</h3>

<div class="ex1" id="kassa">
    <div class="item_header" style="background-color: darkgreen;">
        <p style="font-weight: bolder; margin-top: 15px; color: whitesmoke;">Naam</p>
        <p style="font-weight: bolder; margin-top: 15px; color: whitesmoke;">Ean Code</p>
        <p style="font-weight: bolder; margin-top: 15px; color: whitesmoke;">Prijs</p>
        <p style="font-weight: bolder; margin-top: 15px; color: whitesmoke;">Aantal</p>
        <p style="font-weight: bolder; margin-top: 15px; color: whitesmoke;">Categorie</p>
        <p style="font-weight: bolder; margin-top: 15px; color: whitesmoke;">Toevoegen</p>
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
            <p><button>Toevoegen</button></p>
        </div>";
    }
    ?> 
</div>
<br>

<table class="body-wrap">
    <tbody><tr>
        <td></td>
        <td class="container" width="600">
            <div class="content">
                <table class="main" width="100%" cellpadding="0" cellspacing="0">
                    <tbody><tr>
                        <td class="content-wrap aligncenter">
                            <table width="100%" cellpadding="0" cellspacing="0">
                                <tbody><tr>
                                    <td class="content-block">
                                        <h3>Bedankt voor de Boodschap</h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block">
                                        <table class="invoice">
                                            <tbody><tr>
                                                <td><br>#12345<br>April 07, 2021</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <table class="invoice-items" cellpadding="0" cellspacing="0">
                                                        <tbody><tr>
                                                            <td>Service 1</td>
                                                            <td class="alignright">€ 20.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Service 2</td>
                                                            <td class="alignright">€ 10.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Service 3</td>
                                                            <td class="alignright">€ 6.00</td>
                                                        </tr>
                                                        <tr class="total">
                                                            <td class="alignright" width="80%">Totaal</td>
                                                            <td class="alignright">€ 36.00</td>
                                                        </tr>
                                                    </tbody></table>
                                                </td>
                                            </tr>
                                        </tbody></table>
                                    </td>
                                </tr>
                                    <td class="content-block">
                                       Geholpen door:
                                    </td>
                                </tr>


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