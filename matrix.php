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
                        src="https://brontoplaystorage.blob.core.windows.net/brontoplayfilm/Matrix Trailer.mp4"
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
              <img src="./assets/images/movies/matrix.jpg" class="details-img" />
            </div>
            <div class="col-md-10">
              <h1>The Matrix Resurrections</h1>
              <p class="status-film">
                <div class="badge bg-success">Original</div> | <div class="badge bg-secondary">13+</div> | <div class="badge bg-warning">2021</div> | <div class="badge bg-spanrimary">3:11:00</div>
              </p>
              <p class="rating">Rating : 9,5
                <i class="bi bi-star-fill text-success"></i>
                <i class="bi bi-star-fill text-success"></i>
                <i class="bi bi-star-fill text-success"></i>
                <i class="bi bi-star-fill text-success"></i>
                <i class="bi bi-star-half text-success"></i>
              </p>
              <p class="genre">Genre : Drama sejarah</p>
              <p class="negara">Negara : Amerika Serikat </p>
              <p class="sutradara">Sutradara : Lana Wachowski</p>
              <p class="pemain">Pemain : Yahya Abdul-Mateen II, Jessica Henwick, Jonathan Groff, Neil Patrick Harris, dan Priyanka Chopra Jonas.</p>
              <p class="ReadMore">Deskripsi : 
              Lana Wachowski selaku sutradaranya terbilang benar-benar menjual faktor nostalgia terhadap penggemar setia waralaba film ini lewat The Matrix Resurrections. Soalnya, adegan pembuka dari film ini benar-benar langsung membuat kamu teringat dengan opening The Matrix (1999) ketika Trinity disergap oleh para Agent. Nuansa nostalgia juga akan benar-benar bisa kamu rasakan sepanjang menonton film ini lewat dialog serta tindakan dari para karakternya. Tak cuma itu, kamu juga beberapa kali bisa melihat adegan flashback dari trilogi The Matrix sebelumnya. Pokoknya, film ini akan membuat kamu yang mengikuti trilogi The Matrix sejak awal merasakan nostalgia seutuhnya. Hubungan asmara antara Neo dan Trinity juga terbilang menjadi lebih tereksplor lagi pada film ini ketimbang dalam trilogi orisinalnya. Apalagi, Resurrections juga mengungkap betapa pentingnya hubungan antara Neo dan Trinity terhadap Matrix. Intinya, kamu akan bisa bernostalgia dengan cerita dan permasalahan yang baru lewat film keempatnya ini.
                
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