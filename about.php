<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
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
  <link rel="stylesheet" href="./assets/css/about.css">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/> -->
  <script src="https://kit.fontawesome.com/dd9af7210e.js" crossorigin="anonymous"></script>

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
      <hr size="0" color="grey" noshade>

      <!--
        - #BANNER SECTION
      -->
      <!-- <section class="banner">
        <div class="banner-card">

          <img src="./assets/images/John-Wick-3.jpg" class="banner-img" alt="">

          <div class="card-content">

            <h2 class="card-title">Nikmati Movie terbaru <br> di BrontoPlay</h2>
            <br><br>
          </div>

        </div>
      </section> -->





      <!--
        - #MOVIES SECTION
      -->
      <section class="movies">

      
        <br><br>
        <h2  class="section-heading" style="text-align:center">About</h2>
        <br>
        <p> Kami dari kelompok 1 membuat sebuah Web App bernama BrontoPlay. BrontoPlay merupakan web yang digunakan untuk menonton film dan mendengarkan radio. web tersebut dibuat guna memenuhi tugas Capstone
          Project dari Program MSIB pada mitra Mari Belajar khususnya path Intelegence Cloud.
          
        </p>
        <br><br>
        <h2 class="page-title" style="text-align:center">Our <b>Team</b></h2>
        <div class="containerr">
          
          
          <div class="box">
              <div class="top-bar"></div>
                  

                  <div class="details">
                      <img src="./assets/images/team/arif.jpg" alt="">
                      <strong>Arif Rizaldi</strong>
                      <p>Cloud Engineer</p>
                  </div>

                  <div class="btn">
                      <a href="https://www.facebook.com/arif.rizaldi/"><i class="fab fa-facebook-f"></i></a>
                      <a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a>
                      <a href="https://www.instagram.com/arif.rizaldi/"><i class="fab fa-instagram"></i></a>
                  </div>
              </div>
          <div class="box">
              <div class="top-bar"></div>
                  

                  <div class="details">
                      <img src="./assets/images/team/faisal.jpeg" alt="">
                      <strong>Achmad Faisal</strong>
                      <p>Web Developer</p>
                  </div>

                  <div class="btn">
                      <a href="https://www.facebook.com/profile.php?id=100054565795963"><i class="fab fa-facebook-f"></i></a>
                      <a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a>
                      <a href="https://www.instagram.com/faisalachh/"><i class="fab fa-instagram"></i></a>
                  </div>
              </div>
          <div class="box">
              <div class="top-bar"></div>
                  
                  <div class="details">
                      <img src="./assets/images/team/adia.jpg" alt="">
                      <strong>Adia Nullah</strong>
                      <p>Database Admin</p>
                  </div>

                  <div class="btn">
                      <a href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a>
                      <a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a>
                      <a href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                  </div>
                </div>
          <div class="box">
              <div class="top-bar"></div>
                  

                  <div class="details">
                      <img src="./assets/images/team/anisa.jpeg" alt="">
                      <strong>Anisa Amanatul</strong>
                      <p>UI/UX</p>
                  </div>

                  <div class="btn">
                      <a href="https://www.facebook.com/anisa.ah.186"><i class="fab fa-facebook-f"></i></a>
                      <a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a>
                      <a href="https://instagram.com/ansamntlhsnh?igshid=YmMyMTA2M2Y="><i class="fab fa-instagram"></i></a>
                  </div>
              
          </div>

          <div class="box">
            <div class="top-bar"></div>
                

                <div class="details">
                    <img src="./assets/images/team/april.jpeg" alt="">
                    <strong>Apriliya Rosada</strong>
                    <p>UI/UX</p>
                </div>

                <div class="btn">
                    <a href="https://m.facebook.com/apriliya.r.5872"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com/yourrosemary_?t=89iMsYqOWtZF0hFX59O40A&s=09"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/apriliyarosada/"><i class="fab fa-instagram"></i></a>
                </div>
      </div>
        
      
      </section>
      <a href="https://sociabuzz.com/brontoplay/tribe"><button class="load-more">Beri Dukungan</button></a>



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