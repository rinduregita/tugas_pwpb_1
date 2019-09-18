<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>WEB KU</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/carousel/">

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
    .div{
      background-color: #fff;

    }
    .nav{
      background-color: white;
    }
    body{
      background-color: #;
    }

    }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>
    <header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">Web Kami</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Satu<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Second.php">Dua</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="third.php">Tiga</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="form.php">Empat</a>
        </li>
      </ul>
      <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
</header>
<br>
  <br>
  <br>
  <br>
  <!-- Judul -->
  <h1 align="center">Biodata</h1>
  <h1 align="center">XI Rekayasa Perangkat Lunak 2</h1>
  <br>
  <!-- Garis bawah -->
  <hr align="center" width="100%" left="50%" color="3a3634" size="2">
  <?php
  $nama_rindu="Rindu Regita Aullia";
  $hoby_rindu="Baca dan Nulis";
  $umur_rindu=16;
  $tinggi_rindu=155;

  $nama_nabila="Nabila Triyadi";
  $hoby_nabila="menulis cerita";
  $umur_nabila=16;
  $tinggi_nabila=144;

  $nama_zidan="Zidan Kurniawan";
  $hoby_zidan="Futsal";
  $umur_zidan=16;
  $tinggi_zidan=155;

  $rata_rata=($tinggi_rindu + $tinggi_nabila + $tinggi_zidan)/3;

  ?>
  <div class="container marketing">
  <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">  
      <img src="rindu.jpg" style="border-radius: 50%;object-fit: cover;" width="150px" height="200px">
        <ul>
          <li>Nama lengkap : <?php echo "$nama_rindu"; ?> </li>
          <li>Hoby : <?php echo "$hoby_rindu"; ?></li>
          <li>Umur : <?php echo $umur_rindu;?></li>
          <li>Tinggi : <?php echo "$tinggi_rindu";?></li>
        </ul>
        <a class="btn btn-secondary" href="#" role="button">Selengkapnya</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img src="nabila.jpg" style="border-radius: 50%;object-fit: cover;" width="150px" height="200px">
      <ul>
        <li>Nama lengkap : <?php echo "$nama_nabila"; ?> </li>
        <li>Hoby : <?php echo "$hoby_nabila"; ?></li>
        <li>Umur : <?php echo "$umur_nabila";?></li>
        <li>Tinggi : <?php echo "$tinggi_nabila";?></li>
      </ul>
        <a class="btn btn-secondary" href="#" role="button">Selengkapnya</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img src="zidan.jpg" style="border-radius: 50%;object-fit: cover;" width="150px" height="200px">
      <ul>
        <li>Nama lengkap : <?php echo "$nama_zidan"; ?> </li>
        <li>Hoby : <?php echo "$hoby_zidan"; ?></li>
        <li>Umur : <?php echo "$umur_zidan";?></li>
        <li>Tinggi : <?php echo "$tinggi_zidan";?></li>
      </ul>
        <p><a class="btn btn-secondary" href="#" role="button">Selengkapnya</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->
    <br>
    <p text align="center">Rata-rata kami adalah <?php echo "$rata_rata";?></p>

    <!-- START THE FEATURETTES -->

    
  <!-- FOOTER -->
  <footer class="container">
    <!-- <p class="float-right"><a href="#">Back to top</a></p> -->
    <p>&copy; 2017-2019 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>

  </footer>
</main>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script></body>
</html>
