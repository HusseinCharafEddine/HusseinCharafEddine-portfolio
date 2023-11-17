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
  <title>CV</title>
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
    <div class="hussein">
      <a href="#about">
        <p>ABOUT</p>
      </a>
      <a href="#education">
        <p>EDUCATION</p>
      </a>
      <a href="#experience">
        <p>EXPERIENCE</p>
      </a>
      <a href="#projects">
        <p>PROJECTS</p>
      </a>
      <a href="#skills">
        <p>SKILLS</p>
      </a>


    </div>
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
    <section id="education" class="education">
      <div class="Education">
        <h1>Education</h1>
        <div class="segregate">
          <div class="info">
            <h3>
              Lebanese American University
            </h3>
            <h5>Bachelor of Science in Computer Science</h5>
            <p>
              GPA:3.84/4
            </p>
          </div>
          <div class="date">
            <p>August 2021 - Present</p>
            <svg></svg>
          </div>
        </div>
        <div class="segregate">
          <div class="info">
            <h3>La Cite Culturelle</h3>
            <h5>Life Sciences</h5>
            <p>
              Lebanese Baccalaureate Grade: 18.11/20
            </p>
          </div>
          <div class="date">September 2013 - July 2021</div>
        </div>
      </div>
    </section>
    <section id="experience" class="experience">
      <div class="Education">
        <h1>Experience</h1>
        <div class="segregate">
          <div class="info">
            <h3>
              Private Tutor
            </h3>
            <h5>Freelance</h5>
            <p>
              Provided tutoring services for university and high school students in programming.
            </p>
          </div>
          <div class="date">
            <p>January 2023 - Present</p>

          </div>
        </div>
        <div class="segregate">
          <div class="info">
            <h3>
              Competitve Programmer
            </h3>
            <h5>Lebanese Collegiate Programming Competetion</h5>
            <p>
              18th place in Lebanese Collegiate Programming Competition
            </p>
          </div>
          <div class="date">
            <p>May 2023 - September 2023</p>

          </div>
        </div>
      </div>
    </section>
    <section id="projects" class="projects">
      <div class="Education">
        <h1>Projects</h1>
        <div class="segregate">
          <div class="info">
            <h3>
              Omega Prison
            </h3>
            <h5>Lebanese American University</h5>
            <p>
              Fully implemented database management system for a prison using MySQL, and Java,
            </p>
          </div>
          <div class="date">
            <p>January 2023 - May 2023</p>
            <a class="svglink" href="#skills">
              <img class="projectsvg" src="../res/java.svg" />
            </a>
            <a class="svglink" href="#skills">
              <img class="projectsvg" src="../res/mysql.svg" />
            </a>

          </div>
        </div>
        <div class="segregate">
          <div class="info">
            <h3>Tic-Tac-Toe</h3>
            <h5>Freelance</h5>
            <p>
              Created a simple game of Tic-tac-toe using Android Studio and Kotlin, 2023. </p>
          </div>
          <div class="date">
            <p>December 2022 - January 2023</p>
            <a class="svglink" href="#skills">
              <img class="projectsvg" src="../res/kotlin.svg" />
            </a>
          </div>
        </div>
        <div class="segregate">
          <div class="info">
            <h3>LAU Tutors</h3>
            <h5>Lebanese American University</h5>
            <p>
              Created a website displaying the tutoring information of all the LAU Tutoring sessions using HTML, CSS,
              and JS, 2023.
            </p>
          </div>
          <div class="date">
            <p>September 2022 - December 2022</p>
            <a class="svglink" href="#skills">
              <img class="projectsvg" src="../res/html.svg" />
            </a>
            <a class="svglink" href="#skills">
              <img class="projectsvg" src="../res/css.svg" />
            </a>
            <a class="svglink" href="#skills">
              <img class="projectsvg" src="../res/javascript.svg" />
            </a>
          </div>

        </div>
      </div>
    </section>
    <section id="skills" class="skills">
      <div class="Skills">
        <h1>Skills</h1>
        <div class="container">
          <div class="skill">
            <img id="java" class="skillsvgs" src="../res/java.svg" />
          </div>
          <div class="barfix">
            <div class="progress-bar">
              <div class="java"></div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="skill">
            <img id="kotlin" class="skillsvgs" src="../res/kotlin.svg" />
          </div>
          <div class="barfix">
            <div class="progress-bar">
              <div class="kotlin"></div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="skill">
            <img class="skillsvgs" src="../res/node.svg" />
          </div>
          <div class="barfix">
            <div class="progress-bar">
              <div class="nodejs"></div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="skill">
            <img id="mysql" class="skillsvgs" src="../res/mysql.svg" />
          </div>
          <div class="barfix">
            <div class="progress-bar">
              <div class="mysql"></div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="skill">
            <img id="html" class="skillsvgs" src="../res/html.svg" />
          </div>
          <div class="barfix">
            <div class="progress-bar">
              <div class="html"></div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="skill">
            <img id="css" class="skillsvgs" src="../res/css.svg" />
          </div>
          <div class="barfix">
            <div class="progress-bar">
              <div class="css"></div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="skill">
            <img id="js" class="skillsvgs" src="../res/javascript.svg" />
          </div>
          <div class="barfix">
            <div class="progress-bar">
              <div class="js"></div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
    <div class="content-container">
    </div>
  </main>


  <script src="../js/scroll.js"></script>
</body>

</html>