
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Webku</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/pricing/">

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
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
    <link href="pricing.css" rel="stylesheet">
  </head>
  <body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal">Webku</h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="#">First</a>
    <a class="p-2 text-dark" href="#">Second</a>
    <a class="p-2 text-dark" href="#">Third</a>
    <!-- <a class="p-2 text-dark" href="#"></a> -->
  </nav>
  <a class="btn btn-outline-primary" href="#">Sign up</a>
</div>
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
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4">BIODATA</h1>
  <p class="lead">PWPB </p>
  <p class="lead">XI Rekayasa Perangkat Lunak 2</p>
</div>

<div class="container">
  <div class="card-deck mb-3 text-center">
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Rindu</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title"><img src="rindu.jpg" style="object-fit: cover;" width="150px" height="200px"><small class="text-muted"></small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>Nama : <?php echo "$nama_rindu" ?></li>
          <li>Hoby : <?php echo "$hoby_rindu" ?></li>
          <li>Umur : <?php echo "$umur_rindu" ?></li>
          <li>Tinggi : <?php echo "$tinggi_rindu" ?> cm</li>
        </ul>
        <!-- <button type="button" class="btn btn-lg btn-block btn-outline-primary">Sign up for free</button> -->
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Nabila</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title"><img src="nabila.jpg" style="object-fit: cover;" width="150px" height="200px"> <small class="text-muted"></small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>Nama : <?php echo "$nama_nabila" ?></li>
          <li>Hoby : <?php echo "$hoby_nabila" ?></li>
          <li>Umur : <?php echo "$umur_nabila" ?></li>
          <li>Tinggi : <?php echo "$tinggi_nabila" ?> cm </li>
        </ul>
        <!-- <button type="button" class="btn btn-lg btn-block btn-primary">Get started</button> -->
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Zidan</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title"><img src="zidan.jpg" style="object-fit: cover;" width="150px" height="200px"> <small class="text-muted"></small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>Nama : <?php echo "$nama_zidan" ?></li>
          <li>Hoby : <?php echo "$hoby_zidan" ?></li>
          <li>Umur : <?php echo "$umur_zidan" ?></li>
          <li>Tinggi : <?php echo "$tinggi_zidan" ?> cm</li>
        </ul>
        <!-- <button type="button" class="btn btn-lg btn-block btn-primary">Contact us</button> -->
      </div>
    </div>
  </div>

  <footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-12 col-md">
        <img class="mb-2" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
        <small class="d-block mb-3 text-muted">&copy; 2017-2019</small>
      </div>
      <div class="col-6 col-md">
        <h5>Tugas</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Tugas Satu</a></li>
          <li><a class="text-muted" href="#">Cover</a></li>
          <li><a class="text-muted" href="#">Home</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>PWPB</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Resource</a></li>
          <li><a class="text-muted" href="#">Resource name</a></li>
          <li><a class="text-muted" href="#">Another resource</a></li>
          <li><a class="text-muted" href="#">Final resource</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>XI RPL 2</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Team</a></li>
          <li><a class="text-muted" href="#">Locations</a></li>
          <li><a class="text-muted" href="#">Privacy</a></li>
          <li><a class="text-muted" href="#">Terms</a></li>
        </ul>
      </div>
    </div>
  </footer>
</div>
</body>
</html>
