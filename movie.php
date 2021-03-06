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

          <img src="./assets/images/1.jpg" class="banner-img" alt="">

          <div class="card-content">

            <h2 class="card-title">Enjoy The Latest Movies <br> On BrontoPlay</h2>
            <br><br>
          </div>

        </div>
      </section>





      <!--
        - #MOVIES SECTION
      -->
      <section class="movies">

        
        <!--
          - movies grid
        -->
        <h2 class="section-heading">Movie</h2>
        <br>
        <div class="movies-grid">

          <div class="movie-card">

            <div class="card-head">
              <img src="./assets/images/movies/red-notice.jpg" alt="" class="card-img">

              <div class="card-overlay">

                <div class="bookmark">
                  <ion-icon name="bookmark-outline"></ion-icon>
                </div>

                <div class="rating">
                  <ion-icon name="star-outline"></ion-icon>
                  <span>6.4</span>
                </div>

                <div class="play">
                  <a href="red-notice.php"><ion-icon name="play-circle-outline"></ion-icon></a>
                </div>

              </div>
            </div>

            <div class="card-body">
              <h3 class="card-title">Red Notice</h3>

              <div class="card-info">
                <span class="genre">Action/Comedy</span>
                <span class="year">2021</span>
              </div>
            </div>

          </div>

          <div class="movie-card">

            <div class="card-head">
              <img src="./assets/images/movies/spider-men.jpg" alt="" class="card-img">

              <div class="card-overlay">

                <div class="bookmark">
                  <ion-icon name="bookmark-outline"></ion-icon>
                </div>

                <div class="rating">
                  <ion-icon name="star-outline"></ion-icon>
                  <span>7.4</span>
                </div>

                <div class="play">
                  <a href="spider-men.php"><ion-icon name="play-circle-outline"></ion-icon></a>
                </div>

              </div>
            </div>

            <div class="card-body">
              <h3 class="card-title">Spider-Man: Homecoming</h3>

              <div class="card-info">
                <span class="genre">Action/Adventure</span>
                <span class="year">2017</span>
              </div>
            </div>

          </div>

          <div class="movie-card">

            <div class="card-head">
              <img src="./assets/images/movies/matrix.jpg" alt="" class="card-img">

              <div class="card-overlay">

                <div class="bookmark">
                  <ion-icon name="bookmark-outline"></ion-icon>
                </div>

                <div class="rating">
                  <ion-icon name="star-outline"></ion-icon>
                  <span>N/A</span>
                </div>

                <div class="play">
                  <a href="matrix.php"><ion-icon name="play-circle-outline"></ion-icon></a>
                </div>

              </div>
            </div>

            <div class="card-body">
              <h3 class="card-title">The Matrix Resurrections</h3>

              <div class="card-info">
                <span class="genre">Sci-fi/Action</span>
                <span class="year">2021</span>
              </div>
            </div>

          </div>

          <div class="movie-card">

            <div class="card-head">
              <img src="./assets/images/movies/eternals.jpg" alt="" class="card-img">

              <div class="card-overlay">

                <div class="bookmark">
                  <ion-icon name="bookmark-outline"></ion-icon>
                </div>

                <div class="rating">
                  <ion-icon name="star-outline"></ion-icon>
                  <span>6.8</span>
                </div>

                <div class="play">
                  <a href="eternals.php"><ion-icon name="play-circle-outline"></ion-icon></a>
                </div>

              </div>
            </div>

            <div class="card-body">
              <h3 class="card-title">Eternals</h3>

              <div class="card-info">
                <span class="genre">Adventure/Action</span>
                <span class="year">2021</span>
              </div>
            </div>

          </div>

          <div class="movie-card">

            <div class="card-head">
              <img src="./assets/images/movies/dune.jpg" alt="" class="card-img">

              <div class="card-overlay">

                <div class="bookmark">
                  <ion-icon name="bookmark-outline"></ion-icon>
                </div>

                <div class="rating">
                  <ion-icon name="star-outline"></ion-icon>
                  <span>8.2</span>
                </div>

                <div class="play">
                  <a href="dune.php"><ion-icon name="play-circle-outline"></ion-icon></a>
                </div>

              </div>
            </div>

            <div class="card-body">
              <h3 class="card-title">Dune</h3>

              <div class="card-info">
                <span class="genre">Sci-fi/Adventure</span>
                <span class="year">2021</span>
              </div>
            </div>

          </div>

          <div class="movie-card">

            <div class="card-head">
              <img src="./assets/images/movies/1917.jpg" alt="" class="card-img">

              <div class="card-overlay">

                <div class="bookmark">
                  <ion-icon name="bookmark-outline"></ion-icon>
                </div>

                <div class="rating">
                  <ion-icon name="star-outline"></ion-icon>
                  <span>8.3</span>
                </div>

                <div class="play">
                  <a href="1917.php"><ion-icon name="play-circle-outline"></ion-icon></a>
                </div>

              </div>
            </div>

            <div class="card-body">
              <h3 class="card-title">1917</h3>

              <div class="card-info">
                <span class="genre">War/Drama</span>
                <span class="year">2019</span>
              </div>
            </div>

          </div>

          <div class="movie-card">

            <div class="card-head">
              <img src="./assets/images/movies/shang-chi.jpg" alt="" class="card-img">

              <div class="card-overlay">

                <div class="bookmark">
                  <ion-icon name="bookmark-outline"></ion-icon>
                </div>

                <div class="rating">
                  <ion-icon name="star-outline"></ion-icon>
                  <span>7.6</span>
                </div>

                <div class="play">
                  <a href="shang-chi.php"><ion-icon name="play-circle-outline"></ion-icon></a>
                </div>

              </div>
            </div>

            <div class="card-body">
              <h3 class="card-title">Shang-Chi and The Legend of The Ten Rings</h3>

              <div class="card-info">
                <span class="genre">Action/Fantasy</span>
                <span class="year">2021</span>
              </div>
            </div>

          </div>

          <div class="movie-card">

            <div class="card-head">
              <img src="./assets/images/movies/casino-royale.jpg" alt="" class="card-img">

              <div class="card-overlay">

                <div class="bookmark">
                  <ion-icon name="bookmark-outline"></ion-icon>
                </div>

                <div class="rating">
                  <ion-icon name="star-outline"></ion-icon>
                  <span>8.0</span>
                </div>

                <div class="play">
                  <a href="casino-royale.php"><ion-icon name="play-circle-outline"></ion-icon></a>
                </div>

              </div>
            </div>

            <div class="card-body">
              <h3 class="card-title">Casino Royale</h3>

              <div class="card-info">
                <span class="genre">Action/Adventure</span>
                <span class="year">2006</span>
              </div>
            </div>

          </div>

          <div class="movie-card">

            <div class="card-head">
              <img src="./assets/images/movies/dark-knight.jpg" alt="" class="card-img">

              <div class="card-overlay">

                <div class="bookmark">
                  <ion-icon name="bookmark-outline"></ion-icon>
                </div>

                <div class="rating">
                  <ion-icon name="star-outline"></ion-icon>
                  <span>9.0</span>
                </div>

                <div class="play">
                  <a href="dark-knight.php"><ion-icon name="play-circle-outline"></ion-icon></a>
                </div>

              </div>
            </div>

            <div class="card-body">
              <h3 class="card-title">The Dark Knight</h3>

              <div class="card-info">
                <span class="genre">Action/Adventure</span>
                <span class="year">2008</span>
              </div>
            </div>

          </div>

          <div class="movie-card">

            <div class="card-head">
              <img src="./assets/images/movies/panther.jpg" alt="" class="card-img">

              <div class="card-overlay">

                <div class="bookmark">
                  <ion-icon name="bookmark-outline"></ion-icon>
                </div>

                <div class="rating">
                  <ion-icon name="star-outline"></ion-icon>
                  <span>7.3</span>
                </div>

                <div class="play">
                  <a href="panther.php"><ion-icon name="play-circle-outline"></ion-icon></a>
                </div>

              </div>
            </div>

            <div class="card-body">
              <h3 class="card-title">Black Panther</h3>

              <div class="card-info">
                <span class="genre">Action/Adventure</span>
                <span class="year">2018</span>
              </div>
            </div>

          </div>

          <div class="movie-card">

            <div class="card-head">
              <img src="./assets/images/movies/venom.jpg" alt="" class="card-img">

              <div class="card-overlay">

                <div class="bookmark">
                  <ion-icon name="bookmark-outline"></ion-icon>
                </div>

                <div class="rating">
                  <ion-icon name="star-outline"></ion-icon>
                  <span>6.7</span>
                </div>

                <div class="play">
                  <a href="venom.php"><ion-icon name="play-circle-outline"></ion-icon></a>
                </div>

              </div>
            </div>

            <div class="card-body">
              <h3 class="card-title">Venom</h3>

              <div class="card-info">
                <span class="genre">Action/Adventure</span>
                <span class="year">2018</span>
              </div>
            </div>

          </div>

          <div class="movie-card">

            <div class="card-head">
              <img src="./assets/images/movies/LOTR.jpg" alt="" class="card-img">

              <div class="card-overlay">

                <div class="bookmark">
                  <ion-icon name="bookmark-outline"></ion-icon>
                </div>

                <div class="rating">
                  <ion-icon name="star-outline"></ion-icon>
                  <span>8.9</span>
                </div>

                <div class="play">
                  <a href="LOTR.php"><ion-icon name="play-circle-outline"></ion-icon></a>
                </div>

              </div>
            </div>

            <div class="card-body">
              <h3 class="card-title">Lord Of The Rings: Return Of The King</h3>

              <div class="card-info">
                <span class="genre">Fantasy/Adventure</span>
                <span class="year">2003</span>
              </div>
            </div>

          </div>

          <div class="movie-card">

            <div class="card-head">
              <img src="./assets/images/movies/saving-private-ryan.jpg" alt="" class="card-img">

              <div class="card-overlay">

                <div class="bookmark">
                  <ion-icon name="bookmark-outline"></ion-icon>
                </div>

                <div class="rating">
                  <ion-icon name="star-outline"></ion-icon>
                  <span>8.6</span>
                </div>

                <div class="play">
                  <a href="saving-private-ryan.php"><ion-icon name="play-circle-outline"></ion-icon></a>
                </div>

              </div>
            </div>

            <div class="card-body">
              <h3 class="card-title">Saving Private Ryan</h3>

              <div class="card-info">
                <span class="genre">War/Action</span>
                <span class="year">1998</span>
              </div>
            </div>

          </div>

          <div class="movie-card">

            <div class="card-head">
              <img src="./assets/images/movies/interstaller.jpg" alt="" class="card-img">

              <div class="card-overlay">

                <div class="bookmark">
                  <ion-icon name="bookmark-outline"></ion-icon>
                </div>

                <div class="rating">
                  <ion-icon name="star-outline"></ion-icon>
                  <span>8.6</span>
                </div>

                <div class="play">
                  <a href="interstaller.php"><ion-icon name="play-circle-outline"></ion-icon></a>
                </div>

              </div>
            </div>

            <div class="card-body">
              <h3 class="card-title">Interstellar</h3>

              <div class="card-info">
                <span class="genre">Sci-fi/Adventure</span>
                <span class="year">2014</span>
              </div>
            </div>

          </div>

          <div class="movie-card">

            <div class="card-head">
              <img src="./assets/images/movies/gladiator.jpg" alt="" class="card-img">

              <div class="card-overlay">

                <div class="bookmark">
                  <ion-icon name="bookmark-outline"></ion-icon>
                </div>

                <div class="rating">
                  <ion-icon name="star-outline"></ion-icon>
                  <span>8.5</span>
                </div>

                <div class="play">
                  <a href="gladiator.php"><ion-icon name="play-circle-outline"></ion-icon></a>
                </div>

              </div>
            </div>

            <div class="card-body">
              <h3 class="card-title">Gladiator</h3>

              <div class="card-info">
                <span class="genre">Action/Adventure</span>
                <span class="year">2000</span>
              </div>
            </div>

          </div>

          <div class="movie-card">

            <div class="card-head">
              <img src="./assets/images/movies/endgame.jpg" alt="" class="card-img">

              <div class="card-overlay">

                <div class="bookmark">
                  <ion-icon name="bookmark-outline"></ion-icon>
                </div>

                <div class="rating">
                  <ion-icon name="star-outline"></ion-icon>
                  <span>8.4</span>
                </div>

                <div class="play">
                  <a href="endgame.php"><ion-icon name="play-circle-outline"></ion-icon></a>
                </div>

              </div>
            </div>

            <div class="card-body">
              <h3 class="card-title">Avengers: Endgame</h3>

              <div class="card-info">
                <span class="genre">Action/Sci-fi</span>
                <span class="year">2019</span>
              </div>
            </div>

          </div>

          <div class="movie-card">

            <div class="card-head">
              <img src="./assets/images/movies/ww84.jpg" alt="" class="card-img">

              <div class="card-overlay">

                <div class="bookmark">
                  <ion-icon name="bookmark-outline"></ion-icon>
                </div>

                <div class="rating">
                  <ion-icon name="star-outline"></ion-icon>
                  <span>5.4</span>
                </div>

                <div class="play">
                  <a href="ww84.php"><ion-icon name="play-circle-outline"></ion-icon></a>
                </div>

              </div>
            </div>

            <div class="card-body">
              <h3 class="card-title">Wonder Woman 1984</h3>

              <div class="card-info">
                <span class="genre">Action/Adventure</span>
                <span class="year">2020</span>
              </div>
            </div>

          </div>

          <div class="movie-card">

            <div class="card-head">
              <img src="./assets/images/movies/captain-marvel.jpg" alt="" class="card-img">

              <div class="card-overlay">

                <div class="bookmark">
                  <ion-icon name="bookmark-outline"></ion-icon>
                </div>

                <div class="rating">
                  <ion-icon name="star-outline"></ion-icon>
                  <span>6.8</span>
                </div>

                <div class="play">
                  <a href="captain-marvel.php"><ion-icon name="play-circle-outline"></ion-icon></a>
                </div>

              </div>
            </div>

            <div class="card-body">
              <h3 class="card-title">Captain Marvel</h3>

              <div class="card-info">
                <span class="genre">Action/Sci-fi</span>
                <span class="year">2019</span>
              </div>
            </div>

          </div>

        </div>

        <!--
          - load more button
        -->
        <!-- <button class="load-more">LOAD MORE</button> -->

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