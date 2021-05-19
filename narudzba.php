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
    <title>Snack bar | Narudžba</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.png"" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
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
            <li class="nav-item">
              <a class="nav-link" href="ponuda.php">Ponuda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="kontakt.html">Kontakt</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="narudzba.php">
                Narudžba
                <span class="sr-only">(current)</span>
              </a>
            </li>            
          </ul>
        </div>
      </div>
    </nav>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Snack bar</li>
        <li class="breadcrumb-item active" aria-current="page">
          <a href="narudzba.php">Narudžba</a>
        </li>
      </ol>
    </nav>
    <!-- Page Content-->
    <div class="clss">
        <form class="form" action="akcijaNarudzba.php" method="post">
      <!-- Page Features-->
      <legend style="padding-top: 10px;">Ponuda</legend>
      <hr/>
      <label for="food">Odaberite jelo: </label>
      <select class="form-control" name="food" id="food">
        <option value="small_pizza">Pizzeta</option>
        <option value="sandwich">Sendvić</option>
        <option value="lasagne">Lasagne</option>
        <option value="tost">Tost</option>
      </select>
      <br />

      <label for="drinks">Odaberite piće: </label>
      <select class="form-control" name="drink" id="drinks">
        <option value="water">Voda</option>
        <option value="coke" selected="selected">Coca-cola</option>
        <option value="juice">Negazirani sok</option>
      </select>
      <br />
      <label for="sideDish">Prilog:<br /></label>

      <div class="form-group form-check-inline">
        <input name="sideDish[]" type="checkbox" id="lettuce" value="lettuce" /> &nbsp;
        <label class="form-check-label">Zelena salata</label>
      </div>
      <div class="form-group form-check-inline">
        <input name="sideDish[]" type="checkbox" id="pickles" value="pickles" /> &nbsp;
        <label class="form-check-label">Krastavci</label>
      </div>
      <div class="form-group form-check-inline">
        <input name="sideDish[]" type="checkbox" id="ketchup" value="ketchup" /> &nbsp;
        <label class="form-check-label">Kečap</label>
      </div>

      <div class="form-group form-check-inline">
        <input name="sideDish[]" type="checkbox" id="mayonese" value="mayonese" /> &nbsp;
        <label class="form-check-label">Majoneza</label>
      </div>

      <br />
      <label for="quantity">Kolicina (između 1 and 5):</label>
      <input
      class="form-control"
        type="number"
        id="quantity"
        name="quantity"
        min="1"
        max="5"
        value="1"
      />
      <br />
       <label for="payMethod">
        Način plaćanja:<br />
        <input
          type="radio"
          name="paying"
          value="visa"
          id="visa"
          checked="checked"
        />
        <label for="visa">Visa</label>
        <input
          type="radio"
          name="paying"
          value="mastercard"
          id="mastercard"
        />
        <label for="visa">MasterCard</label>
        <input type="radio" name="paying" value="gotovina" id="Gotovina" />
        <label for="visa">Gotovina</label>
      </label>
      <br/>
      <label for="date">Datum narudžbe:</label>
      <input class="form-control" type="date" id="date" name="date" /><br />

      <label for="moreInfo">Dodatne informacije o narudžbi:</label><br />        
        <textarea id="textResizeNone" class="form-control" name="message" rows="3" cols="30">
            Dodatne informacije može navesti ovdje!
        </textarea>
      <p>
        <b>Napomena:</b> <i>Popust 10% na plaćanje u gotovini!</i>
        <i>Jedan prilog gratis!</i>
      </p>
    </fieldset>
    <fieldset class="btns">
      <legend class="actionsFooter">Akcije korisnika</legend>
      <hr/>
      <a class="btn btn-primary" href="narudzba.php"><i class="fas fa-redo"></i> Ponovno postavi</a>
      <a class="btn btn-danger" href="index.php"><i class="fas fa-times"></i> Otkaži</a>
      <button class="btn btn-success" type="submit"><i class="fas fa-share-square"></i> Naruči</button>
    </fieldset>
  </form>
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
