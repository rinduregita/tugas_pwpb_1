
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>webku</title>

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
    <?php
    $folder_satu="gif/balok.gif";
    $nama_satu="Balok";
    $rumus_satu_v="V = p × l × t";
    $rumus_satu_l="L = 2 × (p.l + p.t +l.t)";
    $rumus_satu_p="p = V ÷ l ÷ t";
    $rumus_satu_b="l = V ÷ p ÷ t";

    $folder_dua="gif/kubus.gif";
    $nama_dua="Kubus";
    $rumus_dua_v="V = s x s x s ";
    $rumus_dua_l="L = 6 x s²";
    $rumus_dua_p="";
    $rumus_dua_b="";

    $folder_tiga="img/kerucut.gif";
    $nama_tiga="Kerucut";
    $rumus_tiga_v="LA:PHI x r2 + PHI x r x s";
    $rumus_tiga_l="LS:PHI x r x (r + s)";
    $rumus_tiga_p="V:1/3 x Luas alas x tinggi";
    $rumus_tiga_b="V2:1/3 x PHI r2 x t";

    $folder_empat="gif/prisma.gif";
    $nama_empat="Prisma";
    $rumus_empat_v="Volume: alas x tinggi";
    $rumus_empat_l="Permukaan:(2 x alas ) + (K alas x tinggi)";
    $rumus_empat_p="banyak rusuk: 3 x n";
    $rumus_empat_b="banyak sisi: n + 2";

    $folder_lima="gif/bola.gif";
    $nama_lima="Bola";
    $rumus_lima_v="V : 4/3 x PHI x r3";
    $rumus_lima_l="L : 4 x PHI x r2";
    $rumus_lima_p="";
    $rumus_lima_b="";

    $folder_enam="gif/limas.gif";
    $nama_enam="Limas";
    $rumus_enam_v="V : 1/3 x p x l x t";
    $rumus_enam_l="V2 : 1/3 x Luas Alas x Tinggi";
    $rumus_enam_p="L : Luas Alas + 4 x Luas Sisi";
    $rumus_enam_b=": (1/2 x Alas Xx tinngi) x 4";



    ?>
    <link href="pricing.css" rel="stylesheet">
  </head>
  <body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal">Webku</h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="index.php">Satu</a>
    <a class="p-2 text-dark" href="second.php">Dua</a>
    <a class="p-2 text-dark" href="Third.php">Tiga</a>
    <a class="p-2 text-dark" href="form.php">Empat</a>
  
  </nav>
  <a class="btn btn-outline-primary" href="#">Sign up</a>
</div>

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4">Tugas PWPB</h1>
  <p class="lead">GIF Bangun Ruang</p>
</div>

