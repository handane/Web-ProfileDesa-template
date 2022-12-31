<?php
include('admin/db.php');
?>
<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Kelurahan Mentawir</title>
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="css/bootstrap.min.css">

</head>

<body>
   <!-- Navbar -->
   <div class="container-fluid">
      <nav class="navbar navbar-expand-lg fixed-top px-2 py-0">
         <div class="container">
            <a class="navbar-brand" href="index.html"><img class="logo" src="image/logomentawir2.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav-beranda" aria-controls="nav-beranda" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="nav-beranda">
               <ul class="navbar-nav me-auto mx-5">
                  <li class="nav-item dropdown mx-2">
                     <a class="nav-link wr-putih" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Tentang Kami
                     </a>
                     <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="sejarah.php">Sejarah</a></li>
                        <li><a class="dropdown-item" href="wilayah.php">Wilayah</a></li>
                     </ul>
                  </li>
                  <li class="nav-item dropdown mx-2">
                     <a class="nav-link wr-putih" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Informasi
                     </a>
                     <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="pendidikan.php">Pendidikan</a></li>
                        <li><a class="dropdown-item" href="kesehatan.php">Kesehatan</a></li>
                        <li><a class="dropdown-item" href="transparansi.php">Transparansi</a></li>
                        <li><a class="dropdown-item" href="demografi.php">Demografi</a></li>
                     </ul>
                  </li>
                  <li class="nav-item dropdown mx-2">
                     <a class="nav-link wr-putih" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Promosi
                     </a>
                     <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="potensi.php">Potensi</a></li>
                        <li><a class="dropdown-item" href="wisata.php">Wisata</a></li>
                        <li><a class="dropdown-item" href="produk-desa.php">Produk Desa</a></li>
                     </ul>
                  </li>
                  <li class="nav-item mx-2">
                     <a class="nav-link wr-putih" href="lembaga.php">Lembaga</a>
                  </li>
                  <li class="nav-item mx-2">
                     <a class="nav-link wr-putih" href="galeri.php">Galeri</a>
                  </li>
                  <li class="nav-item mx-2">
                     <a class="nav-link wr-putih" href="kontak.php">Kontak</a>
                  </li>
               </ul>
            </div>
         </div>
      </nav>
   </div>
   <!-- end navbar -->
   <!-- artikel -->
   <div class="container-fluid">
      <div class="container artikel">
         <div class="height-30"></div>
         <div class="text-center">
            <h3 class="color-hijau-3">Demografi</h3>
         </div>
         <div class="height-50"></div>
         <div class="row col-md-12 m-auto text-center pb-5 border-bottom">
            <?php
            $x = mysqli_query($conn, "SELECT * FROM demografi");
            if (mysqli_num_rows($x) > 0) {
               while ($p = mysqli_fetch_array($x)) {
            ?>
                  <div class="col-md-4">
                     <div class="card border-0">
                        <div class="mt-3">
                           <div class="display-2"><strong><?php echo $p['jumlah_penduduk']; ?></strong></div>
                        </div>
                        <h6>Jumlah Penduduk</h6>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="card border-0">
                        <div class="mt-3">
                           <div class="display-2"><strong><?php echo $p['jumlah_rt']; ?></strong></div>
                        </div>
                        <h6>Jumlah RT</h6>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="card border-0">
                        <div class="mt-3">
                           <div class="display-2"><strong><?php echo $p['jumlah_keluarga']; ?></strong></div>
                        </div>
                        <h6>Jumlah Keluarga</h6>
                     </div>
                  </div>
            <?php }
            } ?>
            <div class="height-50"></div>
         </div>
         <!-- Penduduk -->
         <div class="text-center mt-5 pb-5">
            <div class="height-30"></div>
            <h3 class="color-hijau-3">Jumlah Penduduk</h3>
            <div class="height-30"></div>
         </div>
         <div class="row">
            <?php
            $x = mysqli_query($conn, "SELECT * FROM rt");
            if (mysqli_num_rows($x) > 0) {
               while ($p = mysqli_fetch_array($x)) {
            ?>
                  <div class="col-xl-3 col-md-6">
                     <div class="p-4 color-hitam mb-4 shadow-lg">
                        <div class="pb-2 card-body border-bottom">
                           <h4 class="text-center">RT 1</h4>
                        </div>
                        <div class="pt-3 card-body d-flex align-items-center justify-content-between">
                           <table style="width: 100%;">
                              <tr>
                                 <th>Laki-laki</th>
                                 <th>:</th>
                                 <td><?php echo $p['laki_laki_rt1']; ?></td>
                              </tr>
                              <tr>
                                 <th>Perempuan</th>
                                 <th>:</th>
                                 <td><?php echo $p['perempuan_rt1']; ?></td>
                              </tr>
                           </table>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-md-6">
                     <div class="p-4 color-hitam mb-4 shadow-lg">
                        <div class="pb-2 card-body border-bottom">
                           <h4 class="text-center">RT 2</h4>
                        </div>
                        <div class="pt-3 card-body d-flex align-items-center justify-content-between">
                           <table style="width: 100%;">
                              <tr>
                                 <th>Laki-laki</th>
                                 <th>:</th>
                                 <td><?php echo $p['laki_laki_rt2']; ?></td>
                              </tr>
                              <tr>
                                 <th>Perempuan</th>
                                 <th>:</th>
                                 <td><?php echo $p['perempuan_rt2'] ?></td>
                              </tr>
                           </table>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-md-6">
                     <div class="p-4 color-hitam mb-4 shadow-lg">
                        <div class="pb-2 card-body border-bottom">
                           <h4 class="text-center">RT 3</h4>
                        </div>
                        <div class="pt-3 card-body d-flex align-items-center justify-content-between">
                           <table style="width: 100%;">
                              <tr>
                                 <th>Laki-laki</th>
                                 <th>:</th>
                                 <td><?php echo $p['laki_laki_rt3']; ?></td>
                              </tr>
                              <tr>
                                 <th>Perempuan</th>
                                 <th>:</th>
                                 <td><?php echo $p['perempuan_rt3']; ?></td>
                              </tr>
                           </table>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-md-6">
                     <div class="p-4 color-hitam mb-4 shadow-lg">
                        <div class="pb-2 card-body border-bottom">
                           <h4 class="text-center">RT 4</h4>
                        </div>
                        <div class="pt-3 card-body d-flex align-items-center justify-content-between">
                           <table style="width: 100%;">
                              <tr>
                                 <th>Laki-laki</th>
                                 <th>:</th>
                                 <td><?php echo $p['laki_laki_rt4']; ?></td>
                              </tr>
                              <tr>
                                 <th>Perempuan</th>
                                 <th>:</th>
                                 <td><?php echo $p['perempuan_rt4']; ?></td>
                              </tr>
                           </table>
                        </div>
                     </div>
                  </div>
            <?php }
            } ?>
            <div class="height-80"></div>
         </div>
      </div>
   </div>
   <div class="container-fluid artikel relative">
      <!-- Agama -->
      <div class="container">
         <div class="height-50"></div>
         <div class="height-50"></div>
         <div class="row">
            <div class="col-xl-6">
               <?php
               $x = mysqli_query($conn, "SELECT * FROM agama");
               if (mysqli_num_rows($x) > 0) {
                  while ($p = mysqli_fetch_array($x)) {
               ?>
                     <h4 class="color-hijau-3 mb-4">Agama</h4>
                     <div class="alert alert-primary alert-dismissible alert-atas" style="color: darkblue; font-weight:500;">
                        <table style="width: 100%;">
                           <tr>
                              <th>Islam</th>
                              <th>:</th>
                              <td><?php echo $p['islam']; ?></td>
                           </tr>
                           <tr>
                              <th>Kristen/Protesten</th>
                              <th>:</th>
                              <td><?php echo $p['kristen_protestan']; ?></td>
                           </tr>
                           <tr>
                              <th>Katolik</th>
                              <th>:</th>
                              <td><?php echo $p['katolik']; ?></td>
                           </tr>
                           <tr>
                              <th>Hindu</th>
                              <th>:</th>
                              <td><?php echo $p['hindu']; ?></td>
                           </tr>
                           <tr>
                              <th>Budhaa</th>
                              <th>:</th>
                              <td><?php echo $p['budha']; ?></td>
                           </tr>
                        </table>
                     </div>
               <?php }
               } ?>
            </div>
            <div class="col-xl-6">
               <h4 class="color-hijau-3 mb-4">Tingkat Pendidikan</h4>
               <div class="card bg-warning text-white mb-4">
                  <div class="card-body">
                     <h4 class="text-center">Tingkat Pendidikan</h4>
                  </div>
                  <?php
                  $x = mysqli_query($conn, "SELECT * FROM tingkat_pendidikan");
                  if (mysqli_num_rows($x) > 0) {
                     while ($p = mysqli_fetch_array($x)) {
                  ?>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                           <table style="width: 100%;">
                              <tr>
                                 <th>Tamat SD</th>
                                 <th>:</th>
                                 <td><?php echo $p['tamat_sd']; ?></td>
                              </tr>
                              <tr>
                                 <th>Tamat SMP</th>
                                 <th>:</th>
                                 <td><?php echo $p['tamat_smp']; ?></td>
                              </tr>
                              <tr>
                                 <th>Tamat SMA</th>
                                 <th>:</th>
                                 <td><?php echo $p['tamat_sma']; ?></td>
                              </tr>
                              <tr>
                                 <th>Tamat D1-D3</th>
                                 <th>:</th>
                                 <td><?php echo $p['tamat_d1d3']; ?></td>
                              </tr>
                              <tr>
                                 <th>Tamat S1-S3</th>
                                 <th>:</th>
                                 <td><?php echo $p['tamat_s1']; ?></td>
                              </tr>
                           </table>
                        </div>
                  <?php }
                  } ?>
               </div>
            </div>
         </div>
      </div>
      <div class="height-80"></div>
      <div class="height-80"></div>
   </div>
   <!-- end artikel -->
   <div class="height-80"></div>
   <footer>
      <div class="container-fluid">
         <div class="text-center p-4">
            &copy;<b>2022 - Kelurahan Mentawir | Website By </b> Penajam 25 KKN48 Universitas Mulawarman
         </div>
   </footer>
   </div>
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script>
      $(function() {
         $(window).scroll(function() {
            if ($(window).scrollTop() <= 100) {
               $('.logo').removeClass('scroll_logo')
            } else {
               $('.logo').addClass('scroll_logo')
            }
         })
      });
      $(function() {
         $(window).scroll(function() {
            if ($(window).scrollTop() <= 100) {
               $('.navbar').removeClass('scroll_navbar')
            } else {
               $('.navbar').addClass('scroll_navbar')
            }
         })
      });
      $(function() {
         $(window).scroll(function() {
            if ($(window).scrollTop() <= 100) {
               $('.navbar .wr-putih').removeClass('scroll_wr-putih')
            } else {
               $('.navbar .wr-putih').addClass('scroll_wr-putih')
            }
         })
      });
   </script>
</body>

</html>