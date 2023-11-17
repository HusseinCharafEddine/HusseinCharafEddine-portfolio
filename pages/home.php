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
  <link rel="stylesheet" href="../css/styles.css" />
  <link rel="stylesheet" href="../css/menustyle.css" />
  <title>Home</title>
</head>

<body>
  <div class="video-background">
    <video autoplay loop muted poster="video-poster.jpg">
      <source src="../res/background2.mp4" type="video/mp4" />
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
          <a href="./cv.php">
            <li><i class="ico ico-l user-ico"></i>CV</li>
          </a>
          <a href="./gallery.php">
            <li><i class="ico ico-l wallet-ico"></i>Gallery</li>
          </a>
          <a href="./contact.php">
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
  <div class="profile-container">
    <img src="../res/brofile.png" class="profile" />
  </div>
  <div class="button-container">
    <div class="button">
      <a href="./cv.php">
        <p>CV</p>
      </a>
    </div>
    <div class="button">
      <a href="./gallery.php">
        <p>Gallery</p>
      </a>
    </div>
    <div class="button">
      <a href="./contact.php">
        <p>Contact</p>
      </a>
    </div>
  </div>
</body>

</html>