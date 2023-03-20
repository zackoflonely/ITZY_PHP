<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COFFEE</title>
    <link rel="stylesheet" href="assets\style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/5c90e171df.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-md navbar-light bg-transparent">
      <div class="container-fluid">
        <a href='index.php' class='navbar-brand'><img src='assets/Itzy_logo.png' style='width:100px'></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav" style="padding-left:70vw; font-weight: 500;">
            <a class="nav-link active" aria-current="page" href="home.php">Home</a>
            <a class="nav-link" href="album.php">DISCOGRAPHY</a>
            <a class="nav-link" href="form.php">MIDZY</a>
        </div>
        </div>
    </div>
    </nav>
    </header>
<div id="pesan" style="text-align: center; margin-left: 10px; margin-right: 10px;">
<h1>Send Your Message</h1>
<div class="card" style="margin-top:30px; text-align:left;">
  <form action="#">
      Nama Lengkap
      <input type="text" style="margin-left: 67px;">
      <br>
      Tempat, Tanggal Lahir
      <input type="text" style="margin-left: 21px;">
      <br>
      Jenis Kelamin
      <input type="radio" name="ang" id="ang1" style="margin-left: 80px;"><label for="ang1">Laki-laki</label>
      <input type="radio" name="ang" id="ang2"><label for="ang2">Perempuan</label>
      <br>
      Status :
      <input type="checkbox" style="margin-left: 123px;">Pelajar
      <input type="checkbox">Pekerja
</div>
<div class="card" style="text-align: left;">
  Pilih Idol :
  <select name="id">
      <option>None</option>
      <option>Lia</option>
      <option>Ryujin</option>
      <option>Chaeryeong</option>
      <option>Yuna</option>
      <option>Yeji</option>
  </select>
  <br>
  Gambar (3x4) :
  <input type="file" accept=".gif,.jpg,.jpeg,.png">
  <br>
  <br>
  Sampaikan pesan<br>
  <textarea name="id" cols="30" rows="10"></textarea>
  <br>
  <button type="submit" class="btn btn-success" style="width:100%; margin:0 0 20px 0; font-weight:100;">Send</button>
</form>
</div>
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet"> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<body>
</body>
</html>