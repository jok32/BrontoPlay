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
                        src="https://brontoplaystorage.blob.core.windows.net/brontoplayfilm/Marvel Studios' Shang-Chi and The Legend of the Ten Rings _ Official Trailer.mp4"
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
              <img src="./assets/images/movies/shang-chi.jpg" class="details-img" />
            </div>
            <div class="col-md-10">
              <h1>Shang Chi</h1>
              <p class="status-film">
                <div class="badge bg-success">Original</div> | <div class="badge bg-secondary">13+</div> | <div class="badge bg-warning">2018</div> | <div class="badge bg-spanrimary">3:41:10</div>
              </p>
              <p class="rating">Rating : 9,5
                <i class="bi bi-star-fill text-success"></i>
                <i class="bi bi-star-fill text-success"></i>
                <i class="bi bi-star-fill text-success"></i>
                <i class="bi bi-star-fill text-success"></i>
                <i class="bi bi-star-half text-success"></i>
              </p>
              <p class="genre">Genre : Superhero</p>
              <p class="negara">Negara : Amerika Serikat </p>
              <p class="sutradara">Sutradara : Destin Daniel Cretton</p>
              <p class="pemain">Pemain : Awkwafina, Simu Liu, Tony Leung, Meng'er Zhang.</p>
              <p class="ReadMore">Deskripsi : 
              Sinopsis dari Shang-Chi and the Legend of the Ten Rings mengisahkan seorang pemuda bernama Shang-Chi (Simu Liu) yang menjalani kehidupan biasa di San Fransisco. Namun, pada suatu hari dia diburu oleh sekelompok orang yang ternyata merupakan bagian dari organisasi teroris bernama Ten Rings yang dipimpin ayahnya. Dia pun kini harus menghadapi masa lalunya tersebut sekaligus ayahnya yang sudah lama ditinggalkannya.
                
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