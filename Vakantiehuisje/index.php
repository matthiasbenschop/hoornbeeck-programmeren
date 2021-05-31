<?php include 'header.php'; ?>

<!-- Search -->

<h3 class="title-home">Vind deals voor hotels, huizen en nog veel meer ...</h3>

<form action="" method="POST">
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
        <input type="text" class="searchTerm" placeholder="Aantal personen">
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
  $sql = "SELECT * FROM houses limit 6";
  $results = mysqli_query($conn, $sql);
  while ($data = mysqli_fetch_assoc($results)) {
    echo '<div class="mySlides fade">
    <div class="numbertext">' . $data['id'] . '/ 6</div>
    <img src="image/' . $data['image'] . '" style="width:100%; object-fit: cover;">
    <a href="detail.php?id=' . $data['id'] . '">
      <div class="text">' . $data['title'] . '</div>
    </a>
  </div>';
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
  $sql = "SELECT * FROM houses";
  $results = mysqli_query($conn, $sql);
  while ($data = mysqli_fetch_assoc($results)) {
    $sql1 = "SELECT country FROM houses WHERE country = '$data[country]'";
    $result1 = mysqli_query($conn, $sql1);
    $totalhouses = mysqli_num_rows($result1);
    echo ' <div> <a href="detail.php?id=' . $data['id'] . '"><img src="image/' . $data['image'] . '"></a>
            <p>' . $data['country'] . '<br>' . $totalhouses . ' bestemmingen</p>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            </div>';
  }


  ?>



  <br><br>




  <?php include 'footer.php'; ?>