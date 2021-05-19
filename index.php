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
    <title>Snack bar | Naslovnica</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.png" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.12.1/css/all.css"
      crossorigin="anonymous"
    />
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
            <li class="nav-item active">
              <a class="nav-link" href="index.php">
                Naslovnica
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ponuda.php">Ponuda</a>
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
          <a href="index.php">Naslovnica</a>
        </li>
      </ol>
    </nav>

    <!-- Page Content-->
    <div class="container">
      <?php
        if(isset($_GET["message"]) && $_GET["message"] == "success") {
          echo '<div class="alert alert-success" role="alert">
          Vaša narudžba je zaprimljena!
        </div>';
        } 
      ?>
      <!-- Jumbotron Header-->
      <header class="jumbotron my-4">
        <img
          style="margin-top: -80px"
          width="450"
          height="150"
          src="https://www.animatedimages.org/data/media/707/animated-welcome-image-0112.gif"
        />
        <p class="lead">
          Dobrodošli u Snack bar! <br />
          Pogledajte našu <a href="ponuda.html">ponudu</a>. Ukoliko želite nešto
          naručiti kliknite na gumb ispod.
        </p>
        <a class="btn btn-primary btn-lg" href="narudzba.php"
          ><i class="fas fa-fax"></i> Narudžba</a
        >
      </header>
      <!-- Page Features-->
      <div class="form-row">
        <div class="responsive">
          <div class="gallery">
            <a target="_blank">
              <img
                style="transform: rotateZ(-1deg); padding: 10px"
                src="https://media-cdn.tripadvisor.com/media/photo-s/19/3c/ac/82/caption.jpg"
                alt="Cinque Terre"
                width="350"
                height="200"
              />
            </a>
          </div>
        </div>

        <div class="responsive">
          <div class="gallery">
            <a target="_blank">
              <img
                style="transform: rotateZ(2deg); padding: 10px"
                src="https://www.sun-food.de/images/fastfood.jpg"
                alt="Forest"
                width="350"
                height="200"
              />
            </a>
          </div>
        </div>

        <div class="responsive">
          <div class="gallery">
            <a target="_blank">
              <img
                style="transform: rotateZ(-1.5deg); padding: 10px"
                src="https://media.istockphoto.com/photos/americantasty-and-delicious-juicy-beef-burger-american-style-food-picture-id870887192"
                alt="Forest"
                width="350"
                height="200"
              />
            </a>
          </div>
        </div>
      </div>

      <div class="form-row">
        <div class="responsive">
          <div class="gallery">
            <a target="_blank">
              <img
                style="transform: rotateZ(-3.5deg); padding: 10px"
                src="https://images.unsplash.com/photo-1594212699903-ec8a3eca50f5?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80"
                alt="Cinque Terre"
                width="350"
                height="200"
              />
            </a>
          </div>
        </div>

        <div class="responsive">
          <div class="gallery">
            <a target="_blank">
              <img
                style="transform: rotateZ(3.5deg); padding: 10px"
                src="https://images.unsplash.com/photo-1477617722074-45613a51bf6d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1000&q=80"
                alt="Forest"
                width="350"
                height="200"
              />
            </a>
          </div>
        </div>

        <div class="responsive">
          <div class="gallery">
            <a target="_blank">
              <img
                style="transform: rotateZ(-2.5deg); padding: 10px"
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSLzbTk5W2efTwjRSUClsoqkmWHeMHjdCg7W4P2d00gXTpTZs_1Cb_Y95wjnYYJGVW0I8c&usqp=CAU"
                alt="Forest"
                width="350"
                height="200"
              />
            </a>
          </div>
        </div>
      </div>
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
