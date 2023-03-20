<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COFFEE</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/style//style.css">
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <script src="https://kit.fontawesome.com/5c90e171df.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <header>
    <nav class="navbar fixed-top navbar-expand-md navbar-light bg-transparent">
      <div class="container-fluid">
        <a href='index.php' class='navbar-brand'><img src='assets/Itzy_logo.png' style='width:100px'></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <!-- <div class="navbar-nav" style="padding-left:79vw; font-weight: 500;">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            <a class="nav-link" href="form.php">MIDZY</a>
        </div> -->
        </div>
    </div>
    </nav>
    </header>
    <?php
      session_start();

      if(isset($_POST['submit'])) {
          $username = $_POST['email'];
          $password = $_POST['password'];
          
          if($username == 'zaki' && $password == '123') {
              $_SESSION['username'] = $username;
              echo '<script type ="text/JavaScript">';  
              echo 'alert("Selamat datang ")';
              echo '</script>'; 
              header('Location: home.php');
          } else {
              echo '<script type ="text/JavaScript">';  
              echo 'alert("Inputan salah bro")';  
              echo '</script>'; 
          }
      }
      ?>
<div id="menu" style="height: 100vh; background-image: url(assets/itzy.webp); background-size: cover;">
<div style="padding: 28vh 0 0 35vw;">
      <form method="POST" style="background:#cec4d8; opacity:0.9; border-radius:6px; height:37vh; width:30vw; text-align: center;">
        <h1 style="padding-left:70px;">Sign In</h1>
        <div>
          Username
          <input type="text" name="email" class="email" style="margin-left: 10px;" />
        </div>
        <div>
          Password
          <input type="password" name="password" class="password" style="margin-left: 15px; margin-top:15px; margin-bottom:2vh;"/>
        </div>
        <button name="submit" type="submit" class="tombol">SIGN IN</button>
        </form>
</div>
<footer>
<div class="footers" style="padding-top:27vh;">
  <a href="#"><i class="fa fa-facebook"></i></a>
  <a href="#"><i class="fa fa-instagram"></i></a>
  <a href="#"><i class="fa fa-youtube"></i></a>
  <a href="#"><i class="fa fa-twitter"></i></a>
  <div class="cp">Copyright © JYP ENTERTAINMENT Co., Ltd. All rights reserved.</div>
</div>
</footer>
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet"> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>