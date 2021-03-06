<?php include 'includes/header.php'; ?>

<!-- Search -->

<h3 class="title-home">Vind deals voor hotels, huizen en nog veel meer ...</h3>

<form action="resultaten.php" method="POST">
  <div class="omvangsearch">
    <div class="wrap">
      <div class="search">
        <input type="text" class="searchTerm" placeholder="Waar ga je heen?">
        <button type="submit" class="searchButton">
        </button>
      </div>
    </div>
    <div class="wrap">
      <div class="search1">
        <input type="date" class="searchTerm" placeholder="Wanneer?">
        <button type="submit" class="searchButton">
          <i class="fa fa-search"></i>
        </button>
      </div>
    </div>
    <div class="wrap">
      <div class="search2">
        <input type="number" name="persons" class="searchTerm" placeholder="Aantal personen">
        <button type="submit" class="searchButton">
        </button>
</form>
</div>
</div>
</div><br>


<h3 class="populair-home">Populaire huisjes</h3>
<p class="populair-home-under">klik voor meer informatie</p>
<br>

<!-- slideshow homepage -->

<div class="slideshow-container">
  <?php
  $sql = "select houses.*, (select path from images where house_id = houses.id limit 1) as image from houses limit 6";
  $results = mysqli_query($conn, $sql);
  while ($data = mysqli_fetch_assoc($results)) {
    $i = 1;
    echo '<div class="mySlides fade active';
    // if ($i == 1) {
    //   echo 'active';
    // }
    echo '">
      <div class="numbertext">' . $data['id'] . '</div>
      <img src="image/' . $data['image'] . '" style="width:100%; object-fit: cover;">
      <a href="detail.php?id=' . $data['id'] . '">
        <div class="text">' . $data['title'] . '</div>
      </a>
    </div>';
    $i++;
  }
  ?>

  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
  <span class="dot" onclick="currentSlide(5)"></span>
  <span class="dot" onclick="currentSlide(6)"></span>
</div><br><br>

<!-- Nog een aantal aan te raden huisjes -->

<h3 class="aantal-huisjes">Nog een aantal aan te raden huisjes</h3><br><br>

<div class="gallery">
  <?php
  $sql = "select houses.*, (select path from images where house_id = houses.id limit 1) as image from houses";
  $results = mysqli_query($conn, $sql);
  while ($data = mysqli_fetch_assoc($results)) {
    $sql1 = "SELECT country FROM houses WHERE country = '$data[country]'";
    $result1 = mysqli_query($conn, $sql1);
    $totalhouses = mysqli_num_rows($result1);
    echo ' <div> <a href="detail.php?id=' . $data['id'] . '"><img src="image/' . $data['image'] . '"></a>
            <p>' . $data['country'] . '<br>' . $totalhouses . ' bestemmingen</p></div>';
  }


  ?>


  <br><br>




  <?php include 'includes/footer.php'; ?>