<div class="container">
  <div class="card-deck mb-3 text-center">
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal"><?php echo"$nama_satu"?></h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title"> <small class="text-muted"><img src="<?= $folder_satu?>" style="width: 300px; height:300px;"> </small></h1>
        <ul class="list-unstyled mt-3 mb-4">
        	<br>
        	<br>
        	<br>
          <li>Volume <?php echo "$rumus_satu_v" ?> </li>
          <li>Luas <?php echo"$rumus_satu_l"?></li>
          <li>Panjang <?php echo"$rumus_satu_p"?></li>
          <li>Lebar <?php echo"$rumus_satu_b"?></li>
        </ul>
        <!-- <button type="button" class="btn btn-lg btn-block btn-outline-primary">Sign up for free</button> -->
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal"><?php echo"$nama_dua"?></h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title"> <small class="text-muted"><img src="<?= $folder_dua?>" style= "width: 300px; height:300px;"></small></h1>
        <ul class="list-unstyled mt-3 mb-4">
        	<br>
        	<br>
        	<br>
          <li>Volume <?php echo "$rumus_dua_v"?></li>
          <li>Luas <?php echo "$rumus_dua_l"?></li>
          <li></li>
          <li></li>
        </ul>
        <!-- <button type="button" class="btn btn-lg btn-block btn-primary">Get started</button> -->
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal"><?php echo"$nama_tiga"?></h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title"> <small clas="text-muted"><img src="<?= $folder_tiga?>" style= "width: 300px; height:300px;"></small></h1>
        <ul class="list-unstyled mt-3 mb-4">
        	<br>
        	<br>
        	<br>
          <li>Luas alas <?php echo "$rumus_tiga_v"?></li>
          <li>Luas <?php echo "$rumus_tiga_l"?></li>
          <li>Luas Selimut <?php echo "$rumus_tiga_p"?></li>
          <li>Volume2 <?php echo "$rumus_tiga_b"?></li>
        </ul>
        
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="card-deck mb-3 text-center">
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal"><?php echo"$nama_empat"?></h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title"> <small clas="text-muted"><img src="<?= $folder_empat?>" style= "width: 300px; height:300px;"> <!-- small class="text-muted">/ mo --></small></h1>
        <ul class="list-unstyled mt-3 mb-4">
        	<br>
        	<br>
        	<br>
          <li>Volume <?php echo "$rumus_empat_v" ?> </li>
          <li>Luas <?php echo"$rumus_empat_l"?></li>
          <li>Panjang <?php echo"$rumus_empat_p"?></li>
          <li>Lebar <?php echo"$rumus_empat_b"?></li>
        </ul>
        <!-- <button type="button" class="btn btn-lg btn-block btn-outline-primary">Sign up for free</button> -->
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal"><?php echo"$nama_lima"?></h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title"><img src="<?= $folder_lima?>" style= "width: 300px; height:300px;"> <!-- <small class="text-muted">/ mo</small> --></h1>
        <ul class="list-unstyled mt-3 mb-4">
        	<br>
        	<br>
        	<br>
          <li>Volume <?php echo "$rumus_lima_v"?></li>
          <li>Luas <?php echo "$rumus_lima_l"?></li>
          <li>Priority email support</li>
          <li>Help center access</li>
        </ul>
        <!-- <button type="button" class="btn btn-lg btn-block btn-primary">Get started</button> -->
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal"><?php echo"$nama_enam"?></h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title"><small class="text-muted"><img src="<?= $folder_enam?>" style= "width: 300px; height:300px;"></small></h1>
        <ul class="list-unstyled mt-3 mb-4">
        	<br>
        	<br>
        	<br>
          <li>Volume segiempat <?php echo "$rumus_enam_v"?></li>
          <li>Volume <?php echo "$rumus_enam_l"?></li>
          <li>Luas Alas  <?php echo "$rumus_enam_p"?></li>
          <li>Luas Sisi Tegak <?php echo "$rumus_enam_b"?></li>
        </ul>
        
      </div>
    </div>
  </div>
</div>
  <!-- <div class="container">
  <div class="card-deck mb-3 text-center">
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal"><?php echo"$nama_satu"?></h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title"> <small class="text-muted">/ mo</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
        	<br>
        	<br>
        	<br>
        	<br>
        	<br>
          <li>Volume <?php echo "$rumus_satu_v" ?> </li>
          <li>Luas <?php echo"$rumus_satu_l"?></li>
          <li>Panjang <?php echo"$rumus_satu_p"?></li>
          <li>Lebar <?php echo"$rumus_satu_b"?></li>
        </ul>
    </div> -->
</div>


  <footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-12 col-md">
        <img class="mb-2" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
        <small class="d-block mb-3 text-muted">&copy; 2017-2019</small>
      </div>
      <div class="col-6 col-md">
        <h5>First</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Tugas PWPB</a></li>
          <li><a class="text-muted" href="#">Cover</a></li>
          <li><a class="text-muted" href="#">Pengenalan</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Second</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Tugas PWPB</a></li>
          <li><a class="text-muted" href="#">Pengenalan</a></li>
          <li><a class="text-muted" href="#">Biodata</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Third</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Tugas PWPB</a></li>
          <li><a class="text-muted" href="#">Rumus</a></li>
          <li><a class="text-muted" href="#">GIF</a></li>
        </ul>
      </div>
    </div>
  </footer>
</div>
</body>
</html>
