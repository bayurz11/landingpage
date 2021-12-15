<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>


  <link rel="stylesheet" href="./css/style.css" />
  <title>Nur Azani Bayu Rezki</title>
  <link rel="icon" type="image/x-icon" href="./img/pibio.svg " />
</head>

<body>

  <!-- Background home -->
  <div class="bg-home">
    <!-- Navbar -->
    <nav class="navbar">
      <img margin-left=40px; width=60px; height=50px; float=left; src="./img/pibio1.svg" class="logo" alt="" />
      <ul class="nav-link">
        <li><a href="#" class="text-high">Home</a></li>
        <li><a href="#portfolio">Portfolio</a></li>
        <li><a href="#about">About</a></li>
      </ul>

      <!-- Hamburger Menu -->
      <div class="burger">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </nav>
    <!-- Main -->
    <section class="main">
      <div class="main-container">
        <!-- Title -->
        <div class="title">
          <h1>My Profile.</h1> <br>
          <h1>Nur Azani Bayu Rezki</h1>

        </div>
        <!-- Social box -->
        <div class="social-box">
          <a href="#" target="_blank">
            <div class="box">
              <img src="./img/facebook-app-symbol.png" alt="" />
            </div>
          </a>
          <a href="https://www.instagram.com/bayu_rez" target="_blank">
            <div class="box">
              <img src="./img/instagram.png" alt="" />
            </div>
          </a>
          <a href="https://github.com/bayurz11" target="_blank">
            <div class="box">
              <img src="./img/github.png" alt="" />
            </div>
          </a>
          <a href="">
            <div class="box">
              <img src="./img/email.png" alt="" />
            </div>
          </a>
        </div>
        <!-- Address & Phone -->
        <div class="address-phone">
          <img src="./img/maps-and-flags.png" alt="" />
          <p>Prum.Citre Swarna Grande, Blok D16 no.1, KARAWANG</p>
        </div>
        <div class="address-phone">
          <img src="./img/phone-call.png" alt="" />
          <p>+(62) 81318207954</p>
        </div>
      </div>
      <!-- Background hero -->
      <div class="bg-img">
        <img src="./img/im.png" alt="" />
      </div>
    </section>
  </div>
  <div class="page1">
    <section class="main">
      <div class="main-container">
        <!-- prt -->
        <div class="portfolio">
          <h2 id="portfolio"> Portfolio</h2>
          <div id="container">
            <div id="toggleContainer">

              <div id="toggle">
                <div id="outer3">
                  <div id="slider3"></div>
                </div>
                <i class='bx bx-grid-horizontal'></i>
              </div>
            </div>
            <div id="galleryView">
              <div id="galleryContainer">
                <div id="leftView"></div>
                <button id="navLeft" class="navBtns"><i class='bx bx-chevron-left'></i></button>
                <a id="linkTag">
                  <div id="mainView"></div>
                </a>
                <div id="rightView"></div>
                <button id="navRight" class="navBtns"><i class='bx bx-chevron-right'></i></button>
              </div>
            </div>
            <div id="tilesView">
              <div id="tilesContainer"></div>
            </div>
          </div>


    </section>
  </div>
  <div class="page1">
    <section class="main">
      <div class="main-container">
        <!-- abt -->
        <div class="about">
          <h2 id="about"> About</h2>


        </div>
    </section>
  </div>


  <script src="./js/script.js"></script>
  <script src="https://unpkg.com/boxicons@2.1.1/dist/boxicons.js"></script>

</body>

</html>