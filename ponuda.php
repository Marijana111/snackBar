<?php
  require("db_connect.php");
$sql = "SELECT id, name, type, price, imgURL FROM product";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Snack bar | Ponuda</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.png" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
  </head>
  <body>
    <!-- Navigation-->
 
    <nav
      style="background-color: black !important"
      class="navbar navbar-expand-lg navbar-dark bg-dark"
    >
      <div class="container">
        <a class="navbar-brand" href="index.php"
          ><img
            style="border-radius: 40px"
            width="80px"
            height="80px"
            src="https://png.pngtree.com/png-clipart/20190705/original/pngtree-vector-fast-food-icon-png-image_4315795.jpg"
          />
          &nbsp; &nbsp;
          <strong style="font-size: 25px">Snack bar</strong>
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarResponsive"
          aria-controls="navbarResponsive"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Naslovnica</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="ponuda.php">
                Ponuda
                <span class="sr-only">(current)</span>

              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="kontakt.html">Kontakt</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="narudzba.php">Narudžba</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Snack bar</li>
        <li class="breadcrumb-item active" aria-current="page">
          <a href="ponuda.php">Ponuda</a>
        </li>
      </ol>
    </nav>
    <!-- Page Content-->
    <div class="container">
      <div class="row text-center">

      <?php

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    // echo "id: " . $row["id"]."<br>";
    echo '<div class="col-lg-3 col-md-6 mb-4"> 
          <div class="card h-100">
            <img
              class="card-img-top"
              src='. $row["imgURL"].'
              alt="..."
            />
      
            <div class="card-body">
              <h4 class="card-title">'. $row["name"].'</h4>
            </div>
            <div class="card-footer">
              <p>Cijena: '. $row["price"].'</p>
            </div>
          </div>
        </div>
';
  }
} else {
  echo "0 results";
}
$conn->close();
?>

    
    </div>
    <!-- Footer-->
    <footer style="background-color: black !important" class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">
          Copyright ©
          <strong style="text-transform: uppercase">Snack bar</strong> 2021
        </p>
        <p class="m-0 text-center text-white">
          <strong>Adresa:</strong> Ulica kralja Zvonimira
        </p>
        <br />
      </div>
      <div class="container">
        <p class="m-0 text-center text-white">
          <strong>Email:</strong> snack.bar@gmail.com
        </p>
        <p class="m-0 text-center text-white">
          <strong>Telefon:</strong> 063 063 063
        </p>
        <p class="m-0 text-center text-white">
          <strong>Radno vrijeme:</strong> 08:00 - 16:00
        </p>
        <br />
      </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
  </body>
</html>
