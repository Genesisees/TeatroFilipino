<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Theater</title>
    <link rel="icon" href="image/logo.png" type="image/x-icon"/>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="carousel.css">


  </head>

  <body>

  <a href="../index.php" class="logo">
     <img src="image/logo.png" alt="Logo" class="logo">
  </a>


    <section id="tranding">
      <div class="container">
        <h1 class="text-center section-heading">THEATER SHOWS</h1>
      </div>
      <div class="container">
        <div class="swiper tranding-slider">
          <div class="swiper-wrapper">
            
            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
              <a href="Church 1.php"> <!-- Replace "page1.html" with the actual link for the first image -->
                <div class="tranding-slide-img">
                  <img src="image/church-1-b.jpg" alt="Ang Unang Aswang">
                </div>
              </a>
                <div class="tranding-slide-content">
                <div class="tranding-slide-content-bottom">
                  <h2 class="food-name">
                    Ang Unang Aswang
                  </h2>
                </div>
              </div>
            </div>
            <!-- Slide-end -->

            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">  
              <a href="Church 2.php"> <!-- Replace "page1.html" with the actual link for the first image -->            
            <div class="tranding-slide-img">
                <img src="image/church-2-b.jpg" alt="Labada">
            </div>
              <div class="tranding-slide-content">
                <div class="tranding-slide-content-bottom">
                  <h2 class="food-name">
                    Labada
                  </h2>
                </div>
              </div>
            </div>
            <!-- Slide-end -->

            <!-- Slide-start -->
            <div class="swiper-slide tranding-slide">
              <a href="Church 3.php"> <!-- Replace "page1.html" with the actual link for the first image -->
              <div class="tranding-slide-img">
                <img src="image/church-3-b.jpg" alt="Kung paano nanalo si Rosang Taba">
              </div>
              <div class="tranding-slide-content">
                <div class="tranding-slide-content-bottom">
                  <h2 class="food-name">
                    Kung paano nanalo si Rosang Taba
                  </h2>
                </div>
              </div>
            </div>
            <!-- Slide-end -->

            </div>
          </div>

          <div class="tranding-slider-control">
            <div class="swiper-button-prev slider-arrow">
              <ion-icon name="arrow-back-outline"></ion-icon>
            </div>
            <div class="swiper-button-next slider-arrow">
              <ion-icon name="arrow-forward-outline"></ion-icon>
            </div>
            <div class="swiper-pagination"></div>
          </div>

        </div>
      </div>
    </section>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
  </body>

</html>