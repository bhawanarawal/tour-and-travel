<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>

  <link rel="icon" type="image/x-icon" href="/images/t.jpg">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <section class="header">
    <a href="home.php"> <i class='fas fa-plane-departure' style='font-size:20px;color:blue'></i>Travel </a>
    <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>

    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>
  </section>

  <section class="home">
    <div class="swiper home-slider">
      <div class="swiper-wrapper">

        <div class="swiper-slide slide" style="background:url(images/picture-1.jpg)no-repeat">
          <div class="content">
            <span>explore, discover, travel</span>
            <h3>travel around the world</h3>
            <a href="package.php" class="btn">discover more</a>

          </div>
        </div>

        <div class="swiper-slide slide" style="background:url(images/home-5.jpg)no-repeat">
          <div class="content">
            <span>explore, discover, travel</span>
            <h3>discover the new places</h3>
            <a href="package.php" class="btn">discover more</a>

          </div>
        </div>

        <div class="swiper-slide slide" style="background:url(images/home-2.jpg)no-repeat">
          <div class="content">
            <span>explore, discover, travel</span>
            <h3>make your tour worthwhile</h3>
            <a href="package.php" class="btn">discover more</a>

          </div>
        </div>

      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
  </section>

  <section class="services">
    <h1 class="heading-title">our services</h1>
    <div class="box-container">

      <div class="box">
        <img src="images/icon-1.png" alt="">
        <h3>adventure</h3>
      </div>

      <div class="box">
        <img src="images/icon-2.png" alt="">
        <h3>tour guide</h3>
      </div>

      <div class="box">
        <img src="images/icon-3.png" alt="">
        <h3>trekking</h3>
      </div>

      <div class="box">
        <img src="images/icon-4.png" alt="">
        <h3>camp fire</h3>
      </div>

      <div class="box">
        <img src="images/icon-5.png" alt="">
        <h3>off road</h3>
      </div>

      <div class="box">
        <img src="images/icon-6.png" alt="">
        <h3>camping</h3>
      </div>

    </div>
  </section>

  <section class="home-about">
    <div class="image">
      <img src="images/about.jpg" alt="">
    </div>
    <div class="content">
      <h3>about us</h3>
      <h4>"Book your next adventure with us."</h4>
      <p>our dream vacation starts here.
        Our team of travel experts is dedicated to providing personalized service, from the initial consultation to the final farewell.
        We listen to your needs, understand your desires, and craft tailor-made itineraries that exceed your expectations.</p>

      <a href="about.php" class="btn">read more</a>

    </div>
  </section>


  <?php
  $images = array("package-4.jpg", "package-3.jpg", "package-1.jpg");
  ?>

  <section class="home-packages">
    <h1 class="heading-title">Our packages</h1>
    <div class="box-container">
      <?php foreach ($images as $image): ?>

        <div class="box">
          <div class="image">
            <img src="images/<?= $image ?>" alt="">
          </div>
          <div class="content">
            <h3>adventure & tour</h3>
            <p>Your next adventure awaits. Are you ready to answer the call?</p>
            <a href="book.php" class="btn">book now</a>
          </div>

        </div>
      <?php endforeach; ?>

    </div>

    <div class="load-more"><a href="package.php" class="btn">load more</a></div>
  </section>

  <section class="home-offer">
    <div class="content">
      
      <h3>Book Now and Save!</h3>
      <h3>upto 50%</h3>
      <p>Book your dream vacation in advance and enjoy 50% off your total trip cost.
        Don't miss out on this limited-time offer!</p>
        <p>Book your dream adventure today!</p>
        
        <a href="book.php" class="btn">book now</a>

    </div>
  </section>


  <section class="footer">
    <div class="box-container">
      <div class="box">
        <h3>quick links</h3>
        <a href="home.php"><i class="fas fa-angle-right"></i>home</a>
        <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
        <a href="package.php"><i class="fas fa-angle-right"></i>package</a>
        <a href="book.php"><i class="fas fa-angle-right"></i>book</a>

      </div>

      <div class="box">
        <h3>extra links</h3>
        <a href="#"><i class="fas fa-angle-right"></i>ask questions</a>
        <a href="#"><i class="fas fa-angle-right"></i>about us</a>
        <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
        <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>

      </div>

      <div class="box">
        <h3>contact info</h3>
        <a href="#"><i class="fas fa-phone"></i>+977-9848825915</a>
        <a href="#"><i class="fas fa-phone"></i>+977-9848825915</a>
        <a href="#"><i class="fas fa-envelope"></i>bhwbi.rawal@gmail.com</a>
        <a href="#"><i class="fas fa-map"></i>Dhangadhi,Nepal</a>

      </div>

      <div class="box">
        <h3>follow us</h3>
        <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
        <a href="#"><i class="fab fa-twitter"></i>twitter</a>
        <a href="#"><i class="fab fa-instagram"></i>instagram</a>
        <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>

      </div>
    </div>
    <div class="credit">created by <span>bhawana rawal</span>!</div>
  </section>


  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="script.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</body>

</html>