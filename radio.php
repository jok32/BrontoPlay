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
  
  <link rel="stylesheet" href="./assets/css/main.css">
  <link rel="stylesheet" href="./assets/css/media_query.css">
  <link rel="stylesheet" href="./assets/css/radio.css">
  <!-- <link rel="stylesheet" href="assets/css/index.css"> -->

  <!--
    - google font link
  -->
  <link href="https://fonts.googleapis.com/css?family=Inter:100,200,300,regular,500,600,700,800,900" rel="stylesheet" />
</head>

<body>




  <!--
    - main container
  -->
  <div class="container">

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
        - #BANNER SECTION
      -->
      <section class="banner">
        <div class="banner-card">

          <img src="./assets/images/tes3.png" class="banner-img" alt="">

          <div class="card-content">

            <h2 class="card-title">Listen To The Latest Radio <br> On BrontoPlay</h2>
            <br><br>
          </div>
        </div>
      </section>



      <section class="movies"></section>


      <!--
        - #CATEGORY SECTION
      -->
      <section class="category" id="category">
        <h2 class="section-heading">Radio</h2><br>
        <div class="music-container">
          <div class="box">
              <div class="image">
                 <img src="./assets/images/radio/mnc.jpg" alt="">
              </div>
              <div class="music">
                  <audio src="https://r.sindonews.tv/trijayafm/;stream.nsv" controls></audio>
              </div>
          </div>

          <div class="box">
            <div class="image">
               <img src="./assets/images/radio/iradio.jpg" alt="">
            </div>
            <div class="music">
                <audio src="https://stream.radiojar.com/4ywdgup3bnzuv" controls></audio>
            </div>
        </div>
 

        <div class="box">
            <div class="image">
               <img src="./assets/images/radio/trax.png" alt="">
            </div>
            <div class="music">
                <audio src="https://stream.radiojar.com/rrqf78p3bnzuv" controls></audio>
            </div>
        </div>


        <div class="box">
          <div class="image">
             <img src="./assets/images/radio/hard.png" alt="">
          </div>
          <div class="music">
              <audio src="https://stream.radiojar.com/7csmg90fuqruv" controls></audio>
          </div>
      </div>

      <div class="box">
        <div class="image">
           <img src="./assets/images/radio/bbc.jpg" alt="">
        </div>
        <div class="music">
            <audio src="https://stream.live.vc.bbcmedia.co.uk/bbc_radio_one" controls></audio>
        </div>
    </div>

      <div class="box">
          <div class="image">
             <img src="./assets/images/radio/vibe.jpg" alt="">
          </div>
          <div class="music">
              <audio src="https://stream.live.vc.bbcmedia.co.uk/bbc_asian_network" controls></audio>
          </div>
      </div>

      <div class="box">
              <div class="image">
                 <img src="./assets/images/radio/global.png" alt="">
              </div>
              <div class="music">
                  <audio src="https://stream.live.vc.bbcmedia.co.uk/bbc_world_service" controls></audio>
              </div>
          </div>

        <div class="box">
              <div class="image">
                 <img src="./assets/images/radio/bbcmusic.jpg" alt="">
              </div>
              <div class="music">
                  <audio src="http://stream.live.vc.bbcmedia.co.uk/bbc_6music" controls></audio>
              </div>
          </div>

      <div class="box">
        <div class="image">
           <img src="./assets/images/radio/urban.png" alt="">
        </div>
        <div class="music">
            <audio src="https://streams.radio.co/sf069f3c03/listen" controls></audio>
        </div>
    </div>

    <div class="box">
        <div class="image">
           <img src="./assets/images/radio/power.png" alt="">
        </div>
        <div class="music">
            <audio src="https://vintageradio.ice.infomaniak.ch/vintageradio-high.mp3" controls></audio>
        </div>
    </div>

      </div>
        

      </section>

    </main>





    <!--
      - FOOTER SECTION
    -->
    <footer>

      

        

      <hr size="0" color="grey" noshade>

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