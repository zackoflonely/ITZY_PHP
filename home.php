<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITZY</title>
    <link rel="stylesheet" href="assets/style/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/5c90e171df.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
<?php
session_start();

if(!isset($_SESSION['username'])) {
  header('Location: index.php');
}

$username = $_SESSION['username'];
?>
<!-- <script type="text/JavaScript">
  alert("Selamat datang");
</script> -->
<body>
    <header>
        <nav class="navbar fixed-top navbar-expand-md navbar-light bg-transparent">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src='assets/Itzy_logo.png' style="width:100px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav" style="padding-left:70vw; font-weight: 500;">
                <a class="nav-link active" aria-current="page" href="#">HOME</a>
                <a class="nav-link" href="album.php">DISCOGRAPHY</a>
                <a class="nav-link" href="form.php">MIDZY</a>
                <!-- <a class="nav-link disabled">Disabled</a> -->
            </div>
            </div>
        </div>
        </nav>
    </header>
  <div id="menu" style="height: 100vh;">
  <h1 style="margin-left:10vw; padding-top:10vh;">OUR GALLERY</h1>
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="width:40vw; float:left; margin-left:10vw; margin-top:10vh;">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img style=" width:40vw;" src="assets/itzy.png" class="d-block" alt="img1">
      </div>
      <div class="carousel-item">
        <img src="assets/itzy2.png" class="d-block w-100" alt="img2">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <div style="margin-right:5vw; float:right; height: 70vh; overflow:scroll; margin-top:0vh;">
    <div class="card mb-3" style="max-width: 540px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="assets/Charyeong.jpg" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Charyeong</h5>
            <p class="card-text">이름: 채령
            <br>  
            생년월일: 2001.6.5
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="card mb-3" style="max-width: 540px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="assets/Lia.jpg" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Lia</h5>
            <p class="card-text">이름: 리아
            <br>  
            생년월일: 2000.7.21
          </p>
        </div>
        </div>
      </div>
    </div>
    <div class="card mb-3" style="max-width: 540px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="assets/Ryujin.jpg" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Ryujin</h5>
            <p class="card-text">이름: 류진
            <br>  
            생년월일: 2001.4.17
          </p>
        </div>
        </div>
      </div>
    </div>
    <div class="card mb-3" style="max-width: 540px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="assets/Yeji.jpg" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Yeji</h5>
            <p class="card-text">이름: 예지
            <br>  
            생년월일: 2000.5.26</p></div>
        </div>
      </div>
    </div>
    <div class="card mb-3" style="max-width: 540px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="assets/Yuna.jpg" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Yuna</h5>
            <p class="card-text">이름: 유나
            <br>  
            생년월일: 2003.12.9
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer>
  <div class="footers" style="padding-top: 75vh;">
    <a href="#"><i class="fa fa-facebook"></i></a>
    <a href="#"><i class="fa fa-instagram"></i></a>
    <a href="#"><i class="fa fa-youtube"></i></a>
    <a href="#"><i class="fa fa-twitter"></i></a>
    <div class="cp">Copyright © JYP ENTERTAINMENT Co., Ltd. All rights reserved.</div>
  </div>
  </footer>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
