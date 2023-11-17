<?php
session_start();
if (!isset($_SESSION["username"])) {
  header("location:../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact</title>
  <link rel="stylesheet" href="../css/styles.css" />
  <link rel="stylesheet" href="../css/menustyle.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet" />


</head>

<body>
  <div class="video-background">
    <video autoplay loop muted poster="video-poster.jpg">
      <source src="../res/background2.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>

  </div>
  <div class="row" id="header">
    <div id="dropdown-menu">
      <span><i class="ico burger-ico"></i>MENU</span>
      <div class="dropdown-content">
        <ul>
          <a href="home.php">
            <li><i class="ico ico-l user-ico"></i>Home</li>
          </a>
          <a href="cv.php">
            <li><i class="ico ico-l user-ico"></i>CV</li>
          </a>
          <a href="gallery.php">
            <li><i class="ico ico-l wallet-ico"></i>Gallery</li>
          </a>
          <a href="contact.php">
            <li><i class="ico ico-l gallery-ico"></i>Contact us</li>
          </a>
        </ul>
      </div>
    </div>
    <div id="hello-user">
      <?php
      echo '<span>' . (isset($_SESSION['username']) ? 'Hello, ' . $_SESSION['username'] : '') . '</span>';
      echo '<span class="logout"><a href="../be/logout.php" class="anchor">Logout</a></span>';

      ?>
    </div>
  </div>
  <nav>

    <img src="../res/brofile.png" />

  </nav>
  <main>

    <section id="about" class="about">
      <h1 class="header">HUSSEIN CHARAF EDDINE</h1>
      <a href="mailto:hu.sharafeddine@gmail.com">
        <p class="email">hu.sharafeddine@gmail.com</p>
      </a>
      Passionate computer scientist with an unwavering commitment to backend
      development, transforming innovative ideas into robust and efficient
      digital solutions
      </p>
      <a class="svglink" href="https://www.linkedin.com/in/hussein-sharafeddine-05b132203/">
        <img class="contactsvgs" src="../res/linked-in.svg" />
      </a>
      <a class="svglink" href="https://github.com/HusseinCharafEddine">
        <img class="contactsvgs" src="../res/github.svg" />
      </a>

    </section>
</body>

</html>