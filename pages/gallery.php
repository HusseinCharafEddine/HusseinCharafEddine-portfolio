<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("location:../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/gallery.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/menustyle.css" />

    <title>Image Gallery</title>
</head>

<body>
    <div class="video-background">
        <video autoplay loop muted poster="video-poster.jpg">
            <source src="../res/background2.mp4" type="video/mp4" />
            Your browser does not support the video tag.
        </video>
    </div>
    <h1 class="first"> Gallery </h1>
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
            echo '<span class="logout"><a href="../BE/logout.php" class="anchor">Logout</a></span>';

            ?>
        </div>
    </div>

    <div class="img-frame" style="border: 1px">
        <?php
        $imageUrls = file('../res/images.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $imageCounter = 1;
        foreach ($imageUrls as $imageUrl) {
            echo '<img src="' . $imageUrl . '" class="my-img" tabindex="0"/>';
            echo '<img src="' . $imageUrl . '" class="centered-img" id="img' . $imageCounter . '"/>';
            $imageCounter++;
        }
        ?>
    </div>
</body>

</html>