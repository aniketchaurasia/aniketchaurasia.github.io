<?php
session_start();
$connection = mysqli_connect("localhost", "root", "", "info");

if (!$connection) {
  echo "Error: Unable to connect to MySQL." . PHP_EOL;
  echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
  echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
  exit();
}

if (isset($_POST) & !empty($_POST)) {
    $name = mysqli_real_escape_string($connection, $_POST["name"]);
  $email = mysqli_real_escape_string($connection, $_POST["email"]);
  $message = mysqli_real_escape_string($connection, $_POST["message"]);
  $sql = "INSERT INTO `data` (`id`, `name`, `email`, `message`) VALUES (NULL, '$name', '$email', '$message');";
  
  $res = mysqli_query($connection, $sql);
  if ($res) {
    $_SESSION["email"] = $email;
    header("location: contact.php");
  } else {
    $fmsg = "Failed to Submit";
  }
    
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./js/index.js"></script>
    <link rel="icon" href="./Data/logo.png" type="image/png">
    <title>Contact</title>
    <link rel="stylesheet" type="text/css" href="./css/contact.css">
    <link href='https://fonts.googleapis.com/css?family=Odibee Sans' rel='stylesheet'>

</head>

<body>

    <header>
        <nav id="N1">
            <a href="index.html">Home🏠</a>
            <a href="resume.html">Resume🦸‍♂️</a>
            <a href="contact.php">Contact📱</a>
            <a href="./robotic.html">Robotics Club⚙️</a>

        </nav>
        <div class="dropdown">
            <b>+</b>
            <div class="ditem">
                <ul>
                    <li><a class="hre" href="index.html">Home🏠</a></li>
                    <li><a class="hre" href="resume.html">Resume🦸‍♂️</a></li>
                    <li><a class="hre" href="contact.php">Contact📱</a></li>
                    <li><a class="hre" href="./robotic.html">Robotics Club⚙️</a></li>
                </ul>
            </div>
        </div>
    </header>
    <p></p><br>
    <div class="container">
        <div class="item">
        <h1>We are eager to hear from you...</h1>
            <form method="POST">
                <div class="name">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" placeholder="Name" required><br>
                </div>
                <div class="email">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required placeholder="Email"><br>
                </div>
                  
                <div class="message">
                    <label for="message">Your Message:</label>
                    <textarea id="message" name="message" placeholder="Your Message" required></textarea>
                </div>
                <div class="sub"> <input type="submit" value="Send Message" id="sub"></div>
            </form>
        </div>
        <div class="item">
            <h3><img src="Data/add.png" height="21.56" width="14.3" alt="" style="-webkit-filter: drop-shadow(5px 5px 5px #222); filter: drop-shadow(5px 5px 5px #222);"> Address:
            </h3>
            <p>Gorakhpur, Uttar Pradesh</p>
            <h3><img src="Data/call.png" height="20" width="20" alt="" style="-webkit-filter: drop-shadow(5px 5px 5px #222); filter: drop-shadow(5px 5px 5px #222);">Call Me:</h3>
            <a href=" tel:+919554244807 " target="_blank ">+91 9554244807</a>
            <h3><img src="Data/mail.png" height="20" width="27" alt="" style="-webkit-filter: drop-shadow(5px 5px 5px #222); filter: drop-shadow(5px 5px 5px #222);">Email Me:</h3>
            <a href="mailto:chaursiaaniket2@gmail.com ">chaursiaaniket2@gmail.com</a>
        </div>
    </div>
    </div>
    <footer>
        <div class="foot">
            <div class="grid-container">
                <div class="grid-item">
                    <a href="https://www.linkedin.com/in/aniketchaurasia" target="_blank"><img src="./Data/linkedin.png" height="50" width="50" alt="" style="-webkit-filter: drop-shadow(5px 5px 5px #222); filter: drop-shadow(5px 5px 5px #222);"></a>
                </div>
                <div class="grid-item">
                    <a href="./index.html">Home</a>
                </div>
                <div class="grid-item">
                    <a href="https://www.hackerrank.com/chaurasiaaniket2" target="_blank"><img src="./Data/hackerrank.png" height="50" width="50" alt="" style="-webkit-filter: drop-shadow(5px 5px 5px #222); filter: drop-shadow(5px 5px 5px #222);"></a>
                </div>
                <div class="grid-item">
                    <a href="./resume.html">Resume</a>
                </div>

                <div class="grid-item">
                    <a href="https://github.com/aniketchaurasia" target="_blank"><img src="./Data/github.png" height="50" width="50" alt="" style="-webkit-filter: drop-shadow(5px 5px 5px #222); filter: drop-shadow(5px 5px 5px #222);"></a>
                </div>
                <div class="grid-item">
                    <a href="./contact.php">Contact</a>
                </div>
                <div class="grid-item">
                    <a href="https://instagram.com/aniket.annii" target="_blank"><img src="./Data/instagram.png" height="50" width="50" alt="" style="-webkit-filter: drop-shadow(5px 5px 5px #222); filter: drop-shadow(5px 5px 5px #222);"></a>
                </div>
                <div class="grid-item">
                    <a class="hre" href="./robotic.html">Robotics Club</a>
                </div>
            </div>
        </div>
        <p id="last">Made with❤ by Aniket </p>
        </div>
    </footer>
    <script src="index.js"></script>
</body>

</html>