<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./assets/images/icon.png" type="image/png">
  <title>BrontoPlay</title>

  <!--
    - custom css link
  
  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"/>
  <!-- Owl Carousel CSS -->
  <!-- Aos.js CSS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  
  <link rel="stylesheet" href="./assets/css/main.css">
  <link rel="stylesheet" href="./assets/css/media_query.css">

  <!--
    - google font link
  -->
  <link href="https://fonts.googleapis.com/css?family=Inter:100,200,300,regular,500,600,700,800,900" rel="stylesheet" />
</head>

<body>




  <!--
    - main container
  -->
  <div class="containerr">

    <!--
      - #HEADER SECTION
    -->

    <header class="">
      <div class="navbar">

        <!--
          - menu button for small screen
        -->
        <button class="navbar-menu-btn">
          <span class="one"></span>
          <span class="two"></span>
          <span class="three"></span>
        </button>


        <a href="#" class="navbar-brand">
          <img src="./assets/images/logo.png" alt="">
        </a>

        <!--
          - navbar navigation
        -->

        <nav class="">
          <ul class="navbar-navv">

            <li> <a href="home.php" class="navbar-link">Home</a> </li>
            <li> <a href="movie.php" class="navbar-link">Movies</a> </li>
            <li> <a href="radio.php" class="navbar-link">Radio</a> </li>
            <li> <a href="about.php" class="navbar-link">About</a> </li>

          </ul>
        </nav>

        <!--
          - search and sign-in
        -->

        <div class="navbar-actions">

          <form action="#" class="navbar-form">
            <input type="text" name="search" placeholder="I'm looking for..." class="navbar-form-search">

            <button class="navbar-form-btn">
              <ion-icon name="search-outline"></ion-icon>
            </button>

            <button class="navbar-form-close">
              <ion-icon name="close-circle-outline"></ion-icon>
            </button>
          </form>


          <!--
            - search button for small screen
          -->

          <button class="navbar-search-btn">
            <ion-icon name="search-outline"></ion-icon>
          </button>

          <a href="logout.php" class="navbar-signin">
            <span>Sign out</span>
            <ion-icon name="log-out-outline"></ion-icon>
          </a>

        </div>

      </div>
    </header>





    <!--
      - MAIN SECTION
    -->
    <main>


      <!--
        - #MOVIES SECTION
      -->
      
      <section class="movies">
        <hr>
        <div class="container-play">
          <div class="align-items-start">
            <div class="row row-video-palyer">
              <!-- <div class="col-md-9"> -->
                <div class="tab-content" id="tabContent">
                  <div class="tab-pane fade show active" id="eps1" role="tabpanel">
                    <div class="ratio" style="--bs-aspect-ratio: 50%">
                      <iframe
                        src="https://brontoplaystorage.blob.core.windows.net/brontoplayfilm/Saving Private Ryan (1998) Trailer #1 _ Movieclips Classic Trailers.mp4"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen
                      ></iframe>
                    </div>
                  </div>
            
              </div>
            </div>
          </div>
        </div>
    
        <!-- Main Content -->
        <div class="details">
          <div class="row">
            <div class="col-md-2">
              <img src="./assets/images/movies/saving-private-ryan.jpg" class="details-img" />
            </div>
            <div class="col-md-10">
              <h1>Saving Private Ryan</h1>
              <p class="status-film">
                <div class="badge bg-success">Original</div> | <div class="badge bg-secondary">13+</div> | <div class="badge bg-warning">1998</div> | <div class="badge bg-spanrimary">3:21:10</div>
              </p>
              <p class="rating">Rating : 9
                <i class="bi bi-star-fill text-success"></i>
                <i class="bi bi-star-fill text-success"></i>
                <i class="bi bi-star-fill text-success"></i>
                <i class="bi bi-star-fill text-success"></i>
                <i class="bi bi-star-half text-success"></i>
              </p>
              <p class="genre">Genre : Perang, Sejarah, Laga</p>
              <p class="negara">Negara : Amerika Serikat </p>
              <p class="sutradara">Sutradara : Steven Spielberg</p>
              <p class="pemain">Pemain : Tom Hanks, Tom Sizemore, Edward Burns, Barry Pepper, Vin Diesel, Giovanni Ribisi, Adam Goldberg, Jeremy Davies, dan Matt Damon.</p>
              <p class="ReadMore">Deskripsi : 
              “Saving Private Ryan” (1998) merupakan salah satu film perang berkualitas dengan prestasi mentereng. 7 nominasi Academy Awards ke-71 berhasil diraih film garapan Stephen Spielberg ini, dimana lima diantaranya berhasil diraih. Film ini pun juga menginspirasi sejumlah sineas, salah satunya Quentin Tarantino. Sutradara nyentrik itu mengaku kalau “Inglourious Basterds” (2009) garapannya terpengaruh oleh film ini. Sesuai judulnya, film ini berkisah tentang upaya menyelamatkan seorang prajurit bernama Ryan (Matt Damon) alias James Frances Ryan. Upaya itu dilakukan oleh kapten John H. Miller (Tom Hanks) bersama anak buahnya. Misi itu dilakukan pada masa-masa Perang Dunia II (PD II), dimana saat itu Amerika selaku sekutu tengah menyerang Jerman.
                
              </p>
            </div>
          </div>
         
        </div>
       
    </main>





    <!--
      - FOOTER SECTION
    -->
    <footer>

   
        <hr>
      <div class="footer-copyright">

        <div class="copyright">
          <p>&copy; copyright 2022 BrontoPlay</p>
        </div>

        <div class="wrapper">
          <a href="#">Privacy policy</a>
          <a href="#">Terms and conditions</a>
        </div>

      </div>

    </footer>

  </div>



  <!--
    - custom js link
  -->
  <script src="./assets/js/main.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>