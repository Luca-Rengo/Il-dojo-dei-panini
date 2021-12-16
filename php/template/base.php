<!DOCTYPE html>
<html lang="it">
    <head>
        <!-- Bootstrap CSS -->
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="../css/base_style.css" rel="stylesheet" type="text/css"/>

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <title><?php echo $templateParams["titolo"];?></title>
    </head>
    <body>
        <header>
        <!-- NAVIGATION BAR -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> <!-- TODO: md , bg-dark o bg-light -->
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><img src="../imgs/logo.png" class="d-inline-block align-top logo-img" alt="Logo Dojo dei Panini" /></a> <!-- TODO: logo -->
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../html/shop.html">Shop</a> <!-- TODO: add link -->
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../html/about.html">About</a> <!-- TODO: add link -->
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../html/contatti.html">Contatti</a> <!-- TODO: add link -->
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Menù</a> <!-- TODO: add link -->
                  </li>
                </ul>

                <ul class="navbar-nav me-auto mb-2 mb-lg-0"> <!-- TODO: metterli sulla destra -->
                  <li class="nav-item">
                    <a href="../html/shop.html"><i class="fas fa-shopping-cart"></i><span class="sr-only">Shop</span></a>
                  </li>
                  <li class="nav-item">
                    <a href="../html/login.html"><i class="fas fa-user-circle"></i><span class="sr-only">Account</span></a>
                  </li>
                  <li class="nav-item">
                    <a href="#"><i class="fas fa-lightbulb"></i><span class="sr-only">Theme</span></a> <!-- TODO: meglio usare l'immagine. -->
                  </li>
                </ul>

                <form class="d-flex"> <!-- TODO: remove? -->
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>
        </header>

        <main>
        <?php
        if(isset($templateParams["nome"])){
            require($templateParams["nome"]);
        }
        ?>
        </main>

        <!-- TODO: FOOTER -->
        <footer class="page-footer bg-dark"> <!-- TODO: aggiungere una colonna per delle informazioni generali? -->
            <div class="bg-dark">
            <div class="container">
                <div class="row py-4 d-flex align-items-center">
                </div>
            </div>
            </div>

            <div class="container text-center text-md-left mt-5">
            <div class="row">
                <div class="col-md-3 mx-auto mb-4">
                <h6 class="text-uppercase font-weight-bold">Contattateci</h6>
                <hr class="bg-danger mb-4 mt-0 d-inline-block mx-auto" />
                <ul class="list-unstyled">
                    <li class="my-2"><i class="fas fa-home">Via Cesare Pavese, 50, Cesena (Italy)</i></li>
                    <li class="my-2"><i class="fas fa-envelope"> dojopanini@gmail.com</i></li> <!-- <img src="../icons/envelope-open-solid.svg" width="24" height="24" alt="" /> -->
                    <li class="my-2"><i class="fas fa-phone">(+39) 333 666 999</i></li>
                    <li class="my-2"><i class="fas fa-fax"></i>1-333-222-6666</li>
                </ul>
                </div>

                <div class="col-md-2 mx-auto mb-4">
                <h6 class="text-uppercase font-weight-bold">Menù</h6>
                <hr class="bg-danger mb-4 mt-0 d-inline-block mx-auto" />

                <ul class="list-unstyled">
                    <li class="my-2"><a href="../html/shop.html">Panini</a></li>
                    <li class="my-2"><a href="../html/shop.html">Bibite</a></li>
                    <li class="my-2"><a href="../html/shop.html">Pizze</a></li>
                    <li class="my-2"><a href="../html/shop.html">Vegetariano</a></li>
                </ul>
                </div>

                <div class="col-md-2 mx-auto mb-4">
                <h6 class="text-uppercase font-weight-bold">I nostri social</h6>
                <hr class="bg-danger mb-4 mt-0 d-inline-block mx-auto" />

                <ul class="list-unstyled">
                    <li class="my-2"><a href="https://github.com/Luca-Ale/Il-dojo-dei-panini"><i class="fab fa-github"></i></a></li>
                    <li class="my-2"><a href=""><i class="fab fa-twitter"></i></a></li>
                    <li class="my-2"><a href=""><i class="fab fa-instagram"></i></a></li>
                    <li class="my-2"><a href=""><i class="fab fa-facebook"></i></a></li>
                </ul>
                </div>

                <div class="col-md-3 mx-auto mb-4">
                <h6 class="text-uppercase font-weight-bold">Metodi di pagamento</h6>
                <hr class="bg-danger mb-4 mt-0 d-inline-block mx-auto" />

                <ul class="list-unstyled">
                    <li class="my-2"><i class="fab fa-paypal"></i></li>
                    <li class="my-2"><i class="fab fa-cc-visa"></i></li>
                    <li class="my-2"><i class="fab fa-cc-mastercard"></i></li>
                    <li class="my-2"><i class="fab fa-bitcoin"></i></li>
                </ul>
                </div>
            </div>
            </div>

            <div class="footer-copyright text-center py-3">
            <p>&copy; Copyright Il Dojo dei Panini</p>
            </div>

        </footer>    
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